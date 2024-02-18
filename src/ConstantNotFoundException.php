<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use function sprintf;

/**
 * Represents an exception if a constant does not exist.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ConstantNotFoundException extends AccessErrorException implements ConstantNotFoundExceptionInterface
{
	/**
	 * @inheritDoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The constant does not exist.';

	/**
	 * Represents the exception message with the interface or class name and nonexistent constant name.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_NAME = 'The constant `%s::%s` does not exist.';

	/**
	 * Static constructor method.
	 * @param string $interfaceOrClassName The interface or class name of the nonexistent constant.
	 * @param string $nonExistentConstantName The nonexistent constant name.
	 * @return static
	 */
	public static function with_interfaceOrClassNameAndNonExistentConstantName( string $interfaceOrClassName, string $nonExistentConstantName ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_NAME, $interfaceOrClassName, $nonExistentConstantName )
		);
	}
}
