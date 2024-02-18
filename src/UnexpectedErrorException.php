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
	 * @inheritDoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'An unexpected error occured.';

	/**
	 * Represents the exception message if a previous throwable is present.
	 */
	public const string EXCEPTION_MESSAGE_PREVIOUS_THROWABLE = 'An unexpected error occured. See previous throwable `%s` for details.';

	/**
	 * @inheritDoc
	 */
	public static function with_previousThrowable( Throwable $previousThrowable ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_PREVIOUS_THROWABLE, $previousThrowable::class ),
			0,
			$previousThrowable
		);
	}
}
