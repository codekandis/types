<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\InterfaceOrClassConstantNotFoundExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\InterfaceOrClassConstantNotFoundException;
use CodeKandis\Types\Tests\Fixtures\Values;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with interface or class name, nonexistent constant name, expected throwable class name and expected throwable message.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithInterfaceOrClassNameNonExistentConstantNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::INTERFACE_NAME,
				'nonExistentConstantName'    => $nonExistentConstantName = Values::CONSTANT_NAME,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_NAME, $interfaceOrClassName, $nonExistentConstantName )
			],
			1 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::CLASS_NAME,
				'nonExistentConstantName'    => $nonExistentConstantName = Values::CONSTANT_NAME,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_NAME, $interfaceOrClassName, $nonExistentConstantName )
			]
		];
	}
}
