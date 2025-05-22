<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use Override;

/**
 * Represents the interface of any enumeration of types like PHP's `gettype()` function.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
interface GetTypeTypesInterface extends TypesInterface
{
	/**
	 * Gets the `gettype()` type `unknown`.
	 * @var string
	 */
	public string $unknownType {
		get;
	}

	/**
	 * Gets the `gettype()` type `null`.
	 * @var string
	 */
	public string $null {
		get;
	}

	/**
	 * Gets the `gettype()` type `resource`.
	 * @var string
	 */
	public string $resource {
		get;
	}

	/**
	 * Gets the template for typed `gettype()` `resource` values.
	 * @var string
	 */
	public string $typedResourceTemplate {
		get;
	}

	/**
	 * Gets the `gettype()` type `closed resource`.
	 * @var string
	 */
	public string $closedResource {
		get;
	}

	/**
	 * Gets the `gettype()` type `array`.
	 * @var string
	 */
	public string $array {
		get;
	}

	/**
	 * Gets the `gettype()` type `object`.
	 * @var string
	 */
	public string $object {
		get;
	}

	/**
	 * Gets the template for typed `gettype()` `object` values.
	 * @var string
	 */
	public string $typedObjectTemplate {
		get;
	}

	/**
	 * Gets the `gettype()` type `boolean`.
	 * @var string
	 */
	public string $boolean {
		get;
	}

	/**
	 * Gets the template for typed `gettype()` `boolean` values.
	 * @var string
	 */
	public string $typedBooleanTemplate {
		get;
	}

	/**
	 * Gets the `gettype()` type `integer`.
	 * @var string
	 */
	public string $integer {
		get;
	}

	/**
	 * Gets the `gettype()` type `float`.
	 * @var string
	 */
	public string $float {
		get;
	}

	/**
	 * Gets the `gettype()` type `string`.
	 * @var string
	 */
	public string $string {
		get;
	}

	/**
	 * Creates a typed `gettype()` `resource` from a resource type.
	 * @param string $resourceType The resource type.
	 * @return string The `gettype()` typed `resource`.
	 */
	#[Override]
	public function createTypedResource( string $resourceType ): string;

	/**
	 * Creates a typed `gettype()` `object` from a class name.
	 * @param string $className The name of the class.
	 * @return string The `gettype()` typed `object`.
	 */
	#[Override]
	public function createTypedObject( string $className ): string;

	/**
	 * Creates a typed `gettype()` `boolean` from a boolean value.
	 * @param bool $value The value.
	 * @return string The `gettype()` typed `boolean`.
	 */
	#[Override]
	public function createTypedBoolean( bool $value ): string;
}
