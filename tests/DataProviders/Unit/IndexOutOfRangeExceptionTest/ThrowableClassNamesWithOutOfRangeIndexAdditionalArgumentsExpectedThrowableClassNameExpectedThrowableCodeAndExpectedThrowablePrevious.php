<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\Unit\IndexOutOfRangeExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\IndexOutOfRangeException;
use CodeKandis\Types\Tests\Fixtures\IndicesAndOffsets;
use CodeKandis\Types\Tests\Fixtures\StringifiedIndicesAndOffsets;
use CodeKandis\Types\Tests\Fixtures\Values;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with additional arguments, expected throwable class name, expected throwable message and expected throwable previous.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
final class ThrowableClassNamesWithOutOfRangeIndexAdditionalArgumentsExpectedThrowableClassNameExpectedThrowableCodeAndExpectedThrowablePrevious implements DataProviderInterface
{
	/**
	 * {@inheritdoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0   => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1   => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			2   => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			3   => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			4   => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			5   => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			6   => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			7   => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			8   => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			9   => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			10  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			11  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			12  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			13  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			14  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			15  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			16  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			17  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			18  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			19  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			20  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			21  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			22  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			23  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			24  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			25  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			26  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			27  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			28  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			29  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			30  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			31  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			32  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			33  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			34  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			35  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			36  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			37  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			38  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			39  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			40  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			41  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			42  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			43  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			44  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			45  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			46  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			47  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			48  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			49  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			50  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			51  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			52  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			53  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			54  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			55  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			56  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			57  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			58  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			59  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			60  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			61  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			62  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			63  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			64  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			65  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			66  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			67  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			68  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			69  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			70  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			71  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			72  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			73  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			74  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			75  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			76  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			77  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			78  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			79  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			80  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			81  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			82  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			83  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			84  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			85  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			86  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			87  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			88  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			89  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			90  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			91  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			92  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			93  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			94  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			95  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			96  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			97  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			98  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			99  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			100 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			101 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			102 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			103 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			104 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			105 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			106 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			107 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			108 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			109 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			110 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			111 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			112 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			113 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			114 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			115 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			116 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			117 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			118 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			119 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			120 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			121 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			122 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			123 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			124 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			125 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			126 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			127 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			128 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			129 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			130 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			131 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			132 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			133 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			134 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			135 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			136 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			137 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			138 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			139 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			140 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			141 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			142 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			143 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			144 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			145 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			146 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			147 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			148 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			149 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			150 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			151 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			152 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			153 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			154 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			155 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			156 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			157 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			158 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			159 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			160 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			161 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			162 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			163 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			164 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			165 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			166 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			167 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			168 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			169 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			170 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			171 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			172 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			173 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			174 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			175 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			176 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			177 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			178 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			179 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			180 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			181 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			182 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			183 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			184 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			185 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			186 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			187 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			188 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			189 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			190 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			191 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			192 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			193 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			194 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			195 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			196 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			197 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			198 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			199 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			200 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			201 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			202 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			203 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			204 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			205 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			206 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			207 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			208 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			209 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			210 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			211 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			212 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			213 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			214 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			215 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			216 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			217 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			218 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			219 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			220 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			221 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			222 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			223 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			224 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			225 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			226 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			227 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			228 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			229 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			230 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			231 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			232 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			233 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			234 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			235 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			236 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			237 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			238 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			239 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			240 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			241 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			242 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			243 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			244 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			245 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			246 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			247 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			248 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			249 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			250 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			251 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			252 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			253 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			254 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			255 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			256 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			257 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			258 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			259 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			260 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			261 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			262 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			263 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			264 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			265 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			266 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			267 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			268 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			269 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			270 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			271 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			272 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			273 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			274 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			275 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			276 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			277 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			278 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			279 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			280 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			281 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			282 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			283 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			284 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			285 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			286 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			287 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			288 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			289 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			290 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			291 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			292 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			293 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			294 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			295 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			296 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			297 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			298 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			299 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			300 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			301 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			302 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			303 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			304 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			305 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			306 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			307 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			308 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			309 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			310 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			311 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			312 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			313 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			314 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			315 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			316 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			317 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			318 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			319 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			320 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			321 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			322 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			323 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			324 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			325 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			326 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			327 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			328 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			329 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			330 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			331 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			332 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			333 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			334 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			335 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			336 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			337 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			338 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			339 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			340 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			341 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			342 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			343 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			344 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			345 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			346 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			347 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			348 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			349 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			350 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			351 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			352 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			353 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			354 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			355 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			356 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			357 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			358 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			359 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			360 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			361 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			362 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			363 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			364 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			365 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			366 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			367 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			368 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			369 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			370 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			371 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			372 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			373 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			374 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			375 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			376 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			377 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			378 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			379 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			380 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			381 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			382 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			383 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			384 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			385 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			386 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			387 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			388 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			389 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			390 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			391 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			392 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			393 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			394 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			395 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			396 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			397 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			398 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			399 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			400 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			401 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			402 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			403 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			],
			404 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex' => $outOfRangeIndex = IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeIndex' => $outOfRangeIndex
					],
					'additional' => $throwableContext
				]
			]
		];
	}
}
