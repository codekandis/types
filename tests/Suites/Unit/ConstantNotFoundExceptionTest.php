<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\Suites\Unit;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\ConstantNotFoundException;
use CodeKandis\Types\Tests\DataProviders\Unit\ConstantNotFoundExceptionTest\ThrowableClassNamesWithNonexistentConstantNameAdditionalArgumentsExpectedThrowableClassNameExpectedThrowableCodeAndExpectedThrowablePrevious;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use Throwable;

/**
 * Represents the test case of {@link ConstantNotFoundException}.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ConstantNotFoundExceptionTest extends TestCase
{
	/**
	 * Tests if {@link ConstantNotFoundException::withNonexistentConstantName()} instantiates the throwable correctly.
	 * @param class-string<ConstantNotFoundException> $throwableClassName The class name of the throwable to test.
	 * @param array<string, mixed> $mainArguments The main arguments to pass.
	 * @param array{code?: int, previous?: ?Throwable} $additionalArguments The additional arguments to pass.
	 * @param class-string<ConstantNotFoundException> $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 * @param int $expectedThrowableCode The code of the expected throwable.
	 * @param ?Throwable $expectedThrowablePrevious The previously catched throwable of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithNonexistentConstantNameAdditionalArgumentsExpectedThrowableClassNameExpectedThrowableCodeAndExpectedThrowablePrevious::class, 'provideData' )]
	public function testIfMethodWithInterfaceOrClassNameAndNonExistentConstantNameInstantiatesThrowableCorrectly( string $throwableClassName, array $mainArguments, array $additionalArguments, string $expectedThrowableClassName, string $expectedThrowableMessage, int $expectedThrowableCode, ?Throwable $expectedThrowablePrevious ): void
	{
		$resultedThrowable          = $throwableClassName::withNonexistentConstantName( ...$mainArguments, ...$additionalArguments );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();
		$resultedThrowableCode      = $resultedThrowable->getCode();
		$resultedThrowablePrevious  = $resultedThrowable->getPrevious();

		static::assertInstanceOf( ConstantNotFoundException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
		static::assertSame( $expectedThrowableCode, $resultedThrowableCode );
		static::assertSame( $expectedThrowablePrevious, $resultedThrowablePrevious );
	}
}
