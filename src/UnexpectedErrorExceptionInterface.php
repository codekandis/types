<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use Throwable;

/**
 * Represents the interface of any exception if an unexpected error occured.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
interface UnexpectedErrorExceptionInterface extends RuntimeExceptionInterface
{
	/**
	 * Static constructor method.
	 * @param Throwable $previousThrowable The previous catched throwable.
	 * @return static
	 */
	public static function with_previousThrowable( Throwable $previousThrowable ): static;
}
