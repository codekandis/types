<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

/**
 * Represents an exception if a value is null.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValueIsNullException extends InvalidValueException implements ValueIsNullExceptionInterface
{
	/**
	 * @inheritdoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The value is `null`.';
}
