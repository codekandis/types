<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use Throwable;
use function sprintf;

/**
 * Represents an exception if an enum does not exist.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class EnumNotFoundException extends AccessErrorException implements EnumNotFoundExceptionInterface
{
	/**
	 * @inheritdoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The enum does not exist.';

	/**
	 * Represents the exception message with the nonexistent enum name.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_NONEXISTENT_ENUM_NAME = 'The enum `%1$s` does not exist.';

	/**
	 * Static constructor method.
	 * @param string $nonExistentEnumName The nonexistent enum name.
	 * @param int $code The error code of the exception.
	 * @param ?Throwable $previous The previously catched throwable.
	 * @return static
	 */
	public static function withNonExistentEnumName( string $nonExistentEnumName, int $code = 0, ?Throwable $previous = null ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_NONEXISTENT_ENUM_NAME, $nonExistentEnumName ),
			$code,
			$previous
		);
	}
}
