<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\Suites\Unit;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\InterfaceClassEnumOrTraitNotFoundException;
use CodeKandis\Types\Tests\DataProviders\Unit\InterfaceClassEnumOrTraitNotFoundExceptionTest\ThrowableClassNamesWithNonexistentFqcnAdditionalArgumentsExpectedThrowableClassNameExpectedThrowableCodeAndExpectedThrowablePrevious;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use Throwable;

/**
 * Represents the test case of {@link InterfaceClassEnumOrTraitNotFoundException}.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
final class InterfaceClassEnumOrTraitNotFoundExceptionTest extends TestCase
{
	/**
	 * Tests if {@link InterfaceClassEnumOrTraitNotFoundException::withNonexistentFqcn()} instantiates the throwable correctly.
	 * @param class-string<InterfaceClassEnumOrTraitNotFoundException> $throwableClassName The class name of the throwable to test.
	 * @param array<string, mixed> $mainArguments The main arguments to pass.
	 * @param array{
	 *     code?: int,
	 *     previous?: ?Throwable
	 * } $additionalArguments The additional arguments to pass.
	 * @param class-string<InterfaceClassEnumOrTraitNotFoundException> $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 * @param int $expectedThrowableCode The code of the expected throwable.
	 * @param ?Throwable $expectedThrowablePrevious The previously catched throwable of the expected throwable.
	 * @param array{
	 *     exception: ?array<string, mixed>,
	 *     additional: ?array<string, mixed>
	 * } $expectedThrowableContext The context of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithNonexistentFqcnAdditionalArgumentsExpectedThrowableClassNameExpectedThrowableCodeAndExpectedThrowablePrevious::class, 'provideData' )]
	public function testIfMethodWithNonExistentInterfaceClassEnumOrTraitNameInstantiatesThrowableCorrectly( string $throwableClassName, array $mainArguments, array $additionalArguments, string $expectedThrowableClassName, string $expectedThrowableMessage, int $expectedThrowableCode, ?Throwable $expectedThrowablePrevious, array $expectedThrowableContext ): void
	{
		$resultedThrowable = $throwableClassName::withNonexistentFqcn( ...$mainArguments, ...$additionalArguments );

		static::assertInstanceOf( InterfaceClassEnumOrTraitNotFoundException::class, $resultedThrowable );

		$resultedThrowableClassName = $resultedThrowable::class;
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );

		$resultedThrowableMessage = $resultedThrowable->getMessage();
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );

		$resultedThrowableCode = $resultedThrowable->getCode();
		static::assertSame( $expectedThrowableCode, $resultedThrowableCode );

		$resultedThrowablePrevious = $resultedThrowable->getPrevious();
		static::assertSame( $expectedThrowablePrevious, $resultedThrowablePrevious );

		$resultedThrowableContext = $resultedThrowable->context;
		static::assertSame( $expectedThrowableContext, $resultedThrowableContext );
	}
}
