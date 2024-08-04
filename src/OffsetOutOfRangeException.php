<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use function sprintf;

/**
 * Represents an exception if an offset is out of range.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class OffsetOutOfRangeException extends RuntimeException implements OffsetOutOfRangeExceptionInterface
{
	/**
	 * @inheritDoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The offset is out of range.';

	/**
	 * Represents the exception message if an offset is out of range.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_OFFSET_OUT_OF_RANGE = 'The offset `%s` is out of range.';

	/**
	 * Represents the exception message if an offset is out of range and an expected minimum offset and an expected maximum offset is provided.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_OFFSET_OUT_OF_RANGE_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET = 'The offset `%s` is out of range. `%s <= offset <= %s` expected.';

	/**
	 * Static constructor method.
	 * @param int $outOfRangeOffset The out of range offset.
	 * @return static
	 */
	public static function with_outOfRangeOffset( int $outOfRangeOffset ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_OFFSET_OUT_OF_RANGE, (string) $outOfRangeOffset )
		);
	}

	/**
	 * Static constructor method.
	 * @param mixed $outOfRangeOffset The out of range offset.
	 * @param string $expectedMinOffset The expected minimum offset.
	 * @param string $expectedMaxOffset The expected maximum offset.
	 * @return static
	 */
	public static function with_outOfRangeOffsetExpectedMinOffsetAndExpectedMaxOffset( int $outOfRangeOffset, string $expectedMinOffset, string $expectedMaxOffset ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_OFFSET_OUT_OF_RANGE_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET, (string) $outOfRangeOffset, $expectedMinOffset, $expectedMaxOffset )
		);
	}
}
