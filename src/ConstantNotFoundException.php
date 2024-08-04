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
	 * Represents the exception message if a constant does not exist.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_CONSTANT_NOT_FOUND = 'The constant `%s::%s` does not exist.';

	/**
	 * Static constructor method.
	 * @param string $className The name of the class whose constant does not exist.
	 * @param string $constantName The name of the constant which does not exist.
	 * @return static
	 */
	public static function with_classNameAndConstantName( string $className, string $constantName ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_CONSTANT_NOT_FOUND, $className, $constantName )
		);
	}
}
