<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use function sprintf;

/**
 * Represents an exception if a backed enum does not exist.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class BackedEnumNotFoundException extends EnumNotFoundException implements BackedEnumNotFoundExceptionInterface
{
	/**
	 * @inheritDoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The backed enum does not exist.';

	/**
	 * Represents the exception message if a backed enum does not exist.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_BACKED_ENUM_NOT_FOUND = 'The backed enum `%s` does not exist.';

	/**
	 * Static constructor method.
	 * @param string $backedEnumName The name of the backed enum which does not exist.
	 * @return static
	 */
	public static function with_backedEnumName( string $backedEnumName ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_BACKED_ENUM_NOT_FOUND, $backedEnumName )
		);
	}
}
