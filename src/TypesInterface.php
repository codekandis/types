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
	 * Gets the type `unknown`.
	 * @var string
	 */
	public string $unknownType {
		get;
	}

	/**
	 * Gets the type `null`.
	 * @var string
	 */
	public string $null {
		get;
	}

	/**
	 * Gets the type `resource`.
	 * @var string
	 */
	public string $resource {
		get;
	}

	/**
	 * Gets the template for typed `resource` values.
	 * @var string
	 */
	public string $typedResourceTemplate {
		get;
	}

	/**
	 * Gets the type `closed resource`.
	 * @var string
	 */
	public string $closedResource {
		get;
	}

	/**
	 * Gets the type `array`.
	 * @var string
	 */
	public string $array {
		get;
	}

	/**
	 * Gets the type `object`.
	 * @var string
	 */
	public string $object {
		get;
	}

	/**
	 * Gets the template for typed `object` values.
	 * @var string
	 */
	public string $typedObjectTemplate {
		get;
	}

	/**
	 * Gets the type `bool`.
	 * @var string
	 */
	public string $boolean {
		get;
	}

	/**
	 * Gets the template for typed `bool` values.
	 * @var string
	 */
	public string $typedBooleanTemplate {
		get;
	}

	/**
	 * Gets the type `integer`.
	 * @var string
	 */
	public string $integer {
		get;
	}

	/**
	 * Gets the type `float`.
	 * @var string
	 */
	public string $float {
		get;
	}

	/**
	 * Gets the type `string`.
	 * @var string
	 */
	public string $string {
		get;
	}

	/**
	 * Creates a typed `resource` from a resource type.
	 * @param string $resourceType The resource type.
	 * @return string The typed `resource`.
	 */
	public function createTypedResource( string $resourceType ): string;

	/**
	 * Creates a typed `object` from a class name.
	 * @param string $className The name of the class.
	 * @return string The typed `object`.
	 */
	public function createTypedObject( string $className ): string;

	/**
	 * Creates a typed `bool` from a boolean value.
	 * @param bool $value The value.
	 * @return string The typed `bool`.
	 */
	public function createTypedBoolean( bool $value ): string;
}
