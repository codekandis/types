<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\InterfaceClassEnumOrTraitNotFoundExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\InterfaceClassEnumOrTraitNotFoundException;
use CodeKandis\Types\Tests\Fixtures\Values;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with nonexistent interface, class, enum or trait name, expected throwable class name, expected throwable message, expected throwable code and expected throwable previous.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithNonExistentInterfaceClassEnumOrTraitNameExpectedThrowableClassNameThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider implements DataProviderInterface
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
				'code'                                     => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                                 => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName'               => $throwableClassName,
				'expectedThrowableMessage'                 => sprintf( $throwableClassName::EXCEPTION_MESSAGE_NONEXISTENT_INTERFACE_CLASS_ENUM_OR_TRAIT_NAME, $nonExistentInterfaceClassEnumOrTraitName ),
				'expectedThrowableCode'                    => $code,
				'expectedThrowablePrevious'                => $previous
			],
			1 => [
				'throwableClassName'                       => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'nonExistentInterfaceClassEnumOrTraitName' => $nonExistentInterfaceClassEnumOrTraitName = Values::INTERFACE_OR_CLASS_NAME,
				'code'                                     => $code = Values::THROWABLE_CODE,
				'previous'                                 => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName'               => $throwableClassName,
				'expectedThrowableMessage'                 => sprintf( $throwableClassName::EXCEPTION_MESSAGE_NONEXISTENT_INTERFACE_CLASS_ENUM_OR_TRAIT_NAME, $nonExistentInterfaceClassEnumOrTraitName ),
				'expectedThrowableCode'                    => $code,
				'expectedThrowablePrevious'                => $previous
			],
			2 => [
				'throwableClassName'                       => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'nonExistentInterfaceClassEnumOrTraitName' => $nonExistentInterfaceClassEnumOrTraitName = Values::INTERFACE_OR_CLASS_NAME,
				'code'                                     => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                                 => $previous = Values::createThrowable(),
				'expectedThrowableClassName'               => $throwableClassName,
				'expectedThrowableMessage'                 => sprintf( $throwableClassName::EXCEPTION_MESSAGE_NONEXISTENT_INTERFACE_CLASS_ENUM_OR_TRAIT_NAME, $nonExistentInterfaceClassEnumOrTraitName ),
				'expectedThrowableCode'                    => $code,
				'expectedThrowablePrevious'                => $previous
			],
			3 => [
				'throwableClassName'                       => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'nonExistentInterfaceClassEnumOrTraitName' => $nonExistentInterfaceClassEnumOrTraitName = Values::INTERFACE_OR_CLASS_NAME,
				'code'                                     => $code = Values::THROWABLE_CODE,
				'previous'                                 => $previous = Values::createThrowable(),
				'expectedThrowableClassName'               => $throwableClassName,
				'expectedThrowableMessage'                 => sprintf( $throwableClassName::EXCEPTION_MESSAGE_NONEXISTENT_INTERFACE_CLASS_ENUM_OR_TRAIT_NAME, $nonExistentInterfaceClassEnumOrTraitName ),
				'expectedThrowableCode'                    => $code,
				'expectedThrowablePrevious'                => $previous
			],
		];
	}
}
