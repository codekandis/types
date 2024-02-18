<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

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
	 * @inheritDoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The type is invalid.';

	/**
	 * Represents the exception message with the invalid type.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_INVALID_TYPE = 'The type `%s` is invalid.';

	/**
	 * Represents the exception message with the invalid type and expected types.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES = 'The type `%s` is invalid. `%s` expected.';

	/**
	 * Static constructor method.
	 * @param string $invalidType The invalid type.
	 * @return static
	 */
	public static function with_invalidType( string $invalidType ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_INVALID_TYPE, $invalidType )
		);
	}

	/**
	 * Static constructor method.
	 * @param string $invalidType The invalid type.
	 * @param string[] $expectedTypes The expected types.
	 * @return static
	 */
	public static function with_invalidTypeAndExpectedTypes( string $invalidType, string ...$expectedTypes ): static
	{
		return new static(
			sprintf(
				static::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
				$invalidType,
				implode( ' | ', $expectedTypes )
			)
		);
	}
}
