<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\InterfaceClassOrEnumNotFoundException;
use CodeKandis\Types\Tests\DataProviders\UnitTests\InterfaceClassOrEnumNotFoundExceptionTest\ThrowableClassNamesWithNonExistentInterfaceClassOrEnumNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link InterfaceClassOrEnumNotFoundException}.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class InterfaceClassOrEnumNotFoundExceptionTest extends TestCase
{
	/**
	 * Tests if {@link InterfaceClassOrEnumNotFoundException::withNonExistentInterfaceClassOrEnumName()} instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param string $nonExistentInterfaceClassOrEnumName The nonexistent interface, class or enum name to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithNonExistentInterfaceClassOrEnumNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodWithNonExistentInterfaceClassOrEnumNameInstantiatesThrowableCorrectly( string $throwableClassName, string $nonExistentInterfaceClassOrEnumName, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		/**
		 * @var InterfaceClassOrEnumNotFoundException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::withNonExistentInterfaceClassOrEnumName( $nonExistentInterfaceClassOrEnumName );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();

		static::assertInstanceOf( InterfaceClassOrEnumNotFoundException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
	}
}
