<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\IndexOutOfRangeExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\IndexOutOfRangeException;
use CodeKandis\Types\Tests\Fixtures\Indices;
use CodeKandis\Types\Tests\Fixtures\Types;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with out of range index, expected minimum index, expected maximum index, expected throwable class name and expected throwable message.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithOutOfRangeIndexExpectedMinIndexExpectedMaxIndexExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => Indices::NULL,
				'expectedMinIndex'           => Indices::EXPECTED_MIN_INDEX,
				'expectedMaxIndex'           => Indices::EXPECTED_MAX_INDEX,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX, Indices::MASKED_NULL, Indices::EXPECTED_MIN_INDEX, Indices::EXPECTED_MAX_INDEX )
			],
			1  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = Indices::createResource(),
				'expectedMinIndex'           => Indices::EXPECTED_MIN_INDEX,
				'expectedMaxIndex'           => Indices::EXPECTED_MAX_INDEX,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $outOfRangeIndex ),
					Indices::EXPECTED_MIN_INDEX,
					Indices::EXPECTED_MAX_INDEX
				)
			],
			2  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => Indices::createClosedResource(),
				'expectedMinIndex'           => Indices::EXPECTED_MIN_INDEX,
				'expectedMaxIndex'           => Indices::EXPECTED_MAX_INDEX,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX, Indices::MASKED_CLOSED_RESOURCE, Indices::EXPECTED_MIN_INDEX, Indices::EXPECTED_MAX_INDEX )
			],
			3  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => Indices::ARRAY,
				'expectedMinIndex'           => Indices::EXPECTED_MIN_INDEX,
				'expectedMaxIndex'           => Indices::EXPECTED_MAX_INDEX,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX, Indices::MASKED_ARRAY, Indices::EXPECTED_MIN_INDEX, Indices::EXPECTED_MAX_INDEX )
			],
			4  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => Indices::createStringableObject(),
				'expectedMinIndex'           => Indices::EXPECTED_MIN_INDEX,
				'expectedMaxIndex'           => Indices::EXPECTED_MAX_INDEX,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX, Indices::STRING, Indices::EXPECTED_MIN_INDEX, Indices::EXPECTED_MAX_INDEX )
			],
			5  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = Indices::createStandardObject(),
				'expectedMinIndex'           => Indices::EXPECTED_MIN_INDEX,
				'expectedMaxIndex'           => Indices::EXPECTED_MAX_INDEX,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $outOfRangeIndex ),
					Indices::EXPECTED_MIN_INDEX,
					Indices::EXPECTED_MAX_INDEX
				)
			],
			6  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = Indices::BOOLEAN_FALSE,
				'expectedMinIndex'           => Indices::EXPECTED_MIN_INDEX,
				'expectedMaxIndex'           => Indices::EXPECTED_MAX_INDEX,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $outOfRangeIndex ),
					Indices::EXPECTED_MIN_INDEX,
					Indices::EXPECTED_MAX_INDEX
				)
			],
			7  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = Indices::BOOLEAN_TRUE,
				'expectedMinIndex'           => Indices::EXPECTED_MIN_INDEX,
				'expectedMaxIndex'           => Indices::EXPECTED_MAX_INDEX,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $outOfRangeIndex ),
					Indices::EXPECTED_MIN_INDEX,
					Indices::EXPECTED_MAX_INDEX
				)
			],
			8  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = Indices::INTEGER,
				'expectedMinIndex'           => Indices::EXPECTED_MIN_INDEX,
				'expectedMaxIndex'           => Indices::EXPECTED_MAX_INDEX,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX, $outOfRangeIndex, Indices::EXPECTED_MIN_INDEX, Indices::EXPECTED_MAX_INDEX )
			],
			9  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = Indices::FLOAT,
				'expectedMinIndex'           => Indices::EXPECTED_MIN_INDEX,
				'expectedMaxIndex'           => Indices::EXPECTED_MAX_INDEX,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX, $outOfRangeIndex, Indices::EXPECTED_MIN_INDEX, Indices::EXPECTED_MAX_INDEX )
			],
			10 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = Indices::STRING,
				'expectedMinIndex'           => Indices::EXPECTED_MIN_INDEX,
				'expectedMaxIndex'           => Indices::EXPECTED_MAX_INDEX,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX, $outOfRangeIndex, Indices::EXPECTED_MIN_INDEX, Indices::EXPECTED_MAX_INDEX )
			]
		];
	}
}
