<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\StringifyableInterface;
use CodeKandis\Types\Tests\DataProviders\UnitTests\StringifyableInterfaceTest\StringifyablesWithExpectedStringRepresentationDataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link StringifyableInterface}.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class StringifyableInterfaceTest extends TestCase
{
	/**
	 * Tests if {@link StringifyableInterface::__toString()} returns the string representation correctly.
	 * @param StringifyableInterface $stringifyable The stringifyable to test.
	 * @param string $expectedStringRepresentation The expected string representation.
	 */
	#[DataProviderExternal( StringifyablesWithExpectedStringRepresentationDataProvider::class, 'provideData' )]
	public function testIfMethod__ToStringReturnsStringRepresentationCorrectly( StringifyableInterface $stringifyable, string $expectedStringRepresentation ): void
	{
		$resultedString = $stringifyable->__toString();

		static::assertSame( $expectedStringRepresentation, $resultedString );
	}

	/**
	 * Tests if {@link StringifyableInterface::toString()} returns the string representation correctly.
	 * @param StringifyableInterface $stringifyable The stringifyable to test.
	 * @param string $expectedStringRepresentation The expected string representation.
	 */
	#[DataProviderExternal( StringifyablesWithExpectedStringRepresentationDataProvider::class, 'provideData' )]
	public function testIfMethodToStringReturnsStringRepresentationCorrectly( StringifyableInterface $stringifyable, string $expectedStringRepresentation ): void
	{
		$resultedString = $stringifyable->toString();

		static::assertSame( $expectedStringRepresentation, $resultedString );
	}
}
