<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\IndexNotFoundExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\IndexNotFoundException;
use CodeKandis\Types\Tests\Fixtures\Indices;
use CodeKandis\Types\Tests\Fixtures\Types;
use CodeKandis\Types\Tests\Fixtures\Values;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with nonexistent index, expected indices, expected throwable class name, expected throwable message, expected throwable code and expected throwable previous.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithNonExistentIndexExpectedIndicesExpectedThrowableClassNameThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider implements DataProviderInterface
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
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_NULL,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			1  => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => Indices::NULL,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_NULL,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			2  => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::createResource(),
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $nonExistentIndex ),
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			3  => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::createResource(),
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $nonExistentIndex ),
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			4  => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => Indices::createClosedResource(),
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_CLOSED_RESOURCE,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			5  => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => Indices::createClosedResource(),
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_CLOSED_RESOURCE,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			6  => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => Indices::ARRAY,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_ARRAY,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			7  => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => Indices::ARRAY,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_ARRAY,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			8  => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => Indices::createStringableObject(),
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Indices::STRING,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			9  => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => Indices::createStringableObject(),
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Indices::STRING,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			10 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::createStandardObject(),
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $nonExistentIndex ),
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			11 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::createStandardObject(),
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $nonExistentIndex ),
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			12 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::BOOLEAN_FALSE,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $nonExistentIndex ),
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			13 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::BOOLEAN_FALSE,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $nonExistentIndex ),
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			14 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::BOOLEAN_TRUE,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $nonExistentIndex ),
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			15 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::BOOLEAN_TRUE,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $nonExistentIndex ),
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			16 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::INTEGER,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					$nonExistentIndex,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			17 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::INTEGER,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					$nonExistentIndex,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			18 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::FLOAT,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					$nonExistentIndex,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			19 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::FLOAT,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					$nonExistentIndex,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			20 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::STRING,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					$nonExistentIndex,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			21 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::STRING,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					$nonExistentIndex,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			22 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => Indices::NULL,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_NULL,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			23 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => Indices::NULL,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_NULL,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			24 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::createResource(),
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $nonExistentIndex ),
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			25 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::createResource(),
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $nonExistentIndex ),
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			26 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => Indices::createClosedResource(),
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_CLOSED_RESOURCE,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			27 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => Indices::createClosedResource(),
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_CLOSED_RESOURCE,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			28 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => Indices::ARRAY,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_ARRAY,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			29 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => Indices::ARRAY,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_ARRAY,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			30 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => Indices::createStringableObject(),
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Indices::STRING,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			31 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => Indices::createStringableObject(),
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Indices::STRING,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			32 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::createStandardObject(),
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $nonExistentIndex ),
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			33 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::createStandardObject(),
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $nonExistentIndex ),
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			34 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::BOOLEAN_FALSE,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $nonExistentIndex ),
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			35 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::BOOLEAN_FALSE,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $nonExistentIndex ),
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			36 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::BOOLEAN_TRUE,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $nonExistentIndex ),
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			37 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::BOOLEAN_TRUE,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $nonExistentIndex ),
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			38 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::INTEGER,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					$nonExistentIndex,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			39 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::INTEGER,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					$nonExistentIndex,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			40 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::FLOAT,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					$nonExistentIndex,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			41 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::FLOAT,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					$nonExistentIndex,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			42 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::STRING,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					$nonExistentIndex,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			43 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::STRING,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					$nonExistentIndex,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			44 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => Indices::NULL,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_NULL,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			45 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => Indices::NULL,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_NULL,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			46 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::createResource(),
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $nonExistentIndex ),
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			47 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::createResource(),
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $nonExistentIndex ),
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			48 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => Indices::createClosedResource(),
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_CLOSED_RESOURCE,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			49 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => Indices::createClosedResource(),
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_CLOSED_RESOURCE,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			50 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => Indices::ARRAY,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_ARRAY,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			51 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => Indices::ARRAY,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_ARRAY,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			52 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => Indices::createStringableObject(),
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Indices::STRING,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			53 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => Indices::createStringableObject(),
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Indices::STRING,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			54 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::createStandardObject(),
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $nonExistentIndex ),
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			55 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::createStandardObject(),
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $nonExistentIndex ),
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			56 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::BOOLEAN_FALSE,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $nonExistentIndex ),
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			57 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::BOOLEAN_FALSE,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $nonExistentIndex ),
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			58 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::BOOLEAN_TRUE,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $nonExistentIndex ),
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			59 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::BOOLEAN_TRUE,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $nonExistentIndex ),
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			60 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::INTEGER,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					$nonExistentIndex,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			61 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::INTEGER,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					$nonExistentIndex,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			62 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::FLOAT,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					$nonExistentIndex,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			63 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::FLOAT,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					$nonExistentIndex,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			64 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::STRING,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					$nonExistentIndex,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			65 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::STRING,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					$nonExistentIndex,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			66 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => Indices::NULL,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_NULL,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			67 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => Indices::NULL,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_NULL,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			68 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::createResource(),
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $nonExistentIndex ),
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			69 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::createResource(),
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $nonExistentIndex ),
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			70 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => Indices::createClosedResource(),
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_CLOSED_RESOURCE,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			71 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => Indices::createClosedResource(),
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_CLOSED_RESOURCE,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			72 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => Indices::ARRAY,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_ARRAY,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			73 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => Indices::ARRAY,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_ARRAY,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			74 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => Indices::createStringableObject(),
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Indices::STRING,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			75 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => Indices::createStringableObject(),
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Indices::STRING,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			76 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::createStandardObject(),
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $nonExistentIndex ),
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			77 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::createStandardObject(),
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $nonExistentIndex ),
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			78 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::BOOLEAN_FALSE,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $nonExistentIndex ),
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			79 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::BOOLEAN_FALSE,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $nonExistentIndex ),
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			80 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::BOOLEAN_TRUE,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $nonExistentIndex ),
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			81 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::BOOLEAN_TRUE,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $nonExistentIndex ),
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			82 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::INTEGER,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					$nonExistentIndex,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			83 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::INTEGER,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					$nonExistentIndex,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			84 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::FLOAT,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					$nonExistentIndex,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			85 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::FLOAT,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					$nonExistentIndex,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			86 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::STRING,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					$nonExistentIndex,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			87 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::STRING,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES,
					$nonExistentIndex,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
		];
	}
}
