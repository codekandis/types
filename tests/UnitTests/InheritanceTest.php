<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\Tests\DataProviders\UnitTests\InheritanceTest\InterfaceOrClassNamesWithExpectedAncestorInterfaceOrClassNameDataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of inheritances.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class InheritanceTest extends TestCase
{
	/**
	 * Tests if an interface or class is a subclass of a specific ancestor interface or class.
	 * @param string $interfaceOrClassName The interface or class name of the interface or class to test.
	 * @param string $expectedAncestorInterfaceOrClassName The expected ancestor interface or class name.
	 */
	#[DataProviderExternal( InterfaceOrClassNamesWithExpectedAncestorInterfaceOrClassNameDataProvider::class, 'provideData' )]
	public function testIfInterfaceOrClassIsSubClassOfAncestorInterfaceOrClass( string $interfaceOrClassName, string $expectedAncestorInterfaceOrClassName ): void
	{
		static::assertSubClassOf( $expectedAncestorInterfaceOrClassName, $interfaceOrClassName );
	}
}
