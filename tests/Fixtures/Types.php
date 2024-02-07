<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\Fixtures;

use function get_resource_type;
use function implode;
use function sprintf;

/**
 * Represents an enumeration of types.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class Types
{
	/**
	 * Represents an invalid type.
	 * @var string
	 */
	public const string INVALID_TYPE = 'invalidType';

	/**
	 * Represents a `gettype()` `unknown` type.
	 * @var string
	 */
	public const string GET_TYPE_UNKNOWN_TYPE = 'unknown type';

	/**
	 * Represents a `gettype()` `null` type.
	 * @var string
	 */
	public const string GET_TYPE_TYPE_NULL = 'NULL';

	/**
	 * Represents a `gettype()` `resource`.
	 * @var string
	 */
	public const string GET_TYPE_TYPE_RESOURCE = 'resource';

	/**
	 * Represents a `gettype()` typed `resource` template.
	 * @var string
	 */
	public const string GET_TYPE_TYPED_RESOUCRE_TEMPLATE = 'resource<%1$s>';

	/**
	 * Represents a `gettype()` `closed resource`.
	 * @var string
	 */
	public const string GET_TYPE_TYPE_CLOSED_RESOURCE = 'resource (closed)';

	/**
	 * Represents a `gettype()` `array`.
	 * @var string
	 */
	public const string GET_TYPE_TYPE_ARRAY = 'array';

	/**
	 * Represents a `gettype()` `object`.
	 * @var string
	 */
	public const string GET_TYPE_TYPE_OBJECT = 'object';

	/**
	 * Represents a `gettype()` typed `object` template.
	 * @var string
	 */
	public const string GET_TYPE_TYPED_OBJECT_TEMPLATE = 'object<%1$s>';

	/**
	 * Represents a `gettype()` `boolean`.
	 * @var string
	 */
	public const string GET_TYPE_TYPE_BOOLEAN = 'boolean';

	/**
	 * Represents a `gettype()` typed `boolean` template.
	 * @var string
	 */
	public const string GET_TYPE_TYPED_BOOLEAN_TEMPLATE = 'boolean<%1$s>';

	/**
	 * Represents a `gettype()` `integer`.
	 * @var string
	 */
	public const string GET_TYPE_TYPE_INTEGER = 'integer';

	/**
	 * Represents a `gettype()` `float`.
	 * @var string
	 */
	public const string GET_TYPE_TYPE_FLOAT = 'double';

	/**
	 * Represents a `gettype()` `string`.
	 * @var string
	 */
	public const string GET_TYPE_TYPE_STRING = 'string';

	/**
	 * Represents a masked `gettype()` `unknown` type.
	 * @var string
	 */
	public const string MASKED_GET_TYPE_UNKNOWN_TYPE = '<unknown type>';

	/**
	 * Represents a masked `gettype()` `null` type.
	 * @var string
	 */
	public const string MASKED_GET_TYPE_TYPE_NULL = '<NULL>';

	/**
	 * Represents a masked `gettype()` `resource`.
	 * @var string
	 */
	public const string MASKED_GET_TYPE_TYPE_RESOURCE = '<resource>';

	/**
	 * Represents a masked `gettype()` typed `resource` template.
	 * @var string
	 */
	public const string MASKED_GET_TYPE_TYPED_RESOUCRE_TEMPLATE = '<resource<%1$s>>';

	/**
	 * Represents a masked `gettype()` `closed resource`.
	 * @var string
	 */
	public const string MASKED_GET_TYPE_TYPE_CLOSED_RESOURCE = '<resource (closed)>';

	/**
	 * Represents a masked `gettype()` `array`.
	 * @var string
	 */
	public const string MASKED_GET_TYPE_TYPE_ARRAY = '<array>';

	/**
	 * Represents a masked `gettype()` `object`.
	 * @var string
	 */
	public const string MASKED_GET_TYPE_TYPE_OBJECT = '<object>';

	/**
	 * Represents a masked `gettype()` typed `object` template.
	 * @var string
	 */
	public const string MASKED_GET_TYPE_TYPED_OBJECT_TEMPLATE = '<object<%1$s>>';

	/**
	 * Represents a masked `gettype()` `boolean`.
	 * @var string
	 */
	public const string MASKED_GET_TYPE_TYPE_BOOLEAN = '<boolean>';

	/**
	 * Represents a masked `gettype()` typed `boolean` template.
	 * @var string
	 */
	public const string MASKED_GET_TYPE_TYPED_BOOLEAN_TEMPLATE = '<boolean<%1$s>>';

	/**
	 * Represents a masked `gettype()` `integer`.
	 * @var string
	 */
	public const string MASKED_GET_TYPE_TYPE_INTEGER = '<integer>';

	/**
	 * Represents a masked `gettype()` `float`.
	 * @var string
	 */
	public const string MASKED_GET_TYPE_TYPE_FLOAT = '<double>';

	/**
	 * Represents a masked `gettype()` `string`.
	 * @var string
	 */
	public const string MASKED_GET_TYPE_TYPE_STRING = '<string>';

	/**
	 * Represents a type hint `unknown` type.
	 * @var string
	 */
	public const string TYPE_HINT_TYPE_UNKNOWN_TYPE = 'unknown-type';

	/**
	 * Represents a type hint `null` type.
	 * @var string
	 */
	public const string TYPE_HINT_TYPE_NULL = 'null';

	/**
	 * Represents a type hint `resource`.
	 * @var string
	 */
	public const string TYPE_HINT_TYPE_RESOURCE = 'resource';

	/**
	 * Represents a type hint typed `resource` template.
	 * @var string
	 */
	public const string TYPE_HINT_TYPED_RESOUCRE_TEMPLATE = 'resource<%1$s>';

	/**
	 * Represents a type hint `closed resource`.
	 * @var string
	 */
	public const string TYPE_HINT_TYPE_CLOSED_RESOURCE = 'closed-resource';

	/**
	 * Represents a type hint `array`.
	 * @var string
	 */
	public const string TYPE_HINT_TYPE_ARRAY = 'array';

	/**
	 * Represents a type hint `object`.
	 * @var string
	 */
	public const string TYPE_HINT_TYPE_OBJECT = 'object';

	/**
	 * Represents a type hint typed `object` template.
	 * @var string
	 */
	public const string TYPE_HINT_TYPED_OBJECT_TEMPLATE = 'object<%1$s>';

	/**
	 * Represents a type hint `boolean`.
	 * @var string
	 */
	public const string TYPE_HINT_TYPE_BOOLEAN = 'bool';

	/**
	 * Represents a type hint typed `boolean` template.
	 * @var string
	 */
	public const string TYPE_HINT_TYPED_BOOLEAN_TEMPLATE = 'bool<%1$s>';

	/**
	 * Represents a type hint `integer`.
	 * @var string
	 */
	public const string TYPE_HINT_TYPE_INTEGER = 'int';

	/**
	 * Represents a type hint `float`.
	 * @var string
	 */
	public const string TYPE_HINT_TYPE_FLOAT = 'float';

	/**
	 * Represents a type hint `string`.
	 * @var string
	 */
	public const string TYPE_HINT_TYPE_STRING = 'string';

	/**
	 * Represents a masked type hint `unknown` type.
	 * @var string
	 */
	public const string MASKED_TYPE_HINT_TYPE_UNKNOWN_TYPE = '<unknown-type>';

	/**
	 * Represents a masked type hint `null` type.
	 * @var string
	 */
	public const string MASKED_TYPE_HINT_TYPE_NULL = '<null>';

	/**
	 * Represents a masked type hint `resource`.
	 * @var string
	 */
	public const string MASKED_TYPE_HINT_TYPE_RESOURCE = '<resource>';

	/**
	 * Represents a masked type hint typed `resource` template.
	 * @var string
	 */
	public const string MASKED_TYPE_HINT_TYPED_RESOUCRE_TEMPLATE = '<resource<%1$s>>';

	/**
	 * Represents a masked type hint `closed resource`.
	 * @var string
	 */
	public const string MASKED_TYPE_HINT_TYPE_CLOSED_RESOURCE = '<closed-resource>';

	/**
	 * Represents a masked type hint `array`.
	 * @var string
	 */
	public const string MASKED_TYPE_HINT_TYPE_ARRAY = '<array>';

	/**
	 * Represents a masked type hint `object`.
	 * @var string
	 */
	public const string MASKED_TYPE_HINT_TYPE_OBJECT = '<object>';

	/**
	 * Represents a masked type hint typed `object` template.
	 * @var string
	 */
	public const string MASKED_TYPE_HINT_TYPED_OBJECT_TEMPLATE = '<object<%1$s>>';

	/**
	 * Represents a masked type hint `boolean`.
	 * @var string
	 */
	public const string MASKED_TYPE_HINT_TYPE_BOOLEAN = '<bool>';

	/**
	 * Represents a masked type hint typed `boolean` template.
	 * @var string
	 */
	public const string MASKED_TYPE_HINT_TYPED_BOOLEAN_TEMPLATE = '<bool<%1$s>>';

	/**
	 * Represents a masked type hint `integer`.
	 * @var string
	 */
	public const string MASKED_TYPE_HINT_TYPE_INTEGER = '<int>';

	/**
	 * Represents a masked type hint `float`.
	 * @var string
	 */
	public const string MASKED_TYPE_HINT_TYPE_FLOAT = '<float>';

	/**
	 * Represents a masked type hint `string`.
	 * @var string
	 */
	public const string MASKED_TYPE_HINT_TYPE_STRING = '<string>';

	/**
	 * Represents a set of an expected single `gettype()` type.
	 * @var string[]
	 */
	public const array EXPECTED_SINGLE_GET_TYPE_TYPE = [
		self::GET_TYPE_UNKNOWN_TYPE
	];

	/**
	 * Represents a set of expected `gettype()` types.
	 * @var string[]
	 */
	public const array EXPECTED_GET_TYPE_TYPES = [
		self::GET_TYPE_UNKNOWN_TYPE,
		self::GET_TYPE_TYPE_NULL,
		self::GET_TYPE_TYPE_RESOURCE,
		self::GET_TYPE_TYPE_CLOSED_RESOURCE,
		self::GET_TYPE_TYPE_ARRAY,
		self::GET_TYPE_TYPE_OBJECT,
		self::GET_TYPE_TYPE_BOOLEAN,
		self::GET_TYPE_TYPE_INTEGER,
		self::GET_TYPE_TYPE_FLOAT,
		self::GET_TYPE_TYPE_STRING
	];

	/**
	 * Represents a set of an expected single masked `gettype()` type.
	 * @var string[]
	 */
	public const array EXPECTED_SINGLE_MASKED_GET_TYPE_TYPE = [
		self::MASKED_GET_TYPE_UNKNOWN_TYPE
	];

	/**
	 * Represents a set of expected masked `gettype()` types.
	 * @var string[]
	 */
	public const array EXPECTED_MASKED_GET_TYPE_TYPES = [
		self::MASKED_GET_TYPE_UNKNOWN_TYPE,
		self::MASKED_GET_TYPE_TYPE_NULL,
		self::MASKED_GET_TYPE_TYPE_RESOURCE,
		self::MASKED_GET_TYPE_TYPE_CLOSED_RESOURCE,
		self::MASKED_GET_TYPE_TYPE_ARRAY,
		self::MASKED_GET_TYPE_TYPE_OBJECT,
		self::MASKED_GET_TYPE_TYPE_BOOLEAN,
		self::MASKED_GET_TYPE_TYPE_INTEGER,
		self::MASKED_GET_TYPE_TYPE_FLOAT,
		self::MASKED_GET_TYPE_TYPE_STRING
	];

	/**
	 * Represents a set of an expected single type hint type.
	 * @var string[]
	 */
	public const array EXPECTED_SINGLE_TYPE_HINT_TYPE = [
		self::TYPE_HINT_TYPE_UNKNOWN_TYPE
	];

	/**
	 * Represents a set of expected type hint types.
	 * @var string[]
	 */
	public const array EXPECTED_TYPE_HINT_TYPES = [
		self::TYPE_HINT_TYPE_UNKNOWN_TYPE,
		self::TYPE_HINT_TYPE_NULL,
		self::TYPE_HINT_TYPE_RESOURCE,
		self::TYPE_HINT_TYPE_CLOSED_RESOURCE,
		self::TYPE_HINT_TYPE_ARRAY,
		self::TYPE_HINT_TYPE_OBJECT,
		self::TYPE_HINT_TYPE_BOOLEAN,
		self::TYPE_HINT_TYPE_INTEGER,
		self::TYPE_HINT_TYPE_FLOAT,
		self::TYPE_HINT_TYPE_STRING
	];

	/**
	 * Represents a set of an expected single masked type hint type.
	 * @var string[]
	 */
	public const array EXPECTED_SINGLE_MASKED_TYPE_HINT_TYPE = [
		self::MASKED_TYPE_HINT_TYPE_UNKNOWN_TYPE
	];

	/**
	 * Represents a set of expected masked type hint types.
	 * @var string[]
	 */
	public const array EXPECTED_MASKED_TYPE_HINT_TYPES = [
		self::MASKED_TYPE_HINT_TYPE_UNKNOWN_TYPE,
		self::MASKED_TYPE_HINT_TYPE_NULL,
		self::MASKED_TYPE_HINT_TYPE_RESOURCE,
		self::MASKED_TYPE_HINT_TYPE_CLOSED_RESOURCE,
		self::MASKED_TYPE_HINT_TYPE_ARRAY,
		self::MASKED_TYPE_HINT_TYPE_OBJECT,
		self::MASKED_TYPE_HINT_TYPE_BOOLEAN,
		self::MASKED_TYPE_HINT_TYPE_INTEGER,
		self::MASKED_TYPE_HINT_TYPE_FLOAT,
		self::MASKED_TYPE_HINT_TYPE_STRING
	];

	/**
	 * Creates a `gettype()` typed `resource` type of a specific resource type.
	 * @param string $resourceType The resource type to create the `gettype()` typed `resource` type from.
	 * @return string The created `gettype()` typed `resource` type.
	 */
	public static function createGetTypeTypedResourceTypeByResourceType( string $resourceType ): string
	{
		return sprintf( static::GET_TYPE_TYPED_RESOUCRE_TEMPLATE, $resourceType );
	}

	/**
	 * Creates a `gettype()` typed `resource` type of a specific resource.
	 * @param resource $resource The resource to create the `gettype()` typed `resource` type from.
	 * @return string The created `gettype()` typed `resource` type.
	 */
	public static function createGetTypeTypedResourceTypeByResource( $resource ): string
	{
		return static::createGetTypeTypedResourceTypeByResourceType(
			get_resource_type( $resource )
		);
	}

	/**
	 * Creates a `gettype()` typed `object` type of a specific class name.
	 * @param string $className The class name to create the `gettype()` typed `object` type from.
	 * @return string The created `gettype()` typed `object` type.
	 */
	public static function createGetTypeTypedObjectTypeByClassName( string $className ): string
	{
		return sprintf( self::GET_TYPE_TYPED_OBJECT_TEMPLATE, $className );
	}

	/**
	 * Creates a `gettype()` typed `object` type of a specific object.
	 * @param object $object The object to create the `gettype()` typed `object` type from.
	 * @return string The created `gettype()` typed `object` type.
	 */
	public static function createGetTypeTypedObjectTypeByObject( object $object ): string
	{
		return static::createGetTypeTypedObjectTypeByClassName( $object::class );
	}

	/**
	 * Creates a `gettype()` typed `boolean` type of a specific value.
	 * @param bool $value The value to create the `gettype()` typed `boolean` type from.
	 * @return string The created `gettype()` typed `boolean` type.
	 */
	public static function createGetTypeTypedBooleanTypeByValue( bool $value ): string
	{
		return sprintf(
			static::GET_TYPE_TYPED_BOOLEAN_TEMPLATE,
			false === $value
				? 'false'
				: 'true'
		);
	}

	/**
	 * Creates a string of an expected single `gettype()` type.
	 * @return string The created string of an expected single `gettype()` type.
	 */
	public static function createConcatinatedExpectedSingleGetTypeType(): string
	{
		return implode( ' | ', static::EXPECTED_SINGLE_GET_TYPE_TYPE );
	}

	/**
	 * Creates a string of expected `gettype()` types.
	 * @return string The created string of expected `gettype()` types.
	 */
	public static function createConcatinatedExpectedGetTypeTypes(): string
	{
		return implode( ' | ', static::EXPECTED_GET_TYPE_TYPES );
	}

	/**
	 * Creates a masked `gettype()` typed `resource` type of a specific resource type.
	 * @param string $resourceType The resource type to create the masked `gettype()` typed `resource` type from.
	 * @return string The created masked `gettype()` typed `resource` type.
	 */
	public static function createMaskedGetTypeTypedResourceTypeByResourceType( string $resourceType ): string
	{
		return sprintf( static::MASKED_GET_TYPE_TYPED_RESOUCRE_TEMPLATE, $resourceType );
	}

	/**
	 * Creates a masked `gettype()` typed `object` type of a specific class name.
	 * @param string $className The class name to create the masked `gettype()` typed `object` type from.
	 * @return string The created masked `gettype()` typed `object` type.
	 */
	public static function createMaskedGetTypeTypedObjectTypeByClassName( string $className ): string
	{
		return sprintf( static::MASKED_GET_TYPE_TYPED_OBJECT_TEMPLATE, $className );
	}

	/**
	 * Creates a masked `gettype()` typed `boolean` type of a specific value.
	 * @param bool $value The value to create the masked `gettype()` typed `boolean` type from.
	 * @return string The created masked `gettype()` typed `boolean` type.
	 */
	public static function createMaskedGetTypeTypedBooleanTypeByValue( bool $value ): string
	{
		return sprintf(
			static::MASKED_GET_TYPE_TYPED_BOOLEAN_TEMPLATE,
			false === $value
				? 'false'
				: 'true'
		);
	}

	/**
	 * Creates a string of an expected singlemasked `gettype()` type.
	 * @return string The created string of an expected singlemasked `gettype()` type.
	 */
	public static function createConcatinatedExpectedSingleMaskedGetTypeType(): string
	{
		return implode( ' | ', static::EXPECTED_SINGLE_MASKED_GET_TYPE_TYPE );
	}

	/**
	 * Creates a string of expectedmasked `gettype()` types.
	 * @return string The created string of expectedmasked `gettype()` types.
	 */
	public static function createConcatinatedExpectedMaskedGetTypeTypes(): string
	{
		return implode( ' | ', static::EXPECTED_MASKED_GET_TYPE_TYPES );
	}

	/**
	 * Creates a type hint typed `resource` type of a specific resource type.
	 * @param string $resourceType The resource type to create the type hint typed `resource` type from.
	 * @return string The created type hint typed `resource` type.
	 */
	public static function createTypeHintTypedResourceTypeByResourceType( string $resourceType ): string
	{
		return sprintf( static::TYPE_HINT_TYPED_RESOUCRE_TEMPLATE, $resourceType );
	}

	/**
	 * Creates a type hint typed `resource` type of a specific resource.
	 * @param resource $resource The resource to create the type hint typed `resource` type from.
	 * @return string The created type hint typed `resource` type.
	 */
	public static function createTypeHintTypedResourceTypeByResource( $resource ): string
	{
		return static::createTypeHintTypedResourceTypeByResourceType(
			get_resource_type( $resource )
		);
	}

	/**
	 * Creates a type hint typed `object` type of a specific object.
	 * @param string $className The class name to create the type hint typed `object` type from.
	 * @return string The created type hint typed `object` type.
	 */
	public static function createTypeHintTypedObjectTypeByClassName( string $className ): string
	{
		return sprintf( static::TYPE_HINT_TYPED_OBJECT_TEMPLATE, $className );
	}

	/**
	 * Creates a type hint typed `object` type of a specific object.
	 * @param object $object The object to create the type hint typed `object` type from.
	 * @return string The created type hint typed `object` type.
	 */
	public static function createTypeHintTypedObjectTypeByObject( object $object ): string
	{
		return static::createTypeHintTypedObjectTypeByClassName( $object::class );
	}

	/**
	 * Creates a type hint typed `boolean` type of a specific value.
	 * @param bool $value The value to create the type hint typed `boolean` type from.
	 * @return string The created type hint typed `boolean` type.
	 */
	public static function createTypeHintTypedBooleanTypeByValue( bool $value ): string
	{
		return sprintf(
			static::TYPE_HINT_TYPED_BOOLEAN_TEMPLATE,
			false === $value
				? 'false'
				: 'true'
		);
	}

	/**
	 * Creates a string of an expected single type hint type.
	 * @return string The created string of an expected single type hint type.
	 */
	public static function createConcatinatedExpectedSingleTypeHintType(): string
	{
		return implode( ' | ', static::EXPECTED_SINGLE_TYPE_HINT_TYPE );
	}

	/**
	 * Creates a string of expected type hint types.
	 * @return string The created string of expected type hint types.
	 */
	public static function createConcatinatedExpectedTypeHintTypes(): string
	{
		return implode( ' | ', static::EXPECTED_TYPE_HINT_TYPES );
	}

	/**
	 * Creates a masked type hint typed `resource` type of a specific resource type.
	 * @param string $resourceType The resource type to create the masked type hint typed `resource` type from.
	 * @return string The created masked type hint typed `resource` type.
	 */
	public static function createMaskedTypeHintTypedResourceTypeByResourceType( string $resourceType ): string
	{
		return sprintf( static::MASKED_TYPE_HINT_TYPED_RESOUCRE_TEMPLATE, $resourceType );
	}

	/**
	 * Creates a masked type hint typed `resource` type of a specific resource.
	 * @param resource $resource The resource to create the masked type hint typed `resource` type from.
	 * @return string The created masked type hint typed `resource` type.
	 */
	public static function createMaskedTypeHintTypedResourceTypeByResource( $resource ): string
	{
		return static::createMaskedTypeHintTypedResourceTypeByResourceType(
			get_resource_type( $resource )
		);
	}

	/**
	 * Creates a masked type hint typed `object` type of a specific object.
	 * @param string $className The class name to create the masked type hint typed `object` type from.
	 * @return string The masked created type hint typed `object` type.
	 */
	public static function createMaskedTypeHintTypedObjectTypeByClassName( string $className ): string
	{
		return sprintf( static::MASKED_TYPE_HINT_TYPED_OBJECT_TEMPLATE, $className );
	}

	/**
	 * Creates a masked type hint typed `object` type of a specific object.
	 * @param object $object The object to create the masked type hint typed `object` type from.
	 * @return string The created masked type hint typed `object` type.
	 */
	public static function createMaskedTypeHintTypedObjectTypeByObject( object $object ): string
	{
		return static::createMaskedTypeHintTypedObjectTypeByClassName( $object::class );
	}

	/**
	 * Creates a masked type hint typed `boolean` type of a specific value.
	 * @param bool $value The value to create the masked type hint typed `boolean` type from.
	 * @return string The created masked type hint typed `boolean` type.
	 */
	public static function createMaskedTypeHintTypedBooleanTypeByValue( bool $value ): string
	{
		return sprintf(
			static::MASKED_TYPE_HINT_TYPED_BOOLEAN_TEMPLATE,
			false === $value
				? 'false'
				: 'true'
		);
	}

	/**
	 * Creates a string of an expected single masked type hint type.
	 * @return string The created string of an expected single masked type hint type.
	 */
	public static function createConcatinatedExpectedSingleMaskedTypeHintType(): string
	{
		return implode( ' | ', static::EXPECTED_SINGLE_MASKED_TYPE_HINT_TYPE );
	}

	/**
	 * Creates a string of expected masked type hint types.
	 * @return string The created string of expected masked type hint types.
	 */
	public static function createConcatinatedExpectedMaskedTypeHintTypes(): string
	{
		return implode( ' | ', static::EXPECTED_MASKED_TYPE_HINT_TYPES );
	}
}
