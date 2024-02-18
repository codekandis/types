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
	 * Represents the exception message with the previous catched throwable.
	 */
	public const string EXCEPTION_MESSAGE_WITH_PREVIOUS_CATCHED_THROWABLE = 'An unexpected error occured. See previous catched throwable `%1$s` for details.';

	/**
	 * Static constructor method.
	 * @param Throwable $previousCatchedThrowable The previous catched throwable.
	 * @return static
	 */
	public static function withPreviousCatchedThrowable( Throwable $previousCatchedThrowable ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_PREVIOUS_CATCHED_THROWABLE, $previousCatchedThrowable::class ),
			0,
			$previousCatchedThrowable
		);
	}
}
