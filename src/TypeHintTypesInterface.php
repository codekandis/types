<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use Override;

/**
 * Represents the interface of any enumeration of types like PHP's type hints.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
interface TypeHintTypesInterface extends TypesInterface
{
	/**
	 * Gets the type hint type `unknown`.
	 * @var string
	 */
	public string $unknownType {
		get;
	}

	/**
	 * Gets the type hint type `null`.
	 * @var string
	 */
	public string $null {
		get;
	}

	/**
	 * Gets the type hint type `resource`.
	 * @var string
	 */
	public string $resource {
		get;
	}

	/**
	 * Gets the template for type-hinted `resource` values.
	 * @var string
	 */
	public string $typedResourceTemplate {
		get;
	}

	/**
	 * Gets the type hint type `closed resource`.
	 * @var string
	 */
	public string $closedResource {
		get;
	}

	/**
	 * Gets the type hint type `array`.
	 * @var string
	 */
	public string $array {
		get;
	}

	/**
	 * Gets the type hint type `object`.
	 * @var string
	 */
	public string $object {
		get;
	}

	/**
	 * Gets the template for type-hinted `object` values.
	 * @var string
	 */
	public string $typedObjectTemplate {
		get;
	}

	/**
	 * Gets the type hint type `bool`.
	 * @var string
	 */
	public string $boolean {
		get;
	}

	/**
	 * Gets the template for type-hinted `bool` values.
	 * @var string
	 */
	public string $typedBooleanTemplate {
		get;
	}

	/**
	 * Gets the type hint type `integer`.
	 * @var string
	 */
	public string $integer {
		get;
	}

	/**
	 * Gets the type hint type `float`.
	 * @var string
	 */
	public string $float {
		get;
	}

	/**
	 * Gets the type hint type `string`.
	 * @var string
	 */
	public string $string {
		get;
	}

	/**
	 * Creates a type-hinted `resource` from a resource type.
	 * @param string $resourceType The resource type.
	 * @return string The type-hinted `resource`.
	 */
	#[Override]
	public function createTypedResource( string $resourceType ): string;

	/**
	 * Creates a type-hinted `object` from a class name.
	 * @param string $className The name of the class.
	 * @return string The type-hinted `object`.
	 */
	#[Override]
	public function createTypedObject( string $className ): string;

	/**
	 * Creates a type-hinted `bool` from a boolean value.
	 * @param bool $value The value.
	 * @return string The type-hinted `bool`.
	 */
	#[Override]
	public function createTypedBoolean( bool $value ): string;
}
