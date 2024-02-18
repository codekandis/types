<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

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
	 * @return static
	 */
	public static function withInvalidOffset( int $invalidOffset ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET, (string) $invalidOffset )
		);
	}

	/**
	 * Static constructor method.
	 * @param int $invalidOffset The invalid offset.
	 * @param string[] $expectedOffsets The expected offsets.
	 * @return static
	 */
	public static function withInvalidOffsetAndExpectedOffsets( int $invalidOffset, string ...$expectedOffsets ): static
	{
		$stringyfiedExpectedOffsets = implode( ' | ', $expectedOffsets );

		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS, (string) $invalidOffset, $stringyfiedExpectedOffsets )
		);
	}
}
