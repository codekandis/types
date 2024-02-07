<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\ObjectInterface;
use CodeKandis\Types\Tests\DataProviders\UnitTests\ObjectInterfaceTest\ObjectsWithExpectedTypeObjectDataProvider;
use CodeKandis\Types\TypeInterface;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link ObjectInterface}.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ObjectInterfaceTest extends TestCase
{
	/**
	 * Tests if {@link ObjectInterface::$type} returns the type object correctly.
	 * @param ObjectInterface $object The object to test.
	 * @param TypeInterface $expectedTypeObject The expected type object.
	 */
	#[DataProviderExternal( ObjectsWithExpectedTypeObjectDataProvider::class, 'provideData' )]
	public function testIfPropertyTypeReturnsTypeCorrectly( ObjectInterface $object, TypeInterface $expectedTypeObject ): void
	{
		$resultedTypeObject = $object->type;

		static::assertEquals( $expectedTypeObject, $resultedTypeObject );
	}
}
