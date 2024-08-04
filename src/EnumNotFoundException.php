<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use function sprintf;

/**
 * Represents an exception if an enum does not exist.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class EnumNotFoundException extends AccessErrorException implements EnumNotFoundExceptionInterface
{
	/**
	 * @inheritDoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The enum does not exist.';

	/**
	 * Represents the exception message if an enum does not exist.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_ENUM_NOT_FOUND = 'The enum `%s` does not exist.';

	/**
	 * Static constructor method.
	 * @param string $enumName The name of the enum which does not exist.
	 * @return static
	 */
	public static function with_enumName( string $enumName ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_ENUM_NOT_FOUND, $enumName )
		);
	}
}
