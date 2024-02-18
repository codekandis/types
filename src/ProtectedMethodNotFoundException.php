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
	 * @inheritdoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The protected method does not exist.';

	/**
	 * @inheritdoc
	 */
	public const string EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_METHOD_NAME = 'The protected method `%1$s::%2$s` does not exist.';
}
