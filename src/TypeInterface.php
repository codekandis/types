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
	 * @return object The object the type depends on.
	 */
	public function getInstance(): object;

	/**
	 * Gets the type name of the class of the represented object.
	 * @return string The type name of the class of the represented object.
	 */
	public function getTypeName(): string;

	/**
	 * Gets the `ReflectionClass` representing the class of the represented object.
	 * @return ReflectionClass The `ReflectionClass` representing the class of the represented object.
	 */
	public function getReflectedClass(): ReflectionClass;

	/**
	 * Gets the `ReflectionObject` representing the represented object.
	 * @return ReflectionObject The `ReflectionObject` representing the represented object.
	 */
	public function getReflectedObject(): ReflectionObject;

	/**
	 * Determines if the represented object is an instance of a specified class name or object.
	 * @param string|object $classNameOrObject The class name or object to compare with.
	 * @return bool `true` if the represented object is an instance of the class name or object, otherwise `false`.
	 */
	public function isInstanceOf( string|object $classNameOrObject ): bool;

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
