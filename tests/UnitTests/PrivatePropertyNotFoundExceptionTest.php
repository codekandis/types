<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\PrivatePropertyNotFoundException;
use CodeKandis\Types\Tests\DataProviders\UnitTests\PrivatePropertyNotFoundExceptionTest\ThrowableClassNamesWithInterfaceOrClassNameNonExistentPropertyNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link PrivatePropertyNotFoundException}.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class PrivatePropertyNotFoundExceptionTest extends TestCase
{
	/**
	 * Tests if {@link PrivatePropertyNotFoundException::withInterfaceOrClassNameAndNonExistentPropertyName()} instantiates the throwable correctly.
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
		 * @var PrivatePropertyNotFoundException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::withInterfaceOrClassNameAndNonExistentPropertyName( $interfaceOrClassName, $nonExistentPropertyName );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();

		static::assertInstanceOf( PrivatePropertyNotFoundException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
	}
}
