<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\MethodNotFoundException;
use CodeKandis\Types\Tests\DataProviders\UnitTests\MethodNotFoundExceptionTest\ThrowableClassNamesWithInterfaceOrClassNameNonExistentMethodNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link MethodNotFoundException}.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class MethodNotFoundExceptionTest extends TestCase
{
	/**
	 * Tests if {@link MethodNotFoundException::withInterfaceOrClassNameAndNonExistentMethodName()} instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param string $interfaceOrClassName The interface or class name to pass.
	 * @param string $nonExistentMethodName The nonexistent method name to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithInterfaceOrClassNameNonExistentMethodNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodWithInterfaceOrClassNameAndNonExistentMethodNameInstantiatesThrowableCorrectly( string $throwableClassName, string $interfaceOrClassName, string $nonExistentMethodName, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		/**
		 * @var MethodNotFoundException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::withInterfaceOrClassNameAndNonExistentMethodName( $interfaceOrClassName, $nonExistentMethodName );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();

		static::assertInstanceOf( MethodNotFoundException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
	}
}
