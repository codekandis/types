<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use ReflectionClass;
use ReflectionObject;

/**
 * Represents the interface of any type describing an object.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
interface TypeInterface extends ObjectInterface
{
	/**
	 * Gets the represented object.
	 * @var object
	 */
	public object $instance {
		get;
	}

	/**
	 * Gets the represented object's PHP object ID.
	 * @var int
	 */
	public int $objectId {
		get;
	}

	/**
	 * Gets the represented object's qualified PHP object ID.
	 * @var string
	 */
	public string $qualifiedObjectId {
		get;
	}

	/**
	 * Gets the represented object's class name.
	 * @var string
	 */
	public string $typeName {
		get;
	}

	/**
	 * Gets the represented object's reflected class.
	 * @var ReflectionClass
	 */
	public ReflectionClass $reflectedClass {
		get;
	}

	/**
	 * Gets the represented object's reflection.
	 * @var ReflectionObject
	 */
	public ReflectionObject $reflectedObject {
		get;
	}

	/**
	 * Determines if the represented object is an instance of a specified class name or object.
	 * @param string|object $classNameOrObject The class name or object to compare with.
	 * @return bool `true` if the represented object is an instance of the specified type, otherwise `false`.
	 */
	public function isInstanceOf( string | object $classNameOrObject ): bool;

	/**
	 * Determines if the represented object equals a specified object by class, attributes and values.
	 * @param object $object The object to compare with.
	 * @return bool `true` if the represented object is equal to the specified object, otherwise `false`.
	 */
	public function isEqual( object $object ): bool;

	/**
	 * Determines if the represented object is the same instance as a specified object.
	 * @param object $object The object to compare with.
	 * @return bool `true` if the represented object refers to the same instance, otherwise `false`.
	 */
	public function isIdentical( object $object ): bool;
}
