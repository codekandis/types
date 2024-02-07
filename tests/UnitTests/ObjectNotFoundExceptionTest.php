<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\ObjectNotFoundException;
use CodeKandis\Types\Tests\DataProviders\UnitTests\ObjectNotFoundExceptionTest\ThrowableClassNamesWithNonExistentObjectsClassNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\Types\Tests\DataProviders\UnitTests\ObjectNotFoundExceptionTest\ThrowableClassNamesWithNonExistentObjectsQualifiedIdExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;

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
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithNonExistentObjectsClassNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodWithNonExistentObjectClassNameInstantiatesThrowableCorrectly( string $throwableClassName, mixed $nonExistentObjectsClassName, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		/**
		 * @var ObjectNotFoundException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::withNonExistentObjectsClassName( $nonExistentObjectsClassName );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();

		static::assertInstanceOf( ObjectNotFoundException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
	}

	/**
	 * Tests if {@link ObjectNotFoundException::withNonExistentObjectsQualifiedId()} instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param mixed $nonExistentObjectsQualifiedId The nonexistent object's qualified ID to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithNonExistentObjectsQualifiedIdExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodWithNonExistentObjectQualifiedIdInstantiatesThrowableCorrectly( string $throwableClassName, mixed $nonExistentObjectsQualifiedId, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		/**
		 * @var ObjectNotFoundException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::withNonExistentObjectsQualifiedId( $nonExistentObjectsQualifiedId );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();

		static::assertInstanceOf( ObjectNotFoundException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
	}
}
