<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\OffsetOutOfRangeException;
use CodeKandis\Types\Tests\DataProviders\UnitTests\OffsetOutOfRangeExceptionTest\ThrowableClassNamesWithOutOfRangeOffsetExpectedMinOffsetExpectedMaxOffsetExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\Types\Tests\DataProviders\UnitTests\OffsetOutOfRangeExceptionTest\ThrowableClassNamesWithOutOfRangeOffsetExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link OffsetOutOfRangeException}.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class OffsetOutOfRangeExceptionTest extends TestCase
{
	/**
	 * Tests if {@link OffsetOutOfRangeException::withOutOfRangeOffset()} instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param int $outOfRangeOffset The out of range offset to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithOutOfRangeOffsetExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodWithOutOfRangeOffsetInstantiatesThrowableCorrectly( string $throwableClassName, int $outOfRangeOffset, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		/**
		 * @var OffsetOutOfRangeException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::withOutOfRangeOffset( $outOfRangeOffset );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();

		static::assertInstanceOf( OffsetOutOfRangeException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
	}

	/**
	 * Tests if {@link OffsetOutOfRangeException::withOutOfRangeOffsetExpectedMinOffsetAndExpectedMaxOffset()} instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param int $outOfRangeOffset The out of range offset to pass.
	 * @param string $expectedMinOffset The expected minimum offset to pass.
	 * @param string $expectedMaxOffset The expected maximum offset to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithOutOfRangeOffsetExpectedMinOffsetExpectedMaxOffsetExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodWithOutOfRangeOffsetExpectedMinOffsetAndExpectedMaxOffsetInstantiatesThrowableCorrectly( string $throwableClassName, int $outOfRangeOffset, string $expectedMinOffset, string $expectedMaxOffset, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		/**
		 * @var OffsetOutOfRangeException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::withOutOfRangeOffsetExpectedMinOffsetAndExpectedMaxOffset( $outOfRangeOffset, $expectedMinOffset, $expectedMaxOffset );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();

		static::assertInstanceOf( OffsetOutOfRangeException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
	}
}
