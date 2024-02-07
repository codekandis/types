<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\InvalidValueExceptionInterface;
use CodeKandis\Types\Tests\DataProviders\InvalidValueExceptionInterfaceTest\ThrowableClassNamesWithInvalidValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\Types\Tests\DataProviders\InvalidValueExceptionInterfaceTest\ThrowableClassNamesWithInvalidValueExpectedValuesExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of `CodeKandis\Types\InvalidValueExceptionInterface`.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class InvalidValueExceptionInterfaceTest extends TestCase
{
	/**
	 * Tests if the method `InvalidValueExceptionInterface::with_invalidValue()` instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param mixed $invalidValue The invalid value to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithInvalidValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodWithInvalidValueInstantiatesThrowableCorrectly( string $throwableClassName, mixed $invalidValue, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		$resultedThrowable          = $throwableClassName::{'with_invalidValue'}( $invalidValue );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();

		static::assertInstanceOf( InvalidValueExceptionInterface::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
	}

	/**
	 * Tests if the method `InvalidValueExceptionInterface::with_invalidValueAndExpectedTypes()` instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param mixed $invalidValue The invalid value to pass.
	 * @param string[] $expectedValues The expected values to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithInvalidValueExpectedValuesExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodWithInvalidValueAndExpectedValuesInstantiatesThrowableCorrectly( string $throwableClassName, mixed $invalidValue, array $expectedValues, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		$resultedThrowable          = $throwableClassName::{'with_invalidValueAndExpectedValues'}( $invalidValue, ...$expectedValues );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();

		static::assertInstanceOf( InvalidValueExceptionInterface::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
	}
}
