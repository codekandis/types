<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use function sprintf;

/**
 * Represents an exception if an object does not exist.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ObjectNotFoundException extends AccessErrorException implements ObjectNotFoundExceptionInterface
{
	/**
	 * @inheritDoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The object does not exist.';

	/**
	 * Represents the exception message with the nonexistent object's class name.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_NONEXISTENT_OBJECTS_CLASS_NAME = 'The object with the class name `%s` does not exist.';

	/**
	 * Represents the exception message with the nonexistent object's qualified ID.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_NONEXISTENT_OBJECTS_QUALIFIED_ID = 'The object with the qualified ID `%s` does not exist.';

	/**
	 * Static constructor method.
	 * @param mixed $nonExistentObjectsClassName The nonexistent object's class name.
	 * @return static
	 */
	public static function with_nonExistentObjectsClassName( mixed $nonExistentObjectsClassName ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_NONEXISTENT_OBJECTS_CLASS_NAME, $nonExistentObjectsClassName )
		);
	}

	/**
	 * Static constructor method.
	 * @param mixed $nonExistentObjectsQualifiedId The nonexistent object's qualified ID.
	 * @return static
	 */
	public static function with_nonExistentObjectsQualifiedId( mixed $nonExistentObjectsQualifiedId ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_NONEXISTENT_OBJECTS_QUALIFIED_ID, $nonExistentObjectsQualifiedId )
		);
	}
}
