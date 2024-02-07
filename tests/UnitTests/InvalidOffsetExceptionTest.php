<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\InvalidOffsetException;
use CodeKandis\Types\Tests\DataProviders\UnitTests\InvalidOffsetExceptionTest\ThrowableClassNamesWithInvalidOffsetExpectedOffsetsExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\Types\Tests\DataProviders\UnitTests\InvalidOffsetExceptionTest\ThrowableClassNamesWithInvalidOffsetExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link InvalidOffsetException}.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class InvalidOffsetExceptionTest extends TestCase
{
	/**
	 * Tests if {@link InvalidOffsetException::withInvalidOffset()} instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param int $invalidOffset The invalid offset to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithInvalidOffsetExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodWithInvalidOffsetInstantiatesThrowableCorrectly( string $throwableClassName, int $invalidOffset, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		/**
		 * @var InvalidOffsetException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::withInvalidOffset( $invalidOffset );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();

		static::assertInstanceOf( InvalidOffsetException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
	}

	/**
	 * Tests if {@link InvalidOffsetException::withInvalidOffsetAndExpectedOffsets()} instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param int $invalidOffset The invalid offset to pass.
	 * @param mixed[] $expectedOffsets The expected offsets to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithInvalidOffsetExpectedOffsetsExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodWithInvalidOffsetAndExpectedOffsetsInstantiatesThrowableCorrectly( string $throwableClassName, int $invalidOffset, array $expectedOffsets, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		/**
		 * @var InvalidOffsetException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::withInvalidOffsetAndExpectedOffsets( $invalidOffset, ...$expectedOffsets );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();

		static::assertInstanceOf( InvalidOffsetException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
	}
}
