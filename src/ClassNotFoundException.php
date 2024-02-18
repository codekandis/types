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
	 * @inheritDoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The class does not exist.';

	/**
	 * Represents the exception message if a class does not exist.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_CLASS_NOT_FOUND = 'The class `%s` does not exist.';

	/**
	 * Static constructor method.
	 * @param string $className The name of the class which does not exist.
	 * @return static
	 */
	public static function with_className( string $className ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_CLASS_NOT_FOUND, $className )
		);
	}
}
