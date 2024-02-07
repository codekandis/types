<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\Suites\Unit;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\OffsetOutOfRangeException;
use CodeKandis\Types\Tests\DataProviders\Unit\OffsetOutOfRangeExceptionTest\ThrowableClassNamesWithOutOfRangeOffsetAdditionalArgumentsExpectedThrowableClassNameExpectedThrowableCodeAndExpectedThrowablePrevious;
use CodeKandis\Types\Tests\DataProviders\Unit\OffsetOutOfRangeExceptionTest\ThrowableClassNamesWithOutOfRangeOffsetExpectedMinOffsetExpectedMaxOffsetAdditionalArgumentsExpectedThrowableClassNameExpectedThrowableCodeAndExpectedThrowablePrevious;
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
	 * @param class-string<OffsetOutOfRangeException> $throwableClassName The class name of the throwable to test.
	 * @param array<string, mixed> $mainArguments The main arguments to pass.
	 * @param array{code?: int, previous?: ?Throwable} $additionalArguments The additional arguments to pass.
	 * @param class-string<OffsetOutOfRangeException> $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 * @param int $expectedThrowableCode The code of the expected throwable.
	 * @param ?Throwable $expectedThrowablePrevious The previously catched throwable of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithOutOfRangeOffsetAdditionalArgumentsExpectedThrowableClassNameExpectedThrowableCodeAndExpectedThrowablePrevious::class, 'provideData' )]
	public function testIfMethodWithOutOfRangeOffsetInstantiatesThrowableCorrectly( string $throwableClassName, array $mainArguments, array $additionalArguments, string $expectedThrowableClassName, string $expectedThrowableMessage, int $expectedThrowableCode, ?Throwable $expectedThrowablePrevious ): void
	{
		$resultedThrowable          = $throwableClassName::withOutOfRangeOffset( ...$mainArguments, ...$additionalArguments );
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
	 * @param class-string<OffsetOutOfRangeException> $throwableClassName The class name of the throwable to test.
	 * @param array<string, mixed> $mainArguments The main arguments to pass.
	 * @param array{code?: int, previous?: ?Throwable} $additionalArguments The additional arguments to pass.
	 * @param class-string<OffsetOutOfRangeException> $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 * @param int $expectedThrowableCode The code of the expected throwable.
	 * @param ?Throwable $expectedThrowablePrevious The previously catched throwable of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithOutOfRangeOffsetExpectedMinOffsetExpectedMaxOffsetAdditionalArgumentsExpectedThrowableClassNameExpectedThrowableCodeAndExpectedThrowablePrevious::class, 'provideData' )]
	public function testIfMethodWithOutOfRangeOffsetExpectedMinOffsetAndExpectedMaxOffsetInstantiatesThrowableCorrectly( string $throwableClassName, array $mainArguments, array $additionalArguments, string $expectedThrowableClassName, string $expectedThrowableMessage, int $expectedThrowableCode, ?Throwable $expectedThrowablePrevious ): void
	{
		$resultedThrowable          = $throwableClassName::withOutOfRangeOffsetExpectedMinOffsetAndExpectedMaxOffset( ...$mainArguments, ...$additionalArguments );
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
