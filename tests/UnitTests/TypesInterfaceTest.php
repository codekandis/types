<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\Tests\DataProviders\UnitTests\TypesInterfaceTest\TypesWithClassNameAndExpectedTypedObjectDataProvider;
use CodeKandis\Types\Tests\DataProviders\UnitTests\TypesInterfaceTest\TypesWithExpectedArrayValueDataProvider;
use CodeKandis\Types\Tests\DataProviders\UnitTests\TypesInterfaceTest\TypesWithExpectedBooleanValueDataProvider;
use CodeKandis\Types\Tests\DataProviders\UnitTests\TypesInterfaceTest\TypesWithExpectedClosedResourceValueDataProvider;
use CodeKandis\Types\Tests\DataProviders\UnitTests\TypesInterfaceTest\TypesWithExpectedFloatValueDataProvider;
use CodeKandis\Types\Tests\DataProviders\UnitTests\TypesInterfaceTest\TypesWithExpectedIntegerValueDataProvider;
use CodeKandis\Types\Tests\DataProviders\UnitTests\TypesInterfaceTest\TypesWithExpectedNullValueDataProvider;
use CodeKandis\Types\Tests\DataProviders\UnitTests\TypesInterfaceTest\TypesWithExpectedObjectValueDataProvider;
use CodeKandis\Types\Tests\DataProviders\UnitTests\TypesInterfaceTest\TypesWithExpectedResourceValueDataProvider;
use CodeKandis\Types\Tests\DataProviders\UnitTests\TypesInterfaceTest\TypesWithExpectedStringValueDataProvider;
use CodeKandis\Types\Tests\DataProviders\UnitTests\TypesInterfaceTest\TypesWithExpectedTypedBooleanTemplateValueDataProvider;
use CodeKandis\Types\Tests\DataProviders\UnitTests\TypesInterfaceTest\TypesWithExpectedTypedObjectTemplateValueDataProvider;
use CodeKandis\Types\Tests\DataProviders\UnitTests\TypesInterfaceTest\TypesWithExpectedTypedResourceTemplateValueDataProvider;
use CodeKandis\Types\Tests\DataProviders\UnitTests\TypesInterfaceTest\TypesWithExpectedUnknownTypeValueDataProvider;
use CodeKandis\Types\Tests\DataProviders\UnitTests\TypesInterfaceTest\TypesWithResourceTypeAndExpectedTypedResourceDataProvider;
use CodeKandis\Types\Tests\DataProviders\UnitTests\TypesInterfaceTest\TypesWithValueAndExpectedTypedBooleanDataProvider;
use CodeKandis\Types\TypesInterface;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link TypesInterface}.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class TypesInterfaceTest extends TestCase
{
	/**
	 * Tests if {@link TypesInterface::$unknownType} returns the value correctly.
	 * @param TypesInterface $types The types to test.
	 * @param string $expectedUnknownTypeValue The expected `unknownType` value.
	 */
	#[DataProviderExternal( TypesWithExpectedUnknownTypeValueDataProvider::class, 'provideData' )]
	public function testIfPropertyReturnsUnknownTypeValueCorrectly( TypesInterface $types, string $expectedUnknownTypeValue ): void
	{
		$resultedUnknownTypeValue = $types->unknownType;

		static::assertEquals( $expectedUnknownTypeValue, $resultedUnknownTypeValue );
	}

	/**
	 * Tests if {@link TypesInterface::$null} returns the value correctly.
	 * @param TypesInterface $types The types to test.
	 * @param string $expectedNullValue The expected `null` value.
	 */
	#[DataProviderExternal( TypesWithExpectedNullValueDataProvider::class, 'provideData' )]
	public function testIfPropertyReturnsNullValueCorrectly( TypesInterface $types, string $expectedNullValue ): void
	{
		$resultedNullValue = $types->null;

		static::assertEquals( $expectedNullValue, $resultedNullValue );
	}

	/**
	 * Tests if {@link TypesInterface::$resource} returns the value correctly.
	 * @param TypesInterface $types The types to test.
	 * @param string $expectedResourceValue The expected `resource` value.
	 */
	#[DataProviderExternal( TypesWithExpectedResourceValueDataProvider::class, 'provideData' )]
	public function testIfPropertyReturnsResourceValueCorrectly( TypesInterface $types, string $expectedResourceValue ): void
	{
		$resultedResourceValue = $types->resource;

		static::assertEquals( $expectedResourceValue, $resultedResourceValue );
	}

	/**
	 * Tests if {@link TypesInterface::$typedResourceTemplate} returns the value correctly.
	 * @param TypesInterface $types The types to test.
	 * @param string $expectedTypedResourceTemplateValue The expected `typedResourceTemplate` value.
	 */
	#[DataProviderExternal( TypesWithExpectedTypedResourceTemplateValueDataProvider::class, 'provideData' )]
	public function testIfPropertyReturnsTypedResourceTemplateValueCorrectly( TypesInterface $types, string $expectedTypedResourceTemplateValue ): void
	{
		$resultedTypedResourceTemplateValue = $types->typedResourceTemplate;

		static::assertEquals( $expectedTypedResourceTemplateValue, $resultedTypedResourceTemplateValue );
	}

	/**
	 * Tests if {@link TypesInterface::$closedResource} returns the value correctly.
	 * @param TypesInterface $types The types to test.
	 * @param string $expectedClosedResourceValue The expected `closedResource` value.
	 */
	#[DataProviderExternal( TypesWithExpectedClosedResourceValueDataProvider::class, 'provideData' )]
	public function testIfPropertyReturnsClosedResourceValueCorrectly( TypesInterface $types, string $expectedClosedResourceValue ): void
	{
		$resultedClosedResourceValue = $types->closedResource;

		static::assertEquals( $expectedClosedResourceValue, $resultedClosedResourceValue );
	}

	/**
	 * Tests if {@link TypesInterface::$array} returns the value correctly.
	 * @param TypesInterface $types The types to test.
	 * @param string $expectedArrayValue The expected `array` value.
	 */
	#[DataProviderExternal( TypesWithExpectedArrayValueDataProvider::class, 'provideData' )]
	public function testIfPropertyReturnsArrayValueCorrectly( TypesInterface $types, string $expectedArrayValue ): void
	{
		$resultedArrayValue = $types->array;

		static::assertEquals( $expectedArrayValue, $resultedArrayValue );
	}

	/**
	 * Tests if {@link TypesInterface::$object} returns the value correctly.
	 * @param TypesInterface $types The types to test.
	 * @param string $expectedObjectValue The expected `object` value.
	 */
	#[DataProviderExternal( TypesWithExpectedObjectValueDataProvider::class, 'provideData' )]
	public function testIfPropertyReturnsObjectValueCorrectly( TypesInterface $types, string $expectedObjectValue ): void
	{
		$resultedObjectValue = $types->object;

		static::assertEquals( $expectedObjectValue, $resultedObjectValue );
	}

	/**
	 * Tests if {@link TypesInterface::$typedObjectTemplate} returns the value correctly.
	 * @param TypesInterface $types The types to test.
	 * @param string $expectedTypedObjectTemplateValue The expected `typedObjectTemplate` value.
	 */
	#[DataProviderExternal( TypesWithExpectedTypedObjectTemplateValueDataProvider::class, 'provideData' )]
	public function testIfPropertyReturnsTypedObjectTemplateValueCorrectly( TypesInterface $types, string $expectedTypedObjectTemplateValue ): void
	{
		$resultedTypedObjectTemplateValue = $types->typedObjectTemplate;

		static::assertEquals( $expectedTypedObjectTemplateValue, $resultedTypedObjectTemplateValue );
	}

	/**
	 * Tests if {@link TypesInterface::$boolean} returns the value correctly.
	 * @param TypesInterface $types The types to test.
	 * @param string $expectedBooleanValue The expected `boolean` value.
	 */
	#[DataProviderExternal( TypesWithExpectedBooleanValueDataProvider::class, 'provideData' )]
	public function testIfPropertyReturnsBooleanValueCorrectly( TypesInterface $types, string $expectedBooleanValue ): void
	{
		$resultedBooleanValue = $types->boolean;

		static::assertEquals( $expectedBooleanValue, $resultedBooleanValue );
	}

	/**
	 * Tests if {@link TypesInterface::$typedBooleanTemplate} returns the value correctly.
	 * @param TypesInterface $types The types to test.
	 * @param string $expectedTypedBooleanTemplateValue The expected `typedBooleanTemplate` value.
	 */
	#[DataProviderExternal( TypesWithExpectedTypedBooleanTemplateValueDataProvider::class, 'provideData' )]
	public function testIfPropertyReturnsTypedBooleanTemplateValueCorrectly( TypesInterface $types, string $expectedTypedBooleanTemplateValue ): void
	{
		$resultedTypedBooleanTemplateValue = $types->typedBooleanTemplate;

		static::assertEquals( $expectedTypedBooleanTemplateValue, $resultedTypedBooleanTemplateValue );
	}

	/**
	 * Tests if {@link TypesInterface::$integer} returns the value correctly.
	 * @param TypesInterface $types The types to test.
	 * @param string $expectedIntegerValue The expected `integer` value.
	 */
	#[DataProviderExternal( TypesWithExpectedIntegerValueDataProvider::class, 'provideData' )]
	public function testIfPropertyReturnsIntegerValueCorrectly( TypesInterface $types, string $expectedIntegerValue ): void
	{
		$resultedIntegerValue = $types->integer;

		static::assertEquals( $expectedIntegerValue, $resultedIntegerValue );
	}

	/**
	 * Tests if {@link TypesInterface::$float} returns the value correctly.
	 * @param TypesInterface $types The types to test.
	 * @param string $expectedFloatValue The expected `float` value.
	 */
	#[DataProviderExternal( TypesWithExpectedFloatValueDataProvider::class, 'provideData' )]
	public function testIfPropertyReturnsFloatValueCorrectly( TypesInterface $types, string $expectedFloatValue ): void
	{
		$resultedFloatValue = $types->float;

		static::assertEquals( $expectedFloatValue, $resultedFloatValue );
	}

	/**
	 * Tests if {@link TypesInterface::$string} returns the value correctly.
	 * @param TypesInterface $types The types to test.
	 * @param string $expectedStringValue The expected `string` value.
	 */
	#[DataProviderExternal( TypesWithExpectedStringValueDataProvider::class, 'provideData' )]
	public function testIfPropertyReturnsStringValueCorrectly( TypesInterface $types, string $expectedStringValue ): void
	{
		$resultedStringValue = $types->string;

		static::assertEquals( $expectedStringValue, $resultedStringValue );
	}

	/**
	 * Tests if {@link TypesInterface::createTypedResource()} returns the typed resource correctly.
	 * @param TypesInterface $types The types to test.
	 * @param string $resourceType The resource type to pass.
	 * @param string $expectedTypedResource The expected typed resource.
	 */
	#[DataProviderExternal( TypesWithResourceTypeAndExpectedTypedResourceDataProvider::class, 'provideData' )]
	public function testIfMethodCreateTypedResourceReturnsTypedResourceCorrectly( TypesInterface $types, string $resourceType, string $expectedTypedResource ): void
	{
		$resultedTypedResource = $types->createTypedResource( $resourceType );

		static::assertEquals( $expectedTypedResource, $resultedTypedResource );
	}

	/**
	 * Tests if {@link TypesInterface::createTypedObject()} returns the typed object correctly.
	 * @param TypesInterface $types The types to test.
	 * @param string $className The class name to pass.
	 * @param string $expectedTypedObject The expected typed object.
	 */
	#[DataProviderExternal( TypesWithClassNameAndExpectedTypedObjectDataProvider::class, 'provideData' )]
	public function testIfMethodCreateTypedObjectReturnsTypedObjectCorrectly( TypesInterface $types, string $className, string $expectedTypedObject ): void
	{
		$resultedTypedObject = $types->createTypedObject( $className );

		static::assertEquals( $expectedTypedObject, $resultedTypedObject );
	}

	/**
	 * Tests if {@link TypesInterface::createTypedBoolean()} returns the typed boolean correctly.
	 * @param TypesInterface $types The types to test.
	 * @param bool $value The value to pass.
	 * @param string $expectedTypedBoolean The expected typed boolean.
	 */
	#[DataProviderExternal( TypesWithValueAndExpectedTypedBooleanDataProvider::class, 'provideData' )]
	public function testIfMethodCreateTypedBooleanReturnsTypedBooleanCorrectly( TypesInterface $types, bool $value, string $expectedTypedBoolean ): void
	{
		$resultedTypedBoolean = $types->createTypedBoolean( $value );

		static::assertEquals( $expectedTypedBoolean, $resultedTypedBoolean );
	}
}
