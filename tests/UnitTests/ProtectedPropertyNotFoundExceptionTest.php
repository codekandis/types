<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\ProtectedPropertyNotFoundException;
use CodeKandis\Types\Tests\DataProviders\UnitTests\ProtectedPropertyNotFoundExceptionTest\ThrowableClassNamesWithClassNamePropertyNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of `CodeKandis\Types\ProtectedPropertyNotFoundException`.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ProtectedPropertyNotFoundExceptionTest extends TestCase
{
	/**
	 * Tests if the method `ProtectedPropertyNotFoundException::with_classNameAndPropertyName()` instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param string $className The class name to pass.
	 * @param string $propertyName The property name to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithClassNamePropertyNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodWithClassNameAndMethodNameInstantiatesThrowableCorrectly( string $throwableClassName, string $className, string $propertyName, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		/**
		 * @var ProtectedPropertyNotFoundException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::with_classNameAndPropertyName( $className, $propertyName );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();

		static::assertInstanceOf( ProtectedPropertyNotFoundException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
	}
}
