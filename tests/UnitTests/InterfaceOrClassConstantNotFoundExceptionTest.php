<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\InterfaceOrClassConstantNotFoundException;
use CodeKandis\Types\Tests\DataProviders\UnitTests\InterfaceOrClassConstantNotFoundExceptionTest\ThrowableClassNamesWithInterfaceOrClassNameNonExistentConstantNameExpectedThrowableClassNameThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use Throwable;

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
	 * @param int $code The error code to pass.
	 * @param ?Throwable $previous The previous throwable to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 * @param int $expectedThrowableCode The code of the expected throwable.
	 * @param ?Throwable $expectedThrowablePrevious The previously catched throwable of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithInterfaceOrClassNameNonExistentConstantNameExpectedThrowableClassNameThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider::class, 'provideData' )]
	public function testIfMethodWithInterfaceOrClassNameAndNonExistentConstantNameInstantiatesThrowableCorrectly( string $throwableClassName, string $interfaceOrClassName, string $nonExistentConstantName, int $code, ?Throwable $previous, string $expectedThrowableClassName, string $expectedThrowableMessage, int $expectedThrowableCode, ?Throwable $expectedThrowablePrevious ): void
	{
		/**
		 * @var InterfaceOrClassConstantNotFoundException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::withInterfaceOrClassNameAndNonExistentConstantName( $interfaceOrClassName, $nonExistentConstantName, $code, $previous );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();
		$resultedThrowableCode      = $resultedThrowable->getCode();
		$resultedThrowablePrevious  = $resultedThrowable->getPrevious();

		static::assertInstanceOf( InterfaceOrClassConstantNotFoundException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
		static::assertSame( $expectedThrowableCode, $resultedThrowableCode );
		static::assertSame( $expectedThrowablePrevious, $resultedThrowablePrevious );
	}
}
