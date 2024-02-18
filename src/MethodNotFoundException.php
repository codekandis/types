<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use function sprintf;

/**
 * Represents an exception if a method does not exist.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class MethodNotFoundException extends AccessErrorException implements MethodNotFoundExceptionInterface
{
	/**
	 * @inheritdoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The method does not exist.';

	/**
	 * Represents the exception message with the interface or class name and nonexistent method name.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_METHOD_NAME = 'The method `%1$s::%2$s` does not exist.';

	/**
	 * Static constructor method.
	 * @param string $interfaceOrClassName The interface or class name of the nonexistent method.
	 * @param string $nonExistentMethodName The nonexistent method name.
	 * @return static
	 */
	public static function withInterfaceOrClassNameAndNonExistentMethodName( string $interfaceOrClassName, string $nonExistentMethodName ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_METHOD_NAME, $interfaceOrClassName, $nonExistentMethodName )
		);
	}
}
