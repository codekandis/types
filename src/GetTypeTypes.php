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
	 * @inheritDoc
	 */
	public string $unknownType {
		get => 'unknown type';
	}

	/**
	 * @inheritDoc
	 */
	public string $null {
		get => 'NULL';
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
		get => 'resource (closed)';
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
		get => 'boolean';
	}

	/**
	 * @inheritDoc
	 */
	public string $typedBooleanTemplate {
		get => 'boolean<%s>';
	}

	/**
	 * @inheritDoc
	 */
	public string $integer {
		get => 'integer';
	}

	/**
	 * @inheritDoc
	 */
	public string $float {
		get => 'double';
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
