<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\ConstantNotFoundException;
use CodeKandis\Types\Tests\DataProviders\UnitTests\ConstantNotFoundExceptionTest\ThrowableClassNamesWithNonExistentConstantNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link ConstantNotFoundException}.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ConstantNotFoundExceptionTest extends TestCase
{
	/**
	 * Tests if {@link ConstantNotFoundException::withNonExistentConstantName()} instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param string $nonExistentConstantName The nonexistent constant name to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithNonExistentConstantNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodWithInterfaceOrClassNameAndNonExistentConstantNameInstantiatesThrowableCorrectly( string $throwableClassName, string $nonExistentConstantName, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		/**
		 * @var ConstantNotFoundException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::withNonExistentConstantName( $nonExistentConstantName );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();

		static::assertInstanceOf( ConstantNotFoundException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
	}
}
