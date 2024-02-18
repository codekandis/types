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
	 * @inheritDoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The protected property does not exist.';

	/**
	 * @inheritDoc
	 */
	public const string EXCEPTION_MESSAGE_PROPERTY_NOT_FOUND = 'The protected property `%s::%s` does not exist.';
}
