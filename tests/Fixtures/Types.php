<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\Fixtures;

use function get_resource_type;
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
	 * Represents a decorated `gettype()` `unknown` type.
	 * @var string
	 */
	public const string DECORATED_GET_TYPE_UNKNOWN_TYPE = '<unknown type>';

	/**
	 * Represents a decorated `gettype()` `null` type.
	 * @var string
	 */
	public const string DECORATED_GET_TYPE_TYPE_NULL = '<NULL>';

	/**
	 * Represents a decorated `gettype()` `resource`.
	 * @var string
	 */
	public const string DECORATED_GET_TYPE_TYPE_RESOURCE = '<resource>';

	/**
	 * Represents a decorated `gettype()` typed `resource` template.
	 * @var string
	 */
	public const string DECORATED_GET_TYPE_TYPED_RESOUCRE_TEMPLATE = '<resource<%1$s>>';

	/**
	 * Represents a decorated `gettype()` `closed resource`.
	 * @var string
	 */
	public const string DECORATED_GET_TYPE_TYPE_CLOSED_RESOURCE = '<resource (closed)>';

	/**
	 * Represents a decorated `gettype()` `array`.
	 * @var string
	 */
	public const string DECORATED_GET_TYPE_TYPE_ARRAY = '<array>';

	/**
	 * Represents a decorated `gettype()` `object`.
	 * @var string
	 */
	public const string DECORATED_GET_TYPE_TYPE_OBJECT = '<object>';

	/**
	 * Represents a decorated `gettype()` typed `object` template.
	 * @var string
	 */
	public const string DECORATED_GET_TYPE_TYPED_OBJECT_TEMPLATE = '<object<%1$s>>';

	/**
	 * Represents a decorated `gettype()` `boolean`.
	 * @var string
	 */
	public const string DECORATED_GET_TYPE_TYPE_BOOLEAN = '<boolean>';

	/**
	 * Represents a decorated `gettype()` typed `boolean` template.
	 * @var string
	 */
	public const string DECORATED_GET_TYPE_TYPED_BOOLEAN_TEMPLATE = '<boolean<%1$s>>';

	/**
	 * Represents a decorated `gettype()` `integer`.
	 * @var string
	 */
	public const string DECORATED_GET_TYPE_TYPE_INTEGER = '<integer>';

	/**
	 * Represents a decorated `gettype()` `float`.
	 * @var string
	 */
	public const string DECORATED_GET_TYPE_TYPE_FLOAT = '<double>';

	/**
	 * Represents a decorated `gettype()` `string`.
	 * @var string
	 */
	public const string DECORATED_GET_TYPE_TYPE_STRING = '<string>';

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
	 * Represents a decorated type hint `unknown` type.
	 * @var string
	 */
	public const string DECORATED_TYPE_HINT_TYPE_UNKNOWN_TYPE = '<unknown-type>';

	/**
	 * Represents a decorated type hint `null` type.
	 * @var string
	 */
	public const string DECORATED_TYPE_HINT_TYPE_NULL = '<null>';

	/**
	 * Represents a decorated type hint `resource`.
	 * @var string
	 */
	public const string DECORATED_TYPE_HINT_TYPE_RESOURCE = '<resource>';

	/**
	 * Represents a decorated type hint typed `resource` template.
	 * @var string
	 */
	public const string DECORATED_TYPE_HINT_TYPED_RESOUCRE_TEMPLATE = '<resource<%1$s>>';

	/**
	 * Represents a decorated type hint `closed resource`.
	 * @var string
	 */
	public const string DECORATED_TYPE_HINT_TYPE_CLOSED_RESOURCE = '<closed-resource>';

	/**
	 * Represents a decorated type hint `array`.
	 * @var string
	 */
	public const string DECORATED_TYPE_HINT_TYPE_ARRAY = '<array>';

	/**
	 * Represents a decorated type hint `object`.
	 * @var string
	 */
	public const string DECORATED_TYPE_HINT_TYPE_OBJECT = '<object>';

	/**
	 * Represents a decorated type hint typed `object` template.
	 * @var string
	 */
	public const string DECORATED_TYPE_HINT_TYPED_OBJECT_TEMPLATE = '<object<%1$s>>';

	/**
	 * Represents a decorated type hint `boolean`.
	 * @var string
	 */
	public const string DECORATED_TYPE_HINT_TYPE_BOOLEAN = '<bool>';

	/**
	 * Represents a decorated type hint typed `boolean` template.
	 * @var string
	 */
	public const string DECORATED_TYPE_HINT_TYPED_BOOLEAN_TEMPLATE = '<bool<%1$s>>';

	/**
	 * Represents a decorated type hint `integer`.
	 * @var string
	 */
	public const string DECORATED_TYPE_HINT_TYPE_INTEGER = '<int>';

	/**
	 * Represents a decorated type hint `float`.
	 * @var string
	 */
	public const string DECORATED_TYPE_HINT_TYPE_FLOAT = '<float>';

	/**
	 * Represents a decorated type hint `string`.
	 * @var string
	 */
	public const string DECORATED_TYPE_HINT_TYPE_STRING = '<string>';

	/**
	 * Represents a set of an expected single `gettype()` type.
	 * @var array<int, string>
	 */
	public const array EXPECTED_SINGLE_GET_TYPE_TYPE = [
		self::GET_TYPE_UNKNOWN_TYPE
	];

	/**
	 * Represents a set of expected `gettype()` types.
	 * @var array<int, string>
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
	 * Represents a set of an expected single decorated `gettype()` type.
	 * @var array<int, string>
	 */
	public const array EXPECTED_SINGLE_DECORATED_GET_TYPE_TYPE = [
		self::DECORATED_GET_TYPE_UNKNOWN_TYPE
	];

	/**
	 * Represents a set of expected decorated `gettype()` types.
	 * @var array<int, string>
	 */
	public const array EXPECTED_DECORATED_GET_TYPE_TYPES = [
		self::DECORATED_GET_TYPE_UNKNOWN_TYPE,
		self::DECORATED_GET_TYPE_TYPE_NULL,
		self::DECORATED_GET_TYPE_TYPE_RESOURCE,
		self::DECORATED_GET_TYPE_TYPE_CLOSED_RESOURCE,
		self::DECORATED_GET_TYPE_TYPE_ARRAY,
		self::DECORATED_GET_TYPE_TYPE_OBJECT,
		self::DECORATED_GET_TYPE_TYPE_BOOLEAN,
		self::DECORATED_GET_TYPE_TYPE_INTEGER,
		self::DECORATED_GET_TYPE_TYPE_FLOAT,
		self::DECORATED_GET_TYPE_TYPE_STRING
	];

	/**
	 * Represents a set of an expected single type hint type.
	 * @var array<int, string>
	 */
	public const array EXPECTED_SINGLE_TYPE_HINT_TYPE = [
		self::TYPE_HINT_TYPE_UNKNOWN_TYPE
	];

	/**
	 * Represents a set of expected type hint types.
	 * @var array<int, string>
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
	 * Represents a set of an expected single decorated type hint type.
	 * @var array<int, string>
	 */
	public const array EXPECTED_SINGLE_DECORATED_TYPE_HINT_TYPE = [
		self::DECORATED_TYPE_HINT_TYPE_UNKNOWN_TYPE
	];

	/**
	 * Represents a set of expected decorated type hint types.
	 * @var array<int, string>
	 */
	public const array EXPECTED_DECORATED_TYPE_HINT_TYPES = [
		self::DECORATED_TYPE_HINT_TYPE_UNKNOWN_TYPE,
		self::DECORATED_TYPE_HINT_TYPE_NULL,
		self::DECORATED_TYPE_HINT_TYPE_RESOURCE,
		self::DECORATED_TYPE_HINT_TYPE_CLOSED_RESOURCE,
		self::DECORATED_TYPE_HINT_TYPE_ARRAY,
		self::DECORATED_TYPE_HINT_TYPE_OBJECT,
		self::DECORATED_TYPE_HINT_TYPE_BOOLEAN,
		self::DECORATED_TYPE_HINT_TYPE_INTEGER,
		self::DECORATED_TYPE_HINT_TYPE_FLOAT,
		self::DECORATED_TYPE_HINT_TYPE_STRING
	];

	/**
	 * Represents an empty set of expected types.
	 * @var array{}
	 */
	public const array EXPECTED_TYPES_WITH_NO_TYPES = [];

	/**
	 * Represents a set of expected types with a single invalid `null` type.
	 * @var array<int, null>
	 */
	public const array EXPECTED_TYPES_WITH_SINGLE_INVALID_NULL_TYPE = [
		Values::NULL
	];

	/**
	 * Represents a set of expected types with a single invalid `boolean` type.
	 * @var array<int, bool>
	 */
	public const array EXPECTED_TYPES_WITH_SINGLE_INVALID_BOOLEAN_TYPE = [
		Values::BOOLEAN_FALSE
	];

	/**
	 * Represents a set of expected types with a single invalid `integer` type.
	 * @var array<int, int>
	 */
	public const array EXPECTED_TYPES_WITH_SINGLE_INVALID_INTEGER_TYPE = [
		Values::INTEGER
	];

	/**
	 * Represents a set of expected types with a valid string type at the beginning.
	 * @var array<int, null|bool|string>
	 */
	public const array EXPECTED_TYPES_WITH_VALID_STRING_TYPE_AT_BEGINNING = [
		self::TYPE_HINT_TYPE_STRING,
		Values::NULL,
		Values::BOOLEAN_FALSE
	];

	/**
	 * Represents a set of expected types with multiple valid type strings before an invalid `null` type.
	 * @var array<int, null|string>
	 */
	public const array EXPECTED_TYPES_WITH_MULTIPLE_VALID_TYPE_STRINGS_BEFORE_INVALID_NULL_TYPE = [
		self::TYPE_HINT_TYPE_STRING,
		self::TYPE_HINT_TYPE_INTEGER,
		Values::NULL
	];

	/**
	 * Represents a set of expected types with a valid string type in between.
	 * @var array<int, null|bool|string>
	 */
	public const array EXPECTED_TYPES_WITH_VALID_STRING_TYPE_IN_BETWEEN = [
		Values::NULL,
		self::TYPE_HINT_TYPE_STRING,
		Values::BOOLEAN_FALSE
	];

	/**
	 * Represents a set of expected types with a valid string type at the end.
	 * @var array<int, null|bool|string>
	 */
	public const array EXPECTED_TYPES_WITH_VALID_STRING_TYPE_AT_END = [
		Values::NULL,
		Values::BOOLEAN_FALSE,
		self::TYPE_HINT_TYPE_STRING
	];

	/**
	 * Represents a set of expected types with multiple invalid scalar types.
	 * @var array<int, null|bool|int>
	 */
	public const array EXPECTED_TYPES_WITH_MULTIPLE_INVALID_SCALAR_TYPES = [
		Values::NULL,
		Values::BOOLEAN_FALSE,
		Values::INTEGER
	];

	/**
	 * Represents a set of expected types with multiple invalid numeric types.
	 * @var array<int, int|float>
	 */
	public const array EXPECTED_TYPES_WITH_MULTIPLE_INVALID_NUMERIC_TYPES = [
		Values::INTEGER,
		Values::FLOAT
	];

	/**
	 * Represents a set of expected types with multiple invalid array and boolean types.
	 * @var array<int, array<int, string>|bool>
	 */
	public const array EXPECTED_TYPES_WITH_MULTIPLE_INVALID_ARRAY_AND_BOOLEAN_TYPES = [
		Values::ARRAY,
		Values::BOOLEAN_TRUE
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
	 * Creates a decorated `gettype()` typed `resource` type of a specific resource type.
	 * @param string $resourceType The resource type to create the decorated `gettype()` typed `resource` type from.
	 * @return string The created decorated `gettype()` typed `resource` type.
	 */
	public static function createDecoratedGetTypeTypedResourceTypeByResourceType( string $resourceType ): string
	{
		return sprintf( static::DECORATED_GET_TYPE_TYPED_RESOUCRE_TEMPLATE, $resourceType );
	}

	/**
	 * Creates a decorated `gettype()` typed `object` type of a specific class name.
	 * @param string $className The class name to create the decorated `gettype()` typed `object` type from.
	 * @return string The created decorated `gettype()` typed `object` type.
	 */
	public static function createDecoratedGetTypeTypedObjectTypeByClassName( string $className ): string
	{
		return sprintf( static::DECORATED_GET_TYPE_TYPED_OBJECT_TEMPLATE, $className );
	}

	/**
	 * Creates a decorated `gettype()` typed `boolean` type of a specific value.
	 * @param bool $value The value to create the decorated `gettype()` typed `boolean` type from.
	 * @return string The created decorated `gettype()` typed `boolean` type.
	 */
	public static function createDecoratedGetTypeTypedBooleanTypeByValue( bool $value ): string
	{
		return sprintf(
			static::DECORATED_GET_TYPE_TYPED_BOOLEAN_TEMPLATE,
			false === $value
				? 'false'
				: 'true'
		);
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
	 * Creates a decorated type hint typed `resource` type of a specific resource type.
	 * @param string $resourceType The resource type to create the decorated type hint typed `resource` type from.
	 * @return string The created decorated type hint typed `resource` type.
	 */
	public static function createDecoratedTypeHintTypedResourceTypeByResourceType( string $resourceType ): string
	{
		return sprintf( static::DECORATED_TYPE_HINT_TYPED_RESOUCRE_TEMPLATE, $resourceType );
	}

	/**
	 * Creates a decorated type hint typed `object` type of a specific object.
	 * @param string $className The class name to create the decorated type hint typed `object` type from.
	 * @return string The decorated created type hint typed `object` type.
	 */
	public static function createDecoratedTypeHintTypedObjectTypeByClassName( string $className ): string
	{
		return sprintf( static::DECORATED_TYPE_HINT_TYPED_OBJECT_TEMPLATE, $className );
	}

	/**
	 * Creates a decorated type hint typed `boolean` type of a specific value.
	 * @param bool $value The value to create the decorated type hint typed `boolean` type from.
	 * @return string The created decorated type hint typed `boolean` type.
	 */
	public static function createDecoratedTypeHintTypedBooleanTypeByValue( bool $value ): string
	{
		return sprintf(
			static::DECORATED_TYPE_HINT_TYPED_BOOLEAN_TEMPLATE,
			false === $value
				? 'false'
				: 'true'
		);
	}
}
