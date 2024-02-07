<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\OffsetOutOfRangeExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\OffsetOutOfRangeException;
use CodeKandis\Types\Tests\Fixtures\Offsets;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with out of range offset, expected throwable class name and expected throwable message.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithOutOfRangeOffsetExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
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
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_OFFSET, $outOfRangeOffset )
			]
		];
	}
}
