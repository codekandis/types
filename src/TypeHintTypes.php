<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use Override;
use function sprintf;

/**
 * Represents an enumeration of types like PHP's type hints.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class TypeHintTypes implements TypeHintTypesInterface
{
	/**
	 * Represents an `unknown` type.
	 * @var string
	 */
	public const string UNKNOWN_TYPE = 'unknown-type';

	/**
	 * Represents a `null` type.
	 * @var string
	 */
	public const string NULL = 'null';

	/**
	 * Represents a `resource`.
	 * @var string
	 */
	public const string RESOURCE = 'resource';

	/**
	 * Represents a typed `resource` template.
	 * @var string
	 */
	public const string TYPED_RESOURCE_TEMPLATE = 'resource<%1$s>';

	/**
	 * Represents a `closed resource`.
	 * @var string
	 */
	public const string CLOSED_RESOURCE = 'closed-resource';

	/**
	 * Represents an `array`.
	 * @var string
	 */
	public const string ARRAY = 'array';

	/**
	 * Represents an `object`.
	 * @var string
	 */
	public const string OBJECT = 'object';

	/**
	 * Represents a typed `object` template.
	 * @var string
	 */
	public const string TYPED_OBJECT_TEMPLATE = 'object<%1$s>';

	/**
	 * Represents a `boolean`.
	 * @var string
	 */
	public const string BOOLEAN = 'bool';

	/**
	 * Represents a typed `boolean` template.
	 * @var string
	 */
	public const string TYPED_BOOLEAN_TEMPLATE = 'bool<%1$s>';

	/**
	 * Represents an `integer`.
	 * @var string
	 */
	public const string INTEGER = 'int';

	/**
	 * Represents a `float`.
	 * @var string
	 */
	public const string FLOAT = 'float';

	/**
	 * Represents a `string`.
	 * @var string
	 */
	public const string STRING = 'string';

	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function createTypedResource( string $resourceType ): string
	{
		return sprintf( static::TYPED_RESOURCE_TEMPLATE, $resourceType );
	}

	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function createTypedObject( string $className ): string
	{
		return sprintf( static::TYPED_OBJECT_TEMPLATE, $className );
	}

	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function createTypedBoolean( bool $value ): string
	{
		return sprintf(
			static::TYPED_BOOLEAN_TEMPLATE,
			false === $value
				? 'false'
				: 'true'
		);
	}
}
