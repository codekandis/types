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
	 * Gets the `unknown` type.
	 * @var string
	 */
	public string $unknownType {
		get;
	}

	/**
	 * Gets the `null` type.
	 * @var string
	 */
	public string $null {
		get;
	}

	/**
	 * Gets the `resource` type.
	 * @var string
	 */
	public string $resource {
		get;
	}

	/**
	 * Gets the typed `resource` template.
	 * @var string
	 */
	public string $typedResourceTemplate {
		get;
	}

	/**
	 * Gets the `closed resource` type.
	 * @var string
	 */
	public string $closedResource {
		get;
	}

	/**
	 * Gets the `array` type.
	 * @var string
	 */
	public string $array {
		get;
	}

	/**
	 * Gets the `object` type.
	 * @var string
	 */
	public string $object {
		get;
	}

	/**
	 * Gets the typed `object` template.
	 * @var string
	 */
	public string $typedObjectTemplate {
		get;
	}

	/**
	 * Gets the `boolean` type.
	 * @var string
	 */
	public string $boolean {
		get;
	}

	/**
	 * Gets the typed `boolean` template.
	 * @var string
	 */
	public string $typedBooleanTemplate {
		get;
	}

	/**
	 * Gets the `integer` type.
	 * @var string
	 */
	public string $integer {
		get;
	}

	/**
	 * Gets the `float` type.
	 * @var string
	 */
	public string $float {
		get;
	}

	/**
	 * Gets the `string` type.
	 * @var string
	 */
	public string $string {
		get;
	}

	/**
	 * Creates a typed `resource` by a specific resource type.
	 * @param string $resourceType The type of the `resource`.
	 * @return string The typed `resource`.
	 */
	public function createTypedResource( string $resourceType ): string;

	/**
	 * Creates a typed `object` by a specific class name.
	 * @param string $className The name of the class.
	 * @return string The typed `object`.
	 */
	public function createTypedObject( string $className ): string;

	/**
	 * Creates a typed `boolean` by a specific value.
	 * @param bool $value The value.
	 * @return string The type `boolean`.
	 */
	public function createTypedBoolean( bool $value ): string;
}
