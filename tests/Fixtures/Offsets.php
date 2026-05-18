<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\Fixtures;

use function implode;

/**
 * Represents an enumeration of offsets.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class Offsets
{
	/**
	 * Represents a valid offset.
	 * @var int
	 */
	public const int VALID_OFFSET_1 = 24;

	/**
	 * Represents a valid offset.
	 * @var int
	 */
	public const int VALID_OFFSET_2 = 42;

	/**
	 * Represents a set of only one valid expected offset.
	 * @var int[]
	 */
	public const array VALID_EXPECTED_SINGLE_OFFSET_1 = [
		self::VALID_OFFSET_1
	];

	/**
	 * Represents a set of only one valid expected offset.
	 * @var int[]
	 */
	public const array VALID_EXPECTED_SINGLE_OFFSET_2 = [
		self::VALID_OFFSET_2
	];

	/**
	 * Represents a set of valid expected offsets.
	 * @var int[]
	 */
	public const array VALID_EXPECTED_OFFSETS_1 = [
		self::VALID_OFFSET_1,
		self::VALID_OFFSET_2
	];

	/**
	 * Represents a set of valid expected offsets.
	 * @var int[]
	 */
	public const array VALID_EXPECTED_OFFSETS_2 = [
		self::VALID_OFFSET_2,
		self::VALID_OFFSET_1
	];

	/**
	 * Represents an invalid offset.
	 * @var string
	 */
	public const string INVALID_OFFSET_1 = '24';

	/**
	 * Represents an invalid offset.
	 * @var bool
	 */
	public const bool INVALID_OFFSET_2 = false;

	/**
	 * Represents a set of only one invalid expected offset.
	 * @var string[]
	 */
	public const array INVALID_EXPECTED_SINGLE_OFFSET_1 = [
		self::INVALID_OFFSET_1
	];

	/**
	 * Represents a set of only one invalid expected offset.
	 * @var bool[]
	 */
	public const array INVALID_EXPECTED_SINGLE_OFFSET_2 = [
		self::INVALID_OFFSET_2
	];

	/**
	 * Represents a set of invalid expected offsets.
	 * @var bool[]|string[]
	 */
	public const array INVALID_EXPECTED_OFFSETS_1 = [
		self::INVALID_OFFSET_1,
		self::INVALID_OFFSET_2
	];

	/**
	 * Represents a set of invalid expected offsets.
	 * @var bool[]|string[]
	 */
	public const array INVALID_EXPECTED_OFFSETS_2 = [
		self::INVALID_OFFSET_2,
		self::INVALID_OFFSET_1
	];

	/**
	 * Represents an expected minimum offset.
	 * @var string
	 */
	public const string EXPECTED_MIN_OFFSET = '24';

	/**
	 * Represents an expected maximum offset.
	 * @var string
	 */
	public const string EXPECTED_MAX_OFFSET = '42';

	/**
	 * Represents an invalid type.
	 * @var string
	 */
	public const string INVALID_TYPE_1 = Types::GET_TYPE_TYPE_STRING;

	/**
	 * Represents an invalid type.
	 * @var string
	 */
	public const string INVALID_TYPE_2 = Types::GET_TYPE_TYPE_BOOLEAN;

	/**
	 * Represents a set of only one expected type.
	 * @var string[]
	 */
	public const array EXPECTED_SINGLE_TYPE = [
		Types::GET_TYPE_TYPE_INTEGER
	];

	/**
	 * Creates a `string` offset of a valid expected offset.
	 * @return string The created `string` offset of a valid expected offset.
	 */
	public static function createConcatinatedValidExpectedSingleOffset_1(): string
	{
		return implode( ' | ', static::VALID_EXPECTED_SINGLE_OFFSET_1 );
	}

	/**
	 * Creates a `string` offset of a valid expected offset.
	 * @return string The created `string` offset of a valid expected offset.
	 */
	public static function createConcatinatedValidExpectedSingleOffset_2(): string
	{
		return implode( ' | ', static::VALID_EXPECTED_SINGLE_OFFSET_2 );
	}

	/**
	 * Creates a string of valid expected offsets.
	 * @return string The created string of valid expected offsets.
	 */
	public static function createConcatinatedValidExpectedOffsets_1(): string
	{
		return implode( ' | ', static::VALID_EXPECTED_OFFSETS_1 );
	}

	/**
	 * Creates a string of valid expected offsets.
	 * @return string The created string of valid expected offsets.
	 */
	public static function createConcatinatedValidExpectedOffsets_2(): string
	{
		return implode( ' | ', static::VALID_EXPECTED_OFFSETS_2 );
	}

	/**
	 * Creates a `string` offset of an invalid expected single offset.
	 * @return string The created `string` offset of an invalid expected single offset.
	 */
	public static function createConcatinatedInvalidExpectedSingleOffset_1(): string
	{
		return implode( ' | ', static::INVALID_EXPECTED_SINGLE_OFFSET_1 );
	}

	/**
	 * Creates a `string` offset of an invalid expected single offset.
	 * @return string The created `string` offset of an invalid expected single offset.
	 */
	public static function createConcatinatedInvalidExpectedSingleOffset_2(): string
	{
		return implode( ' | ', static::INVALID_EXPECTED_SINGLE_OFFSET_2 );
	}

	/**
	 * Creates a string of invalid expected offsets.
	 * @return string The created string of invalid expected offsets.
	 */
	public static function createConcatinatedInvalidExpectedOffsets_1(): string
	{
		return implode( ' | ', static::INVALID_EXPECTED_OFFSETS_1 );
	}

	/**
	 * Creates a string of invalid expected offsets.
	 * @return string The created string of invalid expected offsets.
	 */
	public static function createConcatinatedInvalidExpectedOffsets_2(): string
	{
		return implode( ' | ', static::INVALID_EXPECTED_OFFSETS_2 );
	}

	/**
	 * Creates a `string` type of an invalid expected single type.
	 * @return string The created `string` type of an invalid expected single type.
	 */
	public static function createConcatinatedExpectedSingleType(): string
	{
		return implode( ' | ', static::EXPECTED_SINGLE_TYPE );
	}
}
