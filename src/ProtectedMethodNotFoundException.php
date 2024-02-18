<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

/**
 * Represents an exception if a protected method does not exist.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ProtectedMethodNotFoundException extends MethodNotFoundException implements ProtectedMethodNotFoundExceptionInterface
{
	/**
	 * @inheritDoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The protected method does not exist.';

	/**
	 * @inheritDoc
	 */
	public const string EXCEPTION_MESSAGE_METHOD_NOT_FOUND = 'The protected method `%s::%s` does not exist.';
}
