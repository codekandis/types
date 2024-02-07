<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\Tests\DataProviders\UnitTests\TypeInterfaceTest\TypesWithClassNameOrObjectAndExpectedInstanceOfDeterminationDataProvider;
use CodeKandis\Types\Tests\DataProviders\UnitTests\TypeInterfaceTest\TypesWithExpectedEqualityDeterminationDataProvider;
use CodeKandis\Types\Tests\DataProviders\UnitTests\TypeInterfaceTest\TypesWithExpectedIdentityDeterminationDataProvider;
use CodeKandis\Types\Tests\DataProviders\UnitTests\TypeInterfaceTest\TypesWithExpectedInstanceDataProvider;
use CodeKandis\Types\Tests\DataProviders\UnitTests\TypeInterfaceTest\TypesWithExpectedReflectedClassDataProvider;
use CodeKandis\Types\Tests\DataProviders\UnitTests\TypeInterfaceTest\TypesWithExpectedReflectedObjectDataProvider;
use CodeKandis\Types\Tests\DataProviders\UnitTests\TypeInterfaceTest\TypesWithExpectedTypeNameDataProvider;
use CodeKandis\Types\TypeInterface;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use ReflectionClass;
use ReflectionObject;

/**
 * Represents the test case of {@link TypeInterface}.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class TypeInterfaceTest extends TestCase
{
	/**
	 * Tests if {@link TypeInterface::$instance} returns the instance, the type depends on, correctly.
	 * @param TypeInterface $type The type to test.
	 * @param object $expectedInstance The expected instance.
	 */
	#[DataProviderExternal( TypesWithExpectedInstanceDataProvider::class, 'provideData' )]
	public function testIfPropertyInstanceReturnsInstanceCorrectly( TypeInterface $type, object $expectedInstance ): void
	{
		$resultedInstance = $type->instance;

		static::assertSame( $expectedInstance, $resultedInstance );
	}

	/**
	 * Tests if {@link TypeInterface::$typeName} returns the type name of the instance, the type depends on, correctly.
	 * @param TypeInterface $type The type to test.
	 * @param string $expectedTypeName The expected type name.
	 */
	#[DataProviderExternal( TypesWithExpectedTypeNameDataProvider::class, 'provideData' )]
	public function testIfPropertyTypeNameReturnsTypeNameCorrectly( TypeInterface $type, string $expectedTypeName ): void
	{
		$resultedTypeName = $type->typeName;

		static::assertSame( $expectedTypeName, $resultedTypeName );
	}

	/**
	 * Tests if {@link TypeInterface::$reflectedClass} returns the reflected class of the instance, the type depends on, correctly.
	 * @param TypeInterface $type The type to test.
	 * @param ReflectionClass $expectedReflectedClass The expected reflected class.
	 */
	#[DataProviderExternal( TypesWithExpectedReflectedClassDataProvider::class, 'provideData' )]
	public function testIfPropertyReflectedClassReturnsReflectedClassCorrectly( TypeInterface $type, ReflectionClass $expectedReflectedClass ): void
	{
		$resultedReflectedClass = $type->reflectedClass;

		static::assertEquals( $expectedReflectedClass, $resultedReflectedClass );
	}

	/**
	 * Tests if {@link TypeInterface::$reflectedObject} returns the reflected object of the instance, the type depends on, correctly.
	 * @param TypeInterface $type The type to test.
	 * @param ReflectionObject $expectedReflectedObject The expected reflected object.
	 */
	#[DataProviderExternal( TypesWithExpectedReflectedObjectDataProvider::class, 'provideData' )]
	public function testIfPropertyReflectedObjectReturnsReflectedObjectCorrectly( TypeInterface $type, ReflectionObject $expectedReflectedObject ): void
	{
		$resultedReflectedObject = $type->reflectedObject;

		static::assertEquals( $expectedReflectedObject, $resultedReflectedObject );
	}

	/**
	 * Tests if {@link TypeInterface::isInstanceOf()} returns the equality determination of the instance, the type depends on, correctly.
	 * @param TypeInterface $type The type to test.
	 * @param string|object $classNameOrObject The class name or object to test.
	 * @param bool $expectedInstanceOfDetermination The expected equality determination.
	 */
	#[DataProviderExternal( TypesWithClassNameOrObjectAndExpectedInstanceOfDeterminationDataProvider::class, 'provideData' )]
	public function testIfMethodIsInstanceOfReturnsInstanceOfDeterminationCorrectly( TypeInterface $type, string | object $classNameOrObject, bool $expectedInstanceOfDetermination ): void
	{
		$resultedInstanceOfDetermination = $type->isInstanceOf( $classNameOrObject );

		static::assertSame( $expectedInstanceOfDetermination, $resultedInstanceOfDetermination );
	}

	/**
	 * Tests if {@link TypeInterface::isEqual()} returns the equality determination of the instance, the type depends on, correctly.
	 * @param TypeInterface $type The type to test.
	 * @param object $object The object to test.
	 * @param bool $expectedEqualityDetermination The expected equality determination.
	 */
	#[DataProviderExternal( TypesWithExpectedEqualityDeterminationDataProvider::class, 'provideData' )]
	public function testIfMethodIsEqualReturnsEqualityDeterminationCorrectly( TypeInterface $type, object $object, bool $expectedEqualityDetermination ): void
	{
		$resultedEqualityDetermination = $type->isEqual( $object );

		static::assertSame( $expectedEqualityDetermination, $resultedEqualityDetermination );
	}

	/**
	 * Tests if {@link TypeInterface::isIdentical()} returns the identity determination of the instance, the type depends on, correctly.
	 * @param TypeInterface $type The type to test.
	 * @param object $object The object to test.
	 * @param bool $expectedIdentityDetermination The expected identity determination.
	 */
	#[DataProviderExternal( TypesWithExpectedIdentityDeterminationDataProvider::class, 'provideData' )]
	public function testIfMethodIsIdenticalReturnsIdentityDeterminationCorrectly( TypeInterface $type, object $object, bool $expectedIdentityDetermination ): void
	{
		$resultedIdentityDetermination = $type->isIdentical( $object );

		static::assertSame( $expectedIdentityDetermination, $resultedIdentityDetermination );
	}
}
