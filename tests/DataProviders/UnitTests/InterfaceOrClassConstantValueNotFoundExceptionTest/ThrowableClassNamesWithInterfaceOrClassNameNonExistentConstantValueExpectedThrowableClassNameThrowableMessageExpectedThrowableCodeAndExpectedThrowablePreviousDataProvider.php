<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\InterfaceOrClassConstantValueNotFoundExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\InterfaceOrClassConstantValueNotFoundException;
use CodeKandis\Types\Tests\Fixtures\Types;
use CodeKandis\Types\Tests\Fixtures\Values;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with interface or class name, nonexistent constant value, expected throwable class name, expected throwable message, expected throwable code and expected throwable previous.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithInterfaceOrClassNameNonExistentConstantValueExpectedThrowableClassNameThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider implements DataProviderInterface
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
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE, $interfaceOrClassName, Values::MASKED_NULL ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			1  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::INTERFACE_NAME,
				'nonExistentConstantValue'   => Values::ARRAY,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE, $interfaceOrClassName, Values::MASKED_ARRAY ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			2  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::INTERFACE_NAME,
				'nonExistentConstantValue'   => $nonExistentConstantValue = Values::BOOLEAN_FALSE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE,
					$interfaceOrClassName,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $nonExistentConstantValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			3  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::INTERFACE_NAME,
				'nonExistentConstantValue'   => $nonExistentConstantValue = Values::BOOLEAN_TRUE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE,
					$interfaceOrClassName,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $nonExistentConstantValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			4  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::INTERFACE_NAME,
				'nonExistentConstantValue'   => $nonExistentConstantValue = Values::INTEGER,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE, $interfaceOrClassName, $nonExistentConstantValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			5  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::INTERFACE_NAME,
				'nonExistentConstantValue'   => $nonExistentConstantValue = Values::FLOAT,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE, $interfaceOrClassName, $nonExistentConstantValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			6  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::INTERFACE_NAME,
				'nonExistentConstantValue'   => $nonExistentConstantValue = Values::STRING,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE, $interfaceOrClassName, $nonExistentConstantValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			7  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::CLASS_NAME,
				'nonExistentConstantValue'   => Values::NULL,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE, $interfaceOrClassName, Values::MASKED_NULL ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			8  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::CLASS_NAME,
				'nonExistentConstantValue'   => Values::ARRAY,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE, $interfaceOrClassName, Values::MASKED_ARRAY ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			9  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::CLASS_NAME,
				'nonExistentConstantValue'   => $nonExistentConstantValue = Values::BOOLEAN_FALSE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE,
					$interfaceOrClassName,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $nonExistentConstantValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			10 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::CLASS_NAME,
				'nonExistentConstantValue'   => $nonExistentConstantValue = Values::BOOLEAN_TRUE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE,
					$interfaceOrClassName,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $nonExistentConstantValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			11 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::CLASS_NAME,
				'nonExistentConstantValue'   => $nonExistentConstantValue = Values::INTEGER,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE, $interfaceOrClassName, $nonExistentConstantValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			12 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::CLASS_NAME,
				'nonExistentConstantValue'   => $nonExistentConstantValue = Values::FLOAT,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE, $interfaceOrClassName, $nonExistentConstantValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			13 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::CLASS_NAME,
				'nonExistentConstantValue'   => $nonExistentConstantValue = Values::STRING,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE, $interfaceOrClassName, $nonExistentConstantValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			14 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::INTERFACE_NAME,
				'nonExistentConstantValue'   => Values::NULL,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE, $interfaceOrClassName, Values::MASKED_NULL ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			15 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::INTERFACE_NAME,
				'nonExistentConstantValue'   => Values::ARRAY,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE, $interfaceOrClassName, Values::MASKED_ARRAY ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			16 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::INTERFACE_NAME,
				'nonExistentConstantValue'   => $nonExistentConstantValue = Values::BOOLEAN_FALSE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE,
					$interfaceOrClassName,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $nonExistentConstantValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			17 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::INTERFACE_NAME,
				'nonExistentConstantValue'   => $nonExistentConstantValue = Values::BOOLEAN_TRUE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE,
					$interfaceOrClassName,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $nonExistentConstantValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			18 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::INTERFACE_NAME,
				'nonExistentConstantValue'   => $nonExistentConstantValue = Values::INTEGER,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE, $interfaceOrClassName, $nonExistentConstantValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			19 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::INTERFACE_NAME,
				'nonExistentConstantValue'   => $nonExistentConstantValue = Values::FLOAT,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE, $interfaceOrClassName, $nonExistentConstantValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			20 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::INTERFACE_NAME,
				'nonExistentConstantValue'   => $nonExistentConstantValue = Values::STRING,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE, $interfaceOrClassName, $nonExistentConstantValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			21 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::CLASS_NAME,
				'nonExistentConstantValue'   => Values::NULL,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE, $interfaceOrClassName, Values::MASKED_NULL ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			22 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::CLASS_NAME,
				'nonExistentConstantValue'   => Values::ARRAY,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE, $interfaceOrClassName, Values::MASKED_ARRAY ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			23 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::CLASS_NAME,
				'nonExistentConstantValue'   => $nonExistentConstantValue = Values::BOOLEAN_FALSE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE,
					$interfaceOrClassName,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $nonExistentConstantValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			24 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::CLASS_NAME,
				'nonExistentConstantValue'   => $nonExistentConstantValue = Values::BOOLEAN_TRUE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE,
					$interfaceOrClassName,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $nonExistentConstantValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			25 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::CLASS_NAME,
				'nonExistentConstantValue'   => $nonExistentConstantValue = Values::INTEGER,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE, $interfaceOrClassName, $nonExistentConstantValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			26 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::CLASS_NAME,
				'nonExistentConstantValue'   => $nonExistentConstantValue = Values::FLOAT,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE, $interfaceOrClassName, $nonExistentConstantValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			27 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::CLASS_NAME,
				'nonExistentConstantValue'   => $nonExistentConstantValue = Values::STRING,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE, $interfaceOrClassName, $nonExistentConstantValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			28 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::INTERFACE_NAME,
				'nonExistentConstantValue'   => Values::NULL,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE, $interfaceOrClassName, Values::MASKED_NULL ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			29 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::INTERFACE_NAME,
				'nonExistentConstantValue'   => Values::ARRAY,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE, $interfaceOrClassName, Values::MASKED_ARRAY ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			30 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::INTERFACE_NAME,
				'nonExistentConstantValue'   => $nonExistentConstantValue = Values::BOOLEAN_FALSE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE,
					$interfaceOrClassName,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $nonExistentConstantValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			31 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::INTERFACE_NAME,
				'nonExistentConstantValue'   => $nonExistentConstantValue = Values::BOOLEAN_TRUE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE,
					$interfaceOrClassName,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $nonExistentConstantValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			32 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::INTERFACE_NAME,
				'nonExistentConstantValue'   => $nonExistentConstantValue = Values::INTEGER,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE, $interfaceOrClassName, $nonExistentConstantValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			33 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::INTERFACE_NAME,
				'nonExistentConstantValue'   => $nonExistentConstantValue = Values::FLOAT,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE, $interfaceOrClassName, $nonExistentConstantValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			34 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::INTERFACE_NAME,
				'nonExistentConstantValue'   => $nonExistentConstantValue = Values::STRING,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE, $interfaceOrClassName, $nonExistentConstantValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			35 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::CLASS_NAME,
				'nonExistentConstantValue'   => Values::NULL,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE, $interfaceOrClassName, Values::MASKED_NULL ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			36 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::CLASS_NAME,
				'nonExistentConstantValue'   => Values::ARRAY,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE, $interfaceOrClassName, Values::MASKED_ARRAY ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			37 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::CLASS_NAME,
				'nonExistentConstantValue'   => $nonExistentConstantValue = Values::BOOLEAN_FALSE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE,
					$interfaceOrClassName,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $nonExistentConstantValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			38 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::CLASS_NAME,
				'nonExistentConstantValue'   => $nonExistentConstantValue = Values::BOOLEAN_TRUE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE,
					$interfaceOrClassName,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $nonExistentConstantValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			39 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::CLASS_NAME,
				'nonExistentConstantValue'   => $nonExistentConstantValue = Values::INTEGER,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE, $interfaceOrClassName, $nonExistentConstantValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			40 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::CLASS_NAME,
				'nonExistentConstantValue'   => $nonExistentConstantValue = Values::FLOAT,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE, $interfaceOrClassName, $nonExistentConstantValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			41 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::CLASS_NAME,
				'nonExistentConstantValue'   => $nonExistentConstantValue = Values::STRING,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE, $interfaceOrClassName, $nonExistentConstantValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			42 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::INTERFACE_NAME,
				'nonExistentConstantValue'   => Values::NULL,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE, $interfaceOrClassName, Values::MASKED_NULL ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			43 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::INTERFACE_NAME,
				'nonExistentConstantValue'   => Values::ARRAY,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE, $interfaceOrClassName, Values::MASKED_ARRAY ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			44 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::INTERFACE_NAME,
				'nonExistentConstantValue'   => $nonExistentConstantValue = Values::BOOLEAN_FALSE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE,
					$interfaceOrClassName,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $nonExistentConstantValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			45 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::INTERFACE_NAME,
				'nonExistentConstantValue'   => $nonExistentConstantValue = Values::BOOLEAN_TRUE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE,
					$interfaceOrClassName,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $nonExistentConstantValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			46 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::INTERFACE_NAME,
				'nonExistentConstantValue'   => $nonExistentConstantValue = Values::INTEGER,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE, $interfaceOrClassName, $nonExistentConstantValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			47 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::INTERFACE_NAME,
				'nonExistentConstantValue'   => $nonExistentConstantValue = Values::FLOAT,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE, $interfaceOrClassName, $nonExistentConstantValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			48 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::INTERFACE_NAME,
				'nonExistentConstantValue'   => $nonExistentConstantValue = Values::STRING,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE, $interfaceOrClassName, $nonExistentConstantValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			49 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::CLASS_NAME,
				'nonExistentConstantValue'   => Values::NULL,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE, $interfaceOrClassName, Values::MASKED_NULL ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			50 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::CLASS_NAME,
				'nonExistentConstantValue'   => Values::ARRAY,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE, $interfaceOrClassName, Values::MASKED_ARRAY ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			51 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::CLASS_NAME,
				'nonExistentConstantValue'   => $nonExistentConstantValue = Values::BOOLEAN_FALSE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE,
					$interfaceOrClassName,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $nonExistentConstantValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			52 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::CLASS_NAME,
				'nonExistentConstantValue'   => $nonExistentConstantValue = Values::BOOLEAN_TRUE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE,
					$interfaceOrClassName,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $nonExistentConstantValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			53 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::CLASS_NAME,
				'nonExistentConstantValue'   => $nonExistentConstantValue = Values::INTEGER,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE, $interfaceOrClassName, $nonExistentConstantValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			54 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::CLASS_NAME,
				'nonExistentConstantValue'   => $nonExistentConstantValue = Values::FLOAT,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE, $interfaceOrClassName, $nonExistentConstantValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			55 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'interfaceOrClassName'       => $interfaceOrClassName = Values::CLASS_NAME,
				'nonExistentConstantValue'   => $nonExistentConstantValue = Values::STRING,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE, $interfaceOrClassName, $nonExistentConstantValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
		];
	}
}
