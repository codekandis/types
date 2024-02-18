<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

/**
 * Represents an exception if an access error occured.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class AccessErrorException extends LogicException implements AccessErrorExceptionInterface
{
	/**
	 * @inheritdoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'An access error occured.';
}
