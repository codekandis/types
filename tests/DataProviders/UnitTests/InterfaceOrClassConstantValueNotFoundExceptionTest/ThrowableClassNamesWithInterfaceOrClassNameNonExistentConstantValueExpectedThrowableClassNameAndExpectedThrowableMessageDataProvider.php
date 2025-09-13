<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\InterfaceOrClassConstantValueNotFoundExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\InterfaceOrClassConstantValueNotFoundException;
use CodeKandis\Types\Tests\Fixtures\Types;
use CodeKandis\Types\Tests\Fixtures\Values;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with interface or class name, nonexistent constant value, expected throwable class name and expected throwable message.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithInterfaceOrClassNameNonExistentConstantValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::INTERFACE_NAME,
				'nonExistentConstantValue'   => Values::NULL,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE, $interfaceOrClassName, Values::MASKED_NULL )
			],
			1  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::INTERFACE_NAME,
				'nonExistentConstantValue'   => Values::ARRAY,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE, $interfaceOrClassName, Values::MASKED_ARRAY )
			],
			2  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::INTERFACE_NAME,
				'nonExistentConstantValue'   => $nonExistentConstantValue = Values::BOOLEAN_FALSE,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE,
					$interfaceOrClassName,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $nonExistentConstantValue )
				)
			],
			3  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::INTERFACE_NAME,
				'nonExistentConstantValue'   => $nonExistentConstantValue = Values::BOOLEAN_TRUE,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE,
					$interfaceOrClassName,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $nonExistentConstantValue )
				)
			],
			4  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::INTERFACE_NAME,
				'nonExistentConstantValue'   => $nonExistentConstantValue = Values::INTEGER,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE, $interfaceOrClassName, $nonExistentConstantValue )
			],
			5  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::INTERFACE_NAME,
				'nonExistentConstantValue'   => $nonExistentConstantValue = Values::FLOAT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE, $interfaceOrClassName, $nonExistentConstantValue )
			],
			6  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::INTERFACE_NAME,
				'nonExistentConstantValue'   => $nonExistentConstantValue = Values::STRING,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE, $interfaceOrClassName, $nonExistentConstantValue )
			],
			7  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::CLASS_NAME,
				'nonExistentConstantValue'   => Values::NULL,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE, $interfaceOrClassName, Values::MASKED_NULL )
			],
			8  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::CLASS_NAME,
				'nonExistentConstantValue'   => Values::ARRAY,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE, $interfaceOrClassName, Values::MASKED_ARRAY )
			],
			9  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::CLASS_NAME,
				'nonExistentConstantValue'   => $nonExistentConstantValue = Values::BOOLEAN_FALSE,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE,
					$interfaceOrClassName,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $nonExistentConstantValue )
				)
			],
			10 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::CLASS_NAME,
				'nonExistentConstantValue'   => $nonExistentConstantValue = Values::BOOLEAN_TRUE,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE,
					$interfaceOrClassName,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $nonExistentConstantValue )
				)
			],
			11 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::CLASS_NAME,
				'nonExistentConstantValue'   => $nonExistentConstantValue = Values::INTEGER,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE, $interfaceOrClassName, $nonExistentConstantValue )
			],
			12 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::CLASS_NAME,
				'nonExistentConstantValue'   => $nonExistentConstantValue = Values::FLOAT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE, $interfaceOrClassName, $nonExistentConstantValue )
			],
			13 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::CLASS_NAME,
				'nonExistentConstantValue'   => $nonExistentConstantValue = Values::STRING,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE, $interfaceOrClassName, $nonExistentConstantValue )
			],
		];
	}
}
