<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\Fixtures;

use CodeKandis\Types\MaskedTypeHintTypes;
use Exception;
use stdClass;
use Throwable;
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
	 * Represents a `null` value.
	 * @var null
	 */
	public const null NULL = null;

	/**
	 * Represents a masked `null` value.
	 * @var string
	 */
	public const string MASKED_NULL = MaskedTypeHintTypes::NULL;

	/**
	 * Represents a masked closed `resource` value.
	 * @var string
	 */
	public const string MASKED_CLOSED_RESOURCE = MaskedTypeHintTypes::CLOSED_RESOURCE;

	/**
	 * Represents an `array` value.
	 * @var array
	 */
	public const array ARRAY                   = [
		'foo',
		'bar'
	];

	/**
	 * Represents a masked `array` value.
	 * @var string
	 */
	public const string MASKED_ARRAY = MaskedTypeHintTypes::ARRAY;

	/**
	 * Represents a `boolean false` value.
	 * @var bool
	 */
	public const bool BOOLEAN_FALSE = false;

	/**
	 * Represents a `boolean true` value.
	 * @var bool
	 */
	public const bool BOOLEAN_TRUE = true;

	/**
	 * Represents an `integer` value.
	 * @var int
	 */
	public const int INTEGER = 42;

	/**
	 * Represents a `float` value.
	 * @var float
	 */
	public const float FLOAT = 42.42;

	/**
	 * Represents a `string` value.
	 * @var string
	 */
	public const string STRING = 'foobar';

	/**
	 * Represents a set of only one expected single value.
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
	 * Represents a resource type.
	 * @var string
	 */
	public const string RESOURCE_TYPE = 'resourceType';

	/**
	 * Represents an interface name.
	 * @var string
	 */
	public const string INTERFACE_NAME = 'InterfaceName';

	/**
	 * Represents a class name.
	 * @var string
	 */
	public const string CLASS_NAME = 'ClassName';

	/**
	 * Represents an interface or class name.
	 * @var string
	 */
	public const string INTERFACE_OR_CLASS_NAME = 'InterfaceOrClassName';

	/**
	 * Represents a trait name.
	 * @var string
	 */
	public const string TRAIT_NAME = 'TraitName';

	/**
	 * Represents an enum name.
	 * @var string
	 */
	public const string ENUM_NAME = 'EnumName';

	/**
	 * Represents a constant name.
	 * @var string
	 */
	public const string CONSTANT_NAME = 'CONSTANT_NAME';

	/**
	 * Represents a property name.
	 * @var string
	 */
	public const string PROPERTY_NAME = 'propertyName';

	/**
	 * Represents a method name.
	 * @var string
	 */
	public const string METHOD_NAME = 'methodName';

	/**
	 * Represents a throwable message.
	 * @var string
	 */
	public const string THROWABLE_MESSAGE = 'exceptionMessage';

	/**
	 * Represents a throwable message default.
	 * @var string
	 */
	public const string THROWABLE_MESSAGE_DEFAULT = '';

	/**
	 * Represents a throwable code.
	 * @var int
	 */
	public const int THROWABLE_CODE = 42;

	/**
	 * Represents a throwable code default.
	 * @var int
	 */
	public const int THROWABLE_CODE_DEFAULT = 0;

	/**
	 * Represents a throwable previous default.
	 * @var ?Throwable
	 */
	public const ?Throwable THROWABLE_PREVIOUS_DEFAULT = null;

	/**
	 * Creates a `resource` value.
	 * @return resource The created `resource` value.
	 */
	public static function createResource()
	{
		return fopen( 'php://memory', 'r' );
	}

	/**
	 * Creates a `closed resource` value.
	 * @return resource The created `closed resource` value.
	 */
	public static function createClosedResource()
	{
		$resource = static::createResource();
		fclose( $resource );

		return $resource;
	}

	/**
	 * Creates a `stdClass` value.
	 * @return object The created `stdClass` value.
	 */
	public static function createStdClassObject(): object
	{
		return new stdClass();
	}

	/**
	 * Creates a inherited `stdClass` value.
	 * @return object The created inherited `stdClass` value.
	 */
	public static function createInheritedStdClassObject(): object
	{
		return new class() extends stdClass
		{
		};
	}

	/**
	 * Creates a `StandardObject` value.
	 * @return StandardObject The created `StandardObject` value.
	 */
	public static function createStandardObject(): StandardObject
	{
		return new StandardObject();
	}

	/**
	 * Creates an `InheritedStandardObject` value.
	 * @return InheritedStandardObject The created `InheritedStandardObject` value.
	 */
	public static function createInheritedStandardObject(): InheritedStandardObject
	{
		return new InheritedStandardObject();
	}

	/**
	 * Creates a `BaseObject` value.
	 * @return BaseObject The created `BaseObject` value.
	 */
	public static function createBaseObject(): BaseObject
	{
		return new BaseObject();
	}

	/**
	 * Creates an `InheritedBaseObject` value.
	 * @return InheritedBaseObject The created `InheritedBaseObject` value.
	 */
	public static function createInheritedBaseObject(): InheritedBaseObject
	{
		return new InheritedBaseObject();
	}

	/**
	 * Creates an `object` value implementing `Stringable`.
	 * @return object The created `object` value.
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
	 * Creates a `string` value of an expected single value.
	 * @return string The created `string` value of an expected single value.
	 */
	public static function createConcatinatedExpectedSingleValue(): string
	{
		return implode( ' | ', static::EXPECTED_SINGLE_VALUE );
	}

	/**
	 * Creates a `string` value of expected values.
	 * @return string The created `string` value of expected values.
	 */
	public static function createConcatinatedExpectedValues(): string
	{
		return implode( ' | ', static::EXPECTED_VALUES );
	}

	/**
	 * Creates a throwable previous.
	 * @return Throwable The created throwable previous.
	 */
	public static function createThrowablePrevious(): Throwable
	{
		return new Exception();
	}
}
