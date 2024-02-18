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
	 * @inheritdoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The integer backed enum does not exist.';

	/**
	 * Represents the exception message with the nonexistent integer backed enum name.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTEGER_BACKED_ENUM_NAME = 'The integer backed enum `%1$s` does not exist.';

	/**
	 * Static constructor method.
	 * @param string $nonExistentIntegerBackedEnumName The nonexistent integer backed enum name.
	 * @return static
	 */
	public static function withNonExistentIntegerBackedEnumName( string $nonExistentIntegerBackedEnumName ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTEGER_BACKED_ENUM_NAME, $nonExistentIntegerBackedEnumName )
		);
	}
}
