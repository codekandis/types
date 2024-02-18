<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

/**
 * Represents an exception if an operation is unsupported.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class UnsupportedOperationException extends AccessErrorException implements UnsupportedOperationExceptionInterface
{
	/**
	 * @inheritdoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The operation is not supported.';
}
