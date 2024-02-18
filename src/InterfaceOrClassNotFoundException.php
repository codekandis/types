<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use function sprintf;

/**
 * Represents an exception if an interface or class does not exist.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class InterfaceOrClassNotFoundException extends AccessErrorException implements InterfaceOrClassNotFoundExceptionInterface
{
	/**
	 * @inheritDoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The interface or class does not exist.';

	/**
	 * Represents the exception message if an interface or class does not exist.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_INTERFACE_OR_CLASS_NOT_FOUND = 'The interface or class `%s` does not exist.';

	/**
	 * Static constructor method.
	 * @param string $interfaceOrClassName The name of the interface or class which does not exist.
	 * @return static
	 */
	public static function with_interfaceOrClassName( string $interfaceOrClassName ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_INTERFACE_OR_CLASS_NOT_FOUND, $interfaceOrClassName )
		);
	}
}
