<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\IndexNotFoundExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\IndexNotFoundException;
use CodeKandis\Types\Tests\Fixtures\Indices;
use CodeKandis\Types\Tests\Fixtures\Types;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with nonexistent index, expected indices, expected throwable class name and expected throwable message.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithNonExistentIndexExpectedIndicesExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => new Indices()->null,
				'expectedIndices'            => new Indices()->expectedSingleIndex,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					new Indices()->maskedNull,
					new Indices()->createConcatinatedExpectedSingleIndex()
				)
			],
			1  => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => new Indices()->null,
				'expectedIndices'            => new Indices()->expectedIndices,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					new Indices()->maskedNull,
					new Indices()->createConcatinatedExpectedIndices()
				)
			],
			2  => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = new Indices()->createResource(),
				'expectedIndices'            => new Indices()->expectedSingleIndex,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					new Types()->createMaskedTypeHintTypedResourceTypeByResource( $nonExistentIndex ),
					new Indices()->createConcatinatedExpectedSingleIndex()
				)
			],
			3  => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = new Indices()->createResource(),
				'expectedIndices'            => new Indices()->expectedIndices,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					new Types()->createMaskedTypeHintTypedResourceTypeByResource( $nonExistentIndex ),
					new Indices()->createConcatinatedExpectedIndices()
				)
			],
			4  => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => new Indices()->createClosedResource(),
				'expectedIndices'            => new Indices()->expectedSingleIndex,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					new Indices()->maskedClosedResource,
					new Indices()->createConcatinatedExpectedSingleIndex()
				)
			],
			5  => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => new Indices()->createClosedResource(),
				'expectedIndices'            => new Indices()->expectedIndices,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					new Indices()->maskedClosedResource,
					new Indices()->createConcatinatedExpectedIndices()
				)
			],
			6  => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => new Indices()->array,
				'expectedIndices'            => new Indices()->expectedSingleIndex,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					new Indices()->maskedArray,
					new Indices()->createConcatinatedExpectedSingleIndex()
				)
			],
			7  => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => new Indices()->array,
				'expectedIndices'            => new Indices()->expectedIndices,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					new Indices()->maskedArray,
					new Indices()->createConcatinatedExpectedIndices()
				)
			],
			8  => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = new Indices()->createStringableObject(),
				'expectedIndices'            => new Indices()->expectedSingleIndex,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					new Indices()->string,
					new Indices()->createConcatinatedExpectedSingleIndex()
				)
			],
			9  => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = new Indices()->createStringableObject(),
				'expectedIndices'            => new Indices()->expectedIndices,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					new Indices()->string,
					new Indices()->createConcatinatedExpectedIndices()
				)
			],
			10 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = new Indices()->createStandardObject(),
				'expectedIndices'            => new Indices()->expectedSingleIndex,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					new Types()->createMaskedTypeHintTypedObjectTypeByObject( $nonExistentIndex ),
					new Indices()->createConcatinatedExpectedSingleIndex()
				)
			],
			11 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = new Indices()->createStandardObject(),
				'expectedIndices'            => new Indices()->expectedIndices,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					new Types()->createMaskedTypeHintTypedObjectTypeByObject( $nonExistentIndex ),
					new Indices()->createConcatinatedExpectedIndices()
				)
			],
			12 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = new Indices()->booleanFalse,
				'expectedIndices'            => new Indices()->expectedSingleIndex,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					new Types()->createMaskedTypeHintTypedBooleanTypeByValue( $nonExistentIndex ),
					new Indices()->createConcatinatedExpectedSingleIndex()
				)
			],
			13 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = new Indices()->booleanFalse,
				'expectedIndices'            => new Indices()->expectedIndices,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					new Types()->createMaskedTypeHintTypedBooleanTypeByValue( $nonExistentIndex ),
					new Indices()->createConcatinatedExpectedIndices()
				)
			],
			14 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = new Indices()->booleanTrue,
				'expectedIndices'            => new Indices()->expectedSingleIndex,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					new Types()->createMaskedTypeHintTypedBooleanTypeByValue( $nonExistentIndex ),
					new Indices()->createConcatinatedExpectedSingleIndex()
				)
			],
			15 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = new Indices()->booleanTrue,
				'expectedIndices'            => new Indices()->expectedIndices,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					new Types()->createMaskedTypeHintTypedBooleanTypeByValue( $nonExistentIndex ),
					new Indices()->createConcatinatedExpectedIndices()
				)
			],
			16 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = new Indices()->integer,
				'expectedIndices'            => new Indices()->expectedSingleIndex,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					$nonExistentIndex,
					new Indices()->createConcatinatedExpectedSingleIndex()
				)
			],
			17 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = new Indices()->integer,
				'expectedIndices'            => new Indices()->expectedIndices,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					$nonExistentIndex,
					new Indices()->createConcatinatedExpectedIndices()
				)
			],
			18 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = new Indices()->float,
				'expectedIndices'            => new Indices()->expectedSingleIndex,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					$nonExistentIndex,
					new Indices()->createConcatinatedExpectedSingleIndex()
				)
			],
			19 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = new Indices()->float,
				'expectedIndices'            => new Indices()->expectedIndices,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					$nonExistentIndex,
					new Indices()->createConcatinatedExpectedIndices()
				)
			],
			20 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = new Indices()->string,
				'expectedIndices'            => new Indices()->expectedSingleIndex,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					$nonExistentIndex,
					new Indices()->createConcatinatedExpectedSingleIndex()
				)
			],
			21 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = new Indices()->string,
				'expectedIndices'            => new Indices()->expectedIndices,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					$nonExistentIndex,
					new Indices()->createConcatinatedExpectedIndices()
				)
			]
		];
	}
}
