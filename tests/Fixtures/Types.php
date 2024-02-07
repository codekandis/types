<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\Fixtures;

use CodeKandis\Types\GetTypeTypes;
use CodeKandis\Types\MaskedGetTypeTypes;
use CodeKandis\Types\MaskedTypeHintTypes;
use CodeKandis\Types\TypeHintTypes;
use function get_resource_type;
use function implode;

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
	public const string GET_TYPE_UNKNOWN_TYPE = GetTypeTypes::UNKNOWN_TYPE;

	/**
	 * Represents a type hint `unknown` type.
	 * @var string
	 */
	public const string TYPE_HINT_UNKNOWN_TYPE = TypeHintTypes::UNKNOWN_TYPE;

	/**
	 * Represents a `gettype()` `null` type.
	 * @var string
	 */
	public const string GET_TYPE_NULL = GetTypeTypes::NULL;

	/**
	 * Represents a type hint `null` type.
	 * @var string
	 */
	public const string TYPE_HINT_NULL = TypeHintTypes::NULL;

	/**
	 * Represents a `gettype()` `resource`.
	 * @var string
	 */
	public const string GET_TYPE_RESOURCE = GetTypeTypes::RESOURCE;

	/**
	 * Represents a type hint `resource`.
	 * @var string
	 */
	public const string TYPE_HINT_RESOURCE = TypeHintTypes::RESOURCE;

	/**
	 * Represents a `gettype()` `closed resource`.
	 * @var string
	 */
	public const string GET_TYPE_CLOSED_RESOURCE = GetTypeTypes::CLOSED_RESOURCE;

	/**
	 * Represents a type hint `closed resource`.
	 * @var string
	 */
	public const string TYPE_HINT_CLOSED_RESOURCE = TypeHintTypes::CLOSED_RESOURCE;

	/**
	 * Represents a `gettype()` `array`.
	 * @var string
	 */
	public const string GET_TYPE_ARRAY = GetTypeTypes::ARRAY;

	/**
	 * Represents a type hint `array`.
	 * @var string
	 */
	public const string TYPE_HINT_ARRAY = TypeHintTypes::ARRAY;

	/**
	 * Represents a `gettype()` `object`.
	 * @var string
	 */
	public const string GET_TYPE_OBJECT = GetTypeTypes::OBJECT;

	/**
	 * Represents a type hint `object`.
	 * @var string
	 */
	public const string TYPE_HINT_OBJECT = TypeHintTypes::OBJECT;

	/**
	 * Represents a `gettype()` `boolean`.
	 * @var string
	 */
	public const string GET_TYPE_BOOLEAN = GetTypeTypes::BOOLEAN;

	/**
	 * Represents a type hint `boolean`.
	 * @var string
	 */
	public const string TYPE_HINT_BOOLEAN = TypeHintTypes::BOOLEAN;

	/**
	 * Represents a `gettype()` `integer`.
	 * @var string
	 */
	public const string GET_TYPE_INTEGER = GetTypeTypes::INTEGER;

	/**
	 * Represents a type hint `integer`.
	 * @var string
	 */
	public const string TYPE_HINT_INTEGER = TypeHintTypes::INTEGER;

	/**
	 * Represents a `gettype()` `float`.
	 * @var string
	 */
	public const string GET_TYPE_FLOAT = GetTypeTypes::FLOAT;

	/**
	 * Represents a type hint `float`.
	 * @var string
	 */
	public const string TYPE_HINT_FLOAT = TypeHintTypes::FLOAT;

	/**
	 * Represents a `gettype()` `string`.
	 * @var string
	 */
	public const string GET_TYPE_STRING = GetTypeTypes::STRING;

	/**
	 * Represents a type hint `string`.
	 * @var string
	 */
	public const string TYPE_HINT_STRING = TypeHintTypes::STRING;

	/**
	 * Represents a set of an expected single `gettype()` type.
	 * @var string[]
	 */
	public const array EXPECTED_SINGLE_GET_TYPE_TYPE = [
		GetTypeTypes::UNKNOWN_TYPE
	];

	/**
	 * Represents a set of expected `gettype()` types.
	 * @var string[]
	 */
	public const array EXPECTED_GET_TYPE_TYPES = [
		self::GET_TYPE_UNKNOWN_TYPE,
		self::GET_TYPE_NULL,
		self::GET_TYPE_RESOURCE,
		self::GET_TYPE_CLOSED_RESOURCE,
		self::GET_TYPE_ARRAY,
		self::GET_TYPE_OBJECT,
		self::GET_TYPE_BOOLEAN,
		self::GET_TYPE_INTEGER,
		self::GET_TYPE_FLOAT,
		self::GET_TYPE_STRING,
	];

	/**
	 * Represents a set of an expected single type hint type.
	 * @var string[]
	 */
	public const array EXPECTED_SINGLE_TYPE_HINT_TYPE = [
		TypeHintTypes::UNKNOWN_TYPE
	];

	/**
	 * Represents a set of expected type hint types.
	 * @var string[]
	 */
	public const array EXPECTED_TYPE_HINT_TYPES = [
		self::TYPE_HINT_UNKNOWN_TYPE,
		self::TYPE_HINT_NULL,
		self::TYPE_HINT_RESOURCE,
		self::TYPE_HINT_CLOSED_RESOURCE,
		self::TYPE_HINT_ARRAY,
		self::TYPE_HINT_OBJECT,
		self::TYPE_HINT_BOOLEAN,
		self::TYPE_HINT_INTEGER,
		self::TYPE_HINT_FLOAT,
		self::TYPE_HINT_STRING,
	];

	/**
	 * Creates a `gettype()` typed `resource` type of a specific resource type.
	 * @param string $resourceType The resource type to create the `gettype()` typed `resource` type from.
	 * @return string The created `gettype()` typed `resource` type.
	 */
	public static function createGetTypeTypedResourceTypeByResourceType( string $resourceType ): string
	{
		return GetTypeTypes::createTypedResource( $resourceType );
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
		return GetTypeTypes::createTypedObject( $className );
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
		return GetTypeTypes::createTypedBoolean( $value );
	}

	/**
	 * Creates a masked `gettype()` typed `resource` type of a specific resource type.
	 * @param string $resourceType The resource type to create the masked `gettype()` typed `resource` type from.
	 * @return string The created masked `gettype()` typed `resource` type.
	 */
	public static function createMaskedGetTypeTypedResourceTypeByResourceType( string $resourceType ): string
	{
		return MaskedGetTypeTypes::createTypedResource( $resourceType );
	}

	/**
	 * Creates a masked `gettype()` typed `object` type of a specific class name.
	 * @param string $className The class name to create the masked `gettype()` typed `object` type from.
	 * @return string The created masked `gettype()` typed `object` type.
	 */
	public static function createMaskedGetTypeTypedObjectTypeByClassName( string $className ): string
	{
		return MaskedGetTypeTypes::createTypedObject( $className );
	}

	/**
	 * Creates a masked `gettype()` typed `boolean` type of a specific value.
	 * @param bool $value The value to create the masked `gettype()` typed `boolean` type from.
	 * @return string The created masked `gettype()` typed `boolean` type.
	 */
	public static function createMaskedGetTypeTypedBooleanTypeByValue( bool $value ): string
	{
		return MaskedGetTypeTypes::createTypedBoolean( $value );
	}

	/**
	 * Creates a type hint typed `resource` type of a specific resource type.
	 * @param string $resourceType The resource type to create the type hint typed `resource` type from.
	 * @return string The created type hint typed `resource` type.
	 */
	public static function createTypeHintTypedResourceTypeByResourceType( string $resourceType ): string
	{
		return TypeHintTypes::createTypedResource( $resourceType );
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
		return TypeHintTypes::createTypedObject( $className );
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
		return TypeHintTypes::createTypedBoolean( $value );
	}

	/**
	 * Creates a masked type hint typed `resource` type of a specific resource type.
	 * @param string $resourceType The resource type to create the masked type hint typed `resource` type from.
	 * @return string The created masked type hint typed `resource` type.
	 */
	public static function createMaskedTypeHintTypedResourceTypeByResourceType( string $resourceType ): string
	{
		return MaskedTypeHintTypes::createTypedResource( $resourceType );
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
		return MaskedTypeHintTypes::createTypedObject( $className );
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
		return MaskedTypeHintTypes::createTypedBoolean( $value );
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
}
