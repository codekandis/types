<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use ReflectionClass;
use ReflectionObject;

/**
 * Represents the interface of any types representing an object.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
interface TypeInterface extends ObjectInterface
{
	/**
	 * Gets the object the type depends on.
	 * @var object
	 */
	public object $instance {
		get;
	}

	/**
	 * Gets the unique identifier of the object.
	 * @var int
	 */
	public int $id {
		get;
	}

	/**
	 * Gets the qualified unique identifier of the object.
	 * @var string
	 */
	public string $qualifiedId {
		get;
	}

	/**
	 * Gets the type name of the class of the represented object.
	 * @var string
	 */
	public string $typeName {
		get;
	}

	/**
	 * Gets the `ReflectionClass` representing the class of the represented object.
	 * @var ReflectionClass
	 */
	public ReflectionClass $reflectedClass {
		get;
	}

	/**
	 * Gets the `ReflectionObject` representing the represented object.
	 * @var ReflectionObject
	 */
	public ReflectionObject $reflectedObject {
		get;
	}

	/**
	 * Determines if the represented object is an instance of a specified class name or object.
	 * @param string|object $classNameOrObject The class name or object to compare with.
	 * @return bool `true` if the represented object is an instance of the class name or object, otherwise `false`.
	 */
	public function isInstanceOf( string | object $classNameOrObject ): bool;

	/**
	 * Determines if the represented object is an instance of the same class and has the same attributes and values like a specified object.
	 * @param object $object The object to compare with.
	 * @return bool `true` if the represented object is an instance of the same class and has the same attributes and values like a specified object, otherwise `false`.
	 */
	public function isEqual( object $object ): bool;

	/**
	 * Determines if the represented object refers to the same instance like a specified object.
	 * @param object $object The object to compare with.
	 * @return bool `true` if the represented object refers to the same instance, otherwise `false`.
	 */
	public function isIdentical( object $object ): bool;
}
