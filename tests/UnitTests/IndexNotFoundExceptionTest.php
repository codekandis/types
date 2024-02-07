<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\IndexNotFoundException;
use CodeKandis\Types\Tests\DataProviders\UnitTests\IndexNotFoundExceptionTest\ThrowableClassNamesWithNonExistentIndexExpectedIndicesExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\Types\Tests\DataProviders\UnitTests\IndexNotFoundExceptionTest\ThrowableClassNamesWithNonExistentIndexExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link IndexNotFoundException}.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class IndexNotFoundExceptionTest extends TestCase
{
	/**
	 * Tests if {@link IndexNotFoundException::with_nonExistentIndex()} instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param mixed $nonExistentIndex The nonexistent index to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithNonExistentIndexExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodWithNonExistentIndexInstantiatesThrowableCorrectly( string $throwableClassName, mixed $nonExistentIndex, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		/**
		 * @var IndexNotFoundException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::with_nonExistentIndex( $nonExistentIndex );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();

		static::assertInstanceOf( IndexNotFoundException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
	}

	/**
	 * Tests if {@link IndexNotFoundException::with_nonExistentIndexAndExpectedIndices()} instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param mixed $nonExistentIndex The nonexistent index to pass.
	 * @param string[] $expectedIndices The expected indices to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithNonExistentIndexExpectedIndicesExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodWithNonExistentIndexAndExpectedIndicesInstantiatesThrowableCorrectly( string $throwableClassName, mixed $nonExistentIndex, array $expectedIndices, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		/**
		 * @var IndexNotFoundException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::with_nonExistentIndexAndExpectedIndices( $nonExistentIndex, ...$expectedIndices );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();

		static::assertInstanceOf( IndexNotFoundException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
	}
}
