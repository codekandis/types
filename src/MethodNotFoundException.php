<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use function sprintf;

/**
 * Represents an exception if a method does not exist.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class MethodNotFoundException extends AccessErrorException implements MethodNotFoundExceptionInterface
{
	/**
	 * @inheritDoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The method does not exist.';

	/**
	 * Represents the exception message if a method does not exist.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_METHOD_NOT_FOUND = 'The method `%s::%s` does not exist.';

	/**
	 * Static constructor method.
	 * @param string $className The name of the class whose method does not exist.
	 * @param string $methodName The name of the method which does not exist.
	 * @return static
	 */
	public static function with_classNameAndMethodName( string $className, string $methodName ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_METHOD_NOT_FOUND, $className, $methodName )
		);
	}
}
