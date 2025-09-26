<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use Throwable;
use function sprintf;

/**
 * Represents an exception if a class does not exist.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ClassNotFoundException extends AccessErrorException implements ClassNotFoundExceptionInterface
{
	/**
	 * @inheritdoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The class does not exist.';

	/**
	 * Represents the exception message with the nonexistent class name.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_NONEXISTENT_CLASS_NAME = 'The class `%1$s` does not exist.';

	/**
	 * Static constructor method.
	 * @param string $nonExistentClassName The nonexistent class name.
	 * @param int $code The error code of the exception.
	 * @param ?Throwable $previous The previously catched throwable.
	 * @return static
	 */
	public static function withNonExistentClassName( string $nonExistentClassName, int $code = 0, ?Throwable $previous = null ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_NONEXISTENT_CLASS_NAME, $nonExistentClassName ),
			$code,
			$previous
		);
	}
}
