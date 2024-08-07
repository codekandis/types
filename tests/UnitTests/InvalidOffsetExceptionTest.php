<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\InvalidOffsetException;
use CodeKandis\Types\Tests\DataProviders\UnitTests\InvalidOffsetExceptionTest\ThrowableClassNamesWithInvalidOffsetExpectedOffsetsExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\Types\Tests\DataProviders\UnitTests\InvalidOffsetExceptionTest\ThrowableClassNamesWithInvalidOffsetExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of `CodeKandis\Types\InvalidOffsetException`.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class InvalidOffsetExceptionTest extends TestCase
{
	/**
	 * Tests if the method `InvalidOffsetException::with_invalidOffset()` instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param mixed $invalidOffset The invalid offset to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithInvalidOffsetExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodWithInvalidOffsetInstantiatesThrowableCorrectly( string $throwableClassName, mixed $invalidOffset, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		/**
		 * @var InvalidOffsetException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::with_invalidOffset( $invalidOffset );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();

		static::assertInstanceOf( InvalidOffsetException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
	}

	/**
	 * Tests if the method `InvalidOffsetException::with_invalidOffsetAndExpectedTypes()` instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param mixed $invalidOffset The invalid offset to pass.
	 * @param mixed[] $expectedOffsets The expected offsets to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithInvalidOffsetExpectedOffsetsExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodWithInvalidOffsetAndExpectedOffsetsInstantiatesThrowableCorrectly( string $throwableClassName, mixed $invalidOffset, array $expectedOffsets, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		/**
		 * @var InvalidOffsetException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::with_invalidOffsetAndExpectedOffsets( $invalidOffset, ...$expectedOffsets );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();

		static::assertInstanceOf( InvalidOffsetException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
	}
}
