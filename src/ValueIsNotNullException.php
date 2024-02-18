<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

/**
 * Represents an exception if a value is not null.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValueIsNotNullException extends InvalidValueException implements ValueIsNotNullExceptionInterface
{
	/**
	 * @inheritDoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The value is not `null`.';
}
