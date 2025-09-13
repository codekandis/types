<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\InterfaceOrClassConstantValueNotFoundException;
use CodeKandis\Types\Tests\DataProviders\UnitTests\InterfaceOrClassConstantValueNotFoundExceptionTest\ThrowableClassNamesWithInterfaceOrClassNameNonExistentConstantValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link InterfaceOrClassConstantValueNotFoundException}.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class InterfaceOrClassConstantValueNotFoundExceptionTest extends TestCase
{
	/**
	 * Tests if {@link InterfaceOrClassConstantValueNotFoundException::withInterfaceOrClassNameAndNonExistentConstantValue()} instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param string $interfaceOrClassName The interface or class name to pass.
	 * @param null | bool | int | float | string | array $nonExistentConstantValue The nonexistent constant value to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithInterfaceOrClassNameNonExistentConstantValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodWithInterfaceOrClassNameAndNonExistentConstantValueInstantiatesThrowableCorrectly( string $throwableClassName, string $interfaceOrClassName, null | bool | int | float | string | array $nonExistentConstantValue, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		/**
		 * @var InterfaceOrClassConstantValueNotFoundException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::withInterfaceOrClassNameAndNonExistentConstantValue( $interfaceOrClassName, $nonExistentConstantValue );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();

		static::assertInstanceOf( InterfaceOrClassConstantValueNotFoundException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
	}
}
