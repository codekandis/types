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
	 * @inheritdoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The interface, class, enum or trait does not exist.';

	/**
	 * Represents the exception message with the nonexistent interface, class, enum or trait name.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_NONEXISTENT_INTERFACE_CLASS_ENUM_OR_TRAIT_NAME = 'The interface, class, enum or trait `%1$s` does not exist.';

	/**
	 * Static constructor method.
	 * @param string $nonExistentInterfaceClassEnumOrTraitName The nonexistent interface, class, enum or trait name.
	 * @return static
	 */
	public static function withNonExistentInterfaceClassEnumOrTraitName( string $nonExistentInterfaceClassEnumOrTraitName ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_NONEXISTENT_INTERFACE_CLASS_ENUM_OR_TRAIT_NAME, $nonExistentInterfaceClassEnumOrTraitName )
		);
	}
}
