<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\Fixtures;

use CodeKandis\Types\Tests\Fixtures\Objects\InheritedStandardObjectFixtureFixture;
use CodeKandis\Types\Tests\Fixtures\Objects\StandardObjectFixture;
use function fclose;
use function fopen;

/**
 * Represents an enumeration of indices and offsets.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class IndicesAndOffsets
{
	/**
	 * Represents a `null` index or offset.
	 * @var null
	 */
	public const null NULL   = null;

	/**
	 * Represents an `array` index or offset.
	 * @var array<int, string>
	 */
	public const array ARRAY = [
		'foo',
		'bar'
	];

	/**
	 * Represents a `boolean false` index or offset.
	 * @var bool
	 */
	public const bool BOOLEAN_FALSE = false;

	/**
	 * Represents a `boolean true` index or offset.
	 * @var bool
	 */
	public const bool BOOLEAN_TRUE = true;

	/**
	 * Represents an `integer` index or offset.
	 * @var int
	 */
	public const int INTEGER_0 = 24;

	/**
	 * Represents an `integer` index or offset.
	 * @var int
	 */
	public const int INTEGER_1 = 42;

	/**
	 * Represents a `float` index or offset.
	 * @var float
	 */
	public const float FLOAT_0 = 24.24;

	/**
	 * Represents a `float` index or offset.
	 * @var float
	 */
	public const float FLOAT_1 = 42.42;

	/**
	 * Represents a `string` index or offset.
	 * @var string
	 */
	public const string STRING_0 = 'a';

	/**
	 * Represents a `string` index or offset.
	 * @var string
	 */
	public const string STRING_1 = 'zz';

	/**
	 * Creates a `resource` index or offset.
	 * @return resource The created `resource` index or offset.
	 */
	public static function createResource()
	{
		return fopen( 'php://memory', 'r' );
	}

	/**
	 * Creates a `closed resource` index or offset.
	 * @return resource The created `closed resource` index or offset.
	 */
	public static function createClosedResource()
	{
		$resource = static::createResource();
		fclose( $resource );

		return $resource;
	}

	/**
	 * Creates a `StandardObjectFixture` index or offset.
	 * @return StandardObjectFixture The created `StandardObjectFixture` index or offset.
	 */
	public static function createStandardObject(): StandardObjectFixture
	{
		return new StandardObjectFixture();
	}

	/**
	 * Creates an `InheritedStandardObjectFixtureFixture` index or offset.
	 * @return InheritedStandardObjectFixtureFixture The created `InheritedStandardObjectFixtureFixture` index or offset.
	 */
	public static function createInheritedStandardObject(): InheritedStandardObjectFixtureFixture
	{
		return new InheritedStandardObjectFixtureFixture();
	}

	/**
	 * Creates an `object` index or offset implementing `Stringable`.
	 * @return object The created `object` index or offset.
	 */
	public static function createStringableObject(): object
	{
		return new class()
		{
			public function __toString()
			{
				return IndicesAndOffsets::STRING_0;
			}
		};
	}

	/**
	 * Creates a set containing a single index or offset.
	 * @return array<int, mixed> The created set containing a single index or offset.
	 */
	public static function createSingle_0(): array
	{
		return [
			self::NULL
		];
	}

	/**
	 * Creates a set containing a single index or offset.
	 * @return array<int, mixed> The created set containing a single index or offset.
	 */
	public static function createSingle_1(): array
	{
		return [
			self::createClosedResource()
		];
	}

	/**
	 * Creates a set containing multiple indices and offsets.
	 * @return array<int, mixed> The created set containing multiple indices and offsets.
	 */
	public static function createMultiple_0(): array
	{
		return [
			self::NULL,
			self::BOOLEAN_FALSE,
			self::INTEGER_1,
			self::FLOAT_0,
			self::STRING_1,
			static::createClosedResource(),
			static::createInheritedStandardObject(),
			static::createStringableObject()
		];
	}

	/**
	 * Creates a set containing multiple indices and offsets.
	 * @return array<int, mixed> The created set containing multiple indices and offsets.
	 */
	public static function createMultiple_1(): array
	{
		return [
			self::ARRAY,
			self::BOOLEAN_TRUE,
			self::INTEGER_0,
			self::FLOAT_1,
			self::STRING_0,
			static::createResource(),
			static::createStandardObject(),
			static::createStringableObject()
		];
	}

	/**
	 * Creates a set containing all indices and offsets.
	 * @return array<int, mixed> The created set containing all indices and offsets.
	 */
	public static function createAll(): array
	{
		return [
			self::NULL,
			self::ARRAY,
			self::BOOLEAN_FALSE,
			self::BOOLEAN_TRUE,
			self::INTEGER_0,
			self::INTEGER_1,
			self::FLOAT_0,
			self::FLOAT_1,
			self::STRING_0,
			self::STRING_1,
			static::createResource(),
			static::createClosedResource(),
			static::createStandardObject(),
			static::createInheritedStandardObject(),
			static::createStringableObject()
		];
	}
}
