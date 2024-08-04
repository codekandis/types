<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\StringifyableInterface;
use CodeKandis\Types\Tests\DataProviders\UnitTests\StringifyableInterfaceTest\StringifyablesWithExpected__ToStringRepresentationDataProvider;
use CodeKandis\Types\Tests\DataProviders\UnitTests\StringifyableInterfaceTest\StringifyablesWithExpectedToStringRepresentationDataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of `CodeKandis\Types\StringifyableInterface`.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class StringifyableInterfaceTest extends TestCase
{
	/**
	 * <<<<<<< HEAD
	 * Tests if the method `StringifyableInterface::__toString()` returns the string representation correctly.
	 * =======
	 * Tests if the methods `StringifyableInterface::__toString()` returns the string representation correctly.
	 * >>>>>>> f4d2d19 (tests)
	 * @param StringifyableInterface $stringifyable The object to test.
	 * @param string $expected__ToStringRepresentation The expected `__toString()` representation.
	 */
	#[DataProviderExternal( StringifyablesWithExpected__ToStringRepresentationDataProvider::class, 'provideData' )]
	public function testIfMethod__ToStringReturnsStringRepresentationCorrectly( StringifyableInterface $stringifyable, string $expected__ToStringRepresentation ): void
	{
		$resultedString = $stringifyable->__toString();

		static::assertSame( $expected__ToStringRepresentation, $resultedString );
	}

	/**
	 * <<<<<<< HEAD
	 * Tests if the method `StringifyableInterface::toString()` returns the string representation correctly.
	 * =======
	 * Tests if the methods `StringifyableInterface::toString()` returns the string representation correctly.
	 * >>>>>>> f4d2d19 (tests)
	 * @param StringifyableInterface $stringifyable The object to test.
	 * @param string $expectedToStringRepresentation The expected `toString()` representation.
	 */
	#[DataProviderExternal( StringifyablesWithExpectedToStringRepresentationDataProvider::class, 'provideData' )]
	public function testIfMethodToStringReturnsStringRepresentationCorrectly( StringifyableInterface $stringifyable, string $expectedToStringRepresentation ): void
	{
		$resultedString = $stringifyable->toString();

		static::assertSame( $expectedToStringRepresentation, $resultedString );
	}
}
