<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

/**
 * Represents an exception if a public property does not exist.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class PublicPropertyNotFoundException extends PropertyNotFoundException implements PublicPropertyNotFoundExceptionInterface
{
	/**
	 * @inheritDoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The public property does not exist.';

	/**
	 * @inheritDoc
	 */
	public const string EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_PROPERTY_NAME = 'The public property `%s::%s` does not exist.';
}
