<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

/**
 * Represents an exception if an error occured.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ErrorException extends RuntimeException implements ErrorExceptionInterface
{
	/**
	 * @inheritdoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'An error occured.';
}
