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
	 * @inheritdoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The interface, class or enum does not exist.';

	/**
	 * Represents the exception message with the nonexistent interface, class or enum name.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_CLASS_OR_ENUM_NAME = 'The interface, class or enum `%1$s` does not exist.';

	/**
	 * Static constructor method.
	 * @param string $nonExistentInterfaceClassOrEnumName The nonexistent interface, class or enum name.
	 * @return static
	 */
	public static function withNonExistentInterfaceClassOrEnumName( string $nonExistentInterfaceClassOrEnumName ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_CLASS_OR_ENUM_NAME, $nonExistentInterfaceClassOrEnumName )
		);
	}
}
