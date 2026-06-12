<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\Suites\Unit;

use CodeKandis\PhpUnit\TestCase;
use CodeKandis\Types\InvalidTypeException;
use CodeKandis\Types\InvalidTypeExceptionInterface;
use CodeKandis\Types\Tests\DataProviders\Unit\InvalidTypeExceptionTest\ThrowableClassNamesWithInvalidTypeAdditionalArgumentsExpectedThrowableClassNameExpectedThrowableCodeAndExpectedThrowablePrevious;
use CodeKandis\Types\Tests\DataProviders\Unit\InvalidTypeExceptionTest\ThrowableClassNamesWithInvalidTypeExpectedTypesAdditionalArgumentsExpectedThrowableClassNameExpectedThrowableCodeAndExpectedThrowablePrevious;
use CodeKandis\Types\Tests\DataProviders\Unit\InvalidTypeExceptionTest\ThrowableClassNamesWithValidTypeEmptyExpectedTypesExpectedThrowableClassNameThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider;
use CodeKandis\Types\Tests\DataProviders\Unit\InvalidTypeExceptionTest\ThrowableClassNamesWithValidTypeInvalidExpectedTypesExpectedThrowableClassNameThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider;
use CodeKandis\Types\ValueIsEmptyExceptionInterface;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use Throwable;

/**
 * Represents the test case of {@link InvalidTypeException}.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
final class InvalidTypeExceptionTest extends TestCase
{
	/**
	 * Tests if {@link InvalidTypeException::withInvalidType()} instantiates the throwable correctly.
	 * @param class-string<InvalidTypeException> $throwableClassName The class name of the throwable to test.
	 * @param array<string, mixed> $mainArguments The main arguments to pass.
	 * @param array{
	 *     code?: int,
	 *     previous?: ?Throwable
	 * } $additionalArguments The additional arguments to pass.
	 * @param class-string<InvalidTypeException> $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 * @param int $expectedThrowableCode The code of the expected throwable.
	 * @param ?Throwable $expectedThrowablePrevious The previously catched throwable of the expected throwable.
	 * @param array{
	 *     exception: ?array<string, mixed>,
	 *     additional: ?array<string, mixed>
	 * } $expectedThrowableContext The context of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithInvalidTypeAdditionalArgumentsExpectedThrowableClassNameExpectedThrowableCodeAndExpectedThrowablePrevious::class, 'provideData' )]
	public function testIfMethodWithInvalidTypeInstantiatesThrowableCorrectly( string $throwableClassName, array $mainArguments, array $additionalArguments, string $expectedThrowableClassName, string $expectedThrowableMessage, int $expectedThrowableCode, ?Throwable $expectedThrowablePrevious, array $expectedThrowableContext ): void
	{
		$resultedThrowable = $throwableClassName::withInvalidType( ...$mainArguments, ...$additionalArguments );

		static::assertInstanceOf( InvalidTypeException::class, $resultedThrowable );

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

	/**
	 * Tests if {@link InvalidTypeException::withInvalidTypeAndExpectedTypes()} throws {@link InvalidTypeExceptionInterface} on invalid expected type type.
	 * @param class-string<InvalidTypeException> $throwableClassName The class name of the throwable to test.
	 * @param string $invalidType The invalid type to pass.
	 * @param array<int, string> $emptyExpectedTypes The empty expected types to pass.
	 * @param int $code The error code to pass.
	 * @param ?Throwable $previous The previous throwable to pass.
	 * @param class-string<ValueIsEmptyExceptionInterface> $expectedThrowableClassName The expected throwable class name.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 * @param int $expectedThrowableCode The expected throwable code.
	 * @param ?Throwable $expectedThrowablePrevious The expected previous throwable.
	 * @param array{
	 *     exception: ?array<string, mixed>,
	 *     additional: ?array<string, mixed>
	 * } $expectedThrowableContext The context of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithValidTypeEmptyExpectedTypesExpectedThrowableClassNameThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider::class, 'provideData' )]
	public function testIfMethodWithInvalidTypeAndExpectedTypesThrowsValueIsEmptyExceptionInterfaceOnEmptyExpectedTypes( string $throwableClassName, string $invalidType, array $emptyExpectedTypes, int $code, ?Throwable $previous, string $expectedThrowableClassName, string $expectedThrowableMessage, int $expectedThrowableCode, ?Throwable $expectedThrowablePrevious, array $expectedThrowableContext ): void
	{
		try
		{
			$throwableClassName::withInvalidTypeAndExpectedTypes( $invalidType, $emptyExpectedTypes, $code, $previous );
		}
		catch ( Throwable $throwable )
		{
			static::assertInstanceOf( ValueIsEmptyExceptionInterface::class, $throwable );

			$resultedThrowableClassName = $throwable::class;
			static::assertInstanceOf( $expectedThrowableClassName, $resultedThrowableClassName );

			$resultedThrowableMessage = $throwable->getMessage();
			static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );

			$resultedThrowableCode = $throwable->getCode();
			static::assertSame( $expectedThrowableCode, $resultedThrowableCode );

			$resultedThrowablePrevious = $throwable->getPrevious();
			static::assertSame( $expectedThrowablePrevious, $resultedThrowablePrevious );

			$resultedThrowableContext = $throwable->context;
			static::assertSame( $expectedThrowableContext, $resultedThrowableContext );

			return;
		}

		static::failExpectedThrowableHasNotBeenThrown( $expectedThrowableClassName );
	}

	/**
	 * Tests if {@link InvalidTypeException::withInvalidTypeAndExpectedTypes()} throws {@link InvalidTypeExceptionInterface} on invalid expected type type.
	 * @param class-string<InvalidTypeException> $throwableClassName The class name of the throwable to test.
	 * @param string $invalidType The invalid type to pass.
	 * @param array<int, mixed> $invalidExpectedTypes The invalid expected types to pass.
	 * @param int $code The error code to pass.
	 * @param ?Throwable $previous The previous throwable to pass.
	 * @param class-string<InvalidTypeExceptionInterface> $expectedThrowableClassName The expected throwable class name.
	 * @param string $expectedThrowableMessage The expected throwable message.
	 * @param int $expectedThrowableCode The expected throwable code.
	 * @param ?Throwable $expectedThrowablePrevious The expected previous throwable.
	 * @param array{
	 *     exception: ?array<string, mixed>,
	 *     additional: ?array<string, mixed>
	 * } $expectedThrowableContext The context of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithValidTypeInvalidExpectedTypesExpectedThrowableClassNameThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider::class, 'provideData' )]
	public function testIfMethodWithInvalidTypeAndExpectedTypesThrowsInvalidTypeExceptionInterfaceOnInvalidExpectedTypeType( string $throwableClassName, string $invalidType, array $invalidExpectedTypes, int $code, ?Throwable $previous, string $expectedThrowableClassName, string $expectedThrowableMessage, int $expectedThrowableCode, ?Throwable $expectedThrowablePrevious, array $expectedThrowableContext ): void
	{
		try
		{
			$throwableClassName::withInvalidTypeAndExpectedTypes( $invalidType, $invalidExpectedTypes, $code, $previous );
		}
		catch ( Throwable $throwable )
		{
			static::assertInstanceOf( InvalidTypeExceptionInterface::class, $throwable );

			$resultedThrowableClassName = $throwable::class;
			static::assertInstanceOf( $expectedThrowableClassName, $resultedThrowableClassName );

			$resultedThrowableMessage = $throwable->getMessage();
			static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );

			$resultedThrowableCode = $throwable->getCode();
			static::assertSame( $expectedThrowableCode, $resultedThrowableCode );

			$resultedThrowablePrevious = $throwable->getPrevious();
			static::assertSame( $expectedThrowablePrevious, $resultedThrowablePrevious );

			$resultedThrowableContext = $throwable->context;
			static::assertSame( $expectedThrowableContext, $resultedThrowableContext );

			return;
		}

		static::failExpectedThrowableHasNotBeenThrown( $expectedThrowableClassName );
	}

	/**
	 * Tests if {@link InvalidTypeException::withInvalidTypeAndExpectedTypes()} instantiates the throwable correctly.
	 * @param class-string<InvalidTypeException> $throwableClassName The class name of the throwable to test.
	 * @param array<string, mixed> $mainArguments The main arguments to pass.
	 * @param array{
	 *     code?: int,
	 *     previous?: ?Throwable
	 * } $additionalArguments The additional arguments to pass.
	 * @param class-string<InvalidTypeException> $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 * @param int $expectedThrowableCode The code of the expected throwable.
	 * @param ?Throwable $expectedThrowablePrevious The previously catched throwable of the expected throwable.
	 * @param array{
	 *     exception: ?array<string, mixed>,
	 *     additional: ?array<string, mixed>
	 * } $expectedThrowableContext The context of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithInvalidTypeExpectedTypesAdditionalArgumentsExpectedThrowableClassNameExpectedThrowableCodeAndExpectedThrowablePrevious::class, 'provideData' )]
	public function testIfMethodWithInvalidTypeAndExpectedTypesInstantiatesThrowableCorrectly( string $throwableClassName, array $mainArguments, array $additionalArguments, string $expectedThrowableClassName, string $expectedThrowableMessage, int $expectedThrowableCode, ?Throwable $expectedThrowablePrevious, array $expectedThrowableContext ): void
	{
		try
		{
			$resultedThrowable = $throwableClassName::withInvalidTypeAndExpectedTypes( ...$mainArguments, ...$additionalArguments );
		}
		catch ( Throwable $throwable )
		{
			static::failUnexpectedThrowableHasBeenThrown( $throwable::class );
		}

		static::assertInstanceOf( InvalidTypeException::class, $resultedThrowable );

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
