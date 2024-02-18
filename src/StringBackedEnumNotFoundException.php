<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use function sprintf;

/**
 * Represents an exception if a string backed enum does not exist.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class StringBackedEnumNotFoundException extends BackedEnumNotFoundException implements StringBackedEnumNotFoundExceptionInterface
{
	/**
	 * @inheritdoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The string backed enum does not exist.';

	/**
	 * Represents the exception message with the nonexistent string backed enum name.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_NONEXISTENT_STRING_BACKED_ENUM_NAME = 'The string backed enum `%1$s` does not exist.';

	/**
	 * Static constructor method.
	 * @param string $nonExistentStringBackedEnumName The nonexistent string backed enum name.
	 * @return static
	 */
	public static function withNonExistentStringBackedEnumName( string $nonExistentStringBackedEnumName ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_NONEXISTENT_STRING_BACKED_ENUM_NAME, $nonExistentStringBackedEnumName )
		);
	}
}
