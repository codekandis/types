<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\InterfaceNotFoundException;
use CodeKandis\Types\Tests\DataProviders\UnitTests\InterfaceNotFoundExceptionTest\ThrowableClassNamesWithInterfaceNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link InterfaceNotFoundException}.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class InterfaceNotFoundExceptionTest extends TestCase
{
	/**
	 * Tests if {@link InterfaceNotFoundException::with_interfaceName()} instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param string $interfaceName The interface name to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithInterfaceNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodWithInterfaceNameInstantiatesThrowableCorrectly( string $throwableClassName, string $interfaceName, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		/**
		 * @var InterfaceNotFoundException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::with_interfaceName( $interfaceName );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();

		static::assertInstanceOf( InterfaceNotFoundException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
	}
}
