<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\IndexOutOfRangeException;
use CodeKandis\Types\Tests\DataProviders\UnitTests\IndexOutOfRangeExceptionTest\ThrowableClassNamesWithOutOfRangeIndexExpectedMinIndexExpectedMaxIndexExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\Types\Tests\DataProviders\UnitTests\IndexOutOfRangeExceptionTest\ThrowableClassNamesWithOutOfRangeIndexExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link IndexOutOfRangeException}.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class IndexOutOfRangeExceptionTest extends TestCase
{
	/**
	 * Tests if {@link IndexOutOfRangeException::with_outOfRangeIndex()} instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param mixed $outOfRangeIndex The invalid index to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithOutOfRangeIndexExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodWithOutOfRangeIndexInstantiatesThrowableCorrectly( string $throwableClassName, mixed $outOfRangeIndex, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		/**
		 * @var IndexOutOfRangeException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::with_outOfRangeIndex( $outOfRangeIndex );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();

		static::assertInstanceOf( IndexOutOfRangeException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
	}

	/**
	 * Tests if {@link IndexOutOfRangeException::with_outOfRangeIndexExpectedMinIndexAndExpectedMaxIndex()} instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param mixed $outOfRangeIndex The invalid index to pass.
	 * @param string $expectedMinIndex The expected minimum index to pass.
	 * @param string $expectedMaxIndex The expected maximum index to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithOutOfRangeIndexExpectedMinIndexExpectedMaxIndexExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodWithOutOfRangeIndexExpectedMinIndexAndExpectedMaxIndexInstantiatesThrowableCorrectly( string $throwableClassName, mixed $outOfRangeIndex, string $expectedMinIndex, string $expectedMaxIndex, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		/**
		 * @var IndexOutOfRangeException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::with_outOfRangeIndexExpectedMinIndexAndExpectedMaxIndex( $outOfRangeIndex, $expectedMinIndex, $expectedMaxIndex );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();

		static::assertInstanceOf( IndexOutOfRangeException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
	}
}
