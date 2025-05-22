<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use Override;
use function sprintf;

/**
 * Represents an enumeration of types like PHP's `gettype()` function.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class GetTypeTypes extends BaseObject implements GetTypeTypesInterface
{
	/**
	 * @inheritdoc
	 */
	public string $unknownType {
		get => 'unknown type';
	}

	/**
	 * @inheritdoc
	 */
	public string $null {
		get => 'NULL';
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
		get => 'resource (closed)';
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
		get => 'boolean';
	}

	/**
	 * @inheritdoc
	 */
	public string $typedBooleanTemplate {
		get => 'boolean<%1$s>';
	}

	/**
	 * @inheritdoc
	 */
	public string $integer {
		get => 'integer';
	}

	/**
	 * @inheritdoc
	 */
	public string $float {
		get => 'double';
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
