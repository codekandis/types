<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\DuplicateObjectException;
use CodeKandis\Types\ObjectNotFoundException;
use CodeKandis\Types\Tests\DataProviders\UnitTests\DuplicateObjectExceptionTest\ThrowableClassNamesWithDuplicatedObjectsClassNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\Types\Tests\DataProviders\UnitTests\DuplicateObjectExceptionTest\ThrowableClassNamesWithDuplicatedObjectsQualifiedIdExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link DuplicateObjectException}.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class DuplicateObjectExceptionTest extends TestCase
{
	/**
	 * Tests if {@link DuplicateObjectException::with_nonExistentObjectsClassName()} instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param mixed $duplicatedObjectsClassName The duplicated object's class name to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithDuplicatedObjectsClassNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodWithNonExistentObjectClassNameInstantiatesThrowableCorrectly( string $throwableClassName, mixed $duplicatedObjectsClassName, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		/**
		 * @var DuplicateObjectException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::with_duplicatedObjectsClassName( $duplicatedObjectsClassName );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();

		static::assertInstanceOf( DuplicateObjectException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
	}

	/**
	 * Tests if {@link ObjectNotFoundException::with_duplicatedObjectsQualifiedId(()} instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param mixed $duplicatedObjectsQualifiedId The duplicated object's qualified ID to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithDuplicatedObjectsQualifiedIdExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodWithNonExistentObjectQualifiedIdInstantiatesThrowableCorrectly( string $throwableClassName, mixed $duplicatedObjectsQualifiedId, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		/**
		 * @var DuplicateObjectException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::with_duplicatedObjectsQualifiedId( $duplicatedObjectsQualifiedId );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();

		static::assertInstanceOf( DuplicateObjectException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
	}
}
