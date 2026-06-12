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
final class ThrowableClassNamesWithNonEmptyValueAdditionalArgumentsExpectedThrowableClassNameExpectedThrowableCodeAndExpectedThrowablePrevious implements DataProviderInterface
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
					'nonEmptyValue' => $nonEmptyValue = Values::NULL
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1   => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::NULL
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			2   => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::NULL
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			3   => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::NULL
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			4   => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::NULL
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			5   => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::NULL
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			6   => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::NULL
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			7   => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::NULL
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			8   => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::NULL
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			9   => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::NULL
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			10  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::NULL
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			11  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			12  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			13  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			14  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			15  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::NULL
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			16  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::NULL
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			17  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::NULL
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			18  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::NULL
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			19  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			20  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			21  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			22  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			23  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			24  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			25  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			26  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			27  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			28  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::BOOLEAN_FALSE
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			29  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::BOOLEAN_FALSE
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			30  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::BOOLEAN_FALSE
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			31  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::BOOLEAN_FALSE
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			32  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			33  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			34  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::BOOLEAN_FALSE
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			35  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::BOOLEAN_FALSE
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			36  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::BOOLEAN_FALSE
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			37  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::BOOLEAN_FALSE
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			38  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			39  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			40  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			41  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			42  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			43  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			44  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			45  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			46  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			47  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			48  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			49  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			50  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			51  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			52  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			53  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			54  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			55  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::BOOLEAN_TRUE
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			56  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::BOOLEAN_TRUE
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			57  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::BOOLEAN_TRUE
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			58  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::BOOLEAN_TRUE
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			59  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			60  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			61  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::BOOLEAN_TRUE
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			62  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::BOOLEAN_TRUE
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			63  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::BOOLEAN_TRUE
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			64  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::BOOLEAN_TRUE
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			65  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			66  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			67  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			68  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			69  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			70  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			71  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			72  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			73  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			74  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			75  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			76  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			77  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			78  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			79  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			80  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			81  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::INTEGER
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			82  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::INTEGER
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			83  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::INTEGER
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			84  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::INTEGER
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			85  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::INTEGER
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			86  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			87  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			88  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::INTEGER
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			89  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::INTEGER
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			90  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::INTEGER
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			91  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::INTEGER
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			92  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			93  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			94  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			95  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			96  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			97  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			98  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			99  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			100 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			101 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			102 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			103 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			104 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			105 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			106 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			107 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::INTEGER
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INTEGER
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			108 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::FLOAT
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			109 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::FLOAT
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			110 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::FLOAT
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			111 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::FLOAT
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			112 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::FLOAT
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			113 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			114 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			115 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::FLOAT
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			116 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::FLOAT
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			117 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::FLOAT
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			118 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::FLOAT
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			119 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			120 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			121 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			122 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			123 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			124 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			125 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			126 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			127 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			128 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			129 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			130 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			131 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			132 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			133 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			134 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::FLOAT
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::FLOAT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			135 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::ARRAY
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			136 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::ARRAY
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			137 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::ARRAY
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			138 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::ARRAY
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			139 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::ARRAY
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			140 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			141 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			142 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::ARRAY
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			143 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::ARRAY
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			144 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::ARRAY
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			145 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::ARRAY
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			146 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			147 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			148 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			149 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			150 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			151 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			152 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			153 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			154 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			155 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			156 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			157 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			158 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			159 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			160 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			161 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			162 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createResource()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			163 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createResource()
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			164 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createResource()
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			165 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createResource()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			166 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createResource()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			167 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createResource()
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			168 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createResource()
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			169 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createResource()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			170 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createResource()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			171 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createResource()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			172 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createResource()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			173 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createResource()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			174 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createResource()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			175 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createResource()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			176 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createResource()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			177 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createResource()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			178 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createResource()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			179 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createResource()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			180 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createResource()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			181 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			182 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			183 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			184 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			185 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			186 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			187 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			188 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			189 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createClosedResource()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			190 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createClosedResource()
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			191 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createClosedResource()
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			192 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createClosedResource()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			193 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createClosedResource()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			194 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createClosedResource()
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			195 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createClosedResource()
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			196 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createClosedResource()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			197 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createClosedResource()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			198 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createClosedResource()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			199 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createClosedResource()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			200 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createClosedResource()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			201 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createClosedResource()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			202 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createClosedResource()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			203 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createClosedResource()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			204 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createClosedResource()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			205 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createClosedResource()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			206 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createClosedResource()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			207 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createClosedResource()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			208 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createClosedResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			209 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createClosedResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			210 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createClosedResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			211 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createClosedResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			212 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createClosedResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			213 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createClosedResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			214 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createClosedResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			215 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createClosedResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			216 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createStdClassObject()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::STDCLASS_OBJECT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			217 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createStdClassObject()
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			218 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createStdClassObject()
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			219 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createStdClassObject()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			220 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createStdClassObject()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			221 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createStdClassObject()
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::STDCLASS_OBJECT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			222 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createStdClassObject()
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::STDCLASS_OBJECT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			223 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createStdClassObject()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			224 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createStdClassObject()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			225 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createStdClassObject()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			226 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createStdClassObject()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			227 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createStdClassObject()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::STDCLASS_OBJECT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			228 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createStdClassObject()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::STDCLASS_OBJECT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			229 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createStdClassObject()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::STDCLASS_OBJECT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			230 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createStdClassObject()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::STDCLASS_OBJECT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			231 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createStdClassObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::STDCLASS_OBJECT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			232 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createStdClassObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::STDCLASS_OBJECT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			233 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createStdClassObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::STDCLASS_OBJECT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			234 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createStdClassObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::STDCLASS_OBJECT
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			235 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createStdClassObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::STDCLASS_OBJECT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			236 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createStdClassObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::STDCLASS_OBJECT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			237 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createStdClassObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::STDCLASS_OBJECT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			238 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createStdClassObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::STDCLASS_OBJECT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			239 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createStdClassObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::STDCLASS_OBJECT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			240 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createStdClassObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::STDCLASS_OBJECT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			241 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createStdClassObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::STDCLASS_OBJECT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			242 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createStdClassObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::STDCLASS_OBJECT
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			243 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createInheritedStandardObjectFixture()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			244 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createInheritedStandardObjectFixture()
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			245 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createInheritedStandardObjectFixture()
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			246 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createInheritedStandardObjectFixture()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			247 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createInheritedStandardObjectFixture()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			248 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createInheritedStandardObjectFixture()
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			249 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createInheritedStandardObjectFixture()
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			250 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createInheritedStandardObjectFixture()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			251 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createInheritedStandardObjectFixture()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			252 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createInheritedStandardObjectFixture()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			253 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createInheritedStandardObjectFixture()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			254 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createInheritedStandardObjectFixture()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			255 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createInheritedStandardObjectFixture()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			256 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createInheritedStandardObjectFixture()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			257 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createInheritedStandardObjectFixture()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			258 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createInheritedStandardObjectFixture()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			259 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createInheritedStandardObjectFixture()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			260 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createInheritedStandardObjectFixture()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			261 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createInheritedStandardObjectFixture()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			262 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createInheritedStandardObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			263 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createInheritedStandardObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			264 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createInheritedStandardObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			265 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createInheritedStandardObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			266 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createInheritedStandardObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			267 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createInheritedStandardObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			268 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createInheritedStandardObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			269 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createInheritedStandardObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			270 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createBaseObjectFixture()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			271 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createBaseObjectFixture()
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			272 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createBaseObjectFixture()
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			273 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createBaseObjectFixture()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			274 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createBaseObjectFixture()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			275 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createBaseObjectFixture()
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			276 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createBaseObjectFixture()
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			277 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createBaseObjectFixture()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			278 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createBaseObjectFixture()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			279 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createBaseObjectFixture()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			280 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createBaseObjectFixture()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			281 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			282 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			283 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			284 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			285 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createBaseObjectFixture()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			286 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createBaseObjectFixture()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			287 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createBaseObjectFixture()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			288 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createBaseObjectFixture()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			289 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			290 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			291 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			292 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			293 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			294 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			295 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			296 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			297 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createInheritedBaseObjectFixture()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INHERITED_BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			298 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createInheritedBaseObjectFixture()
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			299 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createInheritedBaseObjectFixture()
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			300 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createInheritedBaseObjectFixture()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			301 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createInheritedBaseObjectFixture()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			302 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createInheritedBaseObjectFixture()
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INHERITED_BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			303 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createInheritedBaseObjectFixture()
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INHERITED_BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			304 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createInheritedBaseObjectFixture()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			305 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createInheritedBaseObjectFixture()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			306 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createInheritedBaseObjectFixture()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			307 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createInheritedBaseObjectFixture()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			308 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createInheritedBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INHERITED_BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			309 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createInheritedBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INHERITED_BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			310 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createInheritedBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INHERITED_BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			311 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createInheritedBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INHERITED_BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			312 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createInheritedBaseObjectFixture()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INHERITED_BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			313 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createInheritedBaseObjectFixture()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INHERITED_BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			314 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createInheritedBaseObjectFixture()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INHERITED_BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			315 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createInheritedBaseObjectFixture()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INHERITED_BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			316 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createInheritedBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INHERITED_BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			317 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createInheritedBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INHERITED_BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			318 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createInheritedBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INHERITED_BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			319 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createInheritedBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INHERITED_BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			320 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createInheritedBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INHERITED_BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			321 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createInheritedBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INHERITED_BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			322 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createInheritedBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INHERITED_BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			323 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createInheritedBaseObjectFixture()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::INHERITED_BASE_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			324 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createStringableObject()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			325 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createStringableObject()
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			326 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createStringableObject()
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
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			327 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createStringableObject()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			328 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createStringableObject()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			329 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createStringableObject()
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			330 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createStringableObject()
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			331 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createStringableObject()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			332 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createStringableObject()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			333 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createStringableObject()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			334 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createStringableObject()
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
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			335 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createStringableObject()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			336 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createStringableObject()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			337 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createStringableObject()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			338 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createStringableObject()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			339 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createStringableObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			340 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createStringableObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			341 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createStringableObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			342 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createStringableObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			343 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createStringableObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			344 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createStringableObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			345 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createStringableObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			346 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createStringableObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			347 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createStringableObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			348 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createStringableObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			349 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createStringableObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			],
			350 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'mainArguments'              => [
					'nonEmptyValue' => $nonEmptyValue = Values::createStringableObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					ValueIsNotEmptyException::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE,
					StringifiedValues::STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonEmptyValue' => $nonEmptyValue
					],
					'additional' => $throwableContext
				]
			]
		];
	}
}
