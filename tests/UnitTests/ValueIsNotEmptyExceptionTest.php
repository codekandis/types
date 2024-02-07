<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\Tests\DataProviders\UnitTests\ValueIsNotEmptyExceptionTest\ThrowableClassNamesWithNonEmptyValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\Types\ValueIsNotEmptyException;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link ValueIsNotEmptyException}.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValueIsNotEmptyExceptionTest extends TestCase
{
	/**
	 * Tests if {@link ValueIsNotEmptyException::withNonEmptyValue()} instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param mixed $nonEmptyValue The nonempty value to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithNonEmptyValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodWithValueIsNotEmptyInstantiatesThrowableCorrectly( string $throwableClassName, mixed $nonEmptyValue, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		/**
		 * @var ValueIsNotEmptyException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::withNonEmptyValue( $nonEmptyValue );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();

		static::assertInstanceOf( ValueIsNotEmptyException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
	}
}
