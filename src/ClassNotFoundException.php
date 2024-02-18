<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use function sprintf;

/**
 * Represents an exception if a class does not exist.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ClassNotFoundException extends AccessErrorException implements ClassNotFoundExceptionInterface
{
	/**
	 * @inheritdoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The class does not exist.';

	/**
	 * Represents the exception message with the nonexistent class name.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_NONEXISTENT_CLASS_NAME = 'The class `%1$s` does not exist.';

	/**
	 * Static constructor method.
	 * @param string $nonExistentClassName The nonexistent class name.
	 * @return static
	 */
	public static function withNonExistentClassName( string $nonExistentClassName ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_NONEXISTENT_CLASS_NAME, $nonExistentClassName )
		);
	}
}
