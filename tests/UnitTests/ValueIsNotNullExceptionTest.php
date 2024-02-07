<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\Tests\DataProviders\UnitTests\ValueIsNotNullExceptionTest\ThrowableClassNamesWithNonNullValueExpectedThrowableClassNameExpectedThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider;
use CodeKandis\Types\ValueIsNotNullException;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use Throwable;

/**
 * Represents the test case of {@link ValueIsNotNullException}.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValueIsNotNullExceptionTest extends TestCase
{
	/**
	 * Tests if {@link ValueIsNotNullException::withNonNullValue()} instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param mixed $nonNullValue The nonnull value to pass.
	 * @param int $code The error code to pass.
	 * @param ?Throwable $previous The previous throwable to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 * @param int $expectedThrowableCode The code of the expected throwable.
	 * @param ?Throwable $expectedThrowablePrevious The previously catched throwable of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithNonNullValueExpectedThrowableClassNameExpectedThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider::class, 'provideData' )]
	public function testIfMethodWithValueIsNotNullInstantiatesThrowableCorrectly( string $throwableClassName, mixed $nonNullValue, int $code, ?Throwable $previous, string $expectedThrowableClassName, string $expectedThrowableMessage, int $expectedThrowableCode, ?Throwable $expectedThrowablePrevious ): void
	{
		/**
		 * @var ValueIsNotNullException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::withNonNullValue( $nonNullValue, $code, $previous );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();
		$resultedThrowableCode      = $resultedThrowable->getCode();
		$resultedThrowablePrevious  = $resultedThrowable->getPrevious();

		static::assertInstanceOf( ValueIsNotNullException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
		static::assertSame( $expectedThrowableCode, $resultedThrowableCode );
		static::assertSame( $expectedThrowablePrevious, $resultedThrowablePrevious );
	}
}
