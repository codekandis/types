<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\EnumNotFoundException;
use CodeKandis\Types\Tests\DataProviders\UnitTests\EnumNotFoundExceptionTest\ThrowableClassNamesWithEnumNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of `CodeKandis\Types\EnumNotFoundException`.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class EnumNotFoundExceptionTest extends TestCase
{
	/**
	 * Tests if the method `EnumNotFoundException::with_enumName()` instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param string $enumName The enum name to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithEnumNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodWithEnumNameInstantiatesThrowableCorrectly( string $throwableClassName, string $enumName, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		/**
		 * @var EnumNotFoundException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::with_enumName( $enumName );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();

		static::assertInstanceOf( EnumNotFoundException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
	}
}
