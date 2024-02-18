<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use Throwable;
use function array_map;
use function implode;
use function sprintf;

/**
 * Represents an exception if an offset is invalid.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class InvalidOffsetException extends RuntimeException implements InvalidOffsetExceptionInterface
{
	use StringifyValueTrait;

	/**
	 * {@inheritDoc}
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The offset is invalid.';

	/**
	 * Represents the exception message with the invalid offset.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_INVALID_OFFSET = 'The offset `%1$s` is invalid.';

	/**
	 * Represents the exception message with the invalid offset and expected offsets.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS = 'The offset `%1$s` is invalid. Expected `%2$s`.';

	/**
	 * Static constructor method.
	 * @param mixed $invalidOffset The invalid offset.
	 * @param int $code The error code of the exception.
	 * @param ?Throwable $previous The previous throwable.
	 * @return static
	 */
	public static function withInvalidOffset( mixed $invalidOffset, int $code = 0, ?Throwable $previous = null ): static
	{
		$stringifiedInvalidOffset = static::stringifyValue( $invalidOffset );

		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET, $stringifiedInvalidOffset ),
			$code,
			$previous
		);
	}

	/**
	 * Static constructor method.
	 * @param mixed $invalidOffset The invalid offset.
	 * @param array<array-key, mixed> $expectedOffsets The expected offsets.
	 * @param int $code The error code of the exception.
	 * @param ?Throwable $previous The previous throwable.
	 * @return static
	 */
	public static function withInvalidOffsetAndExpectedOffsets( mixed $invalidOffset, array $expectedOffsets, int $code = 0, ?Throwable $previous = null ): static
	{
		$stringifiedInvalidOffset   = static::stringifyValue( $invalidOffset );
		$stringifiedExpectedOffsets = implode(
			' | ',
			array_map(
				static::stringifyValue( ... ),
				$expectedOffsets
			)
		);

		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS, $stringifiedInvalidOffset, $stringifiedExpectedOffsets ),
			$code,
			$previous
		);
	}
}
