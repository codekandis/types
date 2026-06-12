<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\Suites\Unit;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\Tests\DataProviders\Unit\UnexpectedErrorExceptionTest\ThrowableClassNamesWithPreviousThrowableExpectedThrowableClassNameExpectedThrowableMessageExpectedThrowablePreviousAndExpectedThrowableCodeDataProvider;
use CodeKandis\Types\UnexpectedErrorException;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use Throwable;

/**
 * Represents the test case of {@link UnexpectedErrorException}.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
final class UnexpectedErrorExceptionTest extends TestCase
{
	/**
	 * Tests if {@link UnexpectedErrorException::withPreviouslyCatchedThrowable()} instantiates the throwable correctly.
	 * @param class-string<UnexpectedErrorException> $throwableClassName The class name of the throwable to test.
	 * @param Throwable $previousThrowable The previous throwable to pass.
	 * @param int $code The error code to pass.
	 * @param class-string<UnexpectedErrorException> $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 * @param int $expectedThrowableCode The code of the expected throwable.
	 * @param Throwable $expectedThrowablePrevious The previous of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithPreviousThrowableExpectedThrowableClassNameExpectedThrowableMessageExpectedThrowablePreviousAndExpectedThrowableCodeDataProvider::class, 'provideData' )]
	public function testIfMethodWithPreviousThrowableInstantiatesThrowableCorrectly( string $throwableClassName, Throwable $previousThrowable, int $code, string $expectedThrowableClassName, string $expectedThrowableMessage, int $expectedThrowableCode, Throwable $expectedThrowablePrevious ): void
	{
		$resultedThrowable = $throwableClassName::withPreviouslyCatchedThrowable( $previousThrowable, $code );

		static::assertInstanceOf( UnexpectedErrorException::class, $resultedThrowable );

		$resultedThrowableClassName = $resultedThrowable::class;
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );

		$resultedThrowableMessage = $resultedThrowable->getMessage();
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );

		$resultedThrowableCode = $resultedThrowable->getCode();
		static::assertSame( $expectedThrowableCode, $resultedThrowableCode );

		$resultedThrowablePrevious = $resultedThrowable->getPrevious();
		static::assertSame( $expectedThrowablePrevious, $resultedThrowablePrevious );
	}
}
