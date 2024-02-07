<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\PublicMethodNotFoundExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\PublicMethodNotFoundException;
use CodeKandis\Types\Tests\Fixtures\Values;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with interface or class name, nonexistent method name, expected throwable class name, expected throwable message, expected throwable code and expected throwable previous.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithInterfaceOrClassNameNonExistentMethodNameExpectedThrowableClassNameThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::INTERFACE_OR_CLASS_NAME,
				'nonExistentMethodName'      => $nonExistentMethodName = Values::METHOD_NAME,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_METHOD_NAME, $interfaceOrClassName, $nonExistentMethodName ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			1 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::INTERFACE_OR_CLASS_NAME,
				'nonExistentMethodName'      => $nonExistentMethodName = Values::METHOD_NAME,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_METHOD_NAME, $interfaceOrClassName, $nonExistentMethodName ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			2 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::INTERFACE_OR_CLASS_NAME,
				'nonExistentMethodName'      => $nonExistentMethodName = Values::METHOD_NAME,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_METHOD_NAME, $interfaceOrClassName, $nonExistentMethodName ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			3 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::INTERFACE_OR_CLASS_NAME,
				'nonExistentMethodName'      => $nonExistentMethodName = Values::METHOD_NAME,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_METHOD_NAME, $interfaceOrClassName, $nonExistentMethodName ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
		];
	}
}
