<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\Tests\DataProviders\TypeDeterminatorInterfaceTest\TypeDeterminatorsWithValueStrictAndExpectedValuesDataProvider;
use CodeKandis\Types\TypeDeterminatorInterface;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of `CodeKandis\Types\InvalidTypeExceptionInterface`.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class TypeDeterminatorInterfaceTest extends TestCase
{
	/**
	 * Tests if the method `TypeDeterminatorInterface::determine()` determines a type correctly.
	 * @param TypeDeterminatorInterface $typeDeterminator The type determinator to test.
	 * @param mixed $value The value to pass.
	 * @param bool $native True if the determined type has to be strict native, otherwise false.
	 * @param string $expectedType The expected determined type.
	 */
	#[DataProviderExternal( TypeDeterminatorsWithValueStrictAndExpectedValuesDataProvider::class, 'provideData' )]
	public function testIfMethodDetermineDeterminesTypeCorrectly( TypeDeterminatorInterface $typeDeterminator, mixed $value, bool $native, string $expectedType ): void
	{
		$resultedType = $typeDeterminator->determine( $value, $native );

		static::assertSame( $expectedType, $resultedType );
	}
}
