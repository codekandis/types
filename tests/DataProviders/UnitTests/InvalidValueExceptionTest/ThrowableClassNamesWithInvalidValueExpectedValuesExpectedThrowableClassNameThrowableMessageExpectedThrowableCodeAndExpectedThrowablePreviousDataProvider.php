<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\InvalidValueExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\InvalidValueException;
use CodeKandis\Types\Tests\Fixtures\Types;
use CodeKandis\Types\Tests\Fixtures\Values;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with invalid value, expected values, expected throwable class name, expected throwable message, expected throwable code and expected throwable previous.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithInvalidValueExpectedValuesExpectedThrowableClassNameThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::NULL,
				'expectedValues'             => Values::EXPECTED_SINGLE_VALUE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Values::MASKED_NULL,
					Values::createConcatinatedExpectedSingleValue()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			1  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::NULL,
				'expectedValues'             => Values::EXPECTED_VALUES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Values::MASKED_NULL,
					Values::createConcatinatedExpectedValues()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			2  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::createResource(),
				'expectedValues'             => Values::EXPECTED_SINGLE_VALUE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $invalidValue ),
					Values::createConcatinatedExpectedSingleValue()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			3  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::createResource(),
				'expectedValues'             => Values::EXPECTED_VALUES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $invalidValue ),
					Values::createConcatinatedExpectedValues()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			4  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::createClosedResource(),
				'expectedValues'             => Values::EXPECTED_SINGLE_VALUE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Values::MASKED_CLOSED_RESOURCE,
					Values::createConcatinatedExpectedSingleValue()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			5  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::createClosedResource(),
				'expectedValues'             => Values::EXPECTED_VALUES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Values::MASKED_CLOSED_RESOURCE,
					Values::createConcatinatedExpectedValues()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			6  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::ARRAY,
				'expectedValues'             => Values::EXPECTED_SINGLE_VALUE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Values::MASKED_ARRAY,
					Values::createConcatinatedExpectedSingleValue()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			7  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::ARRAY,
				'expectedValues'             => Values::EXPECTED_VALUES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Values::MASKED_ARRAY,
					Values::createConcatinatedExpectedValues()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			8  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::createStringableObject(),
				'expectedValues'             => Values::EXPECTED_SINGLE_VALUE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Values::STRING,
					Values::createConcatinatedExpectedSingleValue()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			9  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::createStringableObject(),
				'expectedValues'             => Values::EXPECTED_VALUES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Values::STRING,
					Values::createConcatinatedExpectedValues()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			10 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::createStandardObjectFixture(),
				'expectedValues'             => Values::EXPECTED_SINGLE_VALUE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidValue ),
					Values::createConcatinatedExpectedSingleValue()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			11 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::createStandardObjectFixture(),
				'expectedValues'             => Values::EXPECTED_VALUES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidValue ),
					Values::createConcatinatedExpectedValues()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			12 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_FALSE,
				'expectedValues'             => Values::EXPECTED_SINGLE_VALUE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue ),
					Values::createConcatinatedExpectedSingleValue()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			13 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_FALSE,
				'expectedValues'             => Values::EXPECTED_VALUES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue ),
					Values::createConcatinatedExpectedValues()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			14 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_TRUE,
				'expectedValues'             => Values::EXPECTED_SINGLE_VALUE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue ),
					Values::createConcatinatedExpectedSingleValue()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			15 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_TRUE,
				'expectedValues'             => Values::EXPECTED_VALUES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue ),
					Values::createConcatinatedExpectedValues()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			16 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::INTEGER,
				'expectedValues'             => Values::EXPECTED_SINGLE_VALUE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
					Values::createConcatinatedExpectedSingleValue()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			17 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::INTEGER,
				'expectedValues'             => Values::EXPECTED_VALUES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
					Values::createConcatinatedExpectedValues()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			18 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::FLOAT,
				'expectedValues'             => Values::EXPECTED_SINGLE_VALUE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
					Values::createConcatinatedExpectedSingleValue()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			19 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::FLOAT,
				'expectedValues'             => Values::EXPECTED_VALUES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
					Values::createConcatinatedExpectedValues()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			20 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::STRING,
				'expectedValues'             => Values::EXPECTED_SINGLE_VALUE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
					Values::createConcatinatedExpectedSingleValue()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			21 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::STRING,
				'expectedValues'             => Values::EXPECTED_VALUES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
					Values::createConcatinatedExpectedValues()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			22 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::NULL,
				'expectedValues'             => Values::EXPECTED_SINGLE_VALUE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Values::MASKED_NULL,
					Values::createConcatinatedExpectedSingleValue()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			23 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::NULL,
				'expectedValues'             => Values::EXPECTED_VALUES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Values::MASKED_NULL,
					Values::createConcatinatedExpectedValues()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			24 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::createResource(),
				'expectedValues'             => Values::EXPECTED_SINGLE_VALUE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $invalidValue ),
					Values::createConcatinatedExpectedSingleValue()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			25 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::createResource(),
				'expectedValues'             => Values::EXPECTED_VALUES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $invalidValue ),
					Values::createConcatinatedExpectedValues()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			26 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::createClosedResource(),
				'expectedValues'             => Values::EXPECTED_SINGLE_VALUE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Values::MASKED_CLOSED_RESOURCE,
					Values::createConcatinatedExpectedSingleValue()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			27 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::createClosedResource(),
				'expectedValues'             => Values::EXPECTED_VALUES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Values::MASKED_CLOSED_RESOURCE,
					Values::createConcatinatedExpectedValues()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			28 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::ARRAY,
				'expectedValues'             => Values::EXPECTED_SINGLE_VALUE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Values::MASKED_ARRAY,
					Values::createConcatinatedExpectedSingleValue()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			29 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::ARRAY,
				'expectedValues'             => Values::EXPECTED_VALUES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Values::MASKED_ARRAY,
					Values::createConcatinatedExpectedValues()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			30 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::createStringableObject(),
				'expectedValues'             => Values::EXPECTED_SINGLE_VALUE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Values::STRING,
					Values::createConcatinatedExpectedSingleValue()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			31 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::createStringableObject(),
				'expectedValues'             => Values::EXPECTED_VALUES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Values::STRING,
					Values::createConcatinatedExpectedValues()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			32 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::createStandardObjectFixture(),
				'expectedValues'             => Values::EXPECTED_SINGLE_VALUE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidValue ),
					Values::createConcatinatedExpectedSingleValue()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			33 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::createStandardObjectFixture(),
				'expectedValues'             => Values::EXPECTED_VALUES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidValue ),
					Values::createConcatinatedExpectedValues()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			34 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_FALSE,
				'expectedValues'             => Values::EXPECTED_SINGLE_VALUE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue ),
					Values::createConcatinatedExpectedSingleValue()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			35 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_FALSE,
				'expectedValues'             => Values::EXPECTED_VALUES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue ),
					Values::createConcatinatedExpectedValues()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			36 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_TRUE,
				'expectedValues'             => Values::EXPECTED_SINGLE_VALUE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue ),
					Values::createConcatinatedExpectedSingleValue()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			37 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_TRUE,
				'expectedValues'             => Values::EXPECTED_VALUES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue ),
					Values::createConcatinatedExpectedValues()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			38 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::INTEGER,
				'expectedValues'             => Values::EXPECTED_SINGLE_VALUE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
					Values::createConcatinatedExpectedSingleValue()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			39 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::INTEGER,
				'expectedValues'             => Values::EXPECTED_VALUES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
					Values::createConcatinatedExpectedValues()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			40 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::FLOAT,
				'expectedValues'             => Values::EXPECTED_SINGLE_VALUE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
					Values::createConcatinatedExpectedSingleValue()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			41 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::FLOAT,
				'expectedValues'             => Values::EXPECTED_VALUES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
					Values::createConcatinatedExpectedValues()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			42 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::STRING,
				'expectedValues'             => Values::EXPECTED_SINGLE_VALUE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
					Values::createConcatinatedExpectedSingleValue()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			43 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::STRING,
				'expectedValues'             => Values::EXPECTED_VALUES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
					Values::createConcatinatedExpectedValues()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			44 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::NULL,
				'expectedValues'             => Values::EXPECTED_SINGLE_VALUE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Values::MASKED_NULL,
					Values::createConcatinatedExpectedSingleValue()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			45 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::NULL,
				'expectedValues'             => Values::EXPECTED_VALUES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Values::MASKED_NULL,
					Values::createConcatinatedExpectedValues()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			46 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::createResource(),
				'expectedValues'             => Values::EXPECTED_SINGLE_VALUE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $invalidValue ),
					Values::createConcatinatedExpectedSingleValue()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			47 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::createResource(),
				'expectedValues'             => Values::EXPECTED_VALUES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $invalidValue ),
					Values::createConcatinatedExpectedValues()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			48 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::createClosedResource(),
				'expectedValues'             => Values::EXPECTED_SINGLE_VALUE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Values::MASKED_CLOSED_RESOURCE,
					Values::createConcatinatedExpectedSingleValue()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			49 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::createClosedResource(),
				'expectedValues'             => Values::EXPECTED_VALUES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Values::MASKED_CLOSED_RESOURCE,
					Values::createConcatinatedExpectedValues()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			50 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::ARRAY,
				'expectedValues'             => Values::EXPECTED_SINGLE_VALUE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Values::MASKED_ARRAY,
					Values::createConcatinatedExpectedSingleValue()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			51 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::ARRAY,
				'expectedValues'             => Values::EXPECTED_VALUES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Values::MASKED_ARRAY,
					Values::createConcatinatedExpectedValues()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			52 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::createStringableObject(),
				'expectedValues'             => Values::EXPECTED_SINGLE_VALUE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Values::STRING,
					Values::createConcatinatedExpectedSingleValue()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			53 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::createStringableObject(),
				'expectedValues'             => Values::EXPECTED_VALUES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Values::STRING,
					Values::createConcatinatedExpectedValues()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			54 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::createStandardObjectFixture(),
				'expectedValues'             => Values::EXPECTED_SINGLE_VALUE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidValue ),
					Values::createConcatinatedExpectedSingleValue()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			55 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::createStandardObjectFixture(),
				'expectedValues'             => Values::EXPECTED_VALUES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidValue ),
					Values::createConcatinatedExpectedValues()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			56 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_FALSE,
				'expectedValues'             => Values::EXPECTED_SINGLE_VALUE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue ),
					Values::createConcatinatedExpectedSingleValue()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			57 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_FALSE,
				'expectedValues'             => Values::EXPECTED_VALUES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue ),
					Values::createConcatinatedExpectedValues()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			58 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_TRUE,
				'expectedValues'             => Values::EXPECTED_SINGLE_VALUE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue ),
					Values::createConcatinatedExpectedSingleValue()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			59 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_TRUE,
				'expectedValues'             => Values::EXPECTED_VALUES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue ),
					Values::createConcatinatedExpectedValues()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			60 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::INTEGER,
				'expectedValues'             => Values::EXPECTED_SINGLE_VALUE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
					Values::createConcatinatedExpectedSingleValue()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			61 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::INTEGER,
				'expectedValues'             => Values::EXPECTED_VALUES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
					Values::createConcatinatedExpectedValues()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			62 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::FLOAT,
				'expectedValues'             => Values::EXPECTED_SINGLE_VALUE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
					Values::createConcatinatedExpectedSingleValue()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			63 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::FLOAT,
				'expectedValues'             => Values::EXPECTED_VALUES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
					Values::createConcatinatedExpectedValues()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			64 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::STRING,
				'expectedValues'             => Values::EXPECTED_SINGLE_VALUE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
					Values::createConcatinatedExpectedSingleValue()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			65 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::STRING,
				'expectedValues'             => Values::EXPECTED_VALUES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
					Values::createConcatinatedExpectedValues()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			66 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::NULL,
				'expectedValues'             => Values::EXPECTED_SINGLE_VALUE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Values::MASKED_NULL,
					Values::createConcatinatedExpectedSingleValue()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			67 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::NULL,
				'expectedValues'             => Values::EXPECTED_VALUES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Values::MASKED_NULL,
					Values::createConcatinatedExpectedValues()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			68 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::createResource(),
				'expectedValues'             => Values::EXPECTED_SINGLE_VALUE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $invalidValue ),
					Values::createConcatinatedExpectedSingleValue()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			69 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::createResource(),
				'expectedValues'             => Values::EXPECTED_VALUES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $invalidValue ),
					Values::createConcatinatedExpectedValues()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			70 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::createClosedResource(),
				'expectedValues'             => Values::EXPECTED_SINGLE_VALUE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Values::MASKED_CLOSED_RESOURCE,
					Values::createConcatinatedExpectedSingleValue()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			71 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::createClosedResource(),
				'expectedValues'             => Values::EXPECTED_VALUES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Values::MASKED_CLOSED_RESOURCE,
					Values::createConcatinatedExpectedValues()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			72 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::ARRAY,
				'expectedValues'             => Values::EXPECTED_SINGLE_VALUE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Values::MASKED_ARRAY,
					Values::createConcatinatedExpectedSingleValue()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			73 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::ARRAY,
				'expectedValues'             => Values::EXPECTED_VALUES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Values::MASKED_ARRAY,
					Values::createConcatinatedExpectedValues()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			74 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::createStringableObject(),
				'expectedValues'             => Values::EXPECTED_SINGLE_VALUE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Values::STRING,
					Values::createConcatinatedExpectedSingleValue()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			75 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::createStringableObject(),
				'expectedValues'             => Values::EXPECTED_VALUES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Values::STRING,
					Values::createConcatinatedExpectedValues()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			76 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::createStandardObjectFixture(),
				'expectedValues'             => Values::EXPECTED_SINGLE_VALUE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidValue ),
					Values::createConcatinatedExpectedSingleValue()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			77 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::createStandardObjectFixture(),
				'expectedValues'             => Values::EXPECTED_VALUES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidValue ),
					Values::createConcatinatedExpectedValues()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			78 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_FALSE,
				'expectedValues'             => Values::EXPECTED_SINGLE_VALUE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue ),
					Values::createConcatinatedExpectedSingleValue()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			79 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_FALSE,
				'expectedValues'             => Values::EXPECTED_VALUES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue ),
					Values::createConcatinatedExpectedValues()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			80 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_TRUE,
				'expectedValues'             => Values::EXPECTED_SINGLE_VALUE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue ),
					Values::createConcatinatedExpectedSingleValue()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			81 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_TRUE,
				'expectedValues'             => Values::EXPECTED_VALUES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue ),
					Values::createConcatinatedExpectedValues()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			82 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::INTEGER,
				'expectedValues'             => Values::EXPECTED_SINGLE_VALUE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
					Values::createConcatinatedExpectedSingleValue()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			83 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::INTEGER,
				'expectedValues'             => Values::EXPECTED_VALUES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
					Values::createConcatinatedExpectedValues()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			84 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::FLOAT,
				'expectedValues'             => Values::EXPECTED_SINGLE_VALUE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
					Values::createConcatinatedExpectedSingleValue()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			85 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::FLOAT,
				'expectedValues'             => Values::EXPECTED_VALUES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
					Values::createConcatinatedExpectedValues()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			86 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::STRING,
				'expectedValues'             => Values::EXPECTED_SINGLE_VALUE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
					Values::createConcatinatedExpectedSingleValue()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			87 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::STRING,
				'expectedValues'             => Values::EXPECTED_VALUES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
					Values::createConcatinatedExpectedValues()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
		];
	}
}
