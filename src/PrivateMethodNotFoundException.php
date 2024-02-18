<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

/**
 * Represents an exception if a private method does not exist.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class PrivateMethodNotFoundException extends MethodNotFoundException implements PrivateMethodNotFoundExceptionInterface
{
	/**
	 * @inheritDoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The private method does not exist.';

	/**
	 * @inheritDoc
	 */
	public const string EXCEPTION_MESSAGE_METHOD_NOT_FOUND = 'The private method `%s::%s` does not exist.';
}
