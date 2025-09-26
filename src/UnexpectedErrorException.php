<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use Throwable;

/**
 * Represents an exception if an unexpected error occured.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class UnexpectedErrorException extends RuntimeException implements UnexpectedErrorExceptionInterface
{
	/**
	 * @inheritdoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'An unexpected error occured.';

	/**
	 * Represents the exception message with the previously catched throwable.
	 */
	public const string EXCEPTION_MESSAGE_WITH_PREVIOUSLY_CATCHED_THROWABLE = 'An unexpected error occured. See previously catched throwable `%1$s` for details.';

	/**
	 * Static constructor method.
	 * @param Throwable $previouslyCatchedThrowable The previously catched throwable.
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
