<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

/**
 * Represents an exception if an error occurred.
 * It describes runtime failures categorized as error-like.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ErrorException extends RuntimeException implements ErrorExceptionInterface
{
	/**
	 * {@inheritDoc}
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'An error occurred.';
}
