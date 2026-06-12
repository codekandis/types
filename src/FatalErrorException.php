<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

/**
 * Represents an exception if a fatal error occurred.
 * It describes fatal runtime failures categorized as error-like.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class FatalErrorException extends RuntimeException implements FatalErrorExceptionInterface
{
	/**
	 * {@inheritDoc}
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'A fatal error occurred.';
}
