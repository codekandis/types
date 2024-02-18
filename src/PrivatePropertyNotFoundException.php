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
	 * @inheritDoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The private property does not exist.';

	/**
	 * @inheritDoc
	 */
	public const string EXCEPTION_MESSAGE_PROPERTY_NOT_FOUND = 'The private property `%s::%s` does not exist.';
}
