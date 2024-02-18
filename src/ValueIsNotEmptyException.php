<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

/**
 * Represents an exception if a value is not empty.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValueIsNotEmptyException extends InvalidValueException implements ValueIsNotEmptyExceptionInterface
{
	/**
	 * @inheritDoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The value is not empty.';
}
