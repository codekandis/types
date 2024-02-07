<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\InterfaceClassEnumOrTraitNotFoundException;
use CodeKandis\Types\Tests\DataProviders\UnitTests\InterfaceClassEnumOrTraitNotFoundExceptionTest\ThrowableClassNamesWithNonExistentInterfaceClassEnumOrTraitNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link InterfaceClassEnumOrTraitNotFoundException}.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class InterfaceClassEnumOrTraitNotFoundExceptionTest extends TestCase
{
	/**
	 * Tests if {@link InterfaceClassEnumOrTraitNotFoundException::with_nonExistentInterfaceClassEnumOrTraitName()} instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param string $nonExistentInterfaceClassEnumOrTraitName The nonexistent interface or class name to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithNonExistentInterfaceClassEnumOrTraitNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodWithNonExistentInterfaceClassEnumOrTraitNameInstantiatesThrowableCorrectly( string $throwableClassName, string $nonExistentInterfaceClassEnumOrTraitName, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		/**
		 * @var InterfaceClassEnumOrTraitNotFoundException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::with_nonExistentInterfaceClassEnumOrTraitName( $nonExistentInterfaceClassEnumOrTraitName );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();

		static::assertInstanceOf( InterfaceClassEnumOrTraitNotFoundException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
	}
}
