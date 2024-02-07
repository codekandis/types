<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\InvalidIndexExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\IndexOutOfRangeException;
use CodeKandis\Types\InvalidIndexException;
use CodeKandis\Types\Tests\Fixtures\Indices;
use CodeKandis\Types\Tests\Fixtures\Types;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with invalid index, expected indices, expected throwable class name and expected throwable message.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithInvalidIndexExpectedIndicesExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => new Indices()->null,
				'expectedIndices'            => new Indices()->expectedSingleIndex,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					new Indices()->maskedNull,
					new Indices()->createConcatinatedExpectedSingleIndex()
				)
			],
			1  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => new Indices()->null,
				'expectedIndices'            => new Indices()->expectedIndices,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					new Indices()->maskedNull,
					new Indices()->createConcatinatedExpectedIndices()
				)
			],
			2  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = new Indices()->createResource(),
				'expectedIndices'            => new Indices()->expectedSingleIndex,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					new Types()->createMaskedTypeHintTypedResourceTypeByResource( $invalidIndex ),
					new Indices()->createConcatinatedExpectedSingleIndex()
				)
			],
			3  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = new Indices()->createResource(),
				'expectedIndices'            => new Indices()->expectedIndices,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					new Types()->createMaskedTypeHintTypedResourceTypeByResource( $invalidIndex ),
					new Indices()->createConcatinatedExpectedIndices()
				)
			],
			4  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => new Indices()->createClosedResource(),
				'expectedIndices'            => new Indices()->expectedSingleIndex,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					new Indices()->maskedClosedResource,
					new Indices()->createConcatinatedExpectedSingleIndex()
				)
			],
			5  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => new Indices()->createClosedResource(),
				'expectedIndices'            => new Indices()->expectedIndices,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					new Indices()->maskedClosedResource,
					new Indices()->createConcatinatedExpectedIndices()
				)
			],
			6  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => new Indices()->array,
				'expectedIndices'            => new Indices()->expectedSingleIndex,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					new Indices()->maskedArray,
					new Indices()->createConcatinatedExpectedSingleIndex()
				)
			],
			7  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => new Indices()->array,
				'expectedIndices'            => new Indices()->expectedIndices,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					new Indices()->maskedArray,
					new Indices()->createConcatinatedExpectedIndices()
				)
			],
			8  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = new Indices()->createStringableObject(),
				'expectedIndices'            => new Indices()->expectedSingleIndex,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					new Indices()->string,
					new Indices()->createConcatinatedExpectedSingleIndex()
				)
			],
			9  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = new Indices()->createStringableObject(),
				'expectedIndices'            => new Indices()->expectedIndices,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					new Indices()->string,
					new Indices()->createConcatinatedExpectedIndices()
				)
			],
			10 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = new Indices()->createStandardObject(),
				'expectedIndices'            => new Indices()->expectedSingleIndex,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					new Types()->createMaskedTypeHintTypedObjectTypeByObject( $invalidIndex ),
					new Indices()->createConcatinatedExpectedSingleIndex()
				)
			],
			11 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = new Indices()->createStandardObject(),
				'expectedIndices'            => new Indices()->expectedIndices,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					new Types()->createMaskedTypeHintTypedObjectTypeByObject( $invalidIndex ),
					new Indices()->createConcatinatedExpectedIndices()
				)
			],
			12 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = new Indices()->booleanFalse,
				'expectedIndices'            => new Indices()->expectedSingleIndex,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					new Types()->createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex ),
					new Indices()->createConcatinatedExpectedSingleIndex()
				)
			],
			13 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = new Indices()->booleanFalse,
				'expectedIndices'            => new Indices()->expectedIndices,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					new Types()->createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex ),
					new Indices()->createConcatinatedExpectedIndices()
				)
			],
			14 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = new Indices()->booleanTrue,
				'expectedIndices'            => new Indices()->expectedSingleIndex,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					new Types()->createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex ),
					new Indices()->createConcatinatedExpectedSingleIndex()
				)
			],
			15 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = new Indices()->booleanTrue,
				'expectedIndices'            => new Indices()->expectedIndices,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					new Types()->createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex ),
					new Indices()->createConcatinatedExpectedIndices()
				)
			],
			16 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = new Indices()->integer,
				'expectedIndices'            => new Indices()->expectedSingleIndex,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					new Indices()->createConcatinatedExpectedSingleIndex()
				)
			],
			17 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = new Indices()->integer,
				'expectedIndices'            => new Indices()->expectedIndices,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					new Indices()->createConcatinatedExpectedIndices()
				)
			],
			18 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = new Indices()->float,
				'expectedIndices'            => new Indices()->expectedSingleIndex,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					new Indices()->createConcatinatedExpectedSingleIndex()
				)
			],
			19 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = new Indices()->float,
				'expectedIndices'            => new Indices()->expectedIndices,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					new Indices()->createConcatinatedExpectedIndices()
				)
			],
			20 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = new Indices()->string,
				'expectedIndices'            => new Indices()->expectedSingleIndex,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					new Indices()->createConcatinatedExpectedSingleIndex()
				)
			],
			21 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = new Indices()->string,
				'expectedIndices'            => new Indices()->expectedIndices,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					new Indices()->createConcatinatedExpectedIndices()
				)
			],
			22 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => new Indices()->null,
				'expectedIndices'            => new Indices()->expectedSingleIndex,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					new Indices()->maskedNull,
					new Indices()->createConcatinatedExpectedSingleIndex()
				)
			],
			23 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => new Indices()->null,
				'expectedIndices'            => new Indices()->expectedIndices,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					new Indices()->maskedNull,
					new Indices()->createConcatinatedExpectedIndices()
				)
			],
			24 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = new Indices()->createResource(),
				'expectedIndices'            => new Indices()->expectedSingleIndex,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					new Types()->createMaskedTypeHintTypedResourceTypeByResource( $invalidIndex ),
					new Indices()->createConcatinatedExpectedSingleIndex()
				)
			],
			25 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = new Indices()->createResource(),
				'expectedIndices'            => new Indices()->expectedIndices,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					new Types()->createMaskedTypeHintTypedResourceTypeByResource( $invalidIndex ),
					new Indices()->createConcatinatedExpectedIndices()
				)
			],
			26 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => new Indices()->createClosedResource(),
				'expectedIndices'            => new Indices()->expectedSingleIndex,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					new Indices()->maskedClosedResource,
					new Indices()->createConcatinatedExpectedSingleIndex()
				)
			],
			27 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => new Indices()->createClosedResource(),
				'expectedIndices'            => new Indices()->expectedIndices,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					new Indices()->maskedClosedResource,
					new Indices()->createConcatinatedExpectedIndices()
				)
			],
			28 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => new Indices()->array,
				'expectedIndices'            => new Indices()->expectedSingleIndex,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					new Indices()->maskedArray,
					new Indices()->createConcatinatedExpectedSingleIndex()
				)
			],
			29 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => new Indices()->array,
				'expectedIndices'            => new Indices()->expectedIndices,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					new Indices()->maskedArray,
					new Indices()->createConcatinatedExpectedIndices()
				)
			],
			30 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = new Indices()->createStringableObject(),
				'expectedIndices'            => new Indices()->expectedSingleIndex,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					new Indices()->string,
					new Indices()->createConcatinatedExpectedSingleIndex()
				)
			],
			31 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = new Indices()->createStringableObject(),
				'expectedIndices'            => new Indices()->expectedIndices,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					new Indices()->string,
					new Indices()->createConcatinatedExpectedIndices()
				)
			],
			32 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = new Indices()->createStandardObject(),
				'expectedIndices'            => new Indices()->expectedSingleIndex,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					new Types()->createMaskedTypeHintTypedObjectTypeByObject( $invalidIndex ),
					new Indices()->createConcatinatedExpectedSingleIndex()
				)
			],
			33 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = new Indices()->createStandardObject(),
				'expectedIndices'            => new Indices()->expectedIndices,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					new Types()->createMaskedTypeHintTypedObjectTypeByObject( $invalidIndex ),
					new Indices()->createConcatinatedExpectedIndices()
				)
			],
			34 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = new Indices()->booleanFalse,
				'expectedIndices'            => new Indices()->expectedSingleIndex,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					new Types()->createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex ),
					new Indices()->createConcatinatedExpectedSingleIndex()
				)
			],
			35 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = new Indices()->booleanFalse,
				'expectedIndices'            => new Indices()->expectedIndices,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					new Types()->createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex ),
					new Indices()->createConcatinatedExpectedIndices()
				)
			],
			36 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = new Indices()->booleanTrue,
				'expectedIndices'            => new Indices()->expectedSingleIndex,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					new Types()->createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex ),
					new Indices()->createConcatinatedExpectedSingleIndex()
				)
			],
			37 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = new Indices()->booleanTrue,
				'expectedIndices'            => new Indices()->expectedIndices,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					new Types()->createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex ),
					new Indices()->createConcatinatedExpectedIndices()
				)
			],
			38 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = new Indices()->integer,
				'expectedIndices'            => new Indices()->expectedSingleIndex,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					new Indices()->createConcatinatedExpectedSingleIndex()
				)
			],
			39 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = new Indices()->integer,
				'expectedIndices'            => new Indices()->expectedIndices,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					new Indices()->createConcatinatedExpectedIndices()
				)
			],
			40 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = new Indices()->float,
				'expectedIndices'            => new Indices()->expectedSingleIndex,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					new Indices()->createConcatinatedExpectedSingleIndex()
				)
			],
			41 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = new Indices()->float,
				'expectedIndices'            => new Indices()->expectedIndices,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					new Indices()->createConcatinatedExpectedIndices()
				)
			],
			42 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = new Indices()->string,
				'expectedIndices'            => new Indices()->expectedSingleIndex,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					new Indices()->createConcatinatedExpectedSingleIndex()
				)
			],
			43 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = new Indices()->string,
				'expectedIndices'            => new Indices()->expectedIndices,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					new Indices()->createConcatinatedExpectedIndices()
				)
			]
		];
	}
}
