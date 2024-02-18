<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use function sprintf;

/**
 * Represents an exception if an interface, class or enum does not exist.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class InterfaceClassOrEnumNotFoundException extends AccessErrorException implements InterfaceClassOrEnumNotFoundExceptionInterface
{
	/**
	 * @inheritDoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The interface, class or enum does not exist.';

	/**
	 * Represents the exception message if an interface, class or enum does not exist.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_INTERFACE_CLASS_OR_ENUM_NOT_FOUND = 'The interface, class or enum `%s` does not exist.';

	/**
	 * Static constructor method.
	 * @param string $interfaceClassOrEnumName The name of the interface, class or enum which does not exist.
	 * @return static
	 */
	public static function with_interfaceClassOrEnumName( string $interfaceClassOrEnumName ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_INTERFACE_CLASS_OR_ENUM_NOT_FOUND, $interfaceClassOrEnumName )
		);
	}
}
