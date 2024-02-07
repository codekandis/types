<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\InvalidOffsetExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\InvalidOffsetException;
use CodeKandis\Types\OffsetOutOfRangeException;
use CodeKandis\Types\Tests\Fixtures\Offsets;
use CodeKandis\Types\Tests\Fixtures\Values;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with invalid offset, expected indices, expected throwable class name, expected throwable message, expected throwable code and expected throwable previous.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithInvalidOffsetExpectedOffsetsExpectedThrowableClassNameThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'invalidOffset'              => $invalidOffset = Offsets::INTEGER,
				'expectedOffsets'            => Offsets::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					$invalidOffset,
					Offsets::createConcatinatedExpectedSingleOffset()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			1  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'invalidOffset'              => $invalidOffset = Offsets::INTEGER,
				'expectedOffsets'            => Offsets::EXPECTED_OFFSETS,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					$invalidOffset,
					Offsets::createConcatinatedExpectedOffsets()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			2  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'invalidOffset'              => $invalidOffset = Offsets::INTEGER,
				'expectedOffsets'            => Offsets::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					$invalidOffset,
					Offsets::createConcatinatedExpectedSingleOffset()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			3  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'invalidOffset'              => $invalidOffset = Offsets::INTEGER,
				'expectedOffsets'            => Offsets::EXPECTED_OFFSETS,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					$invalidOffset,
					Offsets::createConcatinatedExpectedOffsets()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			4  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'invalidOffset'              => $invalidOffset = Offsets::INTEGER,
				'expectedOffsets'            => Offsets::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					$invalidOffset,
					Offsets::createConcatinatedExpectedSingleOffset()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			5  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'invalidOffset'              => $invalidOffset = Offsets::INTEGER,
				'expectedOffsets'            => Offsets::EXPECTED_OFFSETS,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					$invalidOffset,
					Offsets::createConcatinatedExpectedOffsets()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			6  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'invalidOffset'              => $invalidOffset = Offsets::INTEGER,
				'expectedOffsets'            => Offsets::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					$invalidOffset,
					Offsets::createConcatinatedExpectedSingleOffset()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			7  => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'invalidOffset'              => $invalidOffset = Offsets::INTEGER,
				'expectedOffsets'            => Offsets::EXPECTED_OFFSETS,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					$invalidOffset,
					Offsets::createConcatinatedExpectedOffsets()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			8  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'invalidOffset'              => $invalidOffset = Offsets::INTEGER,
				'expectedOffsets'            => Offsets::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					$invalidOffset,
					Offsets::createConcatinatedExpectedSingleOffset()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			9  => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'invalidOffset'              => $invalidOffset = Offsets::INTEGER,
				'expectedOffsets'            => Offsets::EXPECTED_OFFSETS,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					$invalidOffset,
					Offsets::createConcatinatedExpectedOffsets()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			10 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'invalidOffset'              => $invalidOffset = Offsets::INTEGER,
				'expectedOffsets'            => Offsets::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					$invalidOffset,
					Offsets::createConcatinatedExpectedSingleOffset()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			11 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'invalidOffset'              => $invalidOffset = Offsets::INTEGER,
				'expectedOffsets'            => Offsets::EXPECTED_OFFSETS,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					$invalidOffset,
					Offsets::createConcatinatedExpectedOffsets()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			12 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'invalidOffset'              => $invalidOffset = Offsets::INTEGER,
				'expectedOffsets'            => Offsets::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					$invalidOffset,
					Offsets::createConcatinatedExpectedSingleOffset()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			13 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'invalidOffset'              => $invalidOffset = Offsets::INTEGER,
				'expectedOffsets'            => Offsets::EXPECTED_OFFSETS,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					$invalidOffset,
					Offsets::createConcatinatedExpectedOffsets()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			14 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'invalidOffset'              => $invalidOffset = Offsets::INTEGER,
				'expectedOffsets'            => Offsets::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					$invalidOffset,
					Offsets::createConcatinatedExpectedSingleOffset()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			15 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'invalidOffset'              => $invalidOffset = Offsets::INTEGER,
				'expectedOffsets'            => Offsets::EXPECTED_OFFSETS,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					$invalidOffset,
					Offsets::createConcatinatedExpectedOffsets()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
		];
	}
}
