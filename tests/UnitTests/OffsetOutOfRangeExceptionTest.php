<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\OffsetOutOfRangeException;
use CodeKandis\Types\Tests\DataProviders\UnitTests\OffsetOutOfRangeExceptionTest\ThrowableClassNamesWithOutOfRangeOffsetExpectedMinOffsetExpectedMaxOffsetExpectedThrowableClassNameThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider;
use CodeKandis\Types\Tests\DataProviders\UnitTests\OffsetOutOfRangeExceptionTest\ThrowableClassNamesWithOutOfRangeOffsetExpectedThrowableClassNameThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use Throwable;

/**
 * Represents the test case of {@link OffsetOutOfRangeException}.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class OffsetOutOfRangeExceptionTest extends TestCase
{
	/**
	 * Tests if {@link OffsetOutOfRangeException::withOutOfRangeOffset()} instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param int $outOfRangeOffset The out of range offset to pass.
	 * @param int $code The error code to pass.
	 * @param ?Throwable $previous The previous throwable to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 * @param int $expectedThrowableCode The code of the expected throwable.
	 * @param ?Throwable $expectedThrowablePrevious The previously catched throwable of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithOutOfRangeOffsetExpectedThrowableClassNameThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider::class, 'provideData' )]
	public function testIfMethodWithOutOfRangeOffsetInstantiatesThrowableCorrectly( string $throwableClassName, int $outOfRangeOffset, int $code, ?Throwable $previous, string $expectedThrowableClassName, string $expectedThrowableMessage, int $expectedThrowableCode, ?Throwable $expectedThrowablePrevious ): void
	{
		/**
		 * @var OffsetOutOfRangeException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::withOutOfRangeOffset( $outOfRangeOffset, $code, $previous );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();
		$resultedThrowableCode      = $resultedThrowable->getCode();
		$resultedThrowablePrevious  = $resultedThrowable->getPrevious();

		static::assertInstanceOf( OffsetOutOfRangeException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
		static::assertSame( $expectedThrowableCode, $resultedThrowableCode );
		static::assertSame( $expectedThrowablePrevious, $resultedThrowablePrevious );
	}

	/**
	 * Tests if {@link OffsetOutOfRangeException::withOutOfRangeOffsetExpectedMinOffsetAndExpectedMaxOffset()} instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param int $outOfRangeOffset The out of range offset to pass.
	 * @param string $expectedMinOffset The expected minimum offset to pass.
	 * @param string $expectedMaxOffset The expected maximum offset to pass.
	 * @param int $code The error code to pass.
	 * @param ?Throwable $previous The previous throwable to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 * @param int $expectedThrowableCode The code of the expected throwable.
	 * @param ?Throwable $expectedThrowablePrevious The previously catched throwable of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithOutOfRangeOffsetExpectedMinOffsetExpectedMaxOffsetExpectedThrowableClassNameThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider::class, 'provideData' )]
	public function testIfMethodWithOutOfRangeOffsetExpectedMinOffsetAndExpectedMaxOffsetInstantiatesThrowableCorrectly( string $throwableClassName, int $outOfRangeOffset, string $expectedMinOffset, string $expectedMaxOffset, int $code, ?Throwable $previous, string $expectedThrowableClassName, string $expectedThrowableMessage, int $expectedThrowableCode, ?Throwable $expectedThrowablePrevious ): void
	{
		/**
		 * @var OffsetOutOfRangeException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::withOutOfRangeOffsetExpectedMinOffsetAndExpectedMaxOffset( $outOfRangeOffset, $expectedMinOffset, $expectedMaxOffset, $code, $previous );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();
		$resultedThrowableCode      = $resultedThrowable->getCode();
		$resultedThrowablePrevious  = $resultedThrowable->getPrevious();

		static::assertInstanceOf( OffsetOutOfRangeException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
		static::assertSame( $expectedThrowableCode, $resultedThrowableCode );
		static::assertSame( $expectedThrowablePrevious, $resultedThrowablePrevious );
	}
}
