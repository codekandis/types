<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\Unit\InvalidIndexExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\InvalidIndexException;
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
class ThrowableClassNamesWithInvalidIndexAdditionalArgumentsExpectedThrowableClassNameExpectedThrowableCodeAndExpectedThrowablePrevious implements DataProviderInterface
{
	/**
	 * {@inheritdoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0   => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			1   => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			2   => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			3   => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			4   => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			5   => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			6   => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			7   => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			8   => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::NULL
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::NULL
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			9   => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			10  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			11  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			12  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			13  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			14  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			15  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			16  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			17  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::ARRAY
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::ARRAY
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			18  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			19  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			20  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			21  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			22  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			23  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			24  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			25  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			26  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::BOOLEAN_FALSE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_FALSE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			27  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			28  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			29  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			30  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			31  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			32  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			33  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			34  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			35  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::BOOLEAN_TRUE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::BOOLEAN_TRUE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			36  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			37  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			38  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			39  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			40  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			41  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			42  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			43  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			44  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::INTEGER_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			45  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			46  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			47  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			48  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			49  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			50  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			51  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			52  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			53  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::INTEGER_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::INTEGER_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			54  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			55  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			56  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			57  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			58  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			59  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			60  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			61  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			62  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::FLOAT_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			63  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			64  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			65  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			66  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			67  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			68  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			69  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			70  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			71  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::FLOAT_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::FLOAT_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			72  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			73  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			74  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			75  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			76  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			77  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			78  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			79  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			80  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::STRING_0
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			81  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			82  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			83  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			84  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			85  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			86  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			87  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			88  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			89  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::STRING_1
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::STRING_1
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			90  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			91  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			92  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			93  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			94  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			95  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			96  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			97  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			98  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::createResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			99  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			100 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			101 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			102 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			103 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			104 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			105 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			106 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			107 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::createClosedResource()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::CLOSED_RESOURCE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			108 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			109 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			110 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			111 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			112 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			113 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			114 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			115 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			116 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::createStandardObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			117 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			118 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			119 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			120 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			121 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			122 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			123 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			124 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			125 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::createInheritedStandardObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::INHERITED_STANDARD_OBJECT_FIXTURE
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			126 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			127 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			128 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			129 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			130 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			131 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			132 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			133 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			134 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'mainArguments'              => [
					'invalidIndex' => IndicesAndOffsets::createStringableObject()
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidIndexException::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					StringifiedIndicesAndOffsets::STRING_0
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			]
		];
	}
}
