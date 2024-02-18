<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

/**
 * Represents an exception if a private property does not exist.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class PrivatePropertyNotFoundException extends PropertyNotFoundException implements PrivatePropertyNotFoundExceptionInterface
{
	/**
	 * @inheritdoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The private property does not exist.';

	/**
	 * @inheritdoc
	 */
	public const string EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_PROPERTY_NAME = 'The private property `%1$s::%2$s` does not exist.';
}
