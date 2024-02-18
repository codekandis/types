<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\Fixtures;

use CodeKandis\Types\NativeTypes;
use CodeKandis\Types\StraightTypes;
use stdClass;
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
	 * Represents a native unknown type.
	 * @var string
	 */
	public const string NATIVE_UNKNOWN_TYPE = NativeTypes::UNKNOWN_TYPE;

	/**
	 * Represents a straight unknown type.
	 * @var string
	 */
	public const string STRAIGHT_UNKNOWN_TYPE = StraightTypes::UNKNOWN_TYPE;

	/**
	 * Represents a native null type.
	 * @var string
	 */
	public const string NATIVE_NULL = NativeTypes::NULL;

	/**
	 * Represents a straight null type.
	 * @var string
	 */
	public const string STRAIGHT_NULL = StraightTypes::NULL;

	/**
	 * Represents a native resource.
	 * @var string
	 */
	public const string NATIVE_RESOURCE = NativeTypes::RESOURCE;

	/**
	 * Represents a straight resource.
	 * @var string
	 */
	public const string STRAIGHT_RESOURCE = StraightTypes::RESOURCE;

	/**
	 * Represents a native closed resource.
	 * @var string
	 */
	public const string NATIVE_CLOSED_RESOURCE = NativeTypes::CLOSED_RESOURCE;

	/**
	 * Represents a straight closed resource.
	 * @var string
	 */
	public const string STRAIGHT_CLOSED_RESOURCE = StraightTypes::CLOSED_RESOURCE;

	/**
	 * Represents a native array.
	 * @var string
	 */
	public const string NATIVE_ARRAY = NativeTypes::ARRAY;

	/**
	 * Represents a straight array.
	 * @var string
	 */
	public const string STRAIGHT_ARRAY = StraightTypes::ARRAY;

	/**
	 * Represents a native object.
	 * @var string
	 */
	public const string NATIVE_OBJECT = NativeTypes::OBJECT;

	/**
	 * Represents a straight object.
	 * @var string
	 */
	public const string STRAIGHT_OBJECT = stdClass::class;

	/**
	 * Represents a native boolean.
	 * @var string
	 */
	public const string NATIVE_BOOLEAN = NativeTypes::BOOLEAN;

	/**
	 * Represents a straight boolean.
	 * @var string
	 */
	public const string STRAIGHT_BOOLEAN = StraightTypes::BOOLEAN;

	/**
	 * Represents a native integer.
	 * @var string
	 */
	public const string NATIVE_INTEGER = NativeTypes::INTEGER;

	/**
	 * Represents a straight integer.
	 * @var string
	 */
	public const string STRAIGHT_INTEGER = StraightTypes::INTEGER;

	/**
	 * Represents a native float.
	 * @var string
	 */
	public const string NATIVE_FLOAT = NativeTypes::FLOAT;

	/**
	 * Represents a straight float.
	 * @var string
	 */
	public const string STRAIGHT_FLOAT = StraightTypes::FLOAT;

	/**
	 * Represents a native string.
	 * @var string
	 */
	public const string NATIVE_STRING = NativeTypes::STRING;

	/**
	 * Represents a straight string.
	 * @var string
	 */
	public const string STRAIGHT_STRING = StraightTypes::STRING;

	/**
	 * Represents a set of an expected single native type.
	 * @var string[]
	 */
	public const array EXPECTED_SINGLE_NATIVE_TYPE = [
		NativeTypes::UNKNOWN_TYPE
	];

	/**
	 * Represents a set of expected native types.
	 * @var string[]
	 */
	public const array EXPECTED_NATIVE_TYPES = [
		self::NATIVE_UNKNOWN_TYPE,
		self::NATIVE_NULL,
		self::NATIVE_RESOURCE,
		self::NATIVE_CLOSED_RESOURCE,
		self::NATIVE_ARRAY,
		self::NATIVE_OBJECT,
		self::NATIVE_BOOLEAN,
		self::NATIVE_INTEGER,
		self::NATIVE_FLOAT,
		self::NATIVE_STRING,
	];

	/**
	 * Represents a set of an expected single straight type.
	 * @var string[]
	 */
	public const array EXPECTED_SINGLE_STRAIGHT_TYPE = [
		StraightTypes::UNKNOWN_TYPE
	];

	/**
	 * Represents a set of expected straight types.
	 * @var string[]
	 */
	public const array EXPECTED_STRAIGHT_TYPES = [
		self::STRAIGHT_UNKNOWN_TYPE,
		self::STRAIGHT_NULL,
		self::STRAIGHT_RESOURCE,
		self::STRAIGHT_CLOSED_RESOURCE,
		self::STRAIGHT_ARRAY,
		self::STRAIGHT_OBJECT,
		self::STRAIGHT_BOOLEAN,
		self::STRAIGHT_INTEGER,
		self::STRAIGHT_FLOAT,
		self::STRAIGHT_STRING,
	];

	/**
	 * Creates a string of an expected single native type.
	 * @return string The created string of an expected single native type.
	 */
	public static function createConcatinatedExpectedSingleNativeType(): string
	{
		return implode( ' | ', static::EXPECTED_SINGLE_NATIVE_TYPE );
	}

	/**
	 * Creates a string of expected native types.
	 * @return string The created string of expected native types.
	 */
	public static function createConcatinatedExpectedNativeTypes(): string
	{
		return implode( ' | ', static::EXPECTED_NATIVE_TYPES );
	}

	/**
	 * Creates a string of an expected single straight type.
	 * @return string The created string of an expected single straight type.
	 */
	public static function createConcatinatedExpectedSingleStraightType(): string
	{
		return implode( ' | ', static::EXPECTED_SINGLE_STRAIGHT_TYPE );
	}

	/**
	 * Creates a string of expected straight types.
	 * @return string The created string of expected straight types.
	 */
	public static function createConcatinatedExpectedStraightTypes(): string
	{
		return implode( ' | ', static::EXPECTED_STRAIGHT_TYPES );
	}
}
