<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\Tests\DataProviders\UnitTests\UnexpectedErrorExceptionTest\ThrowableClassNamesWithUnexpectedErrorExpectedThrowableClassNameExpectedThrowableMessageAndExpectedThrowablePreviousDataProvider;
use CodeKandis\Types\UnexpectedErrorException;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use Throwable;

/**
 * Represents the test case of `CodeKandis\Types\UnexpectedErrorException`.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class UnexpectedErrorExceptionTest extends TestCase
{
	/**
	 * Tests if the method `UnexpectedErrorException::with_previousThrowable()` instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param Throwable $previousThrowable The previous throwable to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 * @param Throwable $expectedThrowablePrevious The previous of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithUnexpectedErrorExpectedThrowableClassNameExpectedThrowableMessageAndExpectedThrowablePreviousDataProvider::class, 'provideData' )]
	public function testIfMethodWithUnexpectedErrorInstantiatesThrowableCorrectly( string $throwableClassName, Throwable $previousThrowable, string $expectedThrowableClassName, string $expectedThrowableMessage, Throwable $expectedThrowablePrevious ): void
	{
		/**
		 * @var UnexpectedErrorException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::with_previousThrowable( $previousThrowable );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();
		$resultedThrowablePrevious  = $resultedThrowable->getPrevious();

		static::assertInstanceOf( UnexpectedErrorException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
		static::assertSame( $expectedThrowablePrevious, $resultedThrowablePrevious );
	}
}
