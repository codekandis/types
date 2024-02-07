<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\Fixtures;

use CodeKandis\Types\Tests\Fixtures\Objects\InheritedStandardObjectFixtureFixture;
use CodeKandis\Types\Tests\Fixtures\Objects\StandardObjectFixture;
use function fclose;
use function fopen;
use function implode;

/**
 * Represents an enumeration of indices.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class Indices
{
	/**
	 * Represents a `null` index.
	 * @var null
	 */
	public const null NULL = null;

	/**
	 * Represents a masked `null` index.
	 * @var string
	 */
	public const string MASKED_NULL = '<null>';

	/**
	 * Represents a masked `closed resource` index.
	 * @var string
	 */
	public const string MASKED_CLOSED_RESOURCE = '<closed-resource>';

	/**
	 * Represents an `array` index.
	 * @var array
	 */
	public const array ARRAY                   = [
		'foo',
		'bar'
	];

	/**
	 * Represents a masked `array` index.
	 * @var string
	 */
	public const string MASKED_ARRAY = '<array>';

	/**
	 * Represents a `boolean false` index.
	 * @var bool
	 */
	public const bool BOOLEAN_FALSE = false;

	/**
	 * Represents a `boolean true` index.
	 * @var bool
	 */
	public const bool BOOLEAN_TRUE = true;

	/**
	 * Represents an `integer` index.
	 * @var int
	 */
	public const int INTEGER = 42;

	/**
	 * Represents a `float` index.
	 * @var float
	 */
	public const float FLOAT = 42.42;

	/**
	 * Represents a `string` index.
	 * @var string
	 */
	public const string STRING = 'foobar';

	/**
	 * Represents a set of only one expected single index.
	 * @var array
	 */
	public const array EXPECTED_SINGLE_INDEX = [
		self::MASKED_NULL
	];

	/**
	 * Represents a set of expected indices.
	 * @var array
	 */
	public const array EXPECTED_INDICES = [
		'null',
		'false',
		'42',
		'42.42',
		'foobar'
	];

	/**
	 * Represents an expected minimum index.
	 * @var string
	 */
	public const string EXPECTED_MIN_INDEX = '24';

	/**
	 * Represents an expected maximum index.
	 * @var string
	 */
	public const string EXPECTED_MAX_INDEX = '42';

	/**
	 * Creates a `resource` index.
	 * @return resource The created `resource` index.
	 */
	public static function createResource()
	{
		return fopen( 'php://memory', 'r' );
	}

	/**
	 * Creates a `closed resource` index.
	 * @return resource The created `closed resource` index.
	 */
	public static function createClosedResource()
	{
		$resource = static::createResource();
		fclose( $resource );

		return $resource;
	}

	/**
	 * Creates a `StandardObjectFixture` index.
	 * @return StandardObjectFixture The created `StandardObjectFixture` index.
	 */
	public static function createStandardObject(): StandardObjectFixture
	{
		return new StandardObjectFixture();
	}

	/**
	 * Creates an `InheritedStandardObjectFixtureFixture` index.
	 * @return InheritedStandardObjectFixtureFixture The created `InheritedStandardObjectFixtureFixture` index.
	 */
	public static function createInheritedStandardObject(): InheritedStandardObjectFixtureFixture
	{
		return new InheritedStandardObjectFixtureFixture();
	}

	/**
	 * Creates an `object` index implementing `Stringable`.
	 * @return object The created `object` index.
	 */
	public static function createStringableObject(): object
	{
		return new class()
		{
			public function __toString()
			{
				return INDICES::STRING;
			}
		};
	}

	/**
	 * Creates a `string` index of an expected single index.
	 * @return string The created `string` index of an expected single index.
	 */
	public static function createConcatinatedExpectedSingleIndex(): string
	{
		return implode( ' | ', static::EXPECTED_SINGLE_INDEX );
	}

	/**
	 * Creates a string of expected indices.
	 * @return string The created string of expected indices.
	 */
	public static function createConcatinatedExpectedIndices(): string
	{
		return implode( ' | ', static::EXPECTED_INDICES );
	}
}
