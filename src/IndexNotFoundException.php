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
	 * @inheritdoc
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
	public const string EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES = 'The index `%1$s` does not exist. `%2$s` expected.';

	/**
	 * Static constructor method.
	 * @param mixed $nonExistentIndex The nonexistent index.
	 * @param int $code The error code of the exception.
	 * @param ?Throwable $previous The previously catched throwable.
	 * @return static
	 */
	public static function withNonExistentIndex( mixed $nonExistentIndex, int $code = 0, ?Throwable $previous = null ): static
	{
		$stringfiedNonExistentIndex = static::stringifyValue( $nonExistentIndex );

		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX, $stringfiedNonExistentIndex ),
			$code,
			$previous
		);
	}

	/**
	 * Static constructor method.
	 * @param mixed $nonExistentIndex The nonexistent index.
	 * @param string[] $expectedIndices The expected indices.
	 * @param int $code The error code of the exception.
	 * @param ?Throwable $previous The previously catched throwable.
	 * @return static
	 */
	public static function withNonExistentIndexAndExpectedIndices( mixed $nonExistentIndex, array $expectedIndices, int $code = 0, ?Throwable $previous = null ): static
	{
		$stringifiedNonExistentIndex = static::stringifyValue( $nonExistentIndex );
		$stringyfiedExpectedIndices  = implode( ' | ', $expectedIndices );

		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES, $stringifiedNonExistentIndex, $stringyfiedExpectedIndices ),
			$code,
			$previous
		);
	}
}
