<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use function sprintf;

/**
 * Represents an exception if an interface does not exist.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class InterfaceNotFoundException extends AccessErrorException implements InterfaceNotFoundExceptionInterface
{
	/**
	 * @inheritdoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The interface does not exist.';

	/**
	 * Represents the exception message with the nonexistent interface name.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_NAME = 'The interface `%1$s` does not exist.';

	/**
	 * Static constructor method.
	 * @param string $nonExistentInterfaceName The nonexistent interface name.
	 * @return static
	 */
	public static function withNonExistentInterfaceName( string $nonExistentInterfaceName ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_NAME, $nonExistentInterfaceName )
		);
	}
}
