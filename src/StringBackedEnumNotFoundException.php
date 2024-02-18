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
	 * @inheritDoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The string backed enum does not exist.';

	/**
	 * Represents the exception message if a string backed enum does not exist.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_STRING_BACKED_ENUM_NOT_FOUND = 'The string backed enum `%s` does not exist.';

	/**
	 * Static constructor method.
	 * @param string $stringBackedEnumName The name of the string backed enum which does not exist.
	 * @return static
	 */
	public static function with_stringBackedEnumName( string $stringBackedEnumName ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_STRING_BACKED_ENUM_NOT_FOUND, $stringBackedEnumName )
		);
	}
}
