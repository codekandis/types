<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\Tests\DataProviders\UnitTests\ValueIsNotNullExceptionTest\ThrowableClassNamesWithNonNullValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\Types\ValueIsNotNullException;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link ValueIsNotNullException}.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValueIsNotNullExceptionTest extends TestCase
{
	/**
	 * Tests if {@link ValueIsNotNullException::with_nonNullValue()} instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param mixed $nonNullValue The nonnull value to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithNonNullValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodWithValueIsNotNullInstantiatesThrowableCorrectly( string $throwableClassName, mixed $nonNullValue, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		/**
		 * @var ValueIsNotNullException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::with_nonNullValue( $nonNullValue );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();

		static::assertInstanceOf( ValueIsNotNullException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
	}
}
