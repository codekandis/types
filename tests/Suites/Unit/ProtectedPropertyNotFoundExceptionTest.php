<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\Suites\Unit;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\ProtectedPropertyNotFoundException;
use CodeKandis\Types\Tests\DataProviders\Unit\ProtectedPropertyNotFoundExceptionTest\ThrowableClassNamesWithFqcnNonexistentPropertyNameAdditionalArgumentsExpectedThrowableClassNameExpectedThrowableCodeAndExpectedThrowablePrevious;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use Throwable;

/**
 * Represents the test case of {@link ProtectedPropertyNotFoundException}.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ProtectedPropertyNotFoundExceptionTest extends TestCase
{
	/**
	 * Tests if {@link ProtectedPropertyNotFoundException::withFqcnAndNonexistentPropertyName()} instantiates the throwable correctly.
	 * @param class-string<ProtectedPropertyNotFoundException> $throwableClassName The class name of the throwable to test.
	 * @param array<string, mixed> $mainArguments The main arguments to pass.
	 * @param array{code?: int, previous?: ?Throwable} $additionalArguments The additional arguments to pass.
	 * @param class-string<ProtectedPropertyNotFoundException> $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 * @param int $expectedThrowableCode The code of the expected throwable.
	 * @param ?Throwable $expectedThrowablePrevious The previously catched throwable of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithFqcnNonexistentPropertyNameAdditionalArgumentsExpectedThrowableClassNameExpectedThrowableCodeAndExpectedThrowablePrevious::class, 'provideData' )]
	public function testIfPropertyWithInterfaceOrClassNameAndNonExistentPropertyNameInstantiatesThrowableCorrectly( string $throwableClassName, array $mainArguments, array $additionalArguments, string $expectedThrowableClassName, string $expectedThrowableMessage, int $expectedThrowableCode, ?Throwable $expectedThrowablePrevious ): void
	{
		$resultedThrowable          = $throwableClassName::withFqcnAndNonexistentPropertyName( ...$mainArguments, ...$additionalArguments );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();
		$resultedThrowableCode      = $resultedThrowable->getCode();
		$resultedThrowablePrevious  = $resultedThrowable->getPrevious();

		static::assertInstanceOf( ProtectedPropertyNotFoundException::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
		static::assertSame( $expectedThrowableCode, $resultedThrowableCode );
		static::assertSame( $expectedThrowablePrevious, $resultedThrowablePrevious );
	}
}
