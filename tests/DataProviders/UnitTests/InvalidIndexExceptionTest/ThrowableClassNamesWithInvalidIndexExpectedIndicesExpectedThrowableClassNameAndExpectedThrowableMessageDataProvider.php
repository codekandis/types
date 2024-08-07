<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\InvalidIndexExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
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
				'invalidIndex'               => Indices::NULL,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_NULL,
					Indices::createConcatinatedExpectedSingleIndex()
				)
			],
			1  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => Indices::NULL,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_NULL,
					Indices::createConcatinatedExpectedIndices()
				)
			],
			2  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::createResource(),
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $invalidIndex ),
					Indices::createConcatinatedExpectedSingleIndex()
				)
			],
			3  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::createResource(),
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $invalidIndex ),
					Indices::createConcatinatedExpectedIndices()
				)
			],
			4  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => Indices::createClosedResource(),
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_CLOSED_RESOURCE,
					Indices::createConcatinatedExpectedSingleIndex()
				)
			],
			5  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => Indices::createClosedResource(),
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_CLOSED_RESOURCE,
					Indices::createConcatinatedExpectedIndices()
				)
			],
			6  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => Indices::ARRAY,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_ARRAY,
					Indices::createConcatinatedExpectedSingleIndex()
				)
			],
			7  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => Indices::ARRAY,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_ARRAY,
					Indices::createConcatinatedExpectedIndices()
				)
			],
			8  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::createStringableObject(),
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::STRING,
					Indices::createConcatinatedExpectedSingleIndex()
				)
			],
			9  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::createStringableObject(),
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::STRING,
					Indices::createConcatinatedExpectedIndices()
				)
			],
			10 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::createStandardObject(),
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidIndex ),
					Indices::createConcatinatedExpectedSingleIndex()
				)
			],
			11 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::createStandardObject(),
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidIndex ),
					Indices::createConcatinatedExpectedIndices()
				)
			],
			12 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::BOOLEAN_FALSE,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex ),
					Indices::createConcatinatedExpectedSingleIndex()
				)
			],
			13 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::BOOLEAN_FALSE,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex ),
					Indices::createConcatinatedExpectedIndices()
				)
			],
			14 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::BOOLEAN_TRUE,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex ),
					Indices::createConcatinatedExpectedSingleIndex()
				)
			],
			15 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::BOOLEAN_TRUE,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex ),
					Indices::createConcatinatedExpectedIndices()
				)
			],
			16 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::INTEGER,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					Indices::createConcatinatedExpectedSingleIndex()
				)
			],
			17 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::INTEGER,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					Indices::createConcatinatedExpectedIndices()
				)
			],
			18 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::FLOAT,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					Indices::createConcatinatedExpectedSingleIndex()
				)
			],
			19 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::FLOAT,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					Indices::createConcatinatedExpectedIndices()
				)
			],
			20 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::STRING,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					Indices::createConcatinatedExpectedSingleIndex()
				)
			],
			21 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::STRING,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					Indices::createConcatinatedExpectedIndices()
				)
			]
		];
	}
}
