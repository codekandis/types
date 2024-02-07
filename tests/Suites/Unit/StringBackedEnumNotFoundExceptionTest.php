<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\Suites\Unit;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\StringBackedEnumNotFoundException;
use CodeKandis\Types\Tests\DataProviders\Unit\StringBackedEnumNotFoundExceptionTest\ThrowableClassNamesWithNonexistentFqcnAdditionalArgumentsExpectedThrowableClassNameExpectedThrowableCodeAndExpectedThrowablePrevious;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use Throwable;

/**
 * Represents the test case of {@link StringBackedEnumNotFoundException}.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class StringBackedEnumNotFoundExceptionTest extends TestCase
{
	/**
	 * Tests if {@link StringBackedEnumNotFoundException::withNonexistentFqcn()} instantiates the throwable correctly.
	 * @param class-string<StringBackedEnumNotFoundException> $throwableClassName The class name of the throwable to test.
	 * @param array<string, mixed> $mainArguments The main arguments to pass.
	 * @param array{code?: int, previous?: ?Throwable} $additionalArguments The additional arguments to pass.
	 * @param class-string<StringBackedEnumNotFoundException> $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 * @param int $expectedThrowableCode The code of the expected throwable.
	 * @param ?Throwable $expectedThrowablePrevious The previously catched throwable of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithNonexistentFqcnAdditionalArgumentsExpectedThrowableClassNameExpectedThrowableCodeAndExpectedThrowablePrevious::class, 'provideData' )]
	public function testIfMethodWithNonExistentStringBackedEnumNameInstantiatesThrowableCorrectly( string $throwableClassName, array $mainArguments, array $additionalArguments, string $expectedThrowableClassName, string $expectedThrowableMessage, int $expectedThrowableCode, ?Throwable $expectedThrowablePrevious ): void
	{
		$resultedThrowable          = $throwableClassName::withNonexistentFqcn( ...$mainArguments, ...$additionalArguments );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();
		$resultedThrowableCode      = $resultedThrowable->getCode();
		$resultedThrowablePrevious  = $resultedThrowable->getPrevious();

		static::assertInstanceOf( StringBackedEnumNotFoundException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
		static::assertSame( $expectedThrowableCode, $resultedThrowableCode );
		static::assertSame( $expectedThrowablePrevious, $resultedThrowablePrevious );
	}
}
