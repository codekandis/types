<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\InterfaceClassOrEnumNotFoundException;
use CodeKandis\Types\Tests\DataProviders\UnitTests\InterfaceClassOrEnumNotFoundExceptionTest\ThrowableClassNamesWithInterfaceClassOrEnumNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link InterfaceClassOrEnumNotFoundException}.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class InterfaceClassOrEnumNotFoundExceptionTest extends TestCase
{
	/**
	 * Tests if {@link InterfaceClassOrEnumNotFoundException::with_interfaceClassOrEnumName()} instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param string $interfaceClassOrEnumName The interface, class or enum name to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithInterfaceClassOrEnumNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodWithIntefaceClassOrEnumNameInstantiatesThrowableCorrectly( string $throwableClassName, string $interfaceClassOrEnumName, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		/**
		 * @var InterfaceClassOrEnumNotFoundException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::with_interfaceClassOrEnumName( $interfaceClassOrEnumName );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();

		static::assertInstanceOf( InterfaceClassOrEnumNotFoundException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
	}
}
