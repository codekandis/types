<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\OffsetOutOfRangeExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\OffsetOutOfRangeException;
use CodeKandis\Types\Tests\Fixtures\Offsets;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with out of range offset, expected minimum index, expected maximum index, expected throwable class name and expected throwable message.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithOutOfRangeOffsetExpectedMinOffsetExpectedMaxOffsetExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
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
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_OFFSET_OUT_OF_RANGE_EXPECTED_MIN_OFFSET_AND_EXPECTED_MAX_OFFSET, $outOfRangeOffset, Offsets::EXPECTED_MIN_OFFSET, Offsets::EXPECTED_MAX_OFFSET )
			]
		];
	}
}
