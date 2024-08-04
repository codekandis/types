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
	public const string EXCEPTION_MESSAGE_PROPERTY_NOT_FOUND = 'The public property `%s::%s` does not exist.';
}
