<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use Throwable;
use function implode;
use function sprintf;

/**
 * Represents an exception if a type is invalid.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class InvalidTypeException extends RuntimeException implements InvalidTypeExceptionInterface
{
	/**
	 * @inheritdoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The type is invalid.';

	/**
	 * Represents the exception message with the invalid type.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_INVALID_TYPE = 'The type `%1$s` is invalid.';

	/**
	 * Represents the exception message with the invalid type and expected types.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES = 'The type `%1$s` is invalid. `%2$s` expected.';

	/**
	 * Static constructor method.
	 * @param string $invalidType The invalid type.
	 * @param int $code The error code of the exception.
	 * @param ?Throwable $previous The previously catched throwable.
	 * @return static
	 */
	public static function withInvalidType( string $invalidType, int $code = 0, ?Throwable $previous = null ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_INVALID_TYPE, $invalidType ),
			$code,
			$previous
		);
	}

	/**
	 * Static constructor method.
	 * @param string $invalidType The invalid type.
	 * @param string[] $expectedTypes The expected types.
	 * @param int $code The error code of the exception.
	 * @param ?Throwable $previous The previously catched throwable.
	 * @return static
	 */
	public static function withInvalidTypeAndExpectedTypes( string $invalidType, array $expectedTypes, int $code = 0, ?Throwable $previous = null ): static
	{
		return new static(
			sprintf(
				static::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
				$invalidType,
				implode( ' | ', $expectedTypes )
			),
			$code,
			$previous
		);
	}
}
