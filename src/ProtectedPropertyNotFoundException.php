<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

/**
 * Represents an exception if a protected property does not exist.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ProtectedPropertyNotFoundException extends PropertyNotFoundException implements ProtectedPropertyNotFoundExceptionInterface
{
	/**
	 * @inheritdoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The protected property does not exist.';

	/**
	 * @inheritdoc
	 */
	public const string EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_PROPERTY_NAME = 'The protected property `%1$s::%2$s` does not exist.';
}
