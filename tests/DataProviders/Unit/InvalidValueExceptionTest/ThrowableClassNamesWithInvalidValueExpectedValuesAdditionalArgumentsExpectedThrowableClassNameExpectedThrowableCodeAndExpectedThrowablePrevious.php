<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\Unit\InvalidValueExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\InvalidValueException;
use CodeKandis\Types\Tests\Fixtures\StringifiedValues;
use CodeKandis\Types\Tests\Fixtures\Values;
use Override;
use function implode;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with additional arguments, expected throwable class name, expected throwable message and expected throwable previous.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithInvalidValueExpectedValuesAdditionalArgumentsExpectedThrowableClassNameExpectedThrowableCodeAndExpectedThrowablePrevious implements DataProviderInterface
{
	/**
	 * {@inheritdoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => Values::INVALID_VALUE,
					'expectedValues' => $expectedValues = Values::EXPECTED_SINGLE_VALUE
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					StringifiedValues::INVALID_VALUE,
					implode( ' | ', $expectedValues )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			1  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => Values::INVALID_VALUE,
					'expectedValues' => $expectedValues = Values::EXPECTED_SINGLE_VALUE
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					StringifiedValues::INVALID_VALUE,
					implode( ' | ', $expectedValues )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			2  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => Values::INVALID_VALUE,
					'expectedValues' => $expectedValues = Values::EXPECTED_SINGLE_VALUE
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					StringifiedValues::INVALID_VALUE,
					implode( ' | ', $expectedValues )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			3  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => Values::INVALID_VALUE,
					'expectedValues' => $expectedValues = Values::EXPECTED_SINGLE_VALUE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					StringifiedValues::INVALID_VALUE,
					implode( ' | ', $expectedValues )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			4  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => Values::INVALID_VALUE,
					'expectedValues' => $expectedValues = Values::EXPECTED_SINGLE_VALUE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					StringifiedValues::INVALID_VALUE,
					implode( ' | ', $expectedValues )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			5  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => Values::INVALID_VALUE,
					'expectedValues' => $expectedValues = Values::EXPECTED_SINGLE_VALUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					StringifiedValues::INVALID_VALUE,
					implode( ' | ', $expectedValues )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			6  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => Values::INVALID_VALUE,
					'expectedValues' => $expectedValues = Values::EXPECTED_SINGLE_VALUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					StringifiedValues::INVALID_VALUE,
					implode( ' | ', $expectedValues )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			7  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => Values::INVALID_VALUE,
					'expectedValues' => $expectedValues = Values::EXPECTED_SINGLE_VALUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					StringifiedValues::INVALID_VALUE,
					implode( ' | ', $expectedValues )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			8  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => Values::INVALID_VALUE,
					'expectedValues' => $expectedValues = Values::EXPECTED_SINGLE_VALUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					StringifiedValues::INVALID_VALUE,
					implode( ' | ', $expectedValues )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			9  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => Values::INVALID_VALUE,
					'expectedValues' => $expectedValues = Values::EXPECTED_VALUES
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					StringifiedValues::INVALID_VALUE,
					implode( ' | ', $expectedValues )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			10 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => Values::INVALID_VALUE,
					'expectedValues' => $expectedValues = Values::EXPECTED_VALUES
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					StringifiedValues::INVALID_VALUE,
					implode( ' | ', $expectedValues )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			11 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => Values::INVALID_VALUE,
					'expectedValues' => $expectedValues = Values::EXPECTED_VALUES
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					StringifiedValues::INVALID_VALUE,
					implode( ' | ', $expectedValues )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			12 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => Values::INVALID_VALUE,
					'expectedValues' => $expectedValues = Values::EXPECTED_VALUES
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					StringifiedValues::INVALID_VALUE,
					implode( ' | ', $expectedValues )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			13 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => Values::INVALID_VALUE,
					'expectedValues' => $expectedValues = Values::EXPECTED_VALUES
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					StringifiedValues::INVALID_VALUE,
					implode( ' | ', $expectedValues )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			14 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => Values::INVALID_VALUE,
					'expectedValues' => $expectedValues = Values::EXPECTED_VALUES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					StringifiedValues::INVALID_VALUE,
					implode( ' | ', $expectedValues )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			15 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => Values::INVALID_VALUE,
					'expectedValues' => $expectedValues = Values::EXPECTED_VALUES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					StringifiedValues::INVALID_VALUE,
					implode( ' | ', $expectedValues )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			16 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => Values::INVALID_VALUE,
					'expectedValues' => $expectedValues = Values::EXPECTED_VALUES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					StringifiedValues::INVALID_VALUE,
					implode( ' | ', $expectedValues )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			17 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => Values::INVALID_VALUE,
					'expectedValues' => $expectedValues = Values::EXPECTED_VALUES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					StringifiedValues::INVALID_VALUE,
					implode( ' | ', $expectedValues )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			]
		];
	}
}
