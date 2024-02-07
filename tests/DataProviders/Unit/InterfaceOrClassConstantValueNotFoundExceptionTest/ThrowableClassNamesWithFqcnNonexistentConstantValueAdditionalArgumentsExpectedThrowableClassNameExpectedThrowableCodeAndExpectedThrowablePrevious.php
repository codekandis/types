<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\Unit\InterfaceOrClassConstantValueNotFoundExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\InterfaceOrClassConstantValueNotFoundException;
use CodeKandis\Types\Tests\Fixtures\StringifiedValues;
use CodeKandis\Types\Tests\Fixtures\Values;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with additional arguments, expected throwable class name, expected throwable message and expected throwable previous.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithFqcnNonexistentConstantValueAdditionalArgumentsExpectedThrowableClassNameExpectedThrowableCodeAndExpectedThrowablePrevious implements DataProviderInterface
{
	/**
	 * {@inheritdoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0   => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::NULL
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			1   => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::NULL
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			2   => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::NULL
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			3   => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::NULL
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			4   => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::NULL
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			5   => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			6   => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			7   => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			8   => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			9   => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			10  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			11  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			12  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			13  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			14  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			15  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			16  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			17  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			18  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			19  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			20  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			21  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			22  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			23  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			24  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			25  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			26  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			27  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::INTEGER
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			28  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::INTEGER
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			29  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::INTEGER
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			30  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::INTEGER
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			31  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::INTEGER
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			32  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			33  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			34  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			35  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			36  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::FLOAT
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			37  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::FLOAT
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			38  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::FLOAT
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			39  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::FLOAT
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			40  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::FLOAT
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			41  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			42  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			43  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			44  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			45  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::STRING
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			46  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::STRING
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			47  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::STRING
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			48  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::STRING
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			49  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::STRING
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			50  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::STRING
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			51  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::STRING
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			52  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::STRING
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			53  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::STRING
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			54  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::ARRAY
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			55  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::ARRAY
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			56  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::ARRAY
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			57  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::ARRAY
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			58  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::ARRAY
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			59  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			60  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			61  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			62  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_NAME,
					'nonexistentConstantValue' => Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			63  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::NULL
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			64  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::NULL
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			65  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::NULL
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			66  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::NULL
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			67  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::NULL
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			68  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			69  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			70  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			71  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			72  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			73  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			74  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			75  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			76  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			77  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			78  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			79  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			80  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			81  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			82  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			83  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			84  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			85  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			86  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			87  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			88  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			89  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			90  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::INTEGER
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			91  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::INTEGER
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			92  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::INTEGER
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			93  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::INTEGER
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			94  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::INTEGER
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			95  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			96  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			97  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			98  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			99  => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::FLOAT
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			100 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::FLOAT
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			101 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::FLOAT
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			102 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::FLOAT
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			103 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::FLOAT
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			104 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			105 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			106 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			107 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			108 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::STRING
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			109 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::STRING
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			110 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::STRING
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			111 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::STRING
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			112 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::STRING
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			113 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::STRING
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			114 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::STRING
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			115 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::STRING
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			116 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::STRING
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			117 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::ARRAY
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			118 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::ARRAY
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			119 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::ARRAY
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			120 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::ARRAY
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			121 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::ARRAY
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			122 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			123 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			124 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			125 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::CLASS_NAME,
					'nonexistentConstantValue' => Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			126 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::NULL
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			127 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::NULL
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			128 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::NULL
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			129 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::NULL
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			130 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::NULL
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			131 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			132 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			133 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			134 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			135 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			136 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			137 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			138 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			139 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			140 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			141 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			142 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			143 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			144 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			145 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			146 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			147 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			148 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			149 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			150 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			151 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			152 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			153 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::INTEGER
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			154 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::INTEGER
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			155 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::INTEGER
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			156 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::INTEGER
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			157 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::INTEGER
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			158 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			159 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			160 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			161 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			162 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::FLOAT
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			163 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::FLOAT
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			164 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::FLOAT
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			165 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::FLOAT
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			166 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::FLOAT
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			167 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			168 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			169 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			170 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			171 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::STRING
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			172 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::STRING
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			173 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::STRING
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			174 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::STRING
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			175 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::STRING
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			176 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::STRING
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			177 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::STRING
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			178 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::STRING
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			179 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::STRING
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			180 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::ARRAY
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			181 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::ARRAY
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			182 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::ARRAY
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			183 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::ARRAY
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			184 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::ARRAY
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			185 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			186 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			187 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			188 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                     => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentConstantValue' => Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InterfaceOrClassConstantValueNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE,
					$fqcn,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			]
		];
	}
}
