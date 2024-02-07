<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\ProtectedMethodNotFoundException;
use CodeKandis\Types\Tests\DataProviders\UnitTests\ProtectedMethodNotFoundExceptionTest\ThrowableClassNamesWithClassNameMethodNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of `CodeKandis\Types\ProtectedMethodNotFoundException`.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ProtectedMethodNotFoundExceptionTest extends TestCase
{
	/**
	 * Tests if the method `ProtectedMethodNotFoundException::with_classNameAndMethodName()` instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param string $className The class name to pass.
	 * @param string $methodName The method name to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithClassNameMethodNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodWithClassNameAndMethodNameInstantiatesThrowableCorrectly( string $throwableClassName, string $className, string $methodName, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		/**
		 * @var ProtectedMethodNotFoundException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::with_classNameAndMethodName( $className, $methodName );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();

		static::assertInstanceOf( ProtectedMethodNotFoundException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
	}
}
