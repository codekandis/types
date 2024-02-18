<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

/**
 * Represents an exception if a fatal error occured.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class FatalErrorException extends RuntimeException implements FatalErrorExceptionInterface
{
	/**
	 * @inheritdoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'A fatal error occured.';
}
