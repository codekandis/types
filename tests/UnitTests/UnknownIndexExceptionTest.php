<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\Tests\DataProviders\UnitTests\UnknownIndexExceptionTest\ThrowableClassNamesWithUnknownIndexExpectedIndicesExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\Types\Tests\DataProviders\UnitTests\UnknownIndexExceptionTest\ThrowableClassNamesWithUnknownIndexExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\Types\UnknownIndexException;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link UnknownIndexException}.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class UnknownIndexExceptionTest extends TestCase
{
	/**
	 * Tests if {@link UnknownIndexException::with_unknownIndex()} instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param mixed $unknownIndex The unknown index to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithUnknownIndexExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodWithUnknownIndexInstantiatesThrowableCorrectly( string $throwableClassName, mixed $unknownIndex, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		/**
		 * @var UnknownIndexException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::with_unknownIndex( $unknownIndex );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();

		static::assertInstanceOf( UnknownIndexException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
	}

	/**
	 * Tests if {@link UnknownIndexException::with_unknownIndexAndExpectedTypes()} instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param mixed $unknownIndex The unknown index to pass.
	 * @param string[] $expectedIndices The expected indices to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithUnknownIndexExpectedIndicesExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodWithUnknownIndexAndExpectedIndicesInstantiatesThrowableCorrectly( string $throwableClassName, mixed $unknownIndex, array $expectedIndices, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		/**
		 * @var UnknownIndexException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::with_unknownIndexAndExpectedIndices( $unknownIndex, ...$expectedIndices );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();

		static::assertInstanceOf( UnknownIndexException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
	}
}
