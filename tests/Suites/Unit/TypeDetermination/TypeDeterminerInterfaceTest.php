<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\Suites\Unit\TypeDetermination;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\Tests\DataProviders\Unit\TypeDetermination\TypeDeterminerInterfaceTest\TypeDeterminersWithValueModeAndExpectedValuesDataProvider;
use CodeKandis\Types\TypeDetermination\TypeDeterminationMode;
use CodeKandis\Types\TypeDetermination\TypeDeterminerInterface;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link TypeDeterminerInterface}.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
final class TypeDeterminerInterfaceTest extends TestCase
{
	/**
	 * Tests if {@link TypeDeterminerInterface::determine()} determines a type correctly.
	 * @param TypeDeterminerInterface $typeDeterminer The type determiner to test.
	 * @param mixed $value The value to pass.
	 * @param TypeDeterminationMode $mode How the determined type must be returned.
	 * @param string $expectedType The expected determined type.
	 */
	#[DataProviderExternal( TypeDeterminersWithValueModeAndExpectedValuesDataProvider::class, 'provideData' )]
	public function testIfMethodDetermineDeterminesTypeCorrectly( TypeDeterminerInterface $typeDeterminer, mixed $value, TypeDeterminationMode $mode, string $expectedType ): void
	{
		$resultedType = $typeDeterminer->determine( $value, $mode );

		static::assertSame( $expectedType, $resultedType );
	}
}
