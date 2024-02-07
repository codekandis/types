<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\InterfaceOrClassConstantValueNotFoundException;
use CodeKandis\Types\Tests\DataProviders\UnitTests\InterfaceOrClassConstantValueNotFoundExceptionTest\ThrowableClassNamesWithInterfaceOrClassNameNonExistentConstantValueExpectedThrowableClassNameThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use Throwable;

/**
 * Represents the test case of {@link InterfaceOrClassConstantValueNotFoundException}.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class InterfaceOrClassConstantValueNotFoundExceptionTest extends TestCase
{
	/**
	 * Tests if {@link InterfaceOrClassConstantValueNotFoundException::withInterfaceOrClassNameAndNonExistentConstantValue()} instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param string $interfaceOrClassName The interface or class name to pass.
	 * @param null | bool | int | float | string | array $nonExistentConstantValue The nonexistent constant value to pass.
	 * @param int $code The error code to pass.
	 * @param ?Throwable $previous The previous throwable to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 * @param int $expectedThrowableCode The code of the expected throwable.
	 * @param ?Throwable $expectedThrowablePrevious The previously catched throwable of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithInterfaceOrClassNameNonExistentConstantValueExpectedThrowableClassNameThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider::class, 'provideData' )]
	public function testIfMethodWithInterfaceOrClassNameAndNonExistentConstantValueInstantiatesThrowableCorrectly( string $throwableClassName, string $interfaceOrClassName, null | bool | int | float | string | array $nonExistentConstantValue, int $code, ?Throwable $previous, string $expectedThrowableClassName, string $expectedThrowableMessage, int $expectedThrowableCode, ?Throwable $expectedThrowablePrevious ): void
	{
		/**
		 * @var InterfaceOrClassConstantValueNotFoundException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::withInterfaceOrClassNameAndNonExistentConstantValue( $interfaceOrClassName, $nonExistentConstantValue, $code, $previous );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();
		$resultedThrowableCode      = $resultedThrowable->getCode();
		$resultedThrowablePrevious  = $resultedThrowable->getPrevious();

		static::assertInstanceOf( InterfaceOrClassConstantValueNotFoundException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
		static::assertSame( $expectedThrowableCode, $resultedThrowableCode );
		static::assertSame( $expectedThrowablePrevious, $resultedThrowablePrevious );
	}
}
