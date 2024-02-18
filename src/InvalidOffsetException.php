<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use CodeKandis\Types\TypeDetermination\TypeDeterminationKind;
use CodeKandis\Types\TypeDetermination\TypeDeterminer;
use Throwable;
use function implode;
use function is_int;
use function sprintf;

/**
 * Represents an exception if an offset is invalid.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class InvalidOffsetException extends RuntimeException implements InvalidOffsetExceptionInterface
{
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
	 * @param int $invalidOffset The invalid offset.
	 * @param int $code The error code of the exception.
	 * @param ?Throwable $previous The previous throwable.
	 * @return static
	 */
	public static function withInvalidOffset( int $invalidOffset, int $code = 0, ?Throwable $previous = null ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET, $invalidOffset ),
			$code,
			$previous
		);
	}

	/**
	 * Static constructor method.
	 * @param int $invalidOffset The invalid offset.
	 * @param array<array-key, int> $expectedOffsets The expected offsets.
	 * @param int $code The error code of the exception.
	 * @param ?Throwable $previous The previous throwable.
	 * @return static
	 * @throws InvalidTypeExceptionInterface The type of an expected offset is invalid. `integer` expected.
	 */
	public static function withInvalidOffsetAndExpectedOffsets( int $invalidOffset, array $expectedOffsets, int $code = 0, ?Throwable $previous = null ): static
	{
		foreach ( $expectedOffsets as $expectedOffset )
		{
			if ( false === is_int( $expectedOffset ) )
			{
				$determinedExpectedOffsetType = new TypeDeterminer()
					->determine( $expectedOffset, TypeDeterminationKind::GetType );

				throw InvalidTypeException::withInvalidTypeAndExpectedTypes(
					$determinedExpectedOffsetType,
					[
						'integer'
					]
				);
			}
		}

		return new static(
			sprintf(
				static::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
				$invalidOffset,
				implode( ' | ', $expectedOffsets )
			),
			$code,
			$previous
		);
	}
}
