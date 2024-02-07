<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\OffsetOutOfRangeExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\OffsetOutOfRangeException;
use CodeKandis\Types\Tests\Fixtures\Offsets;
use CodeKandis\Types\Tests\Fixtures\Values;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with out of range offset, expected minimum index, expected maximum index, expected throwable class name, expected throwable message, expected throwable code and expected throwable previous.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithOutOfRangeOffsetExpectedMinOffsetExpectedMaxOffsetExpectedThrowableClassNameThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'outOfRangeOffset'           => $outOfRangeOffset = Offsets::INTEGER,
				'expectedMinOffset'          => Offsets::EXPECTED_MIN_OFFSET,
				'expectedMaxOffset'          => Offsets::EXPECTED_MAX_OFFSET,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET, $outOfRangeOffset, Offsets::EXPECTED_MIN_OFFSET, Offsets::EXPECTED_MAX_OFFSET ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			1 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'outOfRangeOffset'           => $outOfRangeOffset = Offsets::INTEGER,
				'expectedMinOffset'          => Offsets::EXPECTED_MIN_OFFSET,
				'expectedMaxOffset'          => Offsets::EXPECTED_MAX_OFFSET,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET, $outOfRangeOffset, Offsets::EXPECTED_MIN_OFFSET, Offsets::EXPECTED_MAX_OFFSET ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			2 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'outOfRangeOffset'           => $outOfRangeOffset = Offsets::INTEGER,
				'expectedMinOffset'          => Offsets::EXPECTED_MIN_OFFSET,
				'expectedMaxOffset'          => Offsets::EXPECTED_MAX_OFFSET,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET, $outOfRangeOffset, Offsets::EXPECTED_MIN_OFFSET, Offsets::EXPECTED_MAX_OFFSET ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			3 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
				'outOfRangeOffset'           => $outOfRangeOffset = Offsets::INTEGER,
				'expectedMinOffset'          => Offsets::EXPECTED_MIN_OFFSET,
				'expectedMaxOffset'          => Offsets::EXPECTED_MAX_OFFSET,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET, $outOfRangeOffset, Offsets::EXPECTED_MIN_OFFSET, Offsets::EXPECTED_MAX_OFFSET ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
		];
	}
}
