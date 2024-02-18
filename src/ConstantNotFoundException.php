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
	 * @inheritdoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The constant does not exist.';

	/**
	 * Represents the exception message with nonexistent constant name.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_NONEXISTENT_CONSTANT_NAME = 'The constant `%1$s` does not exist.';

	/**
	 * Static constructor method.
	 * @param string $nonExistentConstantName The nonexistent constant name.
	 * @return static
	 */
	public static function withNonExistentConstantName( string $nonExistentConstantName ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_NONEXISTENT_CONSTANT_NAME, $nonExistentConstantName )
		);
	}
}
