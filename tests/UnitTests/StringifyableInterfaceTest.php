<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\StringifyableInterface;
use CodeKandis\Types\Tests\DataProviders\UnitTests\StringifyableInterfaceTest\StringifyablesWithExpected__ToStringRepresentationDataProvider;
use CodeKandis\Types\Tests\DataProviders\UnitTests\StringifyableInterfaceTest\StringifyablesWithExpectedToStringRepresentationDataProvider;
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
	 * @param StringifyableInterface $stringifyable The object to test.
	 * @param string $expected__ToStringRepresentation The expected {@link __toString()} representation.
	 */
	#[DataProviderExternal( StringifyablesWithExpected__ToStringRepresentationDataProvider::class, 'provideData' )]
	public function testIfMethod__ToStringReturnsStringRepresentationCorrectly( StringifyableInterface $stringifyable, string $expected__ToStringRepresentation ): void
	{
		$resultedString = $stringifyable->__toString();

		static::assertSame( $expected__ToStringRepresentation, $resultedString );
	}

	/**
	 * Tests if {@link StringifyableInterface::toString()} returns the string representation correctly.
	 * @param StringifyableInterface $stringifyable The object to test.
	 * @param string $expectedToStringRepresentation The expected {@link toString()} representation.
	 */
	#[DataProviderExternal( StringifyablesWithExpectedToStringRepresentationDataProvider::class, 'provideData' )]
	public function testIfMethodToStringReturnsStringRepresentationCorrectly( StringifyableInterface $stringifyable, string $expectedToStringRepresentation ): void
	{
		$resultedString = $stringifyable->toString();

		static::assertSame( $expectedToStringRepresentation, $resultedString );
	}
}
