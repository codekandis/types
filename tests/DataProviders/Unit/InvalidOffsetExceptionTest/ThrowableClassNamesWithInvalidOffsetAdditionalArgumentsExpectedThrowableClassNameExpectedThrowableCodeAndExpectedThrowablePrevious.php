<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\Unit\InvalidOffsetExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\InvalidOffsetException;
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
final class ThrowableClassNamesWithInvalidOffsetAdditionalArgumentsExpectedThrowableClassNameExpectedThrowableCodeAndExpectedThrowablePrevious implements DataProviderInterface
{
	/**
	 * {@inheritdoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0   => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1   => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			2   => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			3   => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			4   => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			5   => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			6   => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			7   => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			8   => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			9   => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			10  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			11  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			12  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			13  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			14  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			15  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			16  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			17  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			18  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			19  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			20  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			21  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			22  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			23  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			24  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			25  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			26  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			27  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			28  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			29  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			30  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			31  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			32  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			33  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			34  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			35  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			36  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			37  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			38  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			39  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			40  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			41  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			42  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			43  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			44  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			45  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			46  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			47  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			48  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			49  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			50  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			51  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			52  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			53  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			54  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			55  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			56  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			57  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			58  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			59  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			60  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			61  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			62  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			63  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			64  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			65  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			66  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			67  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			68  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			69  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			70  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			71  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			72  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			73  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			74  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			75  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			76  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			77  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			78  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			79  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			80  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			81  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			82  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			83  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			84  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			85  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			86  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			87  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			88  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			89  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			90  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			91  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			92  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			93  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			94  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			95  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			96  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			97  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			98  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			99  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			100 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			101 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			102 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			103 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			104 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			105 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			106 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			107 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			108 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			109 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			110 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			111 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			112 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			113 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			114 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			115 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			116 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			117 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			118 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			119 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			120 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			121 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			122 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			123 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			124 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			125 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			126 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			127 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			128 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			129 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			130 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			131 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			132 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			133 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			134 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			135 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			136 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			137 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			138 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			139 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			140 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			141 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			142 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			143 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			144 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			145 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			146 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			147 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			148 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			149 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			150 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			151 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			152 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			153 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			154 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			155 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			156 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			157 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			158 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			159 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			160 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			161 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			162 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			163 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			164 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			165 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			166 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			167 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			168 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			169 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			170 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			171 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			172 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			173 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			174 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			175 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			176 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			177 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			178 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			179 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			180 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			181 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			182 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			183 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			184 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			185 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			186 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			187 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			188 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			189 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			190 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			191 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			192 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			193 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			194 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			195 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			196 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			197 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			198 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			199 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			200 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			201 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			202 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			203 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			204 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			205 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			206 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			207 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			208 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			209 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			210 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			211 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			212 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			213 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			214 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			215 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			216 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			217 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			218 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			219 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			220 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			221 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			222 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			223 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			224 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			225 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			226 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			227 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			228 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			229 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			230 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			231 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			232 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			233 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			234 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			235 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			236 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			237 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			238 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			239 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			240 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			241 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			242 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			243 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			244 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			245 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			246 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			247 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			248 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			249 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			250 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			251 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			252 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			253 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			254 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			255 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			256 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			257 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			258 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			259 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			260 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			261 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			262 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			263 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			264 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			265 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			266 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			267 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			268 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			269 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			270 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			271 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			272 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			273 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			274 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			275 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			276 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			277 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			278 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			279 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			280 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			281 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			282 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			283 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			284 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			285 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			286 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			287 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			288 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			289 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			290 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			291 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			292 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			293 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			294 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			295 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			296 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			297 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			298 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			299 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			300 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			301 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			302 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			303 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			304 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			305 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			306 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			307 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			308 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			309 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			310 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			311 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			312 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			313 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			314 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			315 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			316 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			317 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			318 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			319 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			320 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			321 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			322 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			323 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			324 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			325 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			326 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			327 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			328 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			329 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			330 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			331 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			332 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			333 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			334 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			335 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			336 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			337 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			338 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			339 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			340 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			341 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			342 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			343 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			344 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			345 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			346 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			347 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			348 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			349 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			350 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			351 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			352 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			353 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			354 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			355 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			356 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			357 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			358 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			359 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			360 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			361 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			362 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			363 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			364 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			365 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			366 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			367 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			368 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			369 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			370 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			371 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			372 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			373 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			374 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			375 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			376 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			377 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			378 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			379 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			380 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			381 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			382 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			383 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			384 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			385 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			386 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			387 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			388 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			389 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			390 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			391 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			392 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			393 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			394 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			395 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			396 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			397 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			398 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			399 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			400 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			401 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			402 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			403 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			],
			404 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset' => $invalidOffset = IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidOffset' => $invalidOffset
					],
					'additional' => $throwableContext
				]
			]
		];
	}
}
