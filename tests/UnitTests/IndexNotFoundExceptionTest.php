<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\IndexNotFoundException;
use CodeKandis\Types\Tests\DataProviders\UnitTests\IndexNotFoundExceptionTest\ThrowableClassNamesWithNonExistentIndexExpectedIndicesExpectedThrowableClassNameThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider;
use CodeKandis\Types\Tests\DataProviders\UnitTests\IndexNotFoundExceptionTest\ThrowableClassNamesWithNonExistentIndexExpectedThrowableClassNameThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use Throwable;

/**
 * Represents the test case of {@link IndexNotFoundException}.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class IndexNotFoundExceptionTest extends TestCase
{
	/**
	 * Tests if {@link IndexNotFoundException::withNonExistentIndex()} instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param mixed $nonExistentIndex The nonexistent index to pass.
	 * @param int $code The error code to pass.
	 * @param ?Throwable $previous The previous throwable to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 * @param int $expectedThrowableCode The code of the expected throwable.
	 * @param ?Throwable $expectedThrowablePrevious The previously catched throwable of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithNonExistentIndexExpectedThrowableClassNameThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider::class, 'provideData' )]
	public function testIfMethodWithNonExistentIndexInstantiatesThrowableCorrectly( string $throwableClassName, mixed $nonExistentIndex, int $code, ?Throwable $previous, string $expectedThrowableClassName, string $expectedThrowableMessage, int $expectedThrowableCode, ?Throwable $expectedThrowablePrevious ): void
	{
		/**
		 * @var IndexNotFoundException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::withNonExistentIndex( $nonExistentIndex, $code, $previous );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();
		$resultedThrowableCode      = $resultedThrowable->getCode();
		$resultedThrowablePrevious  = $resultedThrowable->getPrevious();

		static::assertInstanceOf( IndexNotFoundException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
		static::assertSame( $expectedThrowableCode, $resultedThrowableCode );
		static::assertSame( $expectedThrowablePrevious, $resultedThrowablePrevious );
	}

	/**
	 * Tests if {@link IndexNotFoundException::withNonExistentIndexAndExpectedIndices()} instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param mixed $nonExistentIndex The nonexistent index to pass.
	 * @param string[] $expectedIndices The expected indices to pass.
	 * @param int $code The error code to pass.
	 * @param ?Throwable $previous The previous throwable to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 * @param int $expectedThrowableCode The code of the expected throwable.
	 * @param ?Throwable $expectedThrowablePrevious The previously catched throwable of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithNonExistentIndexExpectedIndicesExpectedThrowableClassNameThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider::class, 'provideData' )]
	public function testIfMethodWithNonExistentIndexAndExpectedIndicesInstantiatesThrowableCorrectly( string $throwableClassName, mixed $nonExistentIndex, array $expectedIndices, int $code, ?Throwable $previous, string $expectedThrowableClassName, string $expectedThrowableMessage, int $expectedThrowableCode, ?Throwable $expectedThrowablePrevious ): void
	{
		/**
		 * @var IndexNotFoundException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::withNonExistentIndexAndExpectedIndices( $nonExistentIndex, $expectedIndices, $code, $previous );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();
		$resultedThrowableCode      = $resultedThrowable->getCode();
		$resultedThrowablePrevious  = $resultedThrowable->getPrevious();

		static::assertInstanceOf( IndexNotFoundException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
		static::assertSame( $expectedThrowableCode, $resultedThrowableCode );
		static::assertSame( $expectedThrowablePrevious, $resultedThrowablePrevious );
	}
}
