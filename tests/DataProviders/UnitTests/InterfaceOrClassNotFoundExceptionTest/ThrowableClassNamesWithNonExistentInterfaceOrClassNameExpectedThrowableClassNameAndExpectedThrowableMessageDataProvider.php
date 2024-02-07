<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\InterfaceOrClassNotFoundExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\InterfaceOrClassNotFoundException;
use CodeKandis\Types\Tests\Fixtures\Values;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with nonexistent interface or class name, expected throwable class name and expected throwable message.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithNonExistentInterfaceOrClassNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'throwableClassName'              => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'nonExistentInterfaceOrClassName' => $nonExistentInterfaceOrClassName = Values::INTERFACE_OR_CLASS_NAME,
				'expectedThrowableClassName'      => $throwableClassName,
				'expectedThrowableMessage'        => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_OR_CLASS_NAME, $nonExistentInterfaceOrClassName )
			]
		];
	}
}
