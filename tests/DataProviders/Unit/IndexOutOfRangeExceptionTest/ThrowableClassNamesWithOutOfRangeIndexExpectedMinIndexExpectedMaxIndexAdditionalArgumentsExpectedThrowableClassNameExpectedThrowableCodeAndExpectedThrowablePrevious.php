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
class ThrowableClassNamesWithOutOfRangeIndexExpectedMinIndexExpectedMaxIndexAdditionalArgumentsExpectedThrowableClassNameExpectedThrowableCodeAndExpectedThrowablePrevious implements DataProviderInterface
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
					'outOfRangeIndex'  => IndicesAndOffsets::NULL,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::NULL,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			1   => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::NULL,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::NULL,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			2   => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::NULL,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::NULL,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			3   => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::NULL,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::NULL,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			4   => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::NULL,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::NULL,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			5   => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::NULL,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::NULL,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			6   => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::NULL,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::NULL,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			7   => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::NULL,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::NULL,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			8   => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::NULL,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::NULL,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			9   => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::ARRAY,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::ARRAY,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			10  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::ARRAY,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::ARRAY,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			11  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::ARRAY,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::ARRAY,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			12  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::ARRAY,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::ARRAY,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			13  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::ARRAY,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::ARRAY,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			14  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::ARRAY,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::ARRAY,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			15  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::ARRAY,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::ARRAY,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			16  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::ARRAY,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::ARRAY,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			17  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::ARRAY,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::ARRAY,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			18  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			19  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			20  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			21  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			22  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			23  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			24  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			25  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			26  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::BOOLEAN_FALSE,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			27  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			28  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			29  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			30  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			31  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			32  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			33  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			34  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			35  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::BOOLEAN_TRUE,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			36  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::INTEGER_0,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			37  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::INTEGER_0,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			38  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::INTEGER_0,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			39  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::INTEGER_0,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			40  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::INTEGER_0,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			41  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::INTEGER_0,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			42  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::INTEGER_0,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			43  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::INTEGER_0,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			44  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::INTEGER_0,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			45  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::INTEGER_1,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			46  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::INTEGER_1,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			47  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::INTEGER_1,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			48  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::INTEGER_1,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			49  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::INTEGER_1,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			50  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::INTEGER_1,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			51  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::INTEGER_1,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			52  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::INTEGER_1,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			53  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::INTEGER_1,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			54  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::FLOAT_0,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			55  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::FLOAT_0,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			56  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::FLOAT_0,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			57  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::FLOAT_0,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			58  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::FLOAT_0,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			59  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::FLOAT_0,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			60  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::FLOAT_0,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			61  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::FLOAT_0,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			62  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::FLOAT_0,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			63  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::FLOAT_1,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			64  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::FLOAT_1,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			65  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::FLOAT_1,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			66  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::FLOAT_1,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			67  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::FLOAT_1,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			68  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::FLOAT_1,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			69  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::FLOAT_1,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			70  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::FLOAT_1,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			71  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::FLOAT_1,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			72  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::STRING_0,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			73  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::STRING_0,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			74  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::STRING_0,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			75  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::STRING_0,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			76  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::STRING_0,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			77  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::STRING_0,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			78  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::STRING_0,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			79  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::STRING_0,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			80  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::STRING_0,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			81  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::STRING_1,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::STRING_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			82  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::STRING_1,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::STRING_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			83  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::STRING_1,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::STRING_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			84  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::STRING_1,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::STRING_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			85  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::STRING_1,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::STRING_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			86  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::STRING_1,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::STRING_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			87  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::STRING_1,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::STRING_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			88  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::STRING_1,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::STRING_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			89  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::STRING_1,
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::STRING_1,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			90  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::createResource(),
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			91  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::createResource(),
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			92  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::createResource(),
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			93  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::createResource(),
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			94  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::createResource(),
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			95  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::createResource(),
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			96  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::createResource(),
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			97  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::createResource(),
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			98  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::createResource(),
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			99  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::createClosedResource(),
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			100 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::createClosedResource(),
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			101 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::createClosedResource(),
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			102 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::createClosedResource(),
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			103 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::createClosedResource(),
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			104 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::createClosedResource(),
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			105 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::createClosedResource(),
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			106 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::createClosedResource(),
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			107 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::createClosedResource(),
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			108 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::createStandardObject(),
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			109 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::createStandardObject(),
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			110 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::createStandardObject(),
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			111 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::createStandardObject(),
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			112 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::createStandardObject(),
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			113 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::createStandardObject(),
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			114 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::createStandardObject(),
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			115 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::createStandardObject(),
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			116 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::createStandardObject(),
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			117 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::createInheritedStandardObject(),
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			118 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::createInheritedStandardObject(),
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			119 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::createInheritedStandardObject(),
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			120 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::createInheritedStandardObject(),
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			121 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::createInheritedStandardObject(),
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			122 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::createInheritedStandardObject(),
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			123 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::createInheritedStandardObject(),
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			124 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::createInheritedStandardObject(),
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			125 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::createInheritedStandardObject(),
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			126 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::createStringableObject(),
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			127 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::createStringableObject(),
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			128 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::createStringableObject(),
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			129 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::createStringableObject(),
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			130 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::createStringableObject(),
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			131 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::createStringableObject(),
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			132 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::createStringableObject(),
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			133 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::createStringableObject(),
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			134 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'mainArguments'              => [
					'outOfRangeIndex'  => IndicesAndOffsets::createStringableObject(),
					'expectedMinIndex' => IndicesAndOffsets::INTEGER_0,
					'expectedMaxIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					IndexOutOfRangeException::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					StringifiedIndicesAndOffsets::STRING_0,
					StringifiedIndicesAndOffsets::INTEGER_0,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			]
		];
	}
}
