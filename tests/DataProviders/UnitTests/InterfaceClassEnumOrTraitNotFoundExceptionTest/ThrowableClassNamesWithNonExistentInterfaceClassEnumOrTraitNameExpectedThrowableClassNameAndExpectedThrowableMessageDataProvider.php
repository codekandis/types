<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\InterfaceClassEnumOrTraitNotFoundExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\InterfaceClassEnumOrTraitNotFoundException;
use CodeKandis\Types\Tests\Fixtures\Values;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with nonexistent interface, class, enum or trait name, expected throwable class name and expected throwable message.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithNonExistentInterfaceClassEnumOrTraitNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'throwableClassName'                       => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'nonExistentInterfaceClassEnumOrTraitName' => $nonExistentInterfaceClassEnumOrTraitName = Values::INTERFACE_OR_CLASS_NAME,
				'expectedThrowableClassName'               => $throwableClassName,
				'expectedThrowableMessage'                 => sprintf( $throwableClassName::EXCEPTION_MESSAGE_NONEXISTENT_INTERFACE_CLASS_ENUM_OR_TRAIT_NAME, $nonExistentInterfaceClassEnumOrTraitName )
			]
		];
	}
}
