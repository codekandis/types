<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\IndexOutOfRangeException;
use CodeKandis\Types\Tests\DataProviders\UnitTests\IndexOutOfRangeExceptionTest\ThrowableClassNamesWithOutOfRangeIndexExpectedMinIndexExpectedMaxIndexExpectedThrowableClassNameThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider;
use CodeKandis\Types\Tests\DataProviders\UnitTests\IndexOutOfRangeExceptionTest\ThrowableClassNamesWithOutOfRangeIndexExpectedThrowableClassNameThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use Throwable;

/**
 * Represents the test case of {@link IndexOutOfRangeException}.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class IndexOutOfRangeExceptionTest extends TestCase
{
	/**
	 * Tests if {@link IndexOutOfRangeException::withOutOfRangeIndex()} instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param mixed $outOfRangeIndex The out of range index to pass.
	 * @param int $code The error code to pass.
	 * @param ?Throwable $previous The previous throwable to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 * @param int $expectedThrowableCode The code of the expected throwable.
	 * @param ?Throwable $expectedThrowablePrevious The previously catched throwable of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithOutOfRangeIndexExpectedThrowableClassNameThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider::class, 'provideData' )]
	public function testIfMethodWithOutOfRangeIndexInstantiatesThrowableCorrectly( string $throwableClassName, mixed $outOfRangeIndex, int $code, ?Throwable $previous, string $expectedThrowableClassName, string $expectedThrowableMessage, int $expectedThrowableCode, ?Throwable $expectedThrowablePrevious ): void
	{
		/**
		 * @var IndexOutOfRangeException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::withOutOfRangeIndex( $outOfRangeIndex, $code, $previous );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();
		$resultedThrowableCode      = $resultedThrowable->getCode();
		$resultedThrowablePrevious  = $resultedThrowable->getPrevious();

		static::assertInstanceOf( IndexOutOfRangeException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
		static::assertSame( $expectedThrowableCode, $resultedThrowableCode );
		static::assertSame( $expectedThrowablePrevious, $resultedThrowablePrevious );
	}

	/**
	 * Tests if {@link IndexOutOfRangeException::withOutOfRangeIndexExpectedMinIndexAndExpectedMaxIndex()} instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param mixed $outOfRangeIndex The out of range index to pass.
	 * @param string $expectedMinIndex The expected minimum index to pass.
	 * @param string $expectedMaxIndex The expected maximum index to pass.
	 * @param int $code The error code to pass.
	 * @param ?Throwable $previous The previous throwable to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 * @param int $expectedThrowableCode The code of the expected throwable.
	 * @param ?Throwable $expectedThrowablePrevious The previously catched throwable of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithOutOfRangeIndexExpectedMinIndexExpectedMaxIndexExpectedThrowableClassNameThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider::class, 'provideData' )]
	public function testIfMethodWithOutOfRangeIndexExpectedMinIndexAndExpectedMaxIndexInstantiatesThrowableCorrectly( string $throwableClassName, mixed $outOfRangeIndex, string $expectedMinIndex, string $expectedMaxIndex, int $code, ?Throwable $previous, string $expectedThrowableClassName, string $expectedThrowableMessage, int $expectedThrowableCode, ?Throwable $expectedThrowablePrevious ): void
	{
		/**
		 * @var IndexOutOfRangeException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::withOutOfRangeIndexExpectedMinIndexAndExpectedMaxIndex( $outOfRangeIndex, $expectedMinIndex, $expectedMaxIndex, $code, $previous );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();
		$resultedThrowableCode      = $resultedThrowable->getCode();
		$resultedThrowablePrevious  = $resultedThrowable->getPrevious();

		static::assertInstanceOf( IndexOutOfRangeException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
		static::assertSame( $expectedThrowableCode, $resultedThrowableCode );
		static::assertSame( $expectedThrowablePrevious, $resultedThrowablePrevious );
	}
}
