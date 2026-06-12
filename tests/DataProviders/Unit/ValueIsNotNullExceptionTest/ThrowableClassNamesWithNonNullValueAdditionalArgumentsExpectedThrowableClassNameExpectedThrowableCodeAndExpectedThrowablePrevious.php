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
final class ThrowableClassNamesWithNonNullValueAdditionalArgumentsExpectedThrowableClassNameExpectedThrowableCodeAndExpectedThrowablePrevious implements DataProviderInterface
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
					'nonNullValue' => $nonNullValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1   => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::BOOLEAN_FALSE
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			2   => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::BOOLEAN_FALSE
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			3   => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::BOOLEAN_FALSE
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			4   => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::BOOLEAN_FALSE
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			5   => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			6   => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			7   => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::BOOLEAN_FALSE
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			8   => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::BOOLEAN_FALSE
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			9   => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::BOOLEAN_FALSE
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			10  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::BOOLEAN_FALSE
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			11  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			12  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			13  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			14  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			15  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			16  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			17  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			18  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			19  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			20  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			21  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			22  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			23  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			24  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			25  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			26  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			27  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			28  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::BOOLEAN_TRUE
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			29  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::BOOLEAN_TRUE
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			30  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::BOOLEAN_TRUE
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			31  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::BOOLEAN_TRUE
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			32  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			33  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			34  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::BOOLEAN_TRUE
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			35  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::BOOLEAN_TRUE
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			36  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::BOOLEAN_TRUE
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			37  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::BOOLEAN_TRUE
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			38  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			39  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			40  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			41  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			42  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			43  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			44  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			45  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			46  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			47  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			48  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			49  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			50  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			51  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			52  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			53  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			54  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::INTEGER
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			55  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::INTEGER
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			56  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::INTEGER
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			57  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::INTEGER
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			58  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::INTEGER
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			59  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			60  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			61  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::INTEGER
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			62  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::INTEGER
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			63  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::INTEGER
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			64  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::INTEGER
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			65  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			66  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			67  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			68  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			69  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			70  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			71  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			72  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			73  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			74  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			75  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			76  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			77  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			78  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			79  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			80  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			81  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::FLOAT
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			82  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::FLOAT
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			83  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::FLOAT
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			84  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::FLOAT
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			85  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::FLOAT
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			86  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			87  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			88  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::FLOAT
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			89  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::FLOAT
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			90  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::FLOAT
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			91  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::FLOAT
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			92  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			93  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			94  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			95  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			96  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			97  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			98  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			99  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			100 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			101 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			102 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			103 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			104 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			105 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			106 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			107 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			108 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::ARRAY
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			109 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::ARRAY
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			110 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::ARRAY
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			111 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::ARRAY
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			112 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::ARRAY
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			113 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			114 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			115 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::ARRAY
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			116 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::ARRAY
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			117 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::ARRAY
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			118 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::ARRAY
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			119 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			120 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			121 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			122 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			123 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			124 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			125 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			126 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			127 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			128 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			129 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			130 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			131 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			132 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			133 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			134 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			135 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createResource()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			136 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createResource()
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			137 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createResource()
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			138 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createResource()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			139 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createResource()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			140 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createResource()
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			141 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createResource()
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			142 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createResource()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			143 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createResource()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			144 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createResource()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			145 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createResource()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			146 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createResource()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			147 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createResource()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			148 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createResource()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			149 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createResource()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			150 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createResource()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			151 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createResource()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			152 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createResource()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			153 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createResource()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			154 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			155 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			156 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			157 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			158 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			159 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			160 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			161 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			162 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createClosedResource()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			163 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createClosedResource()
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			164 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createClosedResource()
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			165 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createClosedResource()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			166 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createClosedResource()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			167 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createClosedResource()
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			168 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createClosedResource()
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			169 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createClosedResource()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			170 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createClosedResource()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			171 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createClosedResource()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			172 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createClosedResource()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			173 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createClosedResource()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			174 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createClosedResource()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			175 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createClosedResource()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			176 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createClosedResource()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			177 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createClosedResource()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			178 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createClosedResource()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			179 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createClosedResource()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			180 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createClosedResource()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			181 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createClosedResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			182 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createClosedResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			183 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createClosedResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			184 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createClosedResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			185 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createClosedResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			186 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createClosedResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			187 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createClosedResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			188 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createClosedResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			189 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createStdClassObject()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::STDCLASS_OBJECT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			190 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createStdClassObject()
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			191 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createStdClassObject()
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			192 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createStdClassObject()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			193 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createStdClassObject()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			194 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createStdClassObject()
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::STDCLASS_OBJECT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			195 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createStdClassObject()
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::STDCLASS_OBJECT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			196 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createStdClassObject()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			197 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createStdClassObject()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			198 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createStdClassObject()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			199 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createStdClassObject()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			200 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createStdClassObject()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::STDCLASS_OBJECT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			201 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createStdClassObject()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::STDCLASS_OBJECT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			202 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createStdClassObject()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::STDCLASS_OBJECT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			203 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createStdClassObject()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::STDCLASS_OBJECT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			204 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createStdClassObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::STDCLASS_OBJECT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			205 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createStdClassObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::STDCLASS_OBJECT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			206 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createStdClassObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::STDCLASS_OBJECT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			207 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createStdClassObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::STDCLASS_OBJECT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			208 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createStdClassObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::STDCLASS_OBJECT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			209 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createStdClassObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::STDCLASS_OBJECT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			210 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createStdClassObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::STDCLASS_OBJECT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			211 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createStdClassObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::STDCLASS_OBJECT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			212 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createStdClassObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::STDCLASS_OBJECT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			213 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createStdClassObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::STDCLASS_OBJECT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			214 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createStdClassObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::STDCLASS_OBJECT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			215 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createStdClassObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::STDCLASS_OBJECT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			216 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createInheritedStandardObjectFixture()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			217 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createInheritedStandardObjectFixture()
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			218 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createInheritedStandardObjectFixture()
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			219 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createInheritedStandardObjectFixture()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			220 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createInheritedStandardObjectFixture()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			221 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createInheritedStandardObjectFixture()
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			222 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createInheritedStandardObjectFixture()
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			223 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createInheritedStandardObjectFixture()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			224 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createInheritedStandardObjectFixture()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			225 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createInheritedStandardObjectFixture()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			226 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createInheritedStandardObjectFixture()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			227 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createInheritedStandardObjectFixture()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			228 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createInheritedStandardObjectFixture()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			229 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createInheritedStandardObjectFixture()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			230 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createInheritedStandardObjectFixture()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			231 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createInheritedStandardObjectFixture()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			232 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createInheritedStandardObjectFixture()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			233 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createInheritedStandardObjectFixture()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			234 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createInheritedStandardObjectFixture()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			235 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createInheritedStandardObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			236 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createInheritedStandardObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			237 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createInheritedStandardObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			238 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createInheritedStandardObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			239 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createInheritedStandardObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			240 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createInheritedStandardObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			241 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createInheritedStandardObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			242 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createInheritedStandardObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			243 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createBaseObjectFixture()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			244 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createBaseObjectFixture()
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			245 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createBaseObjectFixture()
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			246 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createBaseObjectFixture()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			247 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createBaseObjectFixture()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			248 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createBaseObjectFixture()
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			249 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createBaseObjectFixture()
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			250 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createBaseObjectFixture()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			251 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createBaseObjectFixture()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			252 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createBaseObjectFixture()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			253 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createBaseObjectFixture()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			254 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			255 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			256 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			257 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			258 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createBaseObjectFixture()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			259 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createBaseObjectFixture()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			260 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createBaseObjectFixture()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			261 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createBaseObjectFixture()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			262 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			263 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			264 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			265 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			266 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			267 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			268 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			269 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			270 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createInheritedBaseObjectFixture()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INHERITED_BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			271 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createInheritedBaseObjectFixture()
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			272 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createInheritedBaseObjectFixture()
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			273 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createInheritedBaseObjectFixture()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			274 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createInheritedBaseObjectFixture()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			275 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createInheritedBaseObjectFixture()
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INHERITED_BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			276 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createInheritedBaseObjectFixture()
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INHERITED_BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			277 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createInheritedBaseObjectFixture()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			278 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createInheritedBaseObjectFixture()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			279 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createInheritedBaseObjectFixture()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			280 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createInheritedBaseObjectFixture()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			281 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createInheritedBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INHERITED_BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			282 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createInheritedBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INHERITED_BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			283 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createInheritedBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INHERITED_BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			284 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createInheritedBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INHERITED_BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			285 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createInheritedBaseObjectFixture()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INHERITED_BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			286 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createInheritedBaseObjectFixture()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INHERITED_BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			287 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createInheritedBaseObjectFixture()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INHERITED_BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			288 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createInheritedBaseObjectFixture()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INHERITED_BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			289 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createInheritedBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INHERITED_BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			290 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createInheritedBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INHERITED_BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			291 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createInheritedBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INHERITED_BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			292 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createInheritedBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INHERITED_BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			293 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createInheritedBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INHERITED_BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			294 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createInheritedBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INHERITED_BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			295 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createInheritedBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INHERITED_BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			296 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createInheritedBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::INHERITED_BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			297 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createStringableObject()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			298 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createStringableObject()
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			299 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createStringableObject()
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			300 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createStringableObject()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			301 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createStringableObject()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			302 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createStringableObject()
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			303 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createStringableObject()
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			304 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createStringableObject()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			305 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createStringableObject()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			306 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createStringableObject()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			307 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createStringableObject()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			308 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createStringableObject()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			309 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createStringableObject()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			310 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createStringableObject()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			311 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createStringableObject()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			312 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createStringableObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			313 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createStringableObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			314 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createStringableObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			315 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createStringableObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			316 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createStringableObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			317 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createStringableObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			318 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createStringableObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			319 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createStringableObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			320 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createStringableObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			321 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createStringableObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			322 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createStringableObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			],
			323 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'mainArguments'              => [
					'nonNullValue' => $nonNullValue = Values::createStringableObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotNullException::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonNullValue' => $nonNullValue
					],
					'additional' => $throwableContext
				]
			]
		];
	}
}
