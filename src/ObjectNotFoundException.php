<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use Throwable;
use function sprintf;

/**
 * Represents an exception if an object does not exist.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ObjectNotFoundException extends AccessErrorException implements ObjectNotFoundExceptionInterface
{
	/**
	 * @inheritdoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The object does not exist.';

	/**
	 * Represents the exception message with the nonexistent object's class name.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_NONEXISTENT_OBJECTS_CLASS_NAME = 'The object with the class name `%1$s` does not exist.';

	/**
	 * Represents the exception message with the nonexistent object's qualified ID.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_NONEXISTENT_OBJECTS_QUALIFIED_ID = 'The object with the qualified ID `%1$s` does not exist.';

	/**
	 * Static constructor method.
	 * @param mixed $nonExistentObjectsClassName The nonexistent object's class name.
	 * @param int $code The error code of the exception.
	 * @param ?Throwable $previous The previously catched throwable.
	 * @return static
	 */
	public static function withNonExistentObjectsClassName( mixed $nonExistentObjectsClassName, int $code = 0, ?Throwable $previous = null ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_NONEXISTENT_OBJECTS_CLASS_NAME, $nonExistentObjectsClassName ),
			$code,
			$previous
		);
	}

	/**
	 * Static constructor method.
	 * @param mixed $nonExistentObjectsQualifiedId The nonexistent object's qualified ID.
	 * @param int $code The error code of the exception.
	 * @param ?Throwable $previous The previously catched throwable.
	 * @return static
	 */
	public static function withNonExistentObjectsQualifiedId( mixed $nonExistentObjectsQualifiedId, int $code = 0, ?Throwable $previous = null ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_NONEXISTENT_OBJECTS_QUALIFIED_ID, $nonExistentObjectsQualifiedId ),
			$code,
			$previous
		);
	}
}
