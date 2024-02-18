<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use Throwable;
use function sprintf;

/**
 * Represents an exception if an unexpected error occurred.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class UnexpectedErrorException extends RuntimeException implements UnexpectedErrorExceptionInterface
{
	/**
	 * {@inheritDoc}
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'An unexpected error occurred.';

	/**
	 * Represents the exception message with the previous throwable.
	 */
	public const string EXCEPTION_MESSAGE_WITH_PREVIOUSLY_CATCHED_THROWABLE = 'An unexpected error occurred. See previous throwable `%1$s` for details.';

	/**
	 * Static constructor method.
	 * @param Throwable $previouslyCatchedThrowable The previous throwable.
	 * @param int $code The error code of the exception.
	 * @return static
	 */
	public static function withPreviouslyCatchedThrowable( Throwable $previouslyCatchedThrowable, int $code = 0 ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_PREVIOUSLY_CATCHED_THROWABLE, $previouslyCatchedThrowable::class ),
			$code,
			$previouslyCatchedThrowable
		);
	}
}
