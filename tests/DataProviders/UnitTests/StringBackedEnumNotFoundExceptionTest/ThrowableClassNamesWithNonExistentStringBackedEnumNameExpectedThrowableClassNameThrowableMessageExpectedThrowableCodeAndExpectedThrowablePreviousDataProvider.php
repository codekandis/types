<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\StringBackedEnumNotFoundExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\StringBackedEnumNotFoundException;
use CodeKandis\Types\Tests\Fixtures\Values;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with nonexistent string backed enum name, expected throwable class name, expected throwable message, expected throwable code and expected throwable previous.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithNonExistentStringBackedEnumNameExpectedThrowableClassNameThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'throwableClassName'              => $throwableClassName = StringBackedEnumNotFoundException::class,
				'nonExistentStringBackedEnumName' => $nonExistentStringBackedEnumName = Values::STRING_BACKED_ENUM_NAME,
				'code'                            => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                        => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName'      => $throwableClassName,
				'expectedThrowableMessage'        => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_STRING_BACKED_ENUM_NAME, $nonExistentStringBackedEnumName ),
				'expectedThrowableCode'           => $code,
				'expectedThrowablePrevious'       => $previous
			],
			1 => [
				'throwableClassName'              => $throwableClassName = StringBackedEnumNotFoundException::class,
				'nonExistentStringBackedEnumName' => $nonExistentStringBackedEnumName = Values::STRING_BACKED_ENUM_NAME,
				'code'                            => $code = Values::THROWABLE_CODE,
				'previous'                        => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName'      => $throwableClassName,
				'expectedThrowableMessage'        => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_STRING_BACKED_ENUM_NAME, $nonExistentStringBackedEnumName ),
				'expectedThrowableCode'           => $code,
				'expectedThrowablePrevious'       => $previous
			],
			2 => [
				'throwableClassName'              => $throwableClassName = StringBackedEnumNotFoundException::class,
				'nonExistentStringBackedEnumName' => $nonExistentStringBackedEnumName = Values::STRING_BACKED_ENUM_NAME,
				'code'                            => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                        => $previous = Values::createThrowable(),
				'expectedThrowableClassName'      => $throwableClassName,
				'expectedThrowableMessage'        => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_STRING_BACKED_ENUM_NAME, $nonExistentStringBackedEnumName ),
				'expectedThrowableCode'           => $code,
				'expectedThrowablePrevious'       => $previous
			],
			3 => [
				'throwableClassName'              => $throwableClassName = StringBackedEnumNotFoundException::class,
				'nonExistentStringBackedEnumName' => $nonExistentStringBackedEnumName = Values::STRING_BACKED_ENUM_NAME,
				'code'                            => $code = Values::THROWABLE_CODE,
				'previous'                        => $previous = Values::createThrowable(),
				'expectedThrowableClassName'      => $throwableClassName,
				'expectedThrowableMessage'        => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_STRING_BACKED_ENUM_NAME, $nonExistentStringBackedEnumName ),
				'expectedThrowableCode'           => $code,
				'expectedThrowablePrevious'       => $previous
			],
		];
	}
}
