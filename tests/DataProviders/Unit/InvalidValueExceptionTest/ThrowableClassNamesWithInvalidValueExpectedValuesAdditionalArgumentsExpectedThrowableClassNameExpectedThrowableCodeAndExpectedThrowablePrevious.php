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
final class ThrowableClassNamesWithInvalidValueExpectedValuesAdditionalArgumentsExpectedThrowableClassNameExpectedThrowableCodeAndExpectedThrowablePrevious implements DataProviderInterface
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
					'invalidValue'   => $invalidValue = Values::INVALID_VALUE,
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidValue'   => $invalidValue,
						'expectedValues' => $expectedValues
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => $invalidValue = Values::INVALID_VALUE,
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidValue'   => $invalidValue,
						'expectedValues' => $expectedValues
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			2  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => $invalidValue = Values::INVALID_VALUE,
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidValue'   => $invalidValue,
						'expectedValues' => $expectedValues
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			3  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => $invalidValue = Values::INVALID_VALUE,
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidValue'   => $invalidValue,
						'expectedValues' => $expectedValues
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			4  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => $invalidValue = Values::INVALID_VALUE,
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidValue'   => $invalidValue,
						'expectedValues' => $expectedValues
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			5  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => $invalidValue = Values::INVALID_VALUE,
					'expectedValues' => $expectedValues = Values::EXPECTED_SINGLE_VALUE
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					StringifiedValues::INVALID_VALUE,
					implode( ' | ', $expectedValues )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidValue'   => $invalidValue,
						'expectedValues' => $expectedValues
					],
					'additional' => $throwableContext
				]
			],
			6  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => $invalidValue = Values::INVALID_VALUE,
					'expectedValues' => $expectedValues = Values::EXPECTED_SINGLE_VALUE
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					StringifiedValues::INVALID_VALUE,
					implode( ' | ', $expectedValues )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidValue'   => $invalidValue,
						'expectedValues' => $expectedValues
					],
					'additional' => $throwableContext
				]
			],
			7  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => $invalidValue = Values::INVALID_VALUE,
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidValue'   => $invalidValue,
						'expectedValues' => $expectedValues
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			8  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => $invalidValue = Values::INVALID_VALUE,
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidValue'   => $invalidValue,
						'expectedValues' => $expectedValues
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			9  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => $invalidValue = Values::INVALID_VALUE,
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidValue'   => $invalidValue,
						'expectedValues' => $expectedValues
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			10 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => $invalidValue = Values::INVALID_VALUE,
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidValue'   => $invalidValue,
						'expectedValues' => $expectedValues
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			11 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => $invalidValue = Values::INVALID_VALUE,
					'expectedValues' => $expectedValues = Values::EXPECTED_SINGLE_VALUE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					StringifiedValues::INVALID_VALUE,
					implode( ' | ', $expectedValues )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidValue'   => $invalidValue,
						'expectedValues' => $expectedValues
					],
					'additional' => $throwableContext
				]
			],
			12 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => $invalidValue = Values::INVALID_VALUE,
					'expectedValues' => $expectedValues = Values::EXPECTED_SINGLE_VALUE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					StringifiedValues::INVALID_VALUE,
					implode( ' | ', $expectedValues )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidValue'   => $invalidValue,
						'expectedValues' => $expectedValues
					],
					'additional' => $throwableContext
				]
			],
			13 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => $invalidValue = Values::INVALID_VALUE,
					'expectedValues' => $expectedValues = Values::EXPECTED_SINGLE_VALUE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					StringifiedValues::INVALID_VALUE,
					implode( ' | ', $expectedValues )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidValue'   => $invalidValue,
						'expectedValues' => $expectedValues
					],
					'additional' => $throwableContext
				]
			],
			14 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => $invalidValue = Values::INVALID_VALUE,
					'expectedValues' => $expectedValues = Values::EXPECTED_SINGLE_VALUE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					StringifiedValues::INVALID_VALUE,
					implode( ' | ', $expectedValues )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidValue'   => $invalidValue,
						'expectedValues' => $expectedValues
					],
					'additional' => $throwableContext
				]
			],
			15 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => $invalidValue = Values::INVALID_VALUE,
					'expectedValues' => $expectedValues = Values::EXPECTED_SINGLE_VALUE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					StringifiedValues::INVALID_VALUE,
					implode( ' | ', $expectedValues )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidValue'   => $invalidValue,
						'expectedValues' => $expectedValues
					],
					'additional' => $throwableContext
				]
			],
			16 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => $invalidValue = Values::INVALID_VALUE,
					'expectedValues' => $expectedValues = Values::EXPECTED_SINGLE_VALUE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					StringifiedValues::INVALID_VALUE,
					implode( ' | ', $expectedValues )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidValue'   => $invalidValue,
						'expectedValues' => $expectedValues
					],
					'additional' => $throwableContext
				]
			],
			17 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => $invalidValue = Values::INVALID_VALUE,
					'expectedValues' => $expectedValues = Values::EXPECTED_SINGLE_VALUE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					StringifiedValues::INVALID_VALUE,
					implode( ' | ', $expectedValues )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidValue'   => $invalidValue,
						'expectedValues' => $expectedValues
					],
					'additional' => $throwableContext
				]
			],
			18 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => $invalidValue = Values::INVALID_VALUE,
					'expectedValues' => $expectedValues = Values::EXPECTED_SINGLE_VALUE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					StringifiedValues::INVALID_VALUE,
					implode( ' | ', $expectedValues )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidValue'   => $invalidValue,
						'expectedValues' => $expectedValues
					],
					'additional' => $throwableContext
				]
			],
			19 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => $invalidValue = Values::INVALID_VALUE,
					'expectedValues' => $expectedValues = Values::EXPECTED_SINGLE_VALUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					StringifiedValues::INVALID_VALUE,
					implode( ' | ', $expectedValues )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidValue'   => $invalidValue,
						'expectedValues' => $expectedValues
					],
					'additional' => $throwableContext
				]
			],
			20 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => $invalidValue = Values::INVALID_VALUE,
					'expectedValues' => $expectedValues = Values::EXPECTED_SINGLE_VALUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					StringifiedValues::INVALID_VALUE,
					implode( ' | ', $expectedValues )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidValue'   => $invalidValue,
						'expectedValues' => $expectedValues
					],
					'additional' => $throwableContext
				]
			],
			21 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => $invalidValue = Values::INVALID_VALUE,
					'expectedValues' => $expectedValues = Values::EXPECTED_SINGLE_VALUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					StringifiedValues::INVALID_VALUE,
					implode( ' | ', $expectedValues )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidValue'   => $invalidValue,
						'expectedValues' => $expectedValues
					],
					'additional' => $throwableContext
				]
			],
			22 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => $invalidValue = Values::INVALID_VALUE,
					'expectedValues' => $expectedValues = Values::EXPECTED_SINGLE_VALUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					StringifiedValues::INVALID_VALUE,
					implode( ' | ', $expectedValues )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidValue'   => $invalidValue,
						'expectedValues' => $expectedValues
					],
					'additional' => $throwableContext
				]
			],
			23 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => $invalidValue = Values::INVALID_VALUE,
					'expectedValues' => $expectedValues = Values::EXPECTED_SINGLE_VALUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					StringifiedValues::INVALID_VALUE,
					implode( ' | ', $expectedValues )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidValue'   => $invalidValue,
						'expectedValues' => $expectedValues
					],
					'additional' => $throwableContext
				]
			],
			24 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => $invalidValue = Values::INVALID_VALUE,
					'expectedValues' => $expectedValues = Values::EXPECTED_SINGLE_VALUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					StringifiedValues::INVALID_VALUE,
					implode( ' | ', $expectedValues )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidValue'   => $invalidValue,
						'expectedValues' => $expectedValues
					],
					'additional' => $throwableContext
				]
			],
			25 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => $invalidValue = Values::INVALID_VALUE,
					'expectedValues' => $expectedValues = Values::EXPECTED_SINGLE_VALUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					StringifiedValues::INVALID_VALUE,
					implode( ' | ', $expectedValues )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidValue'   => $invalidValue,
						'expectedValues' => $expectedValues
					],
					'additional' => $throwableContext
				]
			],
			26 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => $invalidValue = Values::INVALID_VALUE,
					'expectedValues' => $expectedValues = Values::EXPECTED_SINGLE_VALUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					StringifiedValues::INVALID_VALUE,
					implode( ' | ', $expectedValues )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidValue'   => $invalidValue,
						'expectedValues' => $expectedValues
					],
					'additional' => $throwableContext
				]
			],
			27 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => $invalidValue = Values::INVALID_VALUE,
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidValue'   => $invalidValue,
						'expectedValues' => $expectedValues
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			28 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => $invalidValue = Values::INVALID_VALUE,
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidValue'   => $invalidValue,
						'expectedValues' => $expectedValues
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			29 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => $invalidValue = Values::INVALID_VALUE,
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidValue'   => $invalidValue,
						'expectedValues' => $expectedValues
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			30 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => $invalidValue = Values::INVALID_VALUE,
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidValue'   => $invalidValue,
						'expectedValues' => $expectedValues
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			31 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => $invalidValue = Values::INVALID_VALUE,
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidValue'   => $invalidValue,
						'expectedValues' => $expectedValues
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			32 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => $invalidValue = Values::INVALID_VALUE,
					'expectedValues' => $expectedValues = Values::EXPECTED_VALUES
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					StringifiedValues::INVALID_VALUE,
					implode( ' | ', $expectedValues )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidValue'   => $invalidValue,
						'expectedValues' => $expectedValues
					],
					'additional' => $throwableContext
				]
			],
			33 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => $invalidValue = Values::INVALID_VALUE,
					'expectedValues' => $expectedValues = Values::EXPECTED_VALUES
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					StringifiedValues::INVALID_VALUE,
					implode( ' | ', $expectedValues )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidValue'   => $invalidValue,
						'expectedValues' => $expectedValues
					],
					'additional' => $throwableContext
				]
			],
			34 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => $invalidValue = Values::INVALID_VALUE,
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidValue'   => $invalidValue,
						'expectedValues' => $expectedValues
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			35 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => $invalidValue = Values::INVALID_VALUE,
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidValue'   => $invalidValue,
						'expectedValues' => $expectedValues
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			36 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => $invalidValue = Values::INVALID_VALUE,
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidValue'   => $invalidValue,
						'expectedValues' => $expectedValues
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			37 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => $invalidValue = Values::INVALID_VALUE,
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidValue'   => $invalidValue,
						'expectedValues' => $expectedValues
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			38 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => $invalidValue = Values::INVALID_VALUE,
					'expectedValues' => $expectedValues = Values::EXPECTED_VALUES
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					StringifiedValues::INVALID_VALUE,
					implode( ' | ', $expectedValues )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidValue'   => $invalidValue,
						'expectedValues' => $expectedValues
					],
					'additional' => $throwableContext
				]
			],
			39 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => $invalidValue = Values::INVALID_VALUE,
					'expectedValues' => $expectedValues = Values::EXPECTED_VALUES
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					StringifiedValues::INVALID_VALUE,
					implode( ' | ', $expectedValues )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidValue'   => $invalidValue,
						'expectedValues' => $expectedValues
					],
					'additional' => $throwableContext
				]
			],
			40 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => $invalidValue = Values::INVALID_VALUE,
					'expectedValues' => $expectedValues = Values::EXPECTED_VALUES
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					StringifiedValues::INVALID_VALUE,
					implode( ' | ', $expectedValues )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidValue'   => $invalidValue,
						'expectedValues' => $expectedValues
					],
					'additional' => $throwableContext
				]
			],
			41 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => $invalidValue = Values::INVALID_VALUE,
					'expectedValues' => $expectedValues = Values::EXPECTED_VALUES
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					StringifiedValues::INVALID_VALUE,
					implode( ' | ', $expectedValues )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidValue'   => $invalidValue,
						'expectedValues' => $expectedValues
					],
					'additional' => $throwableContext
				]
			],
			42 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => $invalidValue = Values::INVALID_VALUE,
					'expectedValues' => $expectedValues = Values::EXPECTED_VALUES
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					StringifiedValues::INVALID_VALUE,
					implode( ' | ', $expectedValues )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidValue'   => $invalidValue,
						'expectedValues' => $expectedValues
					],
					'additional' => $throwableContext
				]
			],
			43 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => $invalidValue = Values::INVALID_VALUE,
					'expectedValues' => $expectedValues = Values::EXPECTED_VALUES
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					StringifiedValues::INVALID_VALUE,
					implode( ' | ', $expectedValues )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidValue'   => $invalidValue,
						'expectedValues' => $expectedValues
					],
					'additional' => $throwableContext
				]
			],
			44 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => $invalidValue = Values::INVALID_VALUE,
					'expectedValues' => $expectedValues = Values::EXPECTED_VALUES
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					StringifiedValues::INVALID_VALUE,
					implode( ' | ', $expectedValues )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidValue'   => $invalidValue,
						'expectedValues' => $expectedValues
					],
					'additional' => $throwableContext
				]
			],
			45 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => $invalidValue = Values::INVALID_VALUE,
					'expectedValues' => $expectedValues = Values::EXPECTED_VALUES
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					StringifiedValues::INVALID_VALUE,
					implode( ' | ', $expectedValues )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidValue'   => $invalidValue,
						'expectedValues' => $expectedValues
					],
					'additional' => $throwableContext
				]
			],
			46 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => $invalidValue = Values::INVALID_VALUE,
					'expectedValues' => $expectedValues = Values::EXPECTED_VALUES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					StringifiedValues::INVALID_VALUE,
					implode( ' | ', $expectedValues )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidValue'   => $invalidValue,
						'expectedValues' => $expectedValues
					],
					'additional' => $throwableContext
				]
			],
			47 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => $invalidValue = Values::INVALID_VALUE,
					'expectedValues' => $expectedValues = Values::EXPECTED_VALUES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					StringifiedValues::INVALID_VALUE,
					implode( ' | ', $expectedValues )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidValue'   => $invalidValue,
						'expectedValues' => $expectedValues
					],
					'additional' => $throwableContext
				]
			],
			48 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => $invalidValue = Values::INVALID_VALUE,
					'expectedValues' => $expectedValues = Values::EXPECTED_VALUES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					StringifiedValues::INVALID_VALUE,
					implode( ' | ', $expectedValues )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidValue'   => $invalidValue,
						'expectedValues' => $expectedValues
					],
					'additional' => $throwableContext
				]
			],
			49 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => $invalidValue = Values::INVALID_VALUE,
					'expectedValues' => $expectedValues = Values::EXPECTED_VALUES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					StringifiedValues::INVALID_VALUE,
					implode( ' | ', $expectedValues )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidValue'   => $invalidValue,
						'expectedValues' => $expectedValues
					],
					'additional' => $throwableContext
				]
			],
			50 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => $invalidValue = Values::INVALID_VALUE,
					'expectedValues' => $expectedValues = Values::EXPECTED_VALUES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					StringifiedValues::INVALID_VALUE,
					implode( ' | ', $expectedValues )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidValue'   => $invalidValue,
						'expectedValues' => $expectedValues
					],
					'additional' => $throwableContext
				]
			],
			51 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => $invalidValue = Values::INVALID_VALUE,
					'expectedValues' => $expectedValues = Values::EXPECTED_VALUES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					StringifiedValues::INVALID_VALUE,
					implode( ' | ', $expectedValues )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidValue'   => $invalidValue,
						'expectedValues' => $expectedValues
					],
					'additional' => $throwableContext
				]
			],
			52 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => $invalidValue = Values::INVALID_VALUE,
					'expectedValues' => $expectedValues = Values::EXPECTED_VALUES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					StringifiedValues::INVALID_VALUE,
					implode( ' | ', $expectedValues )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidValue'   => $invalidValue,
						'expectedValues' => $expectedValues
					],
					'additional' => $throwableContext
				]
			],
			53 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'mainArguments'              => [
					'invalidValue'   => $invalidValue = Values::INVALID_VALUE,
					'expectedValues' => $expectedValues = Values::EXPECTED_VALUES
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidValueException::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					StringifiedValues::INVALID_VALUE,
					implode( ' | ', $expectedValues )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidValue'   => $invalidValue,
						'expectedValues' => $expectedValues
					],
					'additional' => $throwableContext
				]
			]
		];
	}
}
