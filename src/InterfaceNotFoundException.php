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
	 * @inheritDoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The interface does not exist.';

	/**
	 * Represents the exception message if an interface does not exist.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_INTERFACE_NOT_FOUND = 'The interface `%s` does not exist.';

	/**
	 * Static constructor method.
	 * @param string $interfaceName The name of the interface which does not exist.
	 * @return static
	 */
	public static function with_interfaceName( string $interfaceName ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_INTERFACE_NOT_FOUND, $interfaceName )
		);
	}
}
