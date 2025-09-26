<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use Throwable;
use function implode;
use function sprintf;

/**
 * Represents an exception if an index is invalid.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class InvalidIndexException extends RuntimeException implements InvalidIndexExceptionInterface
{
	use StringifyValueTrait;

	/**
	 * @inheritdoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The index is invalid.';

	/**
	 * Represents the exception message with the invalid index.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_INVALID_INDEX = 'The index `%1$s` is invalid.';

	/**
	 * Represents the exception message with the invalid index and expected indices.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES = 'The index `%1$s` is invalid. `%2$s` expected.';

	/**
	 * Static constructor method.
	 * @param mixed $invalidIndex The invalid index.
	 * @param int $code The error code of the exception.
	 * @param ?Throwable $previous The previously catched throwable.
	 * @return static
	 */
	public static function withInvalidIndex( mixed $invalidIndex, int $code = 0, ?Throwable $previous = null ): static
	{
		$stringfiedInvalidIndex = static::stringifyValue( $invalidIndex );

		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, $stringfiedInvalidIndex ),
			$code,
			$previous
		);
	}

	/**
	 * Static constructor method.
	 * @param mixed $invalidIndex The invalid index.
	 * @param string[] $expectedIndices The expected indices.
	 * @param int $code The error code of the exception.
	 * @param ?Throwable $previous The previously catched throwable.
	 * @return static
	 */
	public static function withInvalidIndexAndExpectedIndices( mixed $invalidIndex, array $expectedIndices, int $code = 0, ?Throwable $previous = null ): static
	{
		$stringifiedInvalidIndex    = static::stringifyValue( $invalidIndex );
		$stringyfiedExpectedIndices = implode( ' | ', $expectedIndices );

		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES, $stringifiedInvalidIndex, $stringyfiedExpectedIndices ),
			$code,
			$previous
		);
	}
}
