<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\IndexOutOfRangeExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\IndexOutOfRangeException;
use CodeKandis\Types\Tests\Fixtures\Indices;
use CodeKandis\Types\Tests\Fixtures\Types;
use CodeKandis\Types\Tests\Fixtures\Values;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with out of range index, expected minimum index, expected maximum index, expected throwable class name, expected throwable message, expected throwable code and expected throwable previous.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithOutOfRangeIndexExpectedMinIndexExpectedMaxIndexExpectedThrowableClassNameThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
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
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX, Indices::MASKED_NULL, Indices::EXPECTED_MIN_INDEX, Indices::EXPECTED_MAX_INDEX ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			1  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = Indices::createResource(),
				'expectedMinIndex'           => Indices::EXPECTED_MIN_INDEX,
				'expectedMaxIndex'           => Indices::EXPECTED_MAX_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $outOfRangeIndex ),
					Indices::EXPECTED_MIN_INDEX,
					Indices::EXPECTED_MAX_INDEX
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			2  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => Indices::createClosedResource(),
				'expectedMinIndex'           => Indices::EXPECTED_MIN_INDEX,
				'expectedMaxIndex'           => Indices::EXPECTED_MAX_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX, Indices::MASKED_CLOSED_RESOURCE, Indices::EXPECTED_MIN_INDEX, Indices::EXPECTED_MAX_INDEX ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			3  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => Indices::ARRAY,
				'expectedMinIndex'           => Indices::EXPECTED_MIN_INDEX,
				'expectedMaxIndex'           => Indices::EXPECTED_MAX_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX, Indices::MASKED_ARRAY, Indices::EXPECTED_MIN_INDEX, Indices::EXPECTED_MAX_INDEX ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			4  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => Indices::createStringableObject(),
				'expectedMinIndex'           => Indices::EXPECTED_MIN_INDEX,
				'expectedMaxIndex'           => Indices::EXPECTED_MAX_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX, Indices::STRING, Indices::EXPECTED_MIN_INDEX, Indices::EXPECTED_MAX_INDEX ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			5  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = Indices::createStandardObject(),
				'expectedMinIndex'           => Indices::EXPECTED_MIN_INDEX,
				'expectedMaxIndex'           => Indices::EXPECTED_MAX_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $outOfRangeIndex ),
					Indices::EXPECTED_MIN_INDEX,
					Indices::EXPECTED_MAX_INDEX
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			6  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = Indices::BOOLEAN_FALSE,
				'expectedMinIndex'           => Indices::EXPECTED_MIN_INDEX,
				'expectedMaxIndex'           => Indices::EXPECTED_MAX_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $outOfRangeIndex ),
					Indices::EXPECTED_MIN_INDEX,
					Indices::EXPECTED_MAX_INDEX
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			7  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = Indices::BOOLEAN_TRUE,
				'expectedMinIndex'           => Indices::EXPECTED_MIN_INDEX,
				'expectedMaxIndex'           => Indices::EXPECTED_MAX_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $outOfRangeIndex ),
					Indices::EXPECTED_MIN_INDEX,
					Indices::EXPECTED_MAX_INDEX
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			8  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = Indices::INTEGER,
				'expectedMinIndex'           => Indices::EXPECTED_MIN_INDEX,
				'expectedMaxIndex'           => Indices::EXPECTED_MAX_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX, $outOfRangeIndex, Indices::EXPECTED_MIN_INDEX, Indices::EXPECTED_MAX_INDEX ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			9  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = Indices::FLOAT,
				'expectedMinIndex'           => Indices::EXPECTED_MIN_INDEX,
				'expectedMaxIndex'           => Indices::EXPECTED_MAX_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX, $outOfRangeIndex, Indices::EXPECTED_MIN_INDEX, Indices::EXPECTED_MAX_INDEX ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			10 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = Indices::STRING,
				'expectedMinIndex'           => Indices::EXPECTED_MIN_INDEX,
				'expectedMaxIndex'           => Indices::EXPECTED_MAX_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX, $outOfRangeIndex, Indices::EXPECTED_MIN_INDEX, Indices::EXPECTED_MAX_INDEX ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			11 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => Indices::NULL,
				'expectedMinIndex'           => Indices::EXPECTED_MIN_INDEX,
				'expectedMaxIndex'           => Indices::EXPECTED_MAX_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX, Indices::MASKED_NULL, Indices::EXPECTED_MIN_INDEX, Indices::EXPECTED_MAX_INDEX ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			12 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = Indices::createResource(),
				'expectedMinIndex'           => Indices::EXPECTED_MIN_INDEX,
				'expectedMaxIndex'           => Indices::EXPECTED_MAX_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $outOfRangeIndex ),
					Indices::EXPECTED_MIN_INDEX,
					Indices::EXPECTED_MAX_INDEX
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			13 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => Indices::createClosedResource(),
				'expectedMinIndex'           => Indices::EXPECTED_MIN_INDEX,
				'expectedMaxIndex'           => Indices::EXPECTED_MAX_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX, Indices::MASKED_CLOSED_RESOURCE, Indices::EXPECTED_MIN_INDEX, Indices::EXPECTED_MAX_INDEX ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			14 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => Indices::ARRAY,
				'expectedMinIndex'           => Indices::EXPECTED_MIN_INDEX,
				'expectedMaxIndex'           => Indices::EXPECTED_MAX_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX, Indices::MASKED_ARRAY, Indices::EXPECTED_MIN_INDEX, Indices::EXPECTED_MAX_INDEX ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			15 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => Indices::createStringableObject(),
				'expectedMinIndex'           => Indices::EXPECTED_MIN_INDEX,
				'expectedMaxIndex'           => Indices::EXPECTED_MAX_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX, Indices::STRING, Indices::EXPECTED_MIN_INDEX, Indices::EXPECTED_MAX_INDEX ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			16 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = Indices::createStandardObject(),
				'expectedMinIndex'           => Indices::EXPECTED_MIN_INDEX,
				'expectedMaxIndex'           => Indices::EXPECTED_MAX_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $outOfRangeIndex ),
					Indices::EXPECTED_MIN_INDEX,
					Indices::EXPECTED_MAX_INDEX
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			17 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = Indices::BOOLEAN_FALSE,
				'expectedMinIndex'           => Indices::EXPECTED_MIN_INDEX,
				'expectedMaxIndex'           => Indices::EXPECTED_MAX_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $outOfRangeIndex ),
					Indices::EXPECTED_MIN_INDEX,
					Indices::EXPECTED_MAX_INDEX
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			18 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = Indices::BOOLEAN_TRUE,
				'expectedMinIndex'           => Indices::EXPECTED_MIN_INDEX,
				'expectedMaxIndex'           => Indices::EXPECTED_MAX_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $outOfRangeIndex ),
					Indices::EXPECTED_MIN_INDEX,
					Indices::EXPECTED_MAX_INDEX
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			19 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = Indices::INTEGER,
				'expectedMinIndex'           => Indices::EXPECTED_MIN_INDEX,
				'expectedMaxIndex'           => Indices::EXPECTED_MAX_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX, $outOfRangeIndex, Indices::EXPECTED_MIN_INDEX, Indices::EXPECTED_MAX_INDEX ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			20 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = Indices::FLOAT,
				'expectedMinIndex'           => Indices::EXPECTED_MIN_INDEX,
				'expectedMaxIndex'           => Indices::EXPECTED_MAX_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX, $outOfRangeIndex, Indices::EXPECTED_MIN_INDEX, Indices::EXPECTED_MAX_INDEX ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			21 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = Indices::STRING,
				'expectedMinIndex'           => Indices::EXPECTED_MIN_INDEX,
				'expectedMaxIndex'           => Indices::EXPECTED_MAX_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX, $outOfRangeIndex, Indices::EXPECTED_MIN_INDEX, Indices::EXPECTED_MAX_INDEX ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			22 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => Indices::NULL,
				'expectedMinIndex'           => Indices::EXPECTED_MIN_INDEX,
				'expectedMaxIndex'           => Indices::EXPECTED_MAX_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX, Indices::MASKED_NULL, Indices::EXPECTED_MIN_INDEX, Indices::EXPECTED_MAX_INDEX ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			23 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = Indices::createResource(),
				'expectedMinIndex'           => Indices::EXPECTED_MIN_INDEX,
				'expectedMaxIndex'           => Indices::EXPECTED_MAX_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $outOfRangeIndex ),
					Indices::EXPECTED_MIN_INDEX,
					Indices::EXPECTED_MAX_INDEX
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			24 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => Indices::createClosedResource(),
				'expectedMinIndex'           => Indices::EXPECTED_MIN_INDEX,
				'expectedMaxIndex'           => Indices::EXPECTED_MAX_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX, Indices::MASKED_CLOSED_RESOURCE, Indices::EXPECTED_MIN_INDEX, Indices::EXPECTED_MAX_INDEX ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			25 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => Indices::ARRAY,
				'expectedMinIndex'           => Indices::EXPECTED_MIN_INDEX,
				'expectedMaxIndex'           => Indices::EXPECTED_MAX_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX, Indices::MASKED_ARRAY, Indices::EXPECTED_MIN_INDEX, Indices::EXPECTED_MAX_INDEX ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			26 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => Indices::createStringableObject(),
				'expectedMinIndex'           => Indices::EXPECTED_MIN_INDEX,
				'expectedMaxIndex'           => Indices::EXPECTED_MAX_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX, Indices::STRING, Indices::EXPECTED_MIN_INDEX, Indices::EXPECTED_MAX_INDEX ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			27 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = Indices::createStandardObject(),
				'expectedMinIndex'           => Indices::EXPECTED_MIN_INDEX,
				'expectedMaxIndex'           => Indices::EXPECTED_MAX_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $outOfRangeIndex ),
					Indices::EXPECTED_MIN_INDEX,
					Indices::EXPECTED_MAX_INDEX
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			28 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = Indices::BOOLEAN_FALSE,
				'expectedMinIndex'           => Indices::EXPECTED_MIN_INDEX,
				'expectedMaxIndex'           => Indices::EXPECTED_MAX_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $outOfRangeIndex ),
					Indices::EXPECTED_MIN_INDEX,
					Indices::EXPECTED_MAX_INDEX
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			29 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = Indices::BOOLEAN_TRUE,
				'expectedMinIndex'           => Indices::EXPECTED_MIN_INDEX,
				'expectedMaxIndex'           => Indices::EXPECTED_MAX_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $outOfRangeIndex ),
					Indices::EXPECTED_MIN_INDEX,
					Indices::EXPECTED_MAX_INDEX
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			30 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = Indices::INTEGER,
				'expectedMinIndex'           => Indices::EXPECTED_MIN_INDEX,
				'expectedMaxIndex'           => Indices::EXPECTED_MAX_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX, $outOfRangeIndex, Indices::EXPECTED_MIN_INDEX, Indices::EXPECTED_MAX_INDEX ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			31 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = Indices::FLOAT,
				'expectedMinIndex'           => Indices::EXPECTED_MIN_INDEX,
				'expectedMaxIndex'           => Indices::EXPECTED_MAX_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX, $outOfRangeIndex, Indices::EXPECTED_MIN_INDEX, Indices::EXPECTED_MAX_INDEX ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			32 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = Indices::STRING,
				'expectedMinIndex'           => Indices::EXPECTED_MIN_INDEX,
				'expectedMaxIndex'           => Indices::EXPECTED_MAX_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX, $outOfRangeIndex, Indices::EXPECTED_MIN_INDEX, Indices::EXPECTED_MAX_INDEX ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			33 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => Indices::NULL,
				'expectedMinIndex'           => Indices::EXPECTED_MIN_INDEX,
				'expectedMaxIndex'           => Indices::EXPECTED_MAX_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX, Indices::MASKED_NULL, Indices::EXPECTED_MIN_INDEX, Indices::EXPECTED_MAX_INDEX ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			34 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = Indices::createResource(),
				'expectedMinIndex'           => Indices::EXPECTED_MIN_INDEX,
				'expectedMaxIndex'           => Indices::EXPECTED_MAX_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $outOfRangeIndex ),
					Indices::EXPECTED_MIN_INDEX,
					Indices::EXPECTED_MAX_INDEX
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			35 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => Indices::createClosedResource(),
				'expectedMinIndex'           => Indices::EXPECTED_MIN_INDEX,
				'expectedMaxIndex'           => Indices::EXPECTED_MAX_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX, Indices::MASKED_CLOSED_RESOURCE, Indices::EXPECTED_MIN_INDEX, Indices::EXPECTED_MAX_INDEX ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			36 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => Indices::ARRAY,
				'expectedMinIndex'           => Indices::EXPECTED_MIN_INDEX,
				'expectedMaxIndex'           => Indices::EXPECTED_MAX_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX, Indices::MASKED_ARRAY, Indices::EXPECTED_MIN_INDEX, Indices::EXPECTED_MAX_INDEX ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			37 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => Indices::createStringableObject(),
				'expectedMinIndex'           => Indices::EXPECTED_MIN_INDEX,
				'expectedMaxIndex'           => Indices::EXPECTED_MAX_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX, Indices::STRING, Indices::EXPECTED_MIN_INDEX, Indices::EXPECTED_MAX_INDEX ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			38 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = Indices::createStandardObject(),
				'expectedMinIndex'           => Indices::EXPECTED_MIN_INDEX,
				'expectedMaxIndex'           => Indices::EXPECTED_MAX_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $outOfRangeIndex ),
					Indices::EXPECTED_MIN_INDEX,
					Indices::EXPECTED_MAX_INDEX
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			39 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = Indices::BOOLEAN_FALSE,
				'expectedMinIndex'           => Indices::EXPECTED_MIN_INDEX,
				'expectedMaxIndex'           => Indices::EXPECTED_MAX_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $outOfRangeIndex ),
					Indices::EXPECTED_MIN_INDEX,
					Indices::EXPECTED_MAX_INDEX
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			40 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = Indices::BOOLEAN_TRUE,
				'expectedMinIndex'           => Indices::EXPECTED_MIN_INDEX,
				'expectedMaxIndex'           => Indices::EXPECTED_MAX_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $outOfRangeIndex ),
					Indices::EXPECTED_MIN_INDEX,
					Indices::EXPECTED_MAX_INDEX
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			41 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = Indices::INTEGER,
				'expectedMinIndex'           => Indices::EXPECTED_MIN_INDEX,
				'expectedMaxIndex'           => Indices::EXPECTED_MAX_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX, $outOfRangeIndex, Indices::EXPECTED_MIN_INDEX, Indices::EXPECTED_MAX_INDEX ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			42 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = Indices::FLOAT,
				'expectedMinIndex'           => Indices::EXPECTED_MIN_INDEX,
				'expectedMaxIndex'           => Indices::EXPECTED_MAX_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX, $outOfRangeIndex, Indices::EXPECTED_MIN_INDEX, Indices::EXPECTED_MAX_INDEX ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			43 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = Indices::STRING,
				'expectedMinIndex'           => Indices::EXPECTED_MIN_INDEX,
				'expectedMaxIndex'           => Indices::EXPECTED_MAX_INDEX,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX_EXPECTED_MIN_INDEX_AND_EXPECTED_MAX_INDEX, $outOfRangeIndex, Indices::EXPECTED_MIN_INDEX, Indices::EXPECTED_MAX_INDEX ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
		];
	}
}
