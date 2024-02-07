<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\Fixtures;

use CodeKandis\Types\Tests\Fixtures\Objects\InheritedStandardObjectFixtureFixture;
use CodeKandis\Types\Tests\Fixtures\Objects\StandardObjectFixture;

/**
 * Represents an enumeration of stringified indices and offsets.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class StringifiedIndicesAndOffsets
{
	/**
	 * Represents a stringified `null` index or offset.
	 * @var string
	 */
	public const string NULL = '<null>';

	/**
	 * Represents a stringified `resource` index or offset.
	 * @var string
	 */
	public const string RESOURCE = '<resource<stream>>';

	/**
	 * Represents a stringified `closed resource` index or offset.
	 * @var string
	 */
	public const string CLOSED_RESOURCE = '<closed-resource>';

	/**
	 * Represents a stringified `array` index or offset.
	 * @var string
	 */
	public const string ARRAY           = '<array>';

	/**
	 * Represents a stringified `boolean false` index or offset.
	 * @var string
	 */
	public const string BOOLEAN_FALSE = '<bool<false>>';

	/**
	 * Represents a stringified `boolean true` index or offset.
	 * @var string
	 */
	public const string BOOLEAN_TRUE = '<bool<true>>';

	/**
	 * Represents a stringified `integer` index or offset.
	 * @var string
	 */
	public const string INTEGER_0 = '24';

	/**
	 * Represents a stringified `integer` index or offset.
	 * @var string
	 */
	public const string INTEGER_1 = '42';

	/**
	 * Represents a stringified `float` index or offset.
	 * @var string
	 */
	public const string FLOAT_0 = '24.24';

	/**
	 * Represents a stringified `float` index or offset.
	 * @var string
	 */
	public const string FLOAT_1 = '42.42';

	/**
	 * Represents a stringified `string` index or offset.
	 * @var string
	 */
	public const string STRING_0 = 'a';

	/**
	 * Represents a stringified `string` index or offset.
	 * @var string
	 */
	public const string STRING_1 = 'zz';

	/**
	 * Represents a stringified `StandardObjectFixture` index or offset.
	 * @var string
	 */
	public const string STANDARD_OBJECT_FIXTURE = '<object<' . StandardObjectFixture::class . '>>';

	/**
	 * Represents a stringified `InheritedStandardObjectFixtureFixture` index or offset.
	 * @var string
	 */
	public const string INHERITED_STANDARD_OBJECT_FIXTURE = '<object<' . InheritedStandardObjectFixtureFixture::class . '>>';

	/**
	 * Creates a set containing a single stringified index or offset.
	 * @return array<int, string> The created set containing a single stringified index or offset.
	 */
	public static function createSingle_0(): array
	{
		return [
			self::NULL
		];
	}

	/**
	 * Creates a set containing a single stringified index or offset.
	 * @return array<int, string> The created set containing a single stringified index or offset.
	 */
	public static function createSingle_1(): array
	{
		return [
			self::CLOSED_RESOURCE
		];
	}

	/**
	 * Creates a set containing multiple stringified indices and offsets.
	 * @return array<int, string> The created set containing multiple stringified indices and offsets.
	 */
	public static function createMultiple_0(): array
	{
		return [
			self::NULL,
			self::BOOLEAN_FALSE,
			self::INTEGER_1,
			self::FLOAT_0,
			self::STRING_1,
			self::CLOSED_RESOURCE,
			self::INHERITED_STANDARD_OBJECT_FIXTURE,
			self::STRING_0
		];
	}

	/**
	 * Creates a set containing multiple stringified indices and offsets.
	 * @return array<int, string> The created set containing multiple stringified indices and offsets.
	 */
	public static function createMultiple_1(): array
	{
		return [
			self::ARRAY,
			self::BOOLEAN_TRUE,
			self::INTEGER_0,
			self::FLOAT_1,
			self::STRING_0,
			self::RESOURCE,
			self::STANDARD_OBJECT_FIXTURE,
			self::STRING_0
		];
	}

	/**
	 * Creates a set containing all stringified indices and offsets.
	 * @return array<int, string> The created set containing all stringified indices and offsets.
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
			self::RESOURCE,
			self::CLOSED_RESOURCE,
			self::STANDARD_OBJECT_FIXTURE,
			self::INHERITED_STANDARD_OBJECT_FIXTURE,
			self::STRING_0
		];
	}
}
