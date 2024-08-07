<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use Override;
use function sprintf;

/**
 * Represents an enumeration of masked types like PHP's `gettype()` function.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class MaskedGetTypeTypes extends BaseObject implements MaskedGetTypeTypesInterface
{
	/**
	 * Represents a masked `unknown` type.
	 * @var string
	 */
	public const string UNKNOWN_TYPE = '<unknown type>';

	/**
	 * Represents a masked `null` type.
	 * @var string
	 */
	public const string NULL = '<NULL>';

	/**
	 * Represents a masked `resource`.
	 * @var string
	 */
	public const string RESOURCE = '<resource>';

	/**
	 * Represents a masked typed `resource` template.
	 * @var string
	 */
	public const string TYPED_RESOURCE_TEMPLATE = '<resource<%s>>';

	/**
	 * Represents a masked `closed resource`.
	 * @var string
	 */
	public const string CLOSED_RESOURCE = '<resource (closed)>';

	/**
	 * Represents a masked `array`.
	 * @var string
	 */
	public const string ARRAY = '<array>';

	/**
	 * Represents a masked `object`.
	 * @var string
	 */
	public const string OBJECT = '<object>';

	/**
	 * Represents a masked typed `object` template.
	 * @var string
	 */
	public const string TYPED_OBJECT_TEMPLATE = '<object<%s>>';

	/**
	 * Represents a masked `boolean`.
	 * @var string
	 */
	public const string BOOLEAN = '<boolean>';

	/**
	 * Represents a masked typed `boolean` template.
	 * @var string
	 */
	public const string TYPED_BOOLEAN_TEMPLATE = '<boolean<%s>>';

	/**
	 * Represents a masked `integer`.
	 * @var string
	 */
	public const string INTEGER = '<integer>';

	/**
	 * Represents a masked `float`.
	 * @var string
	 */
	public const string FLOAT = '<double>';

	/**
	 * Represents a masked `string`.
	 * @var string
	 */
	public const string STRING = '<string>';

	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function createTypedResource( string $resourceType ): string
	{
		return sprintf( static::TYPED_RESOURCE_TEMPLATE, $resourceType );
	}

	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function createTypedObject( string $className ): string
	{
		return sprintf( static::TYPED_OBJECT_TEMPLATE, $className );
	}

	/**
	 * @inheritDoc
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
