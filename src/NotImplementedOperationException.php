<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

/**
 * Represents an exception if an operation is not implemented.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class NotImplementedOperationException extends LogicException implements NotImplementedOperationExceptionInterface
{
	/**
	 * @inheritdoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The operation is not implemented.';
}
