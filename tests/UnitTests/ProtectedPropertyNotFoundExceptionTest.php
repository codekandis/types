<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\ProtectedPropertyNotFoundException;
use CodeKandis\Types\Tests\DataProviders\UnitTests\ProtectedPropertyNotFoundExceptionTest\ThrowableClassNamesWithInterfaceOrClassNameNonExistentPropertyNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link ProtectedPropertyNotFoundException}.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ProtectedPropertyNotFoundExceptionTest extends TestCase
{
	/**
	 * Tests if {@link ProtectedPropertyNotFoundException::withInterfaceOrClassNameAndNonExistentPropertyName()} instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param string $interfaceOrClassName The interface or class name to pass.
	 * @param string $nonExistentPropertyName The nonexistent property name to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithInterfaceOrClassNameNonExistentPropertyNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfPropertyWithInterfaceOrClassNameAndNonExistentPropertyNameInstantiatesThrowableCorrectly( string $throwableClassName, string $interfaceOrClassName, string $nonExistentPropertyName, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		/**
		 * @var ProtectedPropertyNotFoundException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::withInterfaceOrClassNameAndNonExistentPropertyName( $interfaceOrClassName, $nonExistentPropertyName );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();

		static::assertInstanceOf( ProtectedPropertyNotFoundException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
	}
}
