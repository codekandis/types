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
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => Indices::NULL,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_NULL,
					Indices::createConcatinatedExpectedSingleIndex()
				)
			],
			1  => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => Indices::NULL,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_NULL,
					Indices::createConcatinatedExpectedIndices()
				)
			],
			2  => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::createResource(),
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $nonExistentIndex ),
					Indices::createConcatinatedExpectedSingleIndex()
				)
			],
			3  => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::createResource(),
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $nonExistentIndex ),
					Indices::createConcatinatedExpectedIndices()
				)
			],
			4  => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => Indices::createClosedResource(),
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_CLOSED_RESOURCE,
					Indices::createConcatinatedExpectedSingleIndex()
				)
			],
			5  => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => Indices::createClosedResource(),
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_CLOSED_RESOURCE,
					Indices::createConcatinatedExpectedIndices()
				)
			],
			6  => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => Indices::ARRAY,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_ARRAY,
					Indices::createConcatinatedExpectedSingleIndex()
				)
			],
			7  => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => Indices::ARRAY,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_ARRAY,
					Indices::createConcatinatedExpectedIndices()
				)
			],
			8  => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => Indices::createStringableObject(),
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Indices::STRING,
					Indices::createConcatinatedExpectedSingleIndex()
				)
			],
			9  => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => Indices::createStringableObject(),
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Indices::STRING,
					Indices::createConcatinatedExpectedIndices()
				)
			],
			10 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::createStandardObject(),
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $nonExistentIndex ),
					Indices::createConcatinatedExpectedSingleIndex()
				)
			],
			11 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::createStandardObject(),
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $nonExistentIndex ),
					Indices::createConcatinatedExpectedIndices()
				)
			],
			12 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::BOOLEAN_FALSE,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $nonExistentIndex ),
					Indices::createConcatinatedExpectedSingleIndex()
				)
			],
			13 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::BOOLEAN_FALSE,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $nonExistentIndex ),
					Indices::createConcatinatedExpectedIndices()
				)
			],
			14 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::BOOLEAN_TRUE,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $nonExistentIndex ),
					Indices::createConcatinatedExpectedSingleIndex()
				)
			],
			15 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::BOOLEAN_TRUE,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $nonExistentIndex ),
					Indices::createConcatinatedExpectedIndices()
				)
			],
			16 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::INTEGER,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					$nonExistentIndex,
					Indices::createConcatinatedExpectedSingleIndex()
				)
			],
			17 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::INTEGER,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					$nonExistentIndex,
					Indices::createConcatinatedExpectedIndices()
				)
			],
			18 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::FLOAT,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					$nonExistentIndex,
					Indices::createConcatinatedExpectedSingleIndex()
				)
			],
			19 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::FLOAT,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					$nonExistentIndex,
					Indices::createConcatinatedExpectedIndices()
				)
			],
			20 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::STRING,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					$nonExistentIndex,
					Indices::createConcatinatedExpectedSingleIndex()
				)
			],
			21 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::STRING,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					$nonExistentIndex,
					Indices::createConcatinatedExpectedIndices()
				)
			]
		];
	}
}
