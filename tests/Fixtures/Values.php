<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\Fixtures;

use CodeKandis\Types\Tests\Fixtures\Objects\BaseObjectFixture;
use CodeKandis\Types\Tests\Fixtures\Objects\InheritedBaseObjectFixture;
use CodeKandis\Types\Tests\Fixtures\Objects\InheritedStandardObjectFixtureFixture;
use CodeKandis\Types\Tests\Fixtures\Objects\StandardObjectFixture;
use Exception;
use ReflectionClass;
use ReflectionObject;
use stdClass;
use Throwable;
use function fclose;
use function fopen;
use function spl_object_id;
use function sprintf;

/**
 * Represents an enumeration of values.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class Values
{
	/**
	 * Represents an invalid value.
	 * @var string
	 */
	public const string INVALID_VALUE = 'invalidValue';

	/**
	 * Represents a `null` value.
	 * @var null
	 */
	public const null NULL   = null;

	/**
	 * Represents an `array` value.
	 * @var array
	 */
	public const array ARRAY = [
		'foo',
		'bar'
	];

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
	 * Represents an enum name.
	 * @var string
	 */
	public const string ENUM_NAME = 'EnumName';

	/**
	 * Represents a backed enum name.
	 * @var string
	 */
	public const string BACKED_ENUM_NAME = 'BackedEnumName';

	/**
	 * Represents an integer backed enum name.
	 * @var string
	 */
	public const string INTEGER_BACKED_ENUM_NAME = 'IntegerBackedEnumName';

	/**
	 * Represents a string backed enum name.
	 * @var string
	 */
	public const string STRING_BACKED_ENUM_NAME = 'StringBackedEnumName';

	/**
	 * Represents a trait name.
	 * @var string
	 */
	public const string TRAIT_NAME = 'TraitName';

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
	 * Represents a throwable message default.
	 * @var string
	 */
	public const string THROWABLE_MESSAGE_DEFAULT = '';

	/**
	 * Represents a throwable message.
	 * @var string
	 */
	public const string THROWABLE_MESSAGE = 'throwableMessage';

	/**
	 * Represents a throwable code default.
	 * @var int
	 */
	public const int THROWABLE_CODE_DEFAULT = 0;

	/**
	 * Represents a throwable code.
	 * @var int
	 */
	public const int THROWABLE_CODE = 42;

	/**
	 * Represents a throwable previous default.
	 * @var null
	 */
	public const null THROWABLE_PREVIOUS_DEFAULT = null;

	/**
	 * Represents a throwable context default.
	 * @var null
	 */
	public const null THROWABLE_CONTEXT_DEFAULT = null;

	/**
	 * Represents a throwable context.
	 * @var array<string,mixed>
	 */
	public const array THROWABLE_CONTEXT = [
		'foo' => 'bar',
		'baz' => 'bat'
	];

	/**
	 * Represents a qualified object ID.
	 * @var string
	 */
	public const string QUALIFIED_OBJECT_ID = 'object(FooBar)#1';

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
	 * Creates a `StandardObjectFixture` value.
	 * @return StandardObjectFixture The created `StandardObjectFixture` value.
	 */
	public static function createStandardObjectFixture(): StandardObjectFixture
	{
		return new StandardObjectFixture();
	}

	/**
	 * Creates an `InheritedStandardObjectFixtureFixture` value.
	 * @return InheritedStandardObjectFixtureFixture The created `InheritedStandardObjectFixtureFixture` value.
	 */
	public static function createInheritedStandardObjectFixture(): InheritedStandardObjectFixtureFixture
	{
		return new InheritedStandardObjectFixtureFixture();
	}

	/**
	 * Creates a `BaseObjectFixture` value.
	 * @return BaseObjectFixture The created `BaseObjectFixture` value.
	 */
	public static function createBaseObjectFixture(): BaseObjectFixture
	{
		return new BaseObjectFixture();
	}

	/**
	 * Creates an `InheritedBaseObjectFixture` value.
	 * @return InheritedBaseObjectFixture The created `InheritedBaseObjectFixture` value.
	 */
	public static function createInheritedBaseObjectFixture(): InheritedBaseObjectFixture
	{
		return new InheritedBaseObjectFixture();
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
	 * Creates a throwable.
	 * @return Throwable The created throwable.
	 */
	public static function createThrowable(): Throwable
	{
		return new Exception();
	}

	/**
	 * Creates an object ID of an object.
	 * @param object $object The object to create the object ID from.
	 * @return int The created object ID.
	 */
	public static function createObjectId( object $object ): int
	{
		return spl_object_id( $object );
	}

	/**
	 * Creates a qualified object ID of an object.
	 * @param object $object The object to create the qualified object ID from.
	 * @return string The created qualified object ID.
	 */
	public static function createQualifiedObjectId( object $object ): string
	{
		return sprintf(
			'object(%1$s)#%2$d',
			$object::class,
			static::createObjectId( $object )
		);
	}

	/**
	 * Creates a reflection class of an object.
	 * @param object $object The object to create the reflection class from.
	 * @return ReflectionClass The created reflection class.
	 */
	public static function createReflectionClass( object $object ): ReflectionClass
	{
		return new ReflectionClass( $object );
	}

	/**
	 * Creates a reflection class of an object.
	 * @param object $object The object to create the reflection class from.
	 * @return ReflectionObject The created reflection object.
	 */
	public static function createReflectionObject( object $object ): ReflectionObject
	{
		return new ReflectionObject( $object );
	}
}
