<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\Unit\ValueIsNotNullExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\Tests\Fixtures\StringifiedValues;
use CodeKandis\Types\Tests\Fixtures\Values;
use CodeKandis\Types\ValueIsNotNullException;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with additional arguments, expected throwable class name, expected throwable message and expected throwable previous.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithNonNullValueAdditionalArgumentsExpectedThrowableClassNameExpectedThrowableCodeAndExpectedThrowablePrevious implements DataProviderInterface
{
	/**
	 * {@inheritdoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0   => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			1   => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			2   => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			3   => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			4   => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			5   => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			6   => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			7   => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			8   => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			9   => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			10  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			11  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			12  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			13  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			14  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			15  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			16  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			17  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			18  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::INTEGER
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			19  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::INTEGER
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			20  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::INTEGER
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			21  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::INTEGER
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			22  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::INTEGER
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			23  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			24  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			25  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			26  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			27  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::FLOAT
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			28  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::FLOAT
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			29  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::FLOAT
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			30  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::FLOAT
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			31  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::FLOAT
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			32  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			33  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			34  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			35  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			36  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::ARRAY
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			37  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::ARRAY
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			38  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::ARRAY
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			39  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::ARRAY
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			40  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::ARRAY
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			41  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			42  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			43  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			44  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			45  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createResource()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			46  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createResource()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			47  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createResource()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			48  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createResource()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			49  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createResource()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			50  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			51  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			52  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			53  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			54  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createClosedResource()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			55  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createClosedResource()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			56  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createClosedResource()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			57  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createClosedResource()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			58  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createClosedResource()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			59  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createClosedResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			60  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createClosedResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			61  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createClosedResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			62  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createClosedResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			63  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createStdClassObject()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::STDCLASS_OBJECT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			64  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createStdClassObject()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::STDCLASS_OBJECT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			65  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createStdClassObject()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::STDCLASS_OBJECT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			66  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createStdClassObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::STDCLASS_OBJECT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			67  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createStdClassObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::STDCLASS_OBJECT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			68  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createStdClassObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::STDCLASS_OBJECT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			69  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createStdClassObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::STDCLASS_OBJECT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			70  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createStdClassObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::STDCLASS_OBJECT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			71  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createStdClassObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::STDCLASS_OBJECT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			72  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createInheritedStandardObjectFixture()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			73  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createInheritedStandardObjectFixture()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			74  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createInheritedStandardObjectFixture()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			75  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createInheritedStandardObjectFixture()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			76  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createInheritedStandardObjectFixture()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			77  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createInheritedStandardObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			78  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createInheritedStandardObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			79  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createInheritedStandardObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			80  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createInheritedStandardObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			81  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createBaseObjectFixture()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			82  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			83  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			84  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createBaseObjectFixture()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			85  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createBaseObjectFixture()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			86  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			87  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			88  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			89  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			90  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createInheritedBaseObjectFixture()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INHERITED_BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			91  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createInheritedBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INHERITED_BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			92  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createInheritedBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INHERITED_BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			93  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createInheritedBaseObjectFixture()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INHERITED_BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			94  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createInheritedBaseObjectFixture()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INHERITED_BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			95  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createInheritedBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INHERITED_BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			96  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createInheritedBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INHERITED_BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			97  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createInheritedBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INHERITED_BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			98  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createInheritedBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INHERITED_BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			99  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createStringableObject()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			100 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createStringableObject()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			101 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createStringableObject()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			102 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createStringableObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			103 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createStringableObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			104 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createStringableObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			105 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createStringableObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			106 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createStringableObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			107 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => Values::createStringableObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			]
		];
	}
}
