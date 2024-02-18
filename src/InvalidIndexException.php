<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use Throwable;
use function array_map;
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
	 * {@inheritDoc}
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
	public const string EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES = 'The index `%1$s` is invalid. Expected `%2$s`.';

	/**
	 * Static constructor method.
	 * @param mixed $invalidIndex The invalid index.
	 * @param int $code The error code of the exception.
	 * @param ?Throwable $previous The previous throwable.
	 * @return static
	 */
	public static function withInvalidIndex( mixed $invalidIndex, int $code = 0, ?Throwable $previous = null ): static
	{
		$stringifiedInvalidIndex = static::stringifyValue( $invalidIndex );

		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, $stringifiedInvalidIndex ),
			$code,
			$previous
		);
	}

	/**
	 * Static constructor method.
	 * @param mixed $invalidIndex The invalid index.
	 * @param array<array-key, mixed> $expectedIndices The expected indices.
	 * @param int $code The error code of the exception.
	 * @param ?Throwable $previous The previous throwable.
	 * @return static
	 */
	public static function withInvalidIndexAndExpectedIndices( mixed $invalidIndex, array $expectedIndices, int $code = 0, ?Throwable $previous = null ): static
	{
		$stringifiedInvalidIndex    = static::stringifyValue( $invalidIndex );
		$stringifiedExpectedIndices = array_map(
			static::stringifyValue( ... ),
			$expectedIndices
		);

		return new static(
			sprintf(
				static::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
				$stringifiedInvalidIndex,
				implode( ' | ', $stringifiedExpectedIndices )
			),
			$code,
			$previous
		);
	}
}
