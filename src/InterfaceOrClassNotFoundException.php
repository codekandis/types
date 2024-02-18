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
	 * @inheritdoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The interface or class does not exist.';

	/**
	 * Represents the exception message with the nonexistent interface or class name.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_OR_CLASS_NAME = 'The interface or class `%1$s` does not exist.';

	/**
	 * Static constructor method.
	 * @param string $nonExistentInterfaceOrClassName The nonexistent interface or class name.
	 * @return static
	 */
	public static function withNonExistentInterfaceOrClassName( string $nonExistentInterfaceOrClassName ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_OR_CLASS_NAME, $nonExistentInterfaceOrClassName )
		);
	}
}
