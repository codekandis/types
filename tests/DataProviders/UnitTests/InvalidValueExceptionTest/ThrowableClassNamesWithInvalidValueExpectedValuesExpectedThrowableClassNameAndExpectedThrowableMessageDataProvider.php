<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\InvalidValueExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\InvalidValueException;
use CodeKandis\Types\Tests\Fixtures\Types;
use CodeKandis\Types\Tests\Fixtures\Values;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with invalid value, expected values, expected throwable class name and expected throwable message.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithInvalidValueExpectedValuesExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::NULL,
				'expectedValues'             => Values::EXPECTED_SINGLE_VALUE,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Values::MASKED_NULL,
					Values::createConcatinatedExpectedSingleValue()
				)
			],
			1  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::NULL,
				'expectedValues'             => Values::EXPECTED_VALUES,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Values::MASKED_NULL,
					Values::createConcatinatedExpectedValues()
				)
			],
			2  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::createResource(),
				'expectedValues'             => Values::EXPECTED_SINGLE_VALUE,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					new Types()->createMaskedTypeHintTypedResourceTypeByResource( $invalidValue ),
					Values::createConcatinatedExpectedSingleValue()
				)
			],
			3  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::createResource(),
				'expectedValues'             => Values::EXPECTED_VALUES,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					new Types()->createMaskedTypeHintTypedResourceTypeByResource( $invalidValue ),
					Values::createConcatinatedExpectedValues()
				)
			],
			4  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::createClosedResource(),
				'expectedValues'             => Values::EXPECTED_SINGLE_VALUE,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Values::MASKED_CLOSED_RESOURCE,
					Values::createConcatinatedExpectedSingleValue()
				)
			],
			5  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::createClosedResource(),
				'expectedValues'             => Values::EXPECTED_VALUES,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Values::MASKED_CLOSED_RESOURCE,
					Values::createConcatinatedExpectedValues()
				)
			],
			6  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::ARRAY,
				'expectedValues'             => Values::EXPECTED_SINGLE_VALUE,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Values::MASKED_ARRAY,
					Values::createConcatinatedExpectedSingleValue()
				)
			],
			7  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::ARRAY,
				'expectedValues'             => Values::EXPECTED_VALUES,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Values::MASKED_ARRAY,
					Values::createConcatinatedExpectedValues()
				)
			],
			8  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::createStringableObject(),
				'expectedValues'             => Values::EXPECTED_SINGLE_VALUE,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Values::STRING,
					Values::createConcatinatedExpectedSingleValue()
				)
			],
			9  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::createStringableObject(),
				'expectedValues'             => Values::EXPECTED_VALUES,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					Values::STRING,
					Values::createConcatinatedExpectedValues()
				)
			],
			10 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::createStandardObjectFixture(),
				'expectedValues'             => Values::EXPECTED_SINGLE_VALUE,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					new Types()->createMaskedTypeHintTypedObjectTypeByObject( $invalidValue ),
					Values::createConcatinatedExpectedSingleValue()
				)
			],
			11 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::createStandardObjectFixture(),
				'expectedValues'             => Values::EXPECTED_VALUES,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					new Types()->createMaskedTypeHintTypedObjectTypeByObject( $invalidValue ),
					Values::createConcatinatedExpectedValues()
				)
			],
			12 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_FALSE,
				'expectedValues'             => Values::EXPECTED_SINGLE_VALUE,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					new Types()->createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue ),
					Values::createConcatinatedExpectedSingleValue()
				)
			],
			13 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_FALSE,
				'expectedValues'             => Values::EXPECTED_VALUES,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					new Types()->createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue ),
					Values::createConcatinatedExpectedValues()
				)
			],
			14 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_TRUE,
				'expectedValues'             => Values::EXPECTED_SINGLE_VALUE,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					new Types()->createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue ),
					Values::createConcatinatedExpectedSingleValue()
				)
			],
			15 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_TRUE,
				'expectedValues'             => Values::EXPECTED_VALUES,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					new Types()->createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue ),
					Values::createConcatinatedExpectedValues()
				)
			],
			16 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::INTEGER,
				'expectedValues'             => Values::EXPECTED_SINGLE_VALUE,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
					Values::createConcatinatedExpectedSingleValue()
				)
			],
			17 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::INTEGER,
				'expectedValues'             => Values::EXPECTED_VALUES,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
					Values::createConcatinatedExpectedValues()
				)
			],
			18 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::FLOAT,
				'expectedValues'             => Values::EXPECTED_SINGLE_VALUE,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
					Values::createConcatinatedExpectedSingleValue()
				)
			],
			19 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::FLOAT,
				'expectedValues'             => Values::EXPECTED_VALUES,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
					Values::createConcatinatedExpectedValues()
				)
			],
			20 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::STRING,
				'expectedValues'             => Values::EXPECTED_SINGLE_VALUE,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
					Values::createConcatinatedExpectedSingleValue()
				)
			],
			21 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::STRING,
				'expectedValues'             => Values::EXPECTED_VALUES,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES,
					$invalidValue,
					Values::createConcatinatedExpectedValues()
				)
			]
		];
	}
}
