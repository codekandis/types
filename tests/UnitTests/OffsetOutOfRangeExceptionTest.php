<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\OffsetOutOfRangeException;
use CodeKandis\Types\Tests\DataProviders\UnitTests\OffsetOutOfRangeExceptionTest\ThrowableClassNamesWithOutOfRangeOffsetExpectedMinOffsetExpectedMaxOffsetExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\Types\Tests\DataProviders\UnitTests\OffsetOutOfRangeExceptionTest\ThrowableClassNamesWithOutOfRangeOffsetExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of `CodeKandis\Types\OffsetOutOfRangeException`.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class OffsetOutOfRangeExceptionTest extends TestCase
{
	/**
	 * Tests if the method `OffsetOutOfRangeException::with_outOfRangeOffset()` instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param mixed $outOfRangeOffset The invalid offset to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithOutOfRangeOffsetExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodWithOutOfRangeOffsetInstantiatesThrowableCorrectly( string $throwableClassName, mixed $outOfRangeOffset, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		/**
		 * @var OffsetOutOfRangeException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::with_outOfRangeOffset( $outOfRangeOffset );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();

		static::assertInstanceOf( OffsetOutOfRangeException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
	}

	/**
	 * Tests if the method `OffsetOutOfRangeException::with_outOfRangeOffsetExpectedMinOffsetAndExpectedMaxOffset()` instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param mixed $outOfRangeOffset The invalid offset to pass.
	 * @param string $expectedMinOffset The expected minimum offset to pass.
	 * @param string $expectedMaxOffset The expected maximum offset to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithOutOfRangeOffsetExpectedMinOffsetExpectedMaxOffsetExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodWithOutOfRangeOffsetExpectedMinOffsetAndExpectedMaxOffsetInstantiatesThrowableCorrectly( string $throwableClassName, mixed $outOfRangeOffset, string $expectedMinOffset, string $expectedMaxOffset, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		/**
		 * @var OffsetOutOfRangeException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::with_outOfRangeOffsetExpectedMinOffsetAndExpectedMaxOffset( $outOfRangeOffset, $expectedMinOffset, $expectedMaxOffset );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();

		static::assertInstanceOf( OffsetOutOfRangeException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
	}
}
