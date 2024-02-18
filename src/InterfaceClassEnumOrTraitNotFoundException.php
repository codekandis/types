<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use function sprintf;

/**
 * Represents an exception if an interface, class, enum or trait does not exist.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class InterfaceClassEnumOrTraitNotFoundException extends AccessErrorException implements InterfaceClassEnumOrTraitNotFoundExceptionInterface
{
	/**
	 * @inheritDoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The interface, class, enum or trait does not exist.';

	/**
	 * Represents the exception message if an interface, class, enum or trait does not exist.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_INTERFACE_CLASS_ENUM_OR_TRAIT_NOT_FOUND = 'The interface, class, enum or trait `%s` does not exist.';

	/**
	 * Static constructor method.
	 * @param string $interfaceClassEnumOrTraitName The name of the interface, class, enum or trait which does not exist.
	 * @return static
	 */
	public static function with_interfaceClassEnumOrTraitName( string $interfaceClassEnumOrTraitName ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_INTERFACE_CLASS_ENUM_OR_TRAIT_NOT_FOUND, $interfaceClassEnumOrTraitName )
		);
	}
}
