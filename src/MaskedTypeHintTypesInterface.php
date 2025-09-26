<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use Override;

/**
 * Represents the interface of any enumeration of masked types like PHP's type hints.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
interface MaskedTypeHintTypesInterface extends TypesInterface
{
	/**
	 * Gets the masked type hint type `unknown`.
	 * @var string
	 */
	public string $unknownType {
		get;
	}

	/**
	 * Gets the masked type hint type `null`.
	 * @var string
	 */
	public string $null {
		get;
	}

	/**
	 * Gets the masked type hint type `resource`.
	 * @var string
	 */
	public string $resource {
		get;
	}

	/**
	 * Gets the masked type hint typed `resource` template.
	 * @var string
	 */
	public string $typedResourceTemplate {
		get;
	}

	/**
	 * Gets the masked type hint type `closed resource`.
	 * @var string
	 */
	public string $closedResource {
		get;
	}

	/**
	 * Gets the masked type hint type `array`.
	 * @var string
	 */
	public string $array {
		get;
	}

	/**
	 * Gets the masked type hint type `object`.
	 * @var string
	 */
	public string $object {
		get;
	}

	/**
	 * Gets the masked type hint typed `object` template.
	 * @var string
	 */
	public string $typedObjectTemplate {
		get;
	}

	/**
	 * Gets the masked type hint type `boolean`.
	 * @var string
	 */
	public string $boolean {
		get;
	}

	/**
	 * Gets the masked type hint typed `boolean` template.
	 * @var string
	 */
	public string $typedBooleanTemplate {
		get;
	}

	/**
	 * Gets the masked type hint type `integer`.
	 * @var string
	 */
	public string $integer {
		get;
	}

	/**
	 * Gets the masked type hint type `float`.
	 * @var string
	 */
	public string $float {
		get;
	}

	/**
	 * Gets the masked type hint type `string`.
	 * @var string
	 */
	public string $string {
		get;
	}

	/**
	 * Creates a masked type hint typed `resource` by a specific resource type.
	 * @param string $resourceType The type of the `resource`.
	 * @return string The masked type hint typed `resource`.
	 */
	#[Override]
	public function createTypedResource( string $resourceType ): string;

	/**
	 * Creates a masked type hint typed `object` by a specific class name.
	 * @param string $className The name of the class.
	 * @return string The masked type hint typed `object`.
	 */
	#[Override]
	public function createTypedObject( string $className ): string;

	/**
	 * Creates a masked type hint typed `boolean` by a specific value.
	 * @param bool $value The value.
	 * @return string The masked type hint type `boolean`.
	 */
	#[Override]
	public function createTypedBoolean( bool $value ): string;
}
