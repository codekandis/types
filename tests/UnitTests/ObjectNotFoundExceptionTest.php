<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\ObjectNotFoundException;
use CodeKandis\Types\Tests\DataProviders\UnitTests\ObjectNotFoundExceptionTest\ThrowableClassNamesWithNonExistentObjectsClassNameExpectedThrowableClassNameThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider;
use CodeKandis\Types\Tests\DataProviders\UnitTests\ObjectNotFoundExceptionTest\ThrowableClassNamesWithNonExistentObjectsQualifiedIdExpectedThrowableClassNameThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use Throwable;

/**
 * Represents the test case of {@link ObjectNotFoundException}.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ObjectNotFoundExceptionTest extends TestCase
{
	/**
	 * Tests if {@link ObjectNotFoundException::withNonExistentObjectsClassName()} instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param mixed $nonExistentObjectsClassName The nonexistent object's class name to pass.
	 * @param int $code The error code to pass.
	 * @param ?Throwable $previous The previous throwable to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 * @param int $expectedThrowableCode The code of the expected throwable.
	 * @param ?Throwable $expectedThrowablePrevious The previously catched throwable of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithNonExistentObjectsClassNameExpectedThrowableClassNameThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider::class, 'provideData' )]
	public function testIfMethodWithNonExistentObjectClassNameInstantiatesThrowableCorrectly( string $throwableClassName, mixed $nonExistentObjectsClassName, int $code, ?Throwable $previous, string $expectedThrowableClassName, string $expectedThrowableMessage, int $expectedThrowableCode, ?Throwable $expectedThrowablePrevious ): void
	{
		/**
		 * @var ObjectNotFoundException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::withNonExistentObjectsClassName( $nonExistentObjectsClassName, $code, $previous );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();
		$resultedThrowableCode      = $resultedThrowable->getCode();
		$resultedThrowablePrevious  = $resultedThrowable->getPrevious();

		static::assertInstanceOf( ObjectNotFoundException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
		static::assertSame( $expectedThrowableCode, $resultedThrowableCode );
		static::assertSame( $expectedThrowablePrevious, $resultedThrowablePrevious );
	}

	/**
	 * Tests if {@link ObjectNotFoundException::withNonExistentObjectsQualifiedId()} instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param mixed $nonExistentObjectsQualifiedId The nonexistent object's qualified ID to pass.
	 * @param int $code The error code to pass.
	 * @param ?Throwable $previous The previous throwable to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 * @param int $expectedThrowableCode The code of the expected throwable.
	 * @param ?Throwable $expectedThrowablePrevious The previously catched throwable of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithNonExistentObjectsQualifiedIdExpectedThrowableClassNameThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider::class, 'provideData' )]
	public function testIfMethodWithNonExistentObjectQualifiedIdInstantiatesThrowableCorrectly( string $throwableClassName, mixed $nonExistentObjectsQualifiedId, int $code, ?Throwable $previous, string $expectedThrowableClassName, string $expectedThrowableMessage, int $expectedThrowableCode, ?Throwable $expectedThrowablePrevious ): void
	{
		/**
		 * @var ObjectNotFoundException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::withNonExistentObjectsQualifiedId( $nonExistentObjectsQualifiedId, $code, $previous );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();
		$resultedThrowableCode      = $resultedThrowable->getCode();
		$resultedThrowablePrevious  = $resultedThrowable->getPrevious();

		static::assertInstanceOf( ObjectNotFoundException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
		static::assertSame( $expectedThrowableCode, $resultedThrowableCode );
		static::assertSame( $expectedThrowablePrevious, $resultedThrowablePrevious );
	}
}
