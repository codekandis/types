<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\InterfaceOrClassConstantNotFoundException;
use CodeKandis\Types\Tests\DataProviders\UnitTests\InterfaceOrClassConstantNotFoundExceptionTest\ThrowableClassNamesWithInterfaceOrClassNameNonExistentConstantNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link InterfaceOrClassConstantNotFoundException}.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class InterfaceOrClassConstantNotFoundExceptionTest extends TestCase
{
	/**
	 * Tests if {@link InterfaceOrClassConstantNotFoundException::withInterfaceOrClassNameAndNonExistentConstantName()} instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param string $interfaceOrClassName The interface or class name to pass.
	 * @param string $nonExistentConstantName The nonexistent constant name to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithInterfaceOrClassNameNonExistentConstantNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodWithInterfaceOrClassNameAndNonExistentConstantNameInstantiatesThrowableCorrectly( string $throwableClassName, string $interfaceOrClassName, string $nonExistentConstantName, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		/**
		 * @var InterfaceOrClassConstantNotFoundException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::withInterfaceOrClassNameAndNonExistentConstantName( $interfaceOrClassName, $nonExistentConstantName );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();

		static::assertInstanceOf( InterfaceOrClassConstantNotFoundException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
	}
}
