<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

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
	 * @return static
	 */
	public static function withDuplicatedObjectsClassName( mixed $duplicatedObjectsClassName ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_DUPLICATED_OBJECTS_CLASS_NAME, $duplicatedObjectsClassName )
		);
	}

	/**
	 * Static constructor method.
	 * @param mixed $duplicatedObjectsQualifiedId The duplicated object's qualified ID.
	 * @return static
	 */
	public static function withDuplicatedObjectsQualifiedId( mixed $duplicatedObjectsQualifiedId ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_DUPLICATED_OBJECTS_QUALIFIED_ID, $duplicatedObjectsQualifiedId )
		);
	}
}
