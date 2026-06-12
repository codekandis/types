<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

/**
 * Represents an exception if an operation is not implemented.
 * It describes declared operations without an implementation.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class NotImplementedOperationException extends UnsupportedOperationException implements NotImplementedOperationExceptionInterface
{
	/**
	 * {@inheritDoc}
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The operation is not implemented.';
}
