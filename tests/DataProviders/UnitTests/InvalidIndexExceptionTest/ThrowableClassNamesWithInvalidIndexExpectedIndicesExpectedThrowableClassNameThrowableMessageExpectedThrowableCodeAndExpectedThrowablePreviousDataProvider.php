<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\InvalidIndexExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\IndexOutOfRangeException;
use CodeKandis\Types\InvalidIndexException;
use CodeKandis\Types\Tests\Fixtures\Indices;
use CodeKandis\Types\Tests\Fixtures\Types;
use CodeKandis\Types\Tests\Fixtures\Values;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with invalid index, expected indices, expected throwable class name, expected throwable message, expected throwable code and expected throwable previous.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithInvalidIndexExpectedIndicesExpectedThrowableClassNameThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0   => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => Indices::NULL,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_NULL,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			1   => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => Indices::NULL,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_NULL,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			2   => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::createResource(),
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $invalidIndex ),
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			3   => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::createResource(),
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $invalidIndex ),
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			4   => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => Indices::createClosedResource(),
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_CLOSED_RESOURCE,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			5   => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => Indices::createClosedResource(),
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_CLOSED_RESOURCE,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			6   => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => Indices::ARRAY,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_ARRAY,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			7   => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => Indices::ARRAY,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_ARRAY,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			8   => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => Indices::createStringableObject(),
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::STRING,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			9   => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => Indices::createStringableObject(),
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::STRING,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			10  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::createStandardObject(),
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidIndex ),
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			11  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::createStandardObject(),
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidIndex ),
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			12  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::BOOLEAN_FALSE,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex ),
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			13  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::BOOLEAN_FALSE,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex ),
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			14  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::BOOLEAN_TRUE,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex ),
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			15  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::BOOLEAN_TRUE,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex ),
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			16  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::INTEGER,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			17  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::INTEGER,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			18  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::FLOAT,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			19  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::FLOAT,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			20  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::STRING,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			21  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::STRING,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			22  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => Indices::NULL,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_NULL,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			23  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => Indices::NULL,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_NULL,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			24  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::createResource(),
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $invalidIndex ),
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			25  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::createResource(),
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $invalidIndex ),
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			26  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => Indices::createClosedResource(),
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_CLOSED_RESOURCE,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			27  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => Indices::createClosedResource(),
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_CLOSED_RESOURCE,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			28  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => Indices::ARRAY,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_ARRAY,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			29  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => Indices::ARRAY,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_ARRAY,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			30  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => Indices::createStringableObject(),
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::STRING,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			31  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => Indices::createStringableObject(),
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::STRING,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			32  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::createStandardObject(),
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidIndex ),
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			33  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::createStandardObject(),
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidIndex ),
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			34  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::BOOLEAN_FALSE,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex ),
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			35  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::BOOLEAN_FALSE,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex ),
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			36  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::BOOLEAN_TRUE,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex ),
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			37  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::BOOLEAN_TRUE,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex ),
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			38  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::INTEGER,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			39  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::INTEGER,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			40  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::FLOAT,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			41  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::FLOAT,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			42  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::STRING,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			43  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::STRING,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			44  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => Indices::NULL,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_NULL,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			45  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => Indices::NULL,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_NULL,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			46  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::createResource(),
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $invalidIndex ),
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			47  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::createResource(),
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $invalidIndex ),
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			48  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => Indices::createClosedResource(),
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_CLOSED_RESOURCE,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			49  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => Indices::createClosedResource(),
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_CLOSED_RESOURCE,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			50  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => Indices::ARRAY,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_ARRAY,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			51  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => Indices::ARRAY,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_ARRAY,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			52  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => Indices::createStringableObject(),
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::STRING,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			53  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => Indices::createStringableObject(),
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::STRING,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			54  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::createStandardObject(),
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidIndex ),
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			55  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::createStandardObject(),
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidIndex ),
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			56  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::BOOLEAN_FALSE,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex ),
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			57  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::BOOLEAN_FALSE,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex ),
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			58  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::BOOLEAN_TRUE,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex ),
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			59  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::BOOLEAN_TRUE,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex ),
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			60  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::INTEGER,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			61  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::INTEGER,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			62  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::FLOAT,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			63  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::FLOAT,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			64  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::STRING,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			65  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::STRING,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			66  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => Indices::NULL,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_NULL,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			67  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => Indices::NULL,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_NULL,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			68  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::createResource(),
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $invalidIndex ),
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			69  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::createResource(),
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $invalidIndex ),
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			70  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => Indices::createClosedResource(),
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_CLOSED_RESOURCE,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			71  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => Indices::createClosedResource(),
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_CLOSED_RESOURCE,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			72  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => Indices::ARRAY,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_ARRAY,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			73  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => Indices::ARRAY,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_ARRAY,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			74  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => Indices::createStringableObject(),
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::STRING,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			75  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => Indices::createStringableObject(),
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::STRING,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			76  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::createStandardObject(),
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidIndex ),
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			77  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::createStandardObject(),
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidIndex ),
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			78  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::BOOLEAN_FALSE,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex ),
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			79  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::BOOLEAN_FALSE,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex ),
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			80  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::BOOLEAN_TRUE,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex ),
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			81  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::BOOLEAN_TRUE,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex ),
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			82  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::INTEGER,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			83  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::INTEGER,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			84  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::FLOAT,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			85  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::FLOAT,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			86  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::STRING,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			87  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::STRING,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			88  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => Indices::NULL,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_NULL,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			89  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => Indices::NULL,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_NULL,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			90  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::createResource(),
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $invalidIndex ),
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			91  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::createResource(),
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $invalidIndex ),
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			92  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => Indices::createClosedResource(),
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_CLOSED_RESOURCE,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			93  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => Indices::createClosedResource(),
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_CLOSED_RESOURCE,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			94  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => Indices::ARRAY,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_ARRAY,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			95  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => Indices::ARRAY,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_ARRAY,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			96  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => Indices::createStringableObject(),
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::STRING,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			97  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => Indices::createStringableObject(),
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::STRING,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			98  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::createStandardObject(),
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidIndex ),
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			99  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::createStandardObject(),
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidIndex ),
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			100 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::BOOLEAN_FALSE,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex ),
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			101 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::BOOLEAN_FALSE,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex ),
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			102 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::BOOLEAN_TRUE,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex ),
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			103 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::BOOLEAN_TRUE,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex ),
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			104 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::INTEGER,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			105 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::INTEGER,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			106 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::FLOAT,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			107 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::FLOAT,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			108 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::STRING,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			109 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::STRING,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			110 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => Indices::NULL,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_NULL,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			111 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => Indices::NULL,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_NULL,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			112 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::createResource(),
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $invalidIndex ),
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			113 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::createResource(),
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $invalidIndex ),
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			114 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => Indices::createClosedResource(),
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_CLOSED_RESOURCE,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			115 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => Indices::createClosedResource(),
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_CLOSED_RESOURCE,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			116 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => Indices::ARRAY,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_ARRAY,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			117 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => Indices::ARRAY,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_ARRAY,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			118 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => Indices::createStringableObject(),
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::STRING,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			119 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => Indices::createStringableObject(),
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::STRING,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			120 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::createStandardObject(),
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidIndex ),
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			121 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::createStandardObject(),
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidIndex ),
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			122 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::BOOLEAN_FALSE,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex ),
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			123 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::BOOLEAN_FALSE,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex ),
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			124 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::BOOLEAN_TRUE,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex ),
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			125 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::BOOLEAN_TRUE,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex ),
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			126 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::INTEGER,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			127 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::INTEGER,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			128 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::FLOAT,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			129 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::FLOAT,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			130 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::STRING,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			131 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::STRING,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			132 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => Indices::NULL,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_NULL,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			133 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => Indices::NULL,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_NULL,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			134 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::createResource(),
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $invalidIndex ),
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			135 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::createResource(),
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $invalidIndex ),
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			136 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => Indices::createClosedResource(),
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_CLOSED_RESOURCE,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			137 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => Indices::createClosedResource(),
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_CLOSED_RESOURCE,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			138 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => Indices::ARRAY,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_ARRAY,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			139 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => Indices::ARRAY,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_ARRAY,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			140 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => Indices::createStringableObject(),
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::STRING,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			141 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => Indices::createStringableObject(),
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::STRING,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			142 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::createStandardObject(),
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidIndex ),
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			143 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::createStandardObject(),
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidIndex ),
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			144 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::BOOLEAN_FALSE,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex ),
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			145 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::BOOLEAN_FALSE,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex ),
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			146 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::BOOLEAN_TRUE,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex ),
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			147 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::BOOLEAN_TRUE,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex ),
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			148 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::INTEGER,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			149 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::INTEGER,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			150 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::FLOAT,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			151 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::FLOAT,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			152 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::STRING,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			153 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::STRING,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			154 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => Indices::NULL,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_NULL,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			155 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => Indices::NULL,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_NULL,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			156 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::createResource(),
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $invalidIndex ),
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			157 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::createResource(),
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $invalidIndex ),
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			158 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => Indices::createClosedResource(),
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_CLOSED_RESOURCE,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			159 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => Indices::createClosedResource(),
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_CLOSED_RESOURCE,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			160 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => Indices::ARRAY,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_ARRAY,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			161 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => Indices::ARRAY,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::MASKED_ARRAY,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			162 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => Indices::createStringableObject(),
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::STRING,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			163 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => Indices::createStringableObject(),
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Indices::STRING,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			164 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::createStandardObject(),
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidIndex ),
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			165 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::createStandardObject(),
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidIndex ),
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			166 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::BOOLEAN_FALSE,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex ),
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			167 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::BOOLEAN_FALSE,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex ),
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			168 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::BOOLEAN_TRUE,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex ),
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			169 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::BOOLEAN_TRUE,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex ),
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			170 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::INTEGER,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			171 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::INTEGER,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			172 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::FLOAT,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			173 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::FLOAT,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			174 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::STRING,
				'expectedIndices'            => Indices::EXPECTED_SINGLE_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					Indices::createConcatinatedExpectedSingleIndex()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			175 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::STRING,
				'expectedIndices'            => Indices::EXPECTED_INDICES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES,
					$invalidIndex,
					Indices::createConcatinatedExpectedIndices()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
		];
	}
}
