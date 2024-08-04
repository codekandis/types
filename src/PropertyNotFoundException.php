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
	 * @inheritDoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The property does not exist.';

	/**
	 * Represents the exception message if a property does not exist.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_PROPERTY_NOT_FOUND = 'The property `%s::%s` does not exist.';

	/**
	 * Static constructor method.
	 * @param string $className The name of the class whose property does not exist.
	 * @param string $propertyName The name of the property which does not exist.
	 * @return static
	 */
	public static function with_classNameAndPropertyName( string $className, string $propertyName ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_PROPERTY_NOT_FOUND, $className, $propertyName )
		);
	}
}
