<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use Throwable;
use function implode;
use function sprintf;

/**
 * Represents an exception if an offset is invalid.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class InvalidOffsetException extends RuntimeException implements InvalidOffsetExceptionInterface
{
	/**
	 * @inheritdoc
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
	public const string EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS = 'The offset `%1$s` is invalid. `%2$s` expected.';

	/**
	 * Static constructor method.
	 * @param int $invalidOffset The invalid offset.
	 * @param int $code The error code of the exception.
	 * @param ?Throwable $previous The previously catched throwable.
	 * @return static
	 */
	public static function withInvalidOffset( int $invalidOffset, int $code = 0, ?Throwable $previous = null ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET, (string) $invalidOffset ),
			$code,
			$previous
		);
	}

	/**
	 * Static constructor method.
	 * @param int $invalidOffset The invalid offset.
	 * @param string[] $expectedOffsets The expected offsets.
	 * @param int $code The error code of the exception.
	 * @param ?Throwable $previous The previously catched throwable.
	 * @return static
	 */
	public static function withInvalidOffsetAndExpectedOffsets( int $invalidOffset, array $expectedOffsets, int $code = 0, ?Throwable $previous = null ): static
	{
		$stringyfiedExpectedOffsets = implode( ' | ', $expectedOffsets );

		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS, (string) $invalidOffset, $stringyfiedExpectedOffsets ),
			$code,
			$previous
		);
	}
}
