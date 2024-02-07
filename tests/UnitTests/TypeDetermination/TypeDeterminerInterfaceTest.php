<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\UnitTests\TypeDetermination;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\Tests\DataProviders\UnitTests\TypeDetermination\TypeDeterminerInterfaceTest\TypeDeterminersWithValueKindAndExpectedValuesDataProvider;
use CodeKandis\Types\TypeDetermination\TypeDeterminationKind;
use CodeKandis\Types\TypeDetermination\TypeDeterminerInterface;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link TypeDeterminerInterface}.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class TypeDeterminerInterfaceTest extends TestCase
{
	/**
	 * Tests if {@link TypeDeterminerInterface::determine()} determines a type correctly.
	 * @param TypeDeterminerInterface $typeDeterminer The type determiner to test.
	 * @param mixed $value The value to pass.
	 * @param TypeDeterminationKind $kind How the determined type must be returned.
	 * @param string $expectedType The expected determined type.
	 */
	#[DataProviderExternal( TypeDeterminersWithValueKindAndExpectedValuesDataProvider::class, 'provideData' )]
	public function testIfMethodDetermineDeterminesTypeCorrectly( TypeDeterminerInterface $typeDeterminer, mixed $value, TypeDeterminationKind $kind, string $expectedType ): void
	{
		$resultedType = $typeDeterminer->determine( $value, $kind );

		static::assertSame( $expectedType, $resultedType );
	}
}
