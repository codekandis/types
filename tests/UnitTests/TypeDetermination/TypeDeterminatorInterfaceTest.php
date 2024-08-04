<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\UnitTests\TypeDetermination;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\Tests\DataProviders\UnitTests\TypeDetermination\TypeDeterminatorInterfaceTest\TypeDeterminatorsWithValueKindAndExpectedValuesDataProvider;
use CodeKandis\Types\TypeDetermination\TypeDeterminationKind;
use CodeKandis\Types\TypeDetermination\TypeDeterminatorInterface;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of `CodeKandis\Types\TypeDetermination\InvalidTypeExceptionInterface`.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class TypeDeterminatorInterfaceTest extends TestCase
{
	/**
	 * Tests if the method `TypeDeterminatorInterface::determine()` determines a type correctly.
	 * @param TypeDeterminatorInterface $typeDeterminator The type determinator to test.
	 * @param mixed $value The value to pass.
	 * @param TypeDeterminationKind $kind How the determined type must be returned.
	 * @param string $expectedType The expected determined type.
	 */
	#[DataProviderExternal( TypeDeterminatorsWithValueKindAndExpectedValuesDataProvider::class, 'provideData' )]
	public function testIfMethodDetermineDeterminesTypeCorrectly( TypeDeterminatorInterface $typeDeterminator, mixed $value, TypeDeterminationKind $kind, string $expectedType ): void
	{
		$resultedType = $typeDeterminator->determine( $value, $kind );

		static::assertSame( $expectedType, $resultedType );
	}
}
