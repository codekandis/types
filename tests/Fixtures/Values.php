<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\Fixtures;

use stdClass;
use function fclose;
use function fopen;
use function implode;

/**
 * Represents an enumeration of values.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class Values
{
	/**
	 * Represents a null value.
	 * @var null
	 */
	public const null NULL = null;

	/**
	 * Represents a masked null value.
	 * @var string
	 */
	public const string MASKED_NULL = '<null>';

	/**
	 * Represents a masked closed resource value.
	 * @var string
	 */
	public const string MASKED_CLOSED_RESOURCE = '<closed resource>';

	/**
	 * Represents a masked resource value.
	 * @var string
	 */
	public const string MASKED_RESOURCE = '<resource>';

	/**
	 * Represents an array value.
	 * @var array
	 */
	public const array ARRAY = [
		'foo',
		'bar'
	];

	/**
	 * Represents a masked array value.
	 * @var string
	 */
	public const string MASKED_ARRAY = '<array>';

	/**
	 * Represents a masked array value.
	 * @var string
	 */
	public const string MASKED_OBJECT = '<object>';

	/**
	 * Represents a boolean false value.
	 * @var bool
	 */
	public const bool BOOLEAN_FALSE = false;

	/**
	 * Represents a boolean true value.
	 * @var bool
	 */
	public const bool BOOLEAN_TRUE = true;

	/**
	 * Represents a masked boolean false value.
	 * @var string
	 */
	public const string MASKED_BOOLEAN_FALSE = '<false>';

	/**
	 * Represents a masked boolean true value.
	 * @var string
	 */
	public const string MASKED_BOOLEAN_TRUE = '<true>';

	/**
	 * Represents an integer value.
	 * @var int
	 */
	public const int INTEGER = 42;

	/**
	 * Represents a float value.
	 * @var float
	 */
	public const float FLOAT = 42.42;

	/**
	 * Represents a string value.
	 * @var string
	 */
	public const string STRING = 'foobar';

	/**
	 * Represents a set of expected single value.
	 * @var array
	 */
	public const array EXPECTED_SINGLE_VALUE = [
		'<null>'
	];

	/**
	 * Represents a set of expected values.
	 * @var array
	 */
	public const array EXPECTED_VALUES = [
		'null',
		'false',
		'42',
		'42.42',
		'foobar'
	];

	/**
	 * Creates a resource value.
	 * @return resource The created resource value.
	 */
	public static function createResource()
	{
		return fopen( 'php://memory', 'r' );
	}

	/**
	 * Creates a closed resource value.
	 * @return resource The created closed resource value.
	 */
	public static function createClosedResource()
	{
		$resource = static::createResource();
		fclose( $resource );

		return $resource;
	}

	/**
	 * Creates an object value.
	 * @return object The created object value.
	 */
	public static function createObject(): object
	{
		return new stdClass();
	}

	/**
	 * Creates an object implementing `Stringable`.
	 * @return object The created object value.
	 */
	public static function createStringableObject(): object
	{
		return new class()
		{
			public function __toString()
			{
				return Values::STRING;
			}
		};
	}

	/**
	 * Creates a string of an expected single value.
	 * @return string The created string of an expected single value.
	 */
	public static function createConcatinatedExpectedSingleValue(): string
	{
		return implode( ' | ', static::EXPECTED_SINGLE_VALUE );
	}

	/**
	 * Creates a string of expected values.
	 * @return string The created string of expected values.
	 */
	public static function createConcatinatedExpectedValues(): string
	{
		return implode( ' | ', static::EXPECTED_VALUES );
	}
}
