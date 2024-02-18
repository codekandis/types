<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use function sprintf;

/**
 * Represents an exception if an integer backed enum does not exist.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class IntegerBackedEnumNotFoundException extends BackedEnumNotFoundException implements IntegerBackedEnumNotFoundExceptionInterface
{
	/**
	 * @inheritDoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The integer backed enum does not exist.';

	/**
	 * Represents the exception message if an integer backed enum does not exist.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_INTEGER_BACKED_ENUM_NOT_FOUND = 'The integer backed enum `%s` does not exist.';

	/**
	 * Static constructor method.
	 * @param string $integerBackedEnumName The name of the integer backed enum which does not exist.
	 * @return static
	 */
	public static function with_integerBackedEnumName( string $integerBackedEnumName ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_INTEGER_BACKED_ENUM_NOT_FOUND, $integerBackedEnumName )
		);
	}
}
