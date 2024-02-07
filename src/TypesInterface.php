<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

/**
 * Represents the interface of any enumeration of types.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
interface TypesInterface
{
	/**
	 * Creates a typed `resource` by a specific resource type.
	 * @param string $resourceType The type of the `resource`.
	 * @return string The typed `resource`.
	 */
	public static function createTypedResource( string $resourceType ): string;

	/**
	 * Creates a typed `object` by a specific class name.
	 * @param string $className The name of the class.
	 * @return string The typed `object`.
	 */
	public static function createTypedObject( string $className ): string;

	/**
	 * Creates a typed `boolean` by a specific value.
	 * @param bool $value The value.
	 * @return string The type `boolean`.
	 */
	public static function createTypedBoolean( bool $value ): string;
}
