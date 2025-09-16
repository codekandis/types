<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\IntegerBackedEnumNotFoundException;
use CodeKandis\Types\Tests\DataProviders\UnitTests\IntegerBackedEnumNotFoundExceptionTest\ThrowableClassNamesWithNonExistentIntegerBackedEnumNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link IntegerBackedEnumNotFoundException}.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class IntegerBackedEnumNotFoundExceptionTest extends TestCase
{
	/**
	 * Tests if {@link IntegerBackedEnumNotFoundException::withNonExistentIntegerBackedEnumName()} instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param string $nonExistentIntegerBackedEnumName The nonexistent integer backed enum name to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithNonExistentIntegerBackedEnumNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodWithNonExistentIntegerBackedEnumNameInstantiatesThrowableCorrectly( string $throwableClassName, string $nonExistentIntegerBackedEnumName, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		/**
		 * @var IntegerBackedEnumNotFoundException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::withNonExistentIntegerBackedEnumName( $nonExistentIntegerBackedEnumName );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();

		static::assertInstanceOf( IntegerBackedEnumNotFoundException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
	}
}
