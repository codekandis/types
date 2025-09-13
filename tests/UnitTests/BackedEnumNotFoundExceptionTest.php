<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\BackedEnumNotFoundException;
use CodeKandis\Types\Tests\DataProviders\UnitTests\BackedEnumNotFoundExceptionTest\ThrowableClassNamesWithNonExistentBackedEnumNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link BackedEnumNotFoundException}.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class BackedEnumNotFoundExceptionTest extends TestCase
{
	/**
	 * Tests if {@link BackedEnumNotFoundException::withNonExistentBackedEnumName()} instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param string $nonExistentBackedEnumName The nonexistent backed enum name to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithNonExistentBackedEnumNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodWithNonExistentBackedEnumNameInstantiatesThrowableCorrectly( string $throwableClassName, string $nonExistentBackedEnumName, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		/**
		 * @var BackedEnumNotFoundException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::withNonExistentBackedEnumName( $nonExistentBackedEnumName );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();

		static::assertInstanceOf( BackedEnumNotFoundException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
	}
}
