<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\PropertyNotFoundException;
use CodeKandis\Types\Tests\DataProviders\UnitTests\PropertyNotFoundExceptionTest\ThrowableClassNamesWithClassNamePropertyNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of `CodeKandis\Types\PropertyNotFoundException`.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class PropertyNotFoundExceptionTest extends TestCase
{
	/**
	 * Tests if the method `PropertyNotFoundException::with_classNameAndPropertyName()` instantiates the throwable correctly.
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
		 * @var PropertyNotFoundException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::with_classNameAndPropertyName( $className, $propertyName );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();

		static::assertInstanceOf( PropertyNotFoundException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
	}
}
