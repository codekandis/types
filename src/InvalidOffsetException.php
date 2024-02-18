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
	 * @inheritDoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The offset is invalid.';

	/**
	 * Represents the exception message if an offset is invalid.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_INVALID_OFFSET = 'The offset `%s` is invalid.';

	/**
	 * Represents the exception message if an offset is invalid and expected offsets are provided.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_INVALID_OFFSET_AND_EXPECTED_OFFSETS = 'The offset `%s` is invalid. `%s` expected.';

	/**
	 * Static constructor method.
	 * @param int $invalidOffset The invalid offset.
	 * @return static
	 */
	public static function with_invalidOffset( int $invalidOffset ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_INVALID_OFFSET, (string) $invalidOffset )
		);
	}

	/**
	 * Static constructor method.
	 * @param int $invalidOffset The invalid offset.
	 * @param string[] $expectedOffsets The expected offsets.
	 * @return static
	 */
	public static function with_invalidOffsetAndExpectedOffsets( int $invalidOffset, string ...$expectedOffsets ): static
	{
		$stringyfiedExpectedOffsets = implode( ' | ', $expectedOffsets );

		return new static(
			sprintf( static::EXCEPTION_MESSAGE_INVALID_OFFSET_AND_EXPECTED_OFFSETS, (string) $invalidOffset, $stringyfiedExpectedOffsets )
		);
	}
}
