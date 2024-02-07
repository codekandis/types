<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\ClassNotFoundException;
use CodeKandis\Types\Tests\DataProviders\UnitTests\ClassNotFoundExceptionTest\ThrowableClassNamesWithNonExistentClassNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link ClassNotFoundException}.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ClassNotFoundExceptionTest extends TestCase
{
	/**
	 * Tests if {@link ClassNotFoundException::with_nonExistentClassName()} instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param string $nonExistentClassName The nonexistent class name to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithNonExistentClassNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodWithNonExistentClassNameInstantiatesThrowableCorrectly( string $throwableClassName, string $nonExistentClassName, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		/**
		 * @var ClassNotFoundException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::with_nonExistentClassName( $nonExistentClassName );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();

		static::assertInstanceOf( ClassNotFoundException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
	}
}
