<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\StringBackedEnumNotFoundException;
use CodeKandis\Types\Tests\DataProviders\UnitTests\StringBackedEnumNotFoundExceptionTest\ThrowableClassNamesWithNonExistentStringBackedEnumNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of {@link StringBackedEnumNotFoundException}.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class StringBackedEnumNotFoundExceptionTest extends TestCase
{
	/**
	 * Tests if {@link StringBackedEnumNotFoundException::withNonExistentStringBackedEnumName()} instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param string $nonExistentStringBackedEnumName The nonexistent string backed enum name to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithNonExistentStringBackedEnumNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodWithNonExistentStringBackedEnumNameInstantiatesThrowableCorrectly( string $throwableClassName, string $nonExistentStringBackedEnumName, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		/**
		 * @var StringBackedEnumNotFoundException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::withNonExistentStringBackedEnumName( $nonExistentStringBackedEnumName );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();

		static::assertInstanceOf( StringBackedEnumNotFoundException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
	}
}
