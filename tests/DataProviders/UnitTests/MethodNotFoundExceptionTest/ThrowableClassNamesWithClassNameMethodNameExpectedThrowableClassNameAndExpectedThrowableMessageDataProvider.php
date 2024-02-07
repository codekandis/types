<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\MethodNotFoundExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\MethodNotFoundException;
use CodeKandis\Types\PrivateMethodNotFoundException;
use CodeKandis\Types\ProtectedMethodNotFoundException;
use CodeKandis\Types\PublicMethodNotFoundException;
use CodeKandis\Types\Tests\Fixtures\Values;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with class name, method name, expected throwable class name and expected throwable message.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithClassNameMethodNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'className'                  => $className = Values::CLASS_NAME,
				'methodName'                 => $methodName = Values::METHOD_NAME,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_METHOD_NOT_FOUND, $className, $methodName )
			],
			1 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
				'className'                  => $className = Values::CLASS_NAME,
				'methodName'                 => $methodName = Values::METHOD_NAME,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_METHOD_NOT_FOUND, $className, $methodName )
			],
			2 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'className'                  => $className = Values::CLASS_NAME,
				'methodName'                 => $methodName = Values::METHOD_NAME,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_METHOD_NOT_FOUND, $className, $methodName )
			],
			3 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
				'className'                  => $className = Values::CLASS_NAME,
				'methodName'                 => $methodName = Values::METHOD_NAME,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_METHOD_NOT_FOUND, $className, $methodName )
			]
		];
	}
}
