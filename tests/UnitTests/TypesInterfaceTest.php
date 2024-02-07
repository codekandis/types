<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\Tests\DataProviders\UnitTests\TypesInterfaceTest\TypesClassNamesWithClassNameAndExpectedTypedObjectDataProvider;
use CodeKandis\Types\Tests\DataProviders\UnitTests\TypesInterfaceTest\TypesClassNamesWithResourceTypeAndExpectedTypedResourceDataProvider;
use CodeKandis\Types\Tests\DataProviders\UnitTests\TypesInterfaceTest\TypesClassNamesWithValueAndExpectedTypedBooleanDataProvider;
use CodeKandis\Types\TypesInterface;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of `CodeKandis\Types\TypesInterface`.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class TypesInterfaceTest extends TestCase
{
	/**
	 * Tests if the method `TypesInterface::createTypedResource()` returns the typed resource correctly.
	 * @param string $typesClassName The class name of the types to test.
	 * @param string $resourceType The resource type to pass.
	 * @param string $expectedTypedResource The expected typed resource.
	 */
	#[DataProviderExternal( TypesClassNamesWithResourceTypeAndExpectedTypedResourceDataProvider::class, 'provideData' )]
	public function testIfMethodCreateTypedResourceReturnsTypedResourceCorrectly( string $typesClassName, string $resourceType, string $expectedTypedResource ): void
	{
		/**
		 * @var TypesInterface $typesClassName
		 */
		$resultedTypedResource = $typesClassName::createTypedResource( $resourceType );

		static::assertEquals( $expectedTypedResource, $resultedTypedResource );
	}

	/**
	 * Tests if the method `TypesInterface::createTypedObject()` returns the typed object correctly.
	 * @param string $typesClassName The class name of the types to test.
	 * @param string $className The class name to pass.
	 * @param string $expectedTypedObject The expected typed object.
	 */
	#[DataProviderExternal( TypesClassNamesWithClassNameAndExpectedTypedObjectDataProvider::class, 'provideData' )]
	public function testIfMethodCreateTypedObjectReturnsTypedObjectCorrectly( string $typesClassName, string $className, string $expectedTypedObject ): void
	{
		/**
		 * @var TypesInterface $typesClassName
		 */
		$resultedTypedObject = $typesClassName::createTypedObject( $className );

		static::assertEquals( $expectedTypedObject, $resultedTypedObject );
	}

	/**
	 * Tests if the method `TypesInterface::createTypedBoolean()` returns the typed boolean correctly.
	 * @param string $typesClassName The class name of the types to test.
	 * @param bool $value The value to pass.
	 * @param string $expectedTypedBoolean The expected typed boolean.
	 */
	#[DataProviderExternal( TypesClassNamesWithValueAndExpectedTypedBooleanDataProvider::class, 'provideData' )]
	public function testIfMethodCreateTypedBooleanReturnsTypedBooleanCorrectly( string $typesClassName, bool $value, string $expectedTypedBoolean ): void
	{
		/**
		 * @var TypesInterface $typesClassName
		 */
		$resultedTypedBoolean = $typesClassName::createTypedBoolean( $value );

		static::assertEquals( $expectedTypedBoolean, $resultedTypedBoolean );
	}
}
