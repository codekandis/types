<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use Throwable;
use function sprintf;

/**
 * Represents an exception if an object already exists.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class DuplicateObjectException extends AccessErrorException implements ObjectNotFoundExceptionInterface
{
	/**
	 * @inheritdoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The object already exist.';

	/**
	 * Represents the exception message with the duplicated object's class name.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_DUPLICATED_OBJECTS_CLASS_NAME = 'The object with the class name `%1$s` already exist.';

	/**
	 * Represents the exception message with the duplicated object's qualified ID.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_DUPLICATED_OBJECTS_QUALIFIED_ID = 'The object with the qualified ID `%1$s` already exist.';

	/**
	 * Static constructor method.
	 * @param mixed $duplicatedObjectsClassName The duplicated object's class name.
	 * @param int $code The error code of the exception.
	 * @param ?Throwable $previous The previously catched throwable.
	 * @return static
	 */
	public static function withDuplicatedObjectsClassName( mixed $duplicatedObjectsClassName, int $code = 0, ?Throwable $previous = null ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_DUPLICATED_OBJECTS_CLASS_NAME, $duplicatedObjectsClassName ),
			$code,
			$previous
		);
	}

	/**
	 * Static constructor method.
	 * @param mixed $duplicatedObjectsQualifiedId The duplicated object's qualified ID.
	 * @param int $code The error code of the exception.
	 * @param ?Throwable $previous The previously catched throwable.
	 * @return static
	 */
	public static function withDuplicatedObjectsQualifiedId( mixed $duplicatedObjectsQualifiedId, int $code = 0, ?Throwable $previous = null ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_DUPLICATED_OBJECTS_QUALIFIED_ID, $duplicatedObjectsQualifiedId ),
			$code,
			$previous
		);
	}
}
