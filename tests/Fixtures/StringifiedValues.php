<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\Fixtures;

use CodeKandis\Types\Tests\Fixtures\Objects\BaseObjectFixture;
use CodeKandis\Types\Tests\Fixtures\Objects\InheritedBaseObjectFixture;
use CodeKandis\Types\Tests\Fixtures\Objects\InheritedStandardObjectFixtureFixture;
use CodeKandis\Types\Tests\Fixtures\Objects\StandardObjectFixture;
use stdClass;

/**
 * Represents an enumeration of stringified values.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class StringifiedValues
{
	/**
	 * Represents a stringified `null` value.
	 * @var string
	 */
	public const string NULL = '<null>';

	/**
	 * Represents a stringified `resource` value.
	 * @var string
	 */
	public const string RESOURCE = '<resource<stream>>';

	/**
	 * Represents a stringified `closed resource` value.
	 * @var string
	 */
	public const string CLOSED_RESOURCE = '<closed-resource>';

	/**
	 * Represents a stringified `array` value.
	 * @var string
	 */
	public const string ARRAY           = '<array>';

	/**
	 * Represents a stringified `boolean false` value.
	 * @var string
	 */
	public const string BOOLEAN_FALSE = '<bool<false>>';

	/**
	 * Represents a stringified `boolean true` value.
	 * @var string
	 */
	public const string BOOLEAN_TRUE = '<bool<true>>';

	/**
	 * Represents a stringified `integer` value.
	 * @var string
	 */
	public const string INTEGER = '42';

	/**
	 * Represents a stringified `float` value.
	 * @var string
	 */
	public const string FLOAT = '42.42';

	/**
	 * Represents a stringified `string` value.
	 * @var string
	 */
	public const string STRING = 'foobar';

	/**
	 * Represents a stringified invalid value.
	 * @var string
	 */
	public const string INVALID_VALUE = 'invalidValue';

	/**
	 * Represents a stringified `stdClass` object.
	 * @var string
	 */
	public const string STDCLASS_OBJECT = '<object<' . stdClass::class . '>>';

	/**
	 * Represents a stringified `StandardObjectFixture` object.
	 * @var string
	 */
	public const string STANDARD_OBJECT_FIXTURE = '<object<' . StandardObjectFixture::class . '>>';

	/**
	 * Represents a stringified `InheritedStandardObjectFixtureFixture` object.
	 * @var string
	 */
	public const string INHERITED_STANDARD_OBJECT_FIXTURE = '<object<' . InheritedStandardObjectFixtureFixture::class . '>>';

	/**
	 * Represents a stringified `BaseObjectFixture` object.
	 * @var string
	 */
	public const string BASE_OBJECT_FIXTURE = BaseObjectFixture::class;

	/**
	 * Represents a stringified `InheritedBaseObjectFixture` object.
	 * @var string
	 */
	public const string INHERITED_BASE_OBJECT_FIXTURE = InheritedBaseObjectFixture::class;
}
