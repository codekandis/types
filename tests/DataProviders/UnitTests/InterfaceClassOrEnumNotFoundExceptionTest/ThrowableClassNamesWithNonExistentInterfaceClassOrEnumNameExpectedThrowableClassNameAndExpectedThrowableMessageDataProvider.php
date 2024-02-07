<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\InterfaceClassOrEnumNotFoundExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\InterfaceClassOrEnumNotFoundException;
use CodeKandis\Types\Tests\Fixtures\Values;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with nonexistent interface, class or enum name, expected throwable class name and expected throwable message.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithNonExistentInterfaceClassOrEnumNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'throwableClassName'                  => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'nonExistentInterfaceClassOrEnumName' => $nonExistentInterfaceClassOrEnumName = Values::INTERFACE_OR_CLASS_NAME,
				'expectedThrowableClassName'          => $throwableClassName,
				'expectedThrowableMessage'            => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_CLASS_OR_ENUM_NAME, $nonExistentInterfaceClassOrEnumName )
			]
		];
	}
}
