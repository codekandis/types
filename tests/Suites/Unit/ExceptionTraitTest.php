<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\Suites\Unit;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\ExceptionInterface;
use CodeKandis\Types\Tests\DataProviders\Unit\ExceptionTraitTest\ThrowableClassNamesWithArgumentsExpectedThrowableClassNameExpectedThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use Throwable;

/**
 * Represents the test case of {@link ExceptionTrait}.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
final class ExceptionTraitTest extends TestCase
{
	/**
	 * Tests if {@link ExceptionTrait::__construct()} instantiates the throwable correctly.
	 * @param class-string<ExceptionInterface> $throwableClassName The class name of the throwable to test.
	 * @param array{
	 *     message?: string,
	 *     code?: int,
	 *     previous?: ?Throwable,
	 *     context?: ?array<string, mixed>
	 * } $arguments The arguments to pass.
	 * @param class-string<ExceptionInterface> $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 * @param int $expectedThrowableCode The code of the expected throwable.
	 * @param ?Throwable $expectedThrowablePrevious The previous of the expected throwable.
	 * @param array{
	 *     exception: ?array<string, mixed>,
	 *     additional: ?array<string, mixed>
	 * } $expectedThrowableContext The context of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithArgumentsExpectedThrowableClassNameExpectedThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider::class, 'provideData' )]
	public function testIfConstructorInstantiatesThrowableCorrectly( string $throwableClassName, array $arguments, string $expectedThrowableClassName, string $expectedThrowableMessage, int $expectedThrowableCode, ?Throwable $expectedThrowablePrevious, array $expectedThrowableContext ): void
	{
		$resultedThrowable          = new $throwableClassName( ...$arguments );
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();
		$resultedThrowableCode      = $resultedThrowable->getCode();
		$resultedThrowablePrevious  = $resultedThrowable->getPrevious();
		$resultedThrowableContext   = $resultedThrowable->context;

		static::assertInstanceOf( ExceptionInterface::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
		static::assertSame( $expectedThrowableCode, $resultedThrowableCode );
		static::assertSame( $expectedThrowablePrevious, $resultedThrowablePrevious );
		static::assertSame( $expectedThrowableContext, $resultedThrowableContext );
	}
}
