<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\Unit\OffsetOutOfRangeExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\OffsetOutOfRangeException;
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
final class ThrowableClassNamesWithOutOfRangeOffsetExpectedMinOffsetExpectedMaxOffsetAdditionalArgumentsExpectedThrowableClassNameExpectedThrowableCodeAndExpectedThrowablePrevious implements DataProviderInterface
{
	/**
	 * {@inheritdoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0   => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::NULL,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::NULL,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1   => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::NULL,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::NULL,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			2   => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::NULL,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::NULL,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			3   => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::NULL,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::NULL,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			4   => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::NULL,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::NULL,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			5   => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::NULL,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::NULL,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			6   => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::NULL,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::NULL,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			7   => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::NULL,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::NULL,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			8   => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::NULL,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::NULL,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			9   => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::NULL,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::NULL,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			10  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::NULL,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::NULL,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			11  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::NULL,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::NULL,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			12  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::NULL,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::NULL,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			13  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::NULL,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::NULL,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			14  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::NULL,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::NULL,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			15  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::NULL,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::NULL,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			16  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::NULL,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::NULL,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			17  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::NULL,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::NULL,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			18  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::NULL,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::NULL,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			19  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::NULL,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::NULL,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			20  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::NULL,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::NULL,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			21  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::NULL,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::NULL,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			22  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::NULL,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::NULL,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			23  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::NULL,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::NULL,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			24  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::NULL,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::NULL,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			25  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::NULL,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::NULL,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			26  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::NULL,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::NULL,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			27  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::ARRAY,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::ARRAY,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			28  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::ARRAY,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::ARRAY,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			29  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::ARRAY,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::ARRAY,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			30  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::ARRAY,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::ARRAY,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			31  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::ARRAY,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::ARRAY,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			32  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::ARRAY,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::ARRAY,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			33  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::ARRAY,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::ARRAY,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			34  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::ARRAY,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::ARRAY,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			35  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::ARRAY,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::ARRAY,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			36  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::ARRAY,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::ARRAY,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			37  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::ARRAY,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::ARRAY,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			38  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::ARRAY,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::ARRAY,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			39  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::ARRAY,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::ARRAY,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			40  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::ARRAY,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::ARRAY,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			41  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::ARRAY,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::ARRAY,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			42  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::ARRAY,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::ARRAY,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			43  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::ARRAY,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::ARRAY,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			44  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::ARRAY,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::ARRAY,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			45  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::ARRAY,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::ARRAY,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			46  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::ARRAY,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::ARRAY,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			47  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::ARRAY,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::ARRAY,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			48  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::ARRAY,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::ARRAY,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			49  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::ARRAY,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::ARRAY,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			50  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::ARRAY,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::ARRAY,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			51  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::ARRAY,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::ARRAY,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			52  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::ARRAY,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::ARRAY,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			53  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::ARRAY,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::ARRAY,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			54  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			55  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			56  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			57  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			58  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			59  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			60  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			61  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			62  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			63  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			64  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			65  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			66  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			67  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			68  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			69  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			70  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			71  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			72  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			73  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			74  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			75  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			76  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			77  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			78  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			79  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			80  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			81  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			82  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			83  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			84  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			85  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			86  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			87  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			88  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			89  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			90  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			91  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			92  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			93  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			94  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			95  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			96  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			97  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			98  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			99  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			100 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			101 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			102 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			103 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			104 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			105 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			106 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			107 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			108 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			109 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			110 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			111 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			112 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			113 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			114 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			115 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			116 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			117 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			118 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			119 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			120 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			121 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			122 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			123 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			124 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			125 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			126 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			127 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			128 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			129 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			130 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			131 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			132 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			133 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			134 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			135 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::INTEGER_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			136 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::INTEGER_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			137 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::INTEGER_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			138 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::INTEGER_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			139 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::INTEGER_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			140 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::INTEGER_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			141 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::INTEGER_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			142 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::INTEGER_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			143 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::INTEGER_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			144 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::INTEGER_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			145 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::INTEGER_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			146 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::INTEGER_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			147 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::INTEGER_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			148 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::INTEGER_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			149 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::INTEGER_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			150 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::INTEGER_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			151 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::INTEGER_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			152 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::INTEGER_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			153 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::INTEGER_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			154 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::INTEGER_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			155 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::INTEGER_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			156 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::INTEGER_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			157 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::INTEGER_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			158 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::INTEGER_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			159 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::INTEGER_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			160 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::INTEGER_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			161 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::INTEGER_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			162 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::FLOAT_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			163 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::FLOAT_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			164 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::FLOAT_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			165 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::FLOAT_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			166 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::FLOAT_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			167 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::FLOAT_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			168 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::FLOAT_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			169 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::FLOAT_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			170 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::FLOAT_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			171 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::FLOAT_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			172 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::FLOAT_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			173 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::FLOAT_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			174 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::FLOAT_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			175 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::FLOAT_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			176 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::FLOAT_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			177 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::FLOAT_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			178 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::FLOAT_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			179 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::FLOAT_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			180 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::FLOAT_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			181 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::FLOAT_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			182 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::FLOAT_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			183 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::FLOAT_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			184 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::FLOAT_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			185 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::FLOAT_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			186 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::FLOAT_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			187 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::FLOAT_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			188 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::FLOAT_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			189 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::FLOAT_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			190 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::FLOAT_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			191 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::FLOAT_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			192 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::FLOAT_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			193 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::FLOAT_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			194 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::FLOAT_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			195 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::FLOAT_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			196 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::FLOAT_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			197 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::FLOAT_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			198 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::FLOAT_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			199 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::FLOAT_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			200 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::FLOAT_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			201 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::FLOAT_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			202 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::FLOAT_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			203 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::FLOAT_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			204 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::FLOAT_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			205 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::FLOAT_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			206 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::FLOAT_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			207 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::FLOAT_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			208 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::FLOAT_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			209 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::FLOAT_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			210 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::FLOAT_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			211 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::FLOAT_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			212 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::FLOAT_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			213 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::FLOAT_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			214 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::FLOAT_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			215 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::FLOAT_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			216 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::STRING_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			217 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::STRING_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			218 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::STRING_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			219 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::STRING_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			220 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::STRING_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			221 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::STRING_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			222 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::STRING_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			223 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::STRING_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			224 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::STRING_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			225 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::STRING_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			226 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::STRING_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			227 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::STRING_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			228 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::STRING_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			229 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::STRING_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			230 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::STRING_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			231 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::STRING_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			232 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::STRING_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			233 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::STRING_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			234 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::STRING_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			235 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::STRING_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			236 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::STRING_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			237 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::STRING_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			238 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::STRING_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			239 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::STRING_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			240 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::STRING_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			241 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::STRING_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			242 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::STRING_0,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			243 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::STRING_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			244 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::STRING_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			245 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::STRING_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			246 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::STRING_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			247 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::STRING_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			248 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::STRING_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			249 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::STRING_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			250 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::STRING_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			251 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::STRING_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			252 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::STRING_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			253 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::STRING_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			254 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::STRING_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			255 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::STRING_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			256 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::STRING_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			257 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::STRING_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			258 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::STRING_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			259 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::STRING_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			260 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::STRING_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			261 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::STRING_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			262 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::STRING_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			263 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::STRING_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			264 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::STRING_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			265 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::STRING_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			266 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::STRING_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			267 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::STRING_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			268 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::STRING_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			269 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::STRING_1,
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			270 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createResource(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			271 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createResource(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			272 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createResource(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			273 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createResource(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			274 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createResource(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			275 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createResource(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			276 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createResource(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			277 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createResource(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			278 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createResource(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			279 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createResource(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			280 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createResource(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			281 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createResource(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			282 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createResource(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			283 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createResource(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			284 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createResource(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			285 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createResource(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			286 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createResource(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			287 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createResource(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			288 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createResource(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			289 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createResource(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			290 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createResource(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			291 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createResource(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			292 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createResource(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			293 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createResource(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			294 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createResource(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			295 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createResource(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			296 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createResource(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			297 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createClosedResource(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			298 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createClosedResource(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			299 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createClosedResource(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			300 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createClosedResource(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			301 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createClosedResource(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			302 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createClosedResource(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			303 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createClosedResource(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			304 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createClosedResource(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			305 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createClosedResource(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			306 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createClosedResource(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			307 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createClosedResource(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			308 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createClosedResource(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			309 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createClosedResource(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			310 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createClosedResource(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			311 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createClosedResource(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			312 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createClosedResource(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			313 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createClosedResource(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			314 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createClosedResource(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			315 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createClosedResource(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			316 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createClosedResource(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			317 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createClosedResource(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			318 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createClosedResource(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			319 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createClosedResource(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			320 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createClosedResource(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			321 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createClosedResource(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			322 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createClosedResource(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			323 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createClosedResource(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			324 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createStandardObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			325 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createStandardObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			326 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createStandardObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			327 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createStandardObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			328 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createStandardObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			329 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createStandardObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			330 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createStandardObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			331 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createStandardObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			332 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createStandardObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			333 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createStandardObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			334 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createStandardObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			335 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createStandardObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			336 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createStandardObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			337 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createStandardObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			338 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createStandardObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			339 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createStandardObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			340 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createStandardObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			341 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createStandardObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			342 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createStandardObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			343 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createStandardObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			344 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createStandardObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			345 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createStandardObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			346 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createStandardObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			347 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createStandardObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			348 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createStandardObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			349 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createStandardObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			350 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createStandardObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			351 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createInheritedStandardObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			352 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createInheritedStandardObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			353 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createInheritedStandardObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			354 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createInheritedStandardObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			355 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createInheritedStandardObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			356 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createInheritedStandardObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			357 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createInheritedStandardObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			358 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createInheritedStandardObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			359 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createInheritedStandardObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			360 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createInheritedStandardObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			361 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createInheritedStandardObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			362 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createInheritedStandardObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			363 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createInheritedStandardObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			364 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createInheritedStandardObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			365 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createInheritedStandardObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			366 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createInheritedStandardObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			367 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createInheritedStandardObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			368 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createInheritedStandardObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			369 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createInheritedStandardObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			370 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createInheritedStandardObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			371 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createInheritedStandardObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			372 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createInheritedStandardObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			373 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createInheritedStandardObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			374 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createInheritedStandardObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			375 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createInheritedStandardObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			376 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createInheritedStandardObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			377 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createInheritedStandardObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			378 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createStringableObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			379 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createStringableObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			380 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createStringableObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			381 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createStringableObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			382 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createStringableObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			383 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createStringableObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			384 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createStringableObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			385 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createStringableObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			386 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createStringableObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			387 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createStringableObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			388 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createStringableObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			389 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createStringableObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			390 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createStringableObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			391 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createStringableObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			392 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createStringableObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			393 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createStringableObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			394 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createStringableObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			395 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createStringableObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			396 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createStringableObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			397 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createStringableObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			398 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createStringableObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			399 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createStringableObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			400 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createStringableObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			401 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createStringableObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			402 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createStringableObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			403 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createStringableObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			],
			404 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeOffset'  => $outOfRangeOffset = IndicesAndOffsets::createStringableObject(),
					'expectedMinOffset' => $expectedMinOffset = IndicesAndOffsets::INTEGER_0,
					'expectedMaxOffset' => $expectedMaxOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					OffsetOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'outOfRangeOffset'  => $outOfRangeOffset,
						'expectedMinOffset' => $expectedMinOffset,
						'expectedMaxOffset' => $expectedMaxOffset
					],
					'additional' => $throwableContext
				]
			]
		];
	}
}
