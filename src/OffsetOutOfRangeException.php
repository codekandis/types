<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use Throwable;
use function sprintf;

/**
 * Represents an exception if an offset is out of range.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class OffsetOutOfRangeException extends InvalidOffsetException implements OffsetOutOfRangeExceptionInterface
{
	/**
	 * @inheritdoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The offset is out of range.';

	/**
	 * Represents the exception message with the out of range offset.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET = 'The offset `%1$s` is out of range.';

	/**
	 * Represents the exception message with the out of range offset, an expected minimum offset and an expected maximum offset.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET = 'The offset `%1$s` is out of range. `%2$s <= offset <= %3$s` expected.';

	/**
	 * Static constructor method.
	 * @param int $outOfRangeOffset The out of range offset.
	 * @param int $code The error code of the exception.
	 * @param ?Throwable $previous The previously catched throwable.
	 * @return static
	 */
	public static function withOutOfRangeOffset( int $outOfRangeOffset, int $code = 0, ?Throwable $previous = null ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET, (string) $outOfRangeOffset ),
			$code,
			$previous
		);
	}

	/**
	 * Static constructor method.
	 * @param mixed $outOfRangeOffset The out of range offset.
	 * @param string $expectedMinOffset The expected minimum offset.
	 * @param string $expectedMaxOffset The expected maximum offset.
	 * @param int $code The error code of the exception.
	 * @param ?Throwable $previous The previously catched throwable.
	 * @return static
	 */
	public static function withOutOfRangeOffsetExpectedMinOffsetAndExpectedMaxOffset( int $outOfRangeOffset, string $expectedMinOffset, string $expectedMaxOffset, int $code = 0, ?Throwable $previous = null ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET, (string) $outOfRangeOffset, $expectedMinOffset, $expectedMaxOffset ),
			$code,
			$previous
		);
	}
}
