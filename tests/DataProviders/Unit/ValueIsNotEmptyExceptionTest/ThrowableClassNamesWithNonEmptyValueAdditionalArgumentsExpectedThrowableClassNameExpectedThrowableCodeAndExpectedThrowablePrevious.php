<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\Unit\ValueIsNotEmptyExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\Tests\Fixtures\StringifiedValues;
use CodeKandis\Types\Tests\Fixtures\Values;
use CodeKandis\Types\ValueIsNotEmptyException;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with additional arguments, expected throwable class name, expected throwable message and expected throwable previous.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithNonEmptyValueAdditionalArgumentsExpectedThrowableClassNameExpectedThrowableCodeAndExpectedThrowablePrevious implements DataProviderInterface
{
	/**
	 * {@inheritdoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0   => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::NULL
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			1   => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::NULL
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			2   => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::NULL
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			3   => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::NULL
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			4   => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::NULL
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			5   => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			6   => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			7   => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			8   => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			9   => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			10  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			11  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			12  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			13  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			14  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			15  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			16  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			17  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			18  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			19  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			20  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			21  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			22  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			23  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			24  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			25  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			26  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			27  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::INTEGER
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			28  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::INTEGER
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			29  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::INTEGER
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			30  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::INTEGER
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			31  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::INTEGER
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			32  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			33  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			34  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			35  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			36  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::FLOAT
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			37  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::FLOAT
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			38  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::FLOAT
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			39  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::FLOAT
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			40  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::FLOAT
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			41  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			42  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			43  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			44  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			45  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::ARRAY
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			46  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::ARRAY
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			47  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::ARRAY
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			48  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::ARRAY
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			49  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::ARRAY
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			50  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			51  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			52  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			53  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			54  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createResource()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			55  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createResource()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			56  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createResource()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			57  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createResource()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			58  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createResource()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			59  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			60  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			61  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			62  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			63  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createClosedResource()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			64  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createClosedResource()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			65  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createClosedResource()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			66  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createClosedResource()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			67  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createClosedResource()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			68  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createClosedResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			69  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createClosedResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			70  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createClosedResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			71  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createClosedResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			72  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createStdClassObject()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::STDCLASS_OBJECT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			73  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createStdClassObject()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::STDCLASS_OBJECT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			74  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createStdClassObject()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::STDCLASS_OBJECT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			75  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createStdClassObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::STDCLASS_OBJECT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			76  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createStdClassObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::STDCLASS_OBJECT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			77  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createStdClassObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::STDCLASS_OBJECT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			78  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createStdClassObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::STDCLASS_OBJECT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			79  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createStdClassObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::STDCLASS_OBJECT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			80  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createStdClassObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::STDCLASS_OBJECT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			81  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createInheritedStandardObjectFixture()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			82  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createInheritedStandardObjectFixture()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			83  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createInheritedStandardObjectFixture()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			84  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createInheritedStandardObjectFixture()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			85  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createInheritedStandardObjectFixture()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			86  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createInheritedStandardObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			87  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createInheritedStandardObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			88  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createInheritedStandardObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			89  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createInheritedStandardObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			90  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createBaseObjectFixture()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			91  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			92  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			93  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createBaseObjectFixture()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			94  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createBaseObjectFixture()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			95  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			96  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			97  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			98  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			99  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createInheritedBaseObjectFixture()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INHERITED_BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			100 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createInheritedBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INHERITED_BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			101 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createInheritedBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INHERITED_BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			102 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createInheritedBaseObjectFixture()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INHERITED_BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			103 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createInheritedBaseObjectFixture()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INHERITED_BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			104 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createInheritedBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INHERITED_BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			105 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createInheritedBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INHERITED_BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			106 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createInheritedBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INHERITED_BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			107 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createInheritedBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INHERITED_BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			108 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createStringableObject()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			109 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createStringableObject()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			110 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createStringableObject()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			111 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createStringableObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			112 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createStringableObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			113 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createStringableObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			114 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createStringableObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			115 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createStringableObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			116 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => Values::createStringableObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			]
		];
	}
}
