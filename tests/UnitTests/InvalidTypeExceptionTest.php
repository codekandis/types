<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\InvalidTypeException;
use CodeKandis\Types\Tests\DataProviders\UnitTests\InvalidTypeExceptionTest\ThrowableClassNamesWithInvalidTypeExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\Types\Tests\DataProviders\UnitTests\InvalidTypeExceptionTest\ThrowableClassNamesWithInvalidTypeExpectedTypesExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link InvalidTypeException}.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class InvalidTypeExceptionTest extends TestCase
{
	/**
	 * Tests if {@link InvalidTypeException::withInvalidType()} instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param string $invalidType The invalid type to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithInvalidTypeExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodWithInvalidTypeInstantiatesThrowableCorrectly( string $throwableClassName, string $invalidType, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		/**
		 * @var InvalidTypeException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::withInvalidType( $invalidType );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();

		static::assertInstanceOf( InvalidTypeException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
	}

	/**
	 * Tests if {@link InvalidTypeException::withInvalidTypeAndExpectedTypes()} instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param string $invalidType The invalid type to pass.
	 * @param string[] $expectedTypes The expected types to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithInvalidTypeExpectedTypesExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodWithInvalidTypeAndExpectedTypesInstantiatesThrowableCorrectly( string $throwableClassName, string $invalidType, array $expectedTypes, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		/**
		 * @var InvalidTypeException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::withInvalidTypeAndExpectedTypes( $invalidType, ...$expectedTypes );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();

		static::assertInstanceOf( InvalidTypeException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
	}
}
