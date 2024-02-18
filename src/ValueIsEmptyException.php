<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

/**
 * Represents an exception if a value is empty.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValueIsEmptyException extends InvalidValueException implements ValueIsEmptyExceptionInterface
{
	/**
	 * @inheritdoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The value is empty.';
}
