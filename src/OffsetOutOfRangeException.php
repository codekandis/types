<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use Throwable;
use function sprintf;

/**
 * Represents an exception if an offset is out of range.
 * It describes offsets outside accepted ranges.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class OffsetOutOfRangeException extends RuntimeException implements OffsetOutOfRangeExceptionInterface
{
	use StringifyValueTrait;

	/**
	 * {@inheritDoc}
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The offset is out of range.';

	/**
	 * Represents the exception message with the out of range offset.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET = 'The offset `%1$s` is out of range.';

	/**
	 * Represents the exception message with the out of range offset, an expected minimum offset and an expected maximum
	 * offset.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET = 'The offset `%1$s` is out of range. Expected `%2$s <= offset <= %3$s`.';

	/**
	 * Static constructor method.
	 * @param mixed $outOfRangeOffset The out of range offset.
	 * @param int $code The error code of the exception.
	 * @param ?Throwable $previous The previous throwable.
	 * @param ?array<string, mixed> $context The context of the exception.
	 * @return static
	 */
	public static function withOutOfRangeOffset( mixed $outOfRangeOffset, int $code = 0, ?Throwable $previous = null, ?array $context = null ): static
	{
		$stringifiedOutOfRangeOffset = static::stringifyValue( $outOfRangeOffset );

		$exception                         = new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET, $stringifiedOutOfRangeOffset ),
			$code,
			$previous,
			$context
		);
		$exception->context[ 'exception' ] = [
			'outOfRangeOffset' => $outOfRangeOffset
		];

		return $exception;
	}

	/**
	 * Static constructor method.
	 * @param mixed $outOfRangeOffset The out of range offset.
	 * @param mixed $expectedMinOffset The expected minimum offset.
	 * @param mixed $expectedMaxOffset The expected maximum offset.
	 * @param int $code The error code of the exception.
	 * @param ?Throwable $previous The previous throwable.
	 * @param ?array<string, mixed> $context The context of the exception.
	 * @return static
	 */
	public static function withOutOfRangeOffsetExpectedMinOffsetAndExpectedMaxOffset( mixed $outOfRangeOffset, mixed $expectedMinOffset, mixed $expectedMaxOffset, int $code = 0, ?Throwable $previous = null, ?array $context = null ): static
	{
		$stringifiedOutOfRangeOffset  = static::stringifyValue( $outOfRangeOffset );
		$stringifiedExpectedMinOffset = static::stringifyValue( $expectedMinOffset );
		$stringifiedExpectedMaxOffset = static::stringifyValue( $expectedMaxOffset );

		$exception                         = new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET, $stringifiedOutOfRangeOffset, $stringifiedExpectedMinOffset, $stringifiedExpectedMaxOffset ),
			$code,
			$previous,
			$context
		);
		$exception->context[ 'exception' ] = [
			'outOfRangeOffset'  => $outOfRangeOffset,
			'expectedMinOffset' => $expectedMinOffset,
			'expectedMaxOffset' => $expectedMaxOffset
		];

		return $exception;
	}
}
