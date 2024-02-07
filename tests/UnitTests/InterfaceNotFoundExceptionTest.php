<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\InterfaceNotFoundException;
use CodeKandis\Types\Tests\DataProviders\UnitTests\InterfaceNotFoundExceptionTest\ThrowableClassNamesWithNonExistentInterfaceNameExpectedThrowableClassNameThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use Throwable;

/**
 * Represents the test case of {@link InterfaceNotFoundException}.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class InterfaceNotFoundExceptionTest extends TestCase
{
	/**
	 * Tests if {@link InterfaceNotFoundException::withNonExistentInterfaceName()} instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param string $nonExistentInterfaceName The nonexistent interface name to pass.
	 * @param int $code The error code to pass.
	 * @param ?Throwable $previous The previous throwable to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 * @param int $expectedThrowableCode The code of the expected throwable.
	 * @param ?Throwable $expectedThrowablePrevious The previously catched throwable of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithNonExistentInterfaceNameExpectedThrowableClassNameThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider::class, 'provideData' )]
	public function testIfMethodWithNonExistentInterfaceNameInstantiatesThrowableCorrectly( string $throwableClassName, string $nonExistentInterfaceName, int $code, ?Throwable $previous, string $expectedThrowableClassName, string $expectedThrowableMessage, int $expectedThrowableCode, ?Throwable $expectedThrowablePrevious ): void
	{
		/**
		 * @var InterfaceNotFoundException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::withNonExistentInterfaceName( $nonExistentInterfaceName, $code, $previous );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();
		$resultedThrowableCode      = $resultedThrowable->getCode();
		$resultedThrowablePrevious  = $resultedThrowable->getPrevious();

		static::assertInstanceOf( InterfaceNotFoundException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
		static::assertSame( $expectedThrowableCode, $resultedThrowableCode );
		static::assertSame( $expectedThrowablePrevious, $resultedThrowablePrevious );
	}
}
