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
				'outOfRangeIndex'            => new Indices()->null,
				'expectedMinIndex'           => new Indices()->expectedMinIndex,
				'expectedMaxIndex'           => new Indices()->expectedMaxIndex,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX, new Indices()->maskedNull, new Indices()->expectedMinIndex, new Indices()->expectedMaxIndex )
			],
			1  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = new Indices()->createResource(),
				'expectedMinIndex'           => new Indices()->expectedMinIndex,
				'expectedMaxIndex'           => new Indices()->expectedMaxIndex,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					new Types()->createMaskedTypeHintTypedResourceTypeByResource( $outOfRangeIndex ),
					new Indices()->expectedMinIndex,
					new Indices()->expectedMaxIndex
				)
			],
			2  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => new Indices()->createClosedResource(),
				'expectedMinIndex'           => new Indices()->expectedMinIndex,
				'expectedMaxIndex'           => new Indices()->expectedMaxIndex,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX, new Indices()->maskedClosedResource, new Indices()->expectedMinIndex, new Indices()->expectedMaxIndex )
			],
			3  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => new Indices()->array,
				'expectedMinIndex'           => new Indices()->expectedMinIndex,
				'expectedMaxIndex'           => new Indices()->expectedMaxIndex,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX, new Indices()->maskedArray, new Indices()->expectedMinIndex, new Indices()->expectedMaxIndex )
			],
			4  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => new Indices()->createStringableObject(),
				'expectedMinIndex'           => new Indices()->expectedMinIndex,
				'expectedMaxIndex'           => new Indices()->expectedMaxIndex,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX, new Indices()->string, new Indices()->expectedMinIndex, new Indices()->expectedMaxIndex )
			],
			5  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = new Indices()->createStandardObject(),
				'expectedMinIndex'           => new Indices()->expectedMinIndex,
				'expectedMaxIndex'           => new Indices()->expectedMaxIndex,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					new Types()->createMaskedTypeHintTypedObjectTypeByObject( $outOfRangeIndex ),
					new Indices()->expectedMinIndex,
					new Indices()->expectedMaxIndex
				)
			],
			6  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = new Indices()->booleanFalse,
				'expectedMinIndex'           => new Indices()->expectedMinIndex,
				'expectedMaxIndex'           => new Indices()->expectedMaxIndex,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					new Types()->createMaskedTypeHintTypedBooleanTypeByValue( $outOfRangeIndex ),
					new Indices()->expectedMinIndex,
					new Indices()->expectedMaxIndex
				)
			],
			7  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = new Indices()->booleanTrue,
				'expectedMinIndex'           => new Indices()->expectedMinIndex,
				'expectedMaxIndex'           => new Indices()->expectedMaxIndex,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					new Types()->createMaskedTypeHintTypedBooleanTypeByValue( $outOfRangeIndex ),
					new Indices()->expectedMinIndex,
					new Indices()->expectedMaxIndex
				)
			],
			8  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = new Indices()->integer,
				'expectedMinIndex'           => new Indices()->expectedMinIndex,
				'expectedMaxIndex'           => new Indices()->expectedMaxIndex,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX, $outOfRangeIndex, new Indices()->expectedMinIndex, new Indices()->expectedMaxIndex )
			],
			9  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = new Indices()->float,
				'expectedMinIndex'           => new Indices()->expectedMinIndex,
				'expectedMaxIndex'           => new Indices()->expectedMaxIndex,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX, $outOfRangeIndex, new Indices()->expectedMinIndex, new Indices()->expectedMaxIndex )
			],
			10 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = new Indices()->string,
				'expectedMinIndex'           => new Indices()->expectedMinIndex,
				'expectedMaxIndex'           => new Indices()->expectedMaxIndex,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX, $outOfRangeIndex, new Indices()->expectedMinIndex, new Indices()->expectedMaxIndex )
			]
		];
	}
}
