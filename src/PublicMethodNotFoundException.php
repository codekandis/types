<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

/**
 * Represents an exception if a public method does not exist.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class PublicMethodNotFoundException extends MethodNotFoundException implements PublicMethodNotFoundExceptionInterface
{
	/**
	 * @inheritDoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The public method does not exist.';

	/**
	 * @inheritDoc
	 */
	public const string EXCEPTION_MESSAGE_METHOD_NOT_FOUND = 'The public method `%s::%s` does not exist.';
}
