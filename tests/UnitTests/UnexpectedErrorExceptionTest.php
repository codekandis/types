<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\Tests\DataProviders\UnitTests\UnexpectedErrorExceptionTest\ThrowableClassNamesWithPreviousThrowableExpectedThrowableClassNameExpectedThrowableMessageExpectedThrowablePreviousAndExpectedThrowableCodeDataProvider;
use CodeKandis\Types\UnexpectedErrorException;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use Throwable;

/**
 * Represents the test case of {@link UnexpectedErrorException}.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class UnexpectedErrorExceptionTest extends TestCase
{
	/**
	 * Tests if {@link UnexpectedErrorException::withPreviouslyCatchedThrowable()} instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param Throwable $previousThrowable The previous throwable to pass.
	 * @param int $code The error code to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 * @param int $expectedThrowableCode The code of the expected throwable.
	 * @param Throwable $expectedThrowablePrevious The previous of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithPreviousThrowableExpectedThrowableClassNameExpectedThrowableMessageExpectedThrowablePreviousAndExpectedThrowableCodeDataProvider::class, 'provideData' )]
	public function testIfMethodWithPreviousThrowableInstantiatesThrowableCorrectly( string $throwableClassName, Throwable $previousThrowable, int $code, string $expectedThrowableClassName, string $expectedThrowableMessage, int $expectedThrowableCode, Throwable $expectedThrowablePrevious ): void
	{
		/**
		 * @var UnexpectedErrorException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::withPreviouslyCatchedThrowable( $previousThrowable, $code );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();
		$resultedThrowableCode      = $resultedThrowable->getCode();
		$resultedThrowablePrevious  = $resultedThrowable->getPrevious();

		static::assertInstanceOf( UnexpectedErrorException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
		static::assertSame( $expectedThrowableCode, $resultedThrowableCode );
		static::assertSame( $expectedThrowablePrevious, $resultedThrowablePrevious );
	}
}
