<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use Throwable;
use function sprintf;

/**
 * Represents an exception if an index is out of range.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class IndexOutOfRangeException extends InvalidIndexException implements IndexOutOfRangeExceptionInterface
{
	/**
	 * @inheritdoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The index is out of range.';

	/**
	 * Represents the exception message with the out of range index.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX = 'The index `%1$s` is out of range.';

	/**
	 * Represents the exception message with the out of range index, an expected minimum index and an expected maximum index.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX = 'The index `%1$s` is out of range. `%2$s <= index <= %s` expected.';

	/**
	 * Static constructor method.
	 * @param mixed $outOfRangeIndex The out of range index.
	 * @param int $code The error code of the exception.
	 * @param ?Throwable $previous The previously catched throwable.
	 * @return static
	 */
	public static function withOutOfRangeIndex( mixed $outOfRangeIndex, int $code = 0, ?Throwable $previous = null ): static
	{
		$stringfiedOutOfRangeIndex = static::stringifyValue( $outOfRangeIndex );

		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX, $stringfiedOutOfRangeIndex ),
			$code,
			$previous
		);
	}

	/**
	 * Static constructor method.
	 * @param mixed $outOfRangeIndex The out of range index.
	 * @param string $expectedMinIndex The expected minimum index.
	 * @param string $expectedMaxIndex The expected maximum index.
	 * @param int $code The error code of the exception.
	 * @param ?Throwable $previous The previously catched throwable.
	 * @return static
	 */
	public static function withOutOfRangeIndexExpectedMinIndexAndExpectedMaxIndex( mixed $outOfRangeIndex, string $expectedMinIndex, string $expectedMaxIndex, int $code = 0, ?Throwable $previous = null ): static
	{
		$stringifiedOutOfRangeIndex = static::stringifyValue( $outOfRangeIndex );

		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX, $stringifiedOutOfRangeIndex, $expectedMinIndex, $expectedMaxIndex ),
			$code,
			$previous
		);
	}
}
