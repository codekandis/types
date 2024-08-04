<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\UnitTests;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\Tests\DataProviders\UnitTests\TraitNotFoundExceptionTest\ThrowableClassNamesWithTraitNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\Types\TraitNotFoundException;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of `CodeKandis\Types\TraitNotFoundException`.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class TraitNotFoundExceptionTest extends TestCase
{
	/**
	 * Tests if the method `TraitNotFoundException::with_traitName()` instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param string $traitName The trait name to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithTraitNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodWithTraitNameInstantiatesThrowableCorrectly( string $throwableClassName, string $traitName, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		/**
		 * @var TraitNotFoundException $throwableClassName
		 */
		$resultedThrowable          = $throwableClassName::with_traitName( $traitName );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();

		static::assertInstanceOf( TraitNotFoundException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
	}
}
