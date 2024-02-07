<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\Unit\InvalidOffsetExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\InvalidOffsetException;
use CodeKandis\Types\Tests\Fixtures\IndicesAndOffsets;
use CodeKandis\Types\Tests\Fixtures\StringifiedIndicesAndOffsets;
use CodeKandis\Types\Tests\Fixtures\Values;
use Override;
use function implode;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with additional arguments, expected throwable class name, expected throwable message and expected throwable previous.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithInvalidOffsetExpectedOffsetsAdditionalArgumentsExpectedThrowableClassNameExpectedThrowableCodeAndExpectedThrowablePrevious implements DataProviderInterface
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
					'invalidOffset'   => IndicesAndOffsets::NULL,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::NULL,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			1   => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::NULL,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::NULL,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			2   => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::NULL,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::NULL,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			3   => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::NULL,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::NULL,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			4   => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::NULL,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::NULL,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			5   => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::NULL,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::NULL,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			6   => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::NULL,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::NULL,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			7   => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::NULL,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::NULL,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			8   => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::NULL,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::NULL,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			9   => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::NULL,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::NULL,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			10  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::NULL,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::NULL,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			11  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::NULL,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::NULL,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			12  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::NULL,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::NULL,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			13  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::NULL,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::NULL,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			14  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::NULL,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::NULL,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			15  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::NULL,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::NULL,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			16  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::NULL,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::NULL,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			17  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::NULL,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::NULL,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			18  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::NULL,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::NULL,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			19  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::NULL,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::NULL,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			20  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::NULL,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::NULL,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			21  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::NULL,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::NULL,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			22  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::NULL,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::NULL,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			23  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::NULL,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::NULL,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			24  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::NULL,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::NULL,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			25  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::NULL,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::NULL,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			26  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::NULL,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::NULL,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			27  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::NULL,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::NULL,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			28  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::NULL,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::NULL,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			29  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::NULL,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::NULL,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			30  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::NULL,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::NULL,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			31  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::NULL,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::NULL,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			32  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::NULL,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::NULL,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			33  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::NULL,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::NULL,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			34  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::NULL,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::NULL,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			35  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::NULL,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::NULL,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			36  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::NULL,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::NULL,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			37  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::NULL,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::NULL,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			38  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::NULL,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::NULL,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			39  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::NULL,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::NULL,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			40  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::NULL,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::NULL,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			41  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::NULL,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::NULL,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			42  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::NULL,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::NULL,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			43  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::NULL,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::NULL,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			44  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::NULL,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::NULL,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			45  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::ARRAY,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::ARRAY,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			46  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::ARRAY,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::ARRAY,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			47  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::ARRAY,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::ARRAY,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			48  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::ARRAY,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::ARRAY,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			49  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::ARRAY,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::ARRAY,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			50  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::ARRAY,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::ARRAY,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			51  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::ARRAY,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::ARRAY,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			52  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::ARRAY,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::ARRAY,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			53  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::ARRAY,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::ARRAY,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			54  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::ARRAY,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::ARRAY,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			55  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::ARRAY,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::ARRAY,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			56  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::ARRAY,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::ARRAY,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			57  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::ARRAY,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::ARRAY,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			58  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::ARRAY,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::ARRAY,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			59  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::ARRAY,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::ARRAY,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			60  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::ARRAY,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::ARRAY,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			61  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::ARRAY,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::ARRAY,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			62  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::ARRAY,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::ARRAY,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			63  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::ARRAY,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::ARRAY,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			64  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::ARRAY,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::ARRAY,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			65  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::ARRAY,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::ARRAY,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			66  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::ARRAY,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::ARRAY,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			67  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::ARRAY,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::ARRAY,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			68  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::ARRAY,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::ARRAY,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			69  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::ARRAY,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::ARRAY,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			70  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::ARRAY,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::ARRAY,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			71  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::ARRAY,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::ARRAY,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			72  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::ARRAY,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::ARRAY,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			73  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::ARRAY,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::ARRAY,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			74  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::ARRAY,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::ARRAY,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			75  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::ARRAY,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::ARRAY,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			76  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::ARRAY,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::ARRAY,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			77  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::ARRAY,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::ARRAY,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			78  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::ARRAY,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::ARRAY,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			79  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::ARRAY,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::ARRAY,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			80  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::ARRAY,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::ARRAY,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			81  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::ARRAY,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::ARRAY,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			82  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::ARRAY,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::ARRAY,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			83  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::ARRAY,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::ARRAY,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			84  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::ARRAY,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::ARRAY,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			85  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::ARRAY,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::ARRAY,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			86  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::ARRAY,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::ARRAY,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			87  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::ARRAY,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::ARRAY,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			88  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::ARRAY,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::ARRAY,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			89  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::ARRAY,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::ARRAY,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			90  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			91  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			92  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			93  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			94  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			95  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			96  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			97  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			98  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			99  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			100 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			101 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			102 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			103 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			104 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			105 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			106 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			107 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			108 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			109 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			110 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			111 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			112 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			113 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			114 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			115 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			116 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			117 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			118 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			119 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			120 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			121 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			122 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			123 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			124 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			125 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			126 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			127 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			128 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			129 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			130 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			131 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			132 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			133 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			134 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			135 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			136 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			137 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			138 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			139 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			140 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			141 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			142 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			143 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			144 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			145 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			146 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			147 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			148 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			149 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			150 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			151 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			152 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			153 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			154 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			155 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			156 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			157 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			158 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			159 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			160 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			161 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			162 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			163 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			164 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			165 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			166 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			167 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			168 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			169 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			170 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			171 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			172 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			173 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			174 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			175 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			176 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			177 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			178 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			179 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			180 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_0,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			181 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_0,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			182 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_0,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			183 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_0,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			184 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_0,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			185 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_0,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			186 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_0,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			187 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_0,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			188 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_0,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			189 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_0,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			190 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_0,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			191 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_0,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			192 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_0,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			193 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_0,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			194 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_0,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			195 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_0,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			196 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_0,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			197 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_0,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			198 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_0,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			199 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_0,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			200 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_0,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			201 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_0,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			202 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_0,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			203 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_0,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			204 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_0,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			205 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_0,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			206 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_0,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			207 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_0,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			208 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_0,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			209 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_0,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			210 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_0,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			211 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_0,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			212 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_0,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			213 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_0,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			214 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_0,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			215 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_0,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			216 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_0,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			217 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_0,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			218 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_0,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			219 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_0,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			220 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_0,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			221 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_0,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			222 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_0,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			223 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_0,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			224 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_0,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			225 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_1,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			226 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_1,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			227 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_1,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			228 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_1,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			229 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_1,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			230 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_1,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			231 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_1,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			232 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_1,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			233 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_1,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			234 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_1,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			235 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_1,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			236 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_1,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			237 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_1,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			238 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_1,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			239 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_1,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			240 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_1,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			241 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_1,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			242 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_1,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			243 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_1,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			244 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_1,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			245 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_1,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			246 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_1,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			247 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_1,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			248 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_1,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			249 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_1,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			250 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_1,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			251 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_1,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			252 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_1,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			253 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_1,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			254 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_1,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			255 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_1,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			256 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_1,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			257 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_1,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			258 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_1,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			259 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_1,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			260 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_1,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			261 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_1,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			262 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_1,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			263 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_1,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			264 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_1,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			265 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_1,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			266 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_1,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			267 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_1,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			268 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_1,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			269 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::INTEGER_1,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INTEGER_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			270 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_0,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			271 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_0,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			272 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_0,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			273 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_0,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			274 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_0,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			275 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_0,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			276 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_0,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			277 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_0,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			278 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_0,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			279 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_0,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			280 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_0,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			281 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_0,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			282 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_0,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			283 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_0,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			284 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_0,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			285 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_0,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			286 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_0,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			287 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_0,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			288 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_0,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			289 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_0,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			290 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_0,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			291 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_0,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			292 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_0,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			293 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_0,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			294 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_0,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			295 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_0,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			296 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_0,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			297 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_0,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			298 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_0,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			299 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_0,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			300 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_0,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			301 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_0,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			302 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_0,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			303 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_0,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			304 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_0,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			305 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_0,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			306 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_0,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			307 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_0,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			308 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_0,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			309 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_0,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			310 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_0,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			311 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_0,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			312 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_0,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			313 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_0,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			314 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_0,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			315 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_1,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			316 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_1,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			317 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_1,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			318 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_1,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			319 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_1,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			320 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_1,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			321 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_1,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			322 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_1,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			323 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_1,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			324 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_1,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			325 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_1,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			326 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_1,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			327 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_1,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			328 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_1,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			329 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_1,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			330 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_1,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			331 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_1,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			332 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_1,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			333 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_1,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			334 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_1,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			335 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_1,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			336 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_1,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			337 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_1,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			338 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_1,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			339 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_1,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			340 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_1,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			341 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_1,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			342 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_1,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			343 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_1,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			344 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_1,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			345 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_1,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			346 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_1,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			347 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_1,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			348 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_1,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			349 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_1,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			350 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_1,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			351 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_1,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			352 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_1,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			353 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_1,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			354 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_1,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			355 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_1,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			356 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_1,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			357 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_1,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			358 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_1,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			359 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::FLOAT_1,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::FLOAT_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			360 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_0,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			361 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_0,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			362 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_0,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			363 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_0,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			364 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_0,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			365 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_0,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			366 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_0,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			367 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_0,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			368 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_0,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			369 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_0,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			370 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_0,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			371 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_0,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			372 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_0,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			373 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_0,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			374 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_0,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			375 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_0,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			376 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_0,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			377 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_0,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			378 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_0,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			379 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_0,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			380 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_0,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			381 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_0,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			382 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_0,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			383 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_0,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			384 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_0,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			385 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_0,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			386 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_0,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			387 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_0,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			388 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_0,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			389 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_0,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			390 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_0,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			391 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_0,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			392 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_0,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			393 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_0,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			394 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_0,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			395 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_0,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			396 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_0,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			397 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_0,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			398 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_0,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			399 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_0,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			400 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_0,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			401 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_0,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			402 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_0,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			403 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_0,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			404 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_0,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			405 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_1,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			406 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_1,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			407 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_1,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			408 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_1,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			409 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_1,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			410 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_1,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			411 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_1,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			412 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_1,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			413 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_1,
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			414 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_1,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			415 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_1,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			416 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_1,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			417 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_1,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			418 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_1,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			419 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_1,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			420 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_1,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			421 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_1,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			422 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_1,
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			423 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_1,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			424 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_1,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			425 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_1,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			426 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_1,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			427 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_1,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			428 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_1,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			429 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_1,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			430 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_1,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			431 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_1,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			432 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_1,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			433 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_1,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			434 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_1,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			435 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_1,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			436 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_1,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			437 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_1,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			438 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_1,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			439 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_1,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			440 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_1,
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			441 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_1,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			442 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_1,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			443 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_1,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			444 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_1,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			445 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_1,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			446 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_1,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			447 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_1,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			448 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_1,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			449 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::STRING_1,
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_1,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			450 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createResource(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			451 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createResource(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			452 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createResource(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			453 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createResource(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			454 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createResource(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			455 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createResource(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			456 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createResource(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			457 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createResource(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			458 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createResource(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			459 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createResource(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			460 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createResource(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			461 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createResource(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			462 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createResource(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			463 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createResource(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			464 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createResource(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			465 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createResource(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			466 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createResource(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			467 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createResource(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			468 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createResource(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			469 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createResource(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			470 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createResource(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			471 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createResource(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			472 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createResource(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			473 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createResource(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			474 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createResource(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			475 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createResource(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			476 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createResource(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			477 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createResource(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			478 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createResource(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			479 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createResource(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			480 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createResource(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			481 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createResource(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			482 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createResource(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			483 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createResource(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			484 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createResource(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			485 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createResource(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			486 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createResource(),
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			487 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createResource(),
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			488 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createResource(),
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			489 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createResource(),
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			490 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createResource(),
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			491 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createResource(),
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			492 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createResource(),
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			493 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createResource(),
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			494 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createResource(),
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			495 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createClosedResource(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			496 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createClosedResource(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			497 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createClosedResource(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			498 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createClosedResource(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			499 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createClosedResource(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			500 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createClosedResource(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			501 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createClosedResource(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			502 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createClosedResource(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			503 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createClosedResource(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			504 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createClosedResource(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			505 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createClosedResource(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			506 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createClosedResource(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			507 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createClosedResource(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			508 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createClosedResource(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			509 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createClosedResource(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			510 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createClosedResource(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			511 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createClosedResource(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			512 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createClosedResource(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			513 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createClosedResource(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			514 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createClosedResource(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			515 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createClosedResource(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			516 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createClosedResource(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			517 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createClosedResource(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			518 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createClosedResource(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			519 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createClosedResource(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			520 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createClosedResource(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			521 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createClosedResource(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			522 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createClosedResource(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			523 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createClosedResource(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			524 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createClosedResource(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			525 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createClosedResource(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			526 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createClosedResource(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			527 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createClosedResource(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			528 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createClosedResource(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			529 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createClosedResource(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			530 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createClosedResource(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			531 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createClosedResource(),
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			532 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createClosedResource(),
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			533 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createClosedResource(),
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			534 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createClosedResource(),
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			535 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createClosedResource(),
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			536 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createClosedResource(),
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			537 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createClosedResource(),
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			538 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createClosedResource(),
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			539 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createClosedResource(),
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			540 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			541 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			542 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			543 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			544 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			545 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			546 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			547 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			548 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			549 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			550 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			551 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			552 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			553 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			554 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			555 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			556 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			557 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			558 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			559 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			560 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			561 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			562 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			563 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			564 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			565 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			566 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			567 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			568 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			569 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			570 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			571 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			572 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			573 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			574 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			575 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			576 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			577 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			578 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			579 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			580 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			581 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			582 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			583 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			584 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			585 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createInheritedStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			586 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createInheritedStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			587 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createInheritedStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			588 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createInheritedStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			589 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createInheritedStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			590 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createInheritedStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			591 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createInheritedStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			592 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createInheritedStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			593 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createInheritedStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			594 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createInheritedStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			595 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createInheritedStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			596 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createInheritedStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			597 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createInheritedStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			598 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createInheritedStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			599 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createInheritedStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			600 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createInheritedStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			601 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createInheritedStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			602 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createInheritedStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			603 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createInheritedStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			604 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createInheritedStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			605 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createInheritedStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			606 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createInheritedStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			607 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createInheritedStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			608 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createInheritedStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			609 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createInheritedStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			610 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createInheritedStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			611 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createInheritedStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			612 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createInheritedStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			613 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createInheritedStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			614 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createInheritedStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			615 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createInheritedStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			616 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createInheritedStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			617 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createInheritedStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			618 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createInheritedStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			619 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createInheritedStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			620 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createInheritedStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			621 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createInheritedStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			622 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createInheritedStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			623 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createInheritedStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			624 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createInheritedStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			625 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createInheritedStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			626 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createInheritedStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			627 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createInheritedStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			628 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createInheritedStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			629 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createInheritedStandardObject(),
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			630 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStringableObject(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			631 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStringableObject(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			632 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStringableObject(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			633 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStringableObject(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			634 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStringableObject(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			635 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStringableObject(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			636 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStringableObject(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			637 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStringableObject(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			638 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStringableObject(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			639 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStringableObject(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			640 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStringableObject(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			641 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStringableObject(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			642 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStringableObject(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			643 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStringableObject(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			644 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStringableObject(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			645 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStringableObject(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			646 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStringableObject(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			647 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStringableObject(),
					'expectedOffsets' => IndicesAndOffsets::createSingle_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createSingle_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			648 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStringableObject(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			649 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStringableObject(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			650 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStringableObject(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			651 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStringableObject(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			652 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStringableObject(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			653 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStringableObject(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			654 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStringableObject(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			655 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStringableObject(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			656 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStringableObject(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_0()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_0() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			657 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStringableObject(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			658 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStringableObject(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			659 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStringableObject(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			660 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStringableObject(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			661 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStringableObject(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			662 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStringableObject(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			663 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStringableObject(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			664 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStringableObject(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			665 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStringableObject(),
					'expectedOffsets' => IndicesAndOffsets::createMultiple_1()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createMultiple_1() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			666 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStringableObject(),
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			667 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStringableObject(),
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			668 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStringableObject(),
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			669 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStringableObject(),
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			670 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStringableObject(),
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			671 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStringableObject(),
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			672 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStringableObject(),
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			673 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStringableObject(),
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			674 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'mainArguments'              => [
					'invalidOffset'   => IndicesAndOffsets::createStringableObject(),
					'expectedOffsets' => IndicesAndOffsets::createAll()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidOffsetException::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					StringifiedIndicesAndOffsets::STRING_0,
					implode( ' | ', StringifiedIndicesAndOffsets::createAll() )
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			]
		];
	}
}
