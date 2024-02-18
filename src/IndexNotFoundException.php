<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use Throwable;
use function implode;
use function sprintf;

/**
 * Represents an exception if an index does not exist.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class IndexNotFoundException extends RuntimeException implements IndexNotFoundExceptionInterface
{
	use StringifyValueTrait;

	/**
	 * {@inheritDoc}
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The index does not exist.';

	/**
	 * Represents the exception message with the nonexistent index.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX = 'The index `%1$s` does not exist.';

	/**
	 * Represents the exception message with the nonexistent index and expected indices.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES = 'The index `%1$s` does not exist. Expected `%2$s`.';

	/**
	 * Static constructor method.
	 * @param mixed $nonexistentIndex The nonexistent index.
	 * @param int $code The error code of the exception.
	 * @param ?Throwable $previous The previous throwable.
	 * @return static
	 */
	public static function withNonexistentIndex( mixed $nonexistentIndex, int $code = 0, ?Throwable $previous = null ): static
	{
		$stringifiedNonexistentIndex = static::stringifyValue( $nonexistentIndex );

		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX, $stringifiedNonexistentIndex ),
			$code,
			$previous
		);
	}

	/**
	 * Static constructor method.
	 * @param mixed $nonexistentIndex The nonexistent index.
	 * @param array<array-key, string> $expectedIndices The expected indices.
	 * @param int $code The error code of the exception.
	 * @param ?Throwable $previous The previous throwable.
	 * @return static
	 */
	public static function withNonexistentIndexAndExpectedIndices( mixed $nonexistentIndex, array $expectedIndices, int $code = 0, ?Throwable $previous = null ): static
	{
		$stringifiedNonexistentIndex = static::stringifyValue( $nonexistentIndex );
		$stringifiedExpectedIndices  = implode( ' | ', $expectedIndices );

		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES, $stringifiedNonexistentIndex, $stringifiedExpectedIndices ),
			$code,
			$previous
		);
	}
}
