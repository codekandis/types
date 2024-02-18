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
	 * @inheritdoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The public method does not exist.';

	/**
	 * @inheritdoc
	 */
	public const string EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_METHOD_NAME = 'The public method `%1$s::%2$s` does not exist.';
}
