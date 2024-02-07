<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\InvalidIndexException;
use CodeKandis\Types\Tests\DataProviders\UnitTests\InvalidIndexExceptionTest\ThrowableClassNamesWithInvalidIndexExpectedIndicesExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\Types\Tests\DataProviders\UnitTests\InvalidIndexExceptionTest\ThrowableClassNamesWithInvalidIndexExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link InvalidIndexException}.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class InvalidIndexExceptionTest extends TestCase
{
	/**
	 * Tests if {@link InvalidIndexException::withInvalidIndex()} instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param mixed $invalidIndex The invalid index to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithInvalidIndexExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodWithInvalidIndexInstantiatesThrowableCorrectly( string $throwableClassName, mixed $invalidIndex, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		/**
		 * @var InvalidIndexException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::withInvalidIndex( $invalidIndex );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();

		static::assertInstanceOf( InvalidIndexException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
	}

	/**
	 * Tests if {@link InvalidIndexException::withInvalidIndexAndExpectedIndices()} instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param mixed $invalidIndex The invalid index to pass.
	 * @param mixed[] $expectedIndices The expected indices to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithInvalidIndexExpectedIndicesExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodWithInvalidIndexAndExpectedIndicesInstantiatesThrowableCorrectly( string $throwableClassName, mixed $invalidIndex, array $expectedIndices, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		/**
		 * @var InvalidIndexException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::withInvalidIndexAndExpectedIndices( $invalidIndex, ...$expectedIndices );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();

		static::assertInstanceOf( InvalidIndexException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
	}
}
