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
	 * @inheritDoc
	 */
	public string $unknownType {
		get => 'unknown-type';
	}

	/**
	 * @inheritDoc
	 */
	public string $null {
		get => 'null';
	}

	/**
	 * @inheritDoc
	 */
	public string $resource {
		get => 'resource';
	}

	/**
	 * @inheritDoc
	 */
	public string $typedResourceTemplate {
		get => 'resource<%s>';
	}

	/**
	 * @inheritDoc
	 */
	public string $closedResource {
		get => 'closed-resource';
	}

	/**
	 * @inheritDoc
	 */
	public string $array {
		get => 'array';
	}

	/**
	 * @inheritDoc
	 */
	public string $object {
		get => 'object';
	}

	/**
	 * @inheritDoc
	 */
	public string $typedObjectTemplate {
		get => 'object<%s>';
	}

	/**
	 * @inheritDoc
	 */
	public string $boolean {
		get => 'bool';
	}

	/**
	 * @inheritDoc
	 */
	public string $typedBooleanTemplate {
		get => 'bool<%s>';
	}

	/**
	 * @inheritDoc
	 */
	public string $integer {
		get => 'int';
	}

	/**
	 * @inheritDoc
	 */
	public string $float {
		get => 'float';
	}

	/**
	 * @inheritDoc
	 */
	public string $string {
		get => 'string';
	}

	/**
	 * @inheritDoc
	 */
	#[Override]
	public function createTypedResource( string $resourceType ): string
	{
		return sprintf( $this->typedResourceTemplate, $resourceType );
	}

	/**
	 * @inheritDoc
	 */
	#[Override]
	public function createTypedObject( string $className ): string
	{
		return sprintf( $this->typedObjectTemplate, $className );
	}

	/**
	 * @inheritDoc
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
