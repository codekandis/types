<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\InvalidOffsetExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\InvalidOffsetException;
use CodeKandis\Types\Tests\Fixtures\Offsets;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with invalid offset, expected indices, expected throwable class name and expected throwable message.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithInvalidOffsetExpectedOffsetsExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'invalidOffset'              => $invalidOffset = Offsets::INTEGER,
				'expectedOffsets'            => Offsets::EXPECTED_SINGLE_OFFSET,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					$invalidOffset,
					Offsets::createConcatinatedExpectedSingleOffset()
				)
			],
			1 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'invalidOffset'              => $invalidOffset = Offsets::INTEGER,
				'expectedOffsets'            => Offsets::EXPECTED_OFFSETS,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_INVALID_OFFSET_AND_EXPECTED_OFFSETS,
					$invalidOffset,
					Offsets::createConcatinatedExpectedOffsets()
				)
			]
		];
	}
}
