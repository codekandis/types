<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use function sprintf;

/**
 * Represents an exception if a property does not exist.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class PropertyNotFoundException extends AccessErrorException implements PropertyNotFoundExceptionInterface
{
	/**
	 * @inheritdoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The property does not exist.';

	/**
	 * Represents the exception message with the interface or class name and nonexistent property name.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_PROPERTY_NAME = 'The property `%1$s::%2$s` does not exist.';

	/**
	 * Static constructor method.
	 * @param string $interfaceOrClassName The interface or class name of the nonexistent property.
	 * @param string $nonExistentPropertyName The nonexistent property name.
	 * @return static
	 */
	public static function withInterfaceOrClassNameAndNonExistentPropertyName( string $interfaceOrClassName, string $nonExistentPropertyName ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_PROPERTY_NAME, $interfaceOrClassName, $nonExistentPropertyName )
		);
	}
}
