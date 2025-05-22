<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use Override;
use function sprintf;

/**
 * Represents an enumeration of types like PHP's type hints.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class TypeHintTypes extends BaseObject implements TypeHintTypesInterface
{
	/**
	 * @inheritdoc
	 */
	public string $unknownType {
		get => 'unknown-type';
	}

	/**
	 * @inheritdoc
	 */
	public string $null {
		get => 'null';
	}

	/**
	 * @inheritdoc
	 */
	public string $resource {
		get => 'resource';
	}

	/**
	 * @inheritdoc
	 */
	public string $typedResourceTemplate {
		get => 'resource<%1$s>';
	}

	/**
	 * @inheritdoc
	 */
	public string $closedResource {
		get => 'closed-resource';
	}

	/**
	 * @inheritdoc
	 */
	public string $array {
		get => 'array';
	}

	/**
	 * @inheritdoc
	 */
	public string $object {
		get => 'object';
	}

	/**
	 * @inheritdoc
	 */
	public string $typedObjectTemplate {
		get => 'object<%1$s>';
	}

	/**
	 * @inheritdoc
	 */
	public string $boolean {
		get => 'bool';
	}

	/**
	 * @inheritdoc
	 */
	public string $typedBooleanTemplate {
		get => 'bool<%1$s>';
	}

	/**
	 * @inheritdoc
	 */
	public string $integer {
		get => 'int';
	}

	/**
	 * @inheritdoc
	 */
	public string $float {
		get => 'float';
	}

	/**
	 * @inheritdoc
	 */
	public string $string {
		get => 'string';
	}

	/**
	 * @inheritdoc
	 */
	#[Override]
	public function createTypedResource( string $resourceType ): string
	{
		return sprintf( $this->typedResourceTemplate, $resourceType );
	}

	/**
	 * @inheritdoc
	 */
	#[Override]
	public function createTypedObject( string $className ): string
	{
		return sprintf( $this->typedObjectTemplate, $className );
	}

	/**
	 * @inheritdoc
	 */
	#[Override]
	public function createTypedBoolean( bool $value ): string
	{
		return sprintf(
			$this->typedBooleanTemplate,
			false === $value
				? 'false'
				: 'true'
		);
	}
}
