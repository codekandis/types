<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use Throwable;
use function sprintf;

/**
 * Represents an exception if a backed enum does not exist.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class BackedEnumNotFoundException extends EnumNotFoundException implements BackedEnumNotFoundExceptionInterface
{
	/**
	 * @inheritdoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The backed enum does not exist.';

	/**
	 * Represents the exception message with the nonexistent backed enum name.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_NONEXISTENT_BACKED_ENUM_NAME = 'The backed enum `%1$s` does not exist.';

	/**
	 * Static constructor method.
	 * @param string $nonExistentPackedEnumName The nonexistent backed enum name.
	 * @param int $code The error code of the exception.
	 * @param ?Throwable $previous The previously catched throwable.
	 * @return static
	 */
	public static function withNonExistentBackedEnumName( string $nonExistentPackedEnumName, int $code = 0, ?Throwable $previous = null ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_NONEXISTENT_BACKED_ENUM_NAME, $nonExistentPackedEnumName ),
			$code,
			$previous
		);
	}
}
