<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\InvalidValueExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\InvalidValueException;
use CodeKandis\Types\Tests\Fixtures\Types;
use CodeKandis\Types\Tests\Fixtures\Values;
use CodeKandis\Types\ValueIsEmptyException;
use CodeKandis\Types\ValueIsNotEmptyException;
use CodeKandis\Types\ValueIsNullException;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with invalid value, expected throwable class name, expected throwable message, expected throwable code and expected throwable previous.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithInvalidValueExpectedThrowableClassNameThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0   => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::NULL,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_NULL ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			1   => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::createResource(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			2   => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::createClosedResource(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_CLOSED_RESOURCE ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			3   => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::ARRAY,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_ARRAY ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			4   => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::createStandardObjectFixture(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			5   => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::createInheritedStandardObjectFixture(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			6   => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::createStringableObject(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::STRING ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			7   => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_FALSE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			8   => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_TRUE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			9   => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::INTEGER,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			10  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::FLOAT,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			11  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::STRING,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			12  => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => Values::NULL,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_NULL ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			13  => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => $invalidValue = Values::createResource(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			14  => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => Values::createClosedResource(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_CLOSED_RESOURCE ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			15  => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => Values::ARRAY,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_ARRAY ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			16  => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => $invalidValue = Values::createStandardObjectFixture(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			17  => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => $invalidValue = Values::createInheritedStandardObjectFixture(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			18  => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => Values::createStringableObject(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::STRING ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			19  => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_FALSE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			20  => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_TRUE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			21  => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => $invalidValue = Values::INTEGER,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			22  => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => $invalidValue = Values::FLOAT,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			23  => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => $invalidValue = Values::STRING,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			24  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => Values::NULL,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_NULL ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			25  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => $invalidValue = Values::createResource(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			26  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => Values::createClosedResource(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_CLOSED_RESOURCE ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			27  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => Values::ARRAY,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_ARRAY ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			28  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => $invalidValue = Values::createStandardObjectFixture(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			29  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => $invalidValue = Values::createInheritedStandardObjectFixture(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			30  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => Values::createStringableObject(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::STRING ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			31  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_FALSE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			32  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_TRUE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			33  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => $invalidValue = Values::INTEGER,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			34  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => $invalidValue = Values::FLOAT,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			35  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => $invalidValue = Values::STRING,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			36  => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => Values::NULL,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_NULL ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			37  => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => $invalidValue = Values::createResource(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			38  => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => Values::createClosedResource(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_CLOSED_RESOURCE ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			39  => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => Values::ARRAY,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_ARRAY ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			40  => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => $invalidValue = Values::createStandardObjectFixture(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			41  => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => $invalidValue = Values::createInheritedStandardObjectFixture(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			42  => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => Values::createStringableObject(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::STRING ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			43  => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_FALSE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			44  => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_TRUE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			45  => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => $invalidValue = Values::INTEGER,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			46  => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => $invalidValue = Values::FLOAT,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			47  => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => $invalidValue = Values::STRING,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			48  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::NULL,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_NULL ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			49  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::createResource(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			50  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::createClosedResource(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_CLOSED_RESOURCE ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			51  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::ARRAY,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_ARRAY ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			52  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::createStandardObjectFixture(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			53  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::createInheritedStandardObjectFixture(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			54  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::createStringableObject(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::STRING ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			55  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_FALSE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			56  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_TRUE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			57  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::INTEGER,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			58  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::FLOAT,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			59  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::STRING,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			60  => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => Values::NULL,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_NULL ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			61  => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => $invalidValue = Values::createResource(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			62  => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => Values::createClosedResource(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_CLOSED_RESOURCE ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			63  => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => Values::ARRAY,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_ARRAY ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			64  => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => $invalidValue = Values::createStandardObjectFixture(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			65  => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => $invalidValue = Values::createInheritedStandardObjectFixture(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			66  => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => Values::createStringableObject(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::STRING ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			67  => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_FALSE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			68  => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_TRUE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			69  => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => $invalidValue = Values::INTEGER,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			70  => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => $invalidValue = Values::FLOAT,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			71  => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => $invalidValue = Values::STRING,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			72  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => Values::NULL,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_NULL ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			73  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => $invalidValue = Values::createResource(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			74  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => Values::createClosedResource(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_CLOSED_RESOURCE ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			75  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => Values::ARRAY,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_ARRAY ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			76  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => $invalidValue = Values::createStandardObjectFixture(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			77  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => $invalidValue = Values::createInheritedStandardObjectFixture(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			78  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => Values::createStringableObject(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::STRING ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			79  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_FALSE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			80  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_TRUE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			81  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => $invalidValue = Values::INTEGER,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			82  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => $invalidValue = Values::FLOAT,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			83  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => $invalidValue = Values::STRING,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			84  => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => Values::NULL,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_NULL ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			85  => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => $invalidValue = Values::createResource(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			86  => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => Values::createClosedResource(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_CLOSED_RESOURCE ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			87  => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => Values::ARRAY,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_ARRAY ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			88  => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => $invalidValue = Values::createStandardObjectFixture(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			89  => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => $invalidValue = Values::createInheritedStandardObjectFixture(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			90  => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => Values::createStringableObject(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::STRING ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			91  => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_FALSE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			92  => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_TRUE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			93  => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => $invalidValue = Values::INTEGER,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			94  => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => $invalidValue = Values::FLOAT,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			95  => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => $invalidValue = Values::STRING,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			96  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::NULL,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_NULL ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			97  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::createResource(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			98  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::createClosedResource(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_CLOSED_RESOURCE ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			99  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::ARRAY,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_ARRAY ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			100 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::createStandardObjectFixture(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			101 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::createInheritedStandardObjectFixture(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			102 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::createStringableObject(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::STRING ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			103 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_FALSE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			104 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_TRUE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			105 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::INTEGER,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			106 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::FLOAT,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			107 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::STRING,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			108 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => Values::NULL,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_NULL ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			109 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => $invalidValue = Values::createResource(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			110 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => Values::createClosedResource(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_CLOSED_RESOURCE ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			111 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => Values::ARRAY,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_ARRAY ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			112 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => $invalidValue = Values::createStandardObjectFixture(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			113 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => $invalidValue = Values::createInheritedStandardObjectFixture(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			114 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => Values::createStringableObject(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::STRING ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			115 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_FALSE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			116 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_TRUE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			117 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => $invalidValue = Values::INTEGER,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			118 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => $invalidValue = Values::FLOAT,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			119 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => $invalidValue = Values::STRING,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			120 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => Values::NULL,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_NULL ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			121 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => $invalidValue = Values::createResource(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			122 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => Values::createClosedResource(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_CLOSED_RESOURCE ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			123 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => Values::ARRAY,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_ARRAY ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			124 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => $invalidValue = Values::createStandardObjectFixture(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			125 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => $invalidValue = Values::createInheritedStandardObjectFixture(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			126 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => Values::createStringableObject(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::STRING ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			127 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_FALSE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			128 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_TRUE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			129 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => $invalidValue = Values::INTEGER,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			130 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => $invalidValue = Values::FLOAT,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			131 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => $invalidValue = Values::STRING,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			132 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => Values::NULL,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_NULL ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			133 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => $invalidValue = Values::createResource(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			134 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => Values::createClosedResource(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_CLOSED_RESOURCE ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			135 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => Values::ARRAY,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_ARRAY ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			136 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => $invalidValue = Values::createStandardObjectFixture(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			137 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => $invalidValue = Values::createInheritedStandardObjectFixture(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			138 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => Values::createStringableObject(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::STRING ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			139 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_FALSE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			140 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_TRUE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			141 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => $invalidValue = Values::INTEGER,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			142 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => $invalidValue = Values::FLOAT,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			143 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => $invalidValue = Values::STRING,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			144 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::NULL,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_NULL ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			145 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::createResource(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			146 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::createClosedResource(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_CLOSED_RESOURCE ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			147 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::ARRAY,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_ARRAY ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			148 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::createStandardObjectFixture(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			149 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::createInheritedStandardObjectFixture(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			150 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::createStringableObject(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::STRING ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			151 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_FALSE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			152 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_TRUE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			153 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::INTEGER,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			154 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::FLOAT,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			155 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::STRING,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			156 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => Values::NULL,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_NULL ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			157 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => $invalidValue = Values::createResource(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			158 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => Values::createClosedResource(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_CLOSED_RESOURCE ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			159 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => Values::ARRAY,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_ARRAY ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			160 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => $invalidValue = Values::createStandardObjectFixture(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			161 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => $invalidValue = Values::createInheritedStandardObjectFixture(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			162 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => Values::createStringableObject(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::STRING ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			163 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_FALSE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			164 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_TRUE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			165 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => $invalidValue = Values::INTEGER,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			166 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => $invalidValue = Values::FLOAT,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			167 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => $invalidValue = Values::STRING,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			168 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => Values::NULL,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_NULL ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			169 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => $invalidValue = Values::createResource(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			170 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => Values::createClosedResource(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_CLOSED_RESOURCE ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			171 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => Values::ARRAY,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_ARRAY ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			172 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => $invalidValue = Values::createStandardObjectFixture(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			173 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => $invalidValue = Values::createInheritedStandardObjectFixture(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			174 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => Values::createStringableObject(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::STRING ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			175 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_FALSE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			176 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_TRUE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			177 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => $invalidValue = Values::INTEGER,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			178 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => $invalidValue = Values::FLOAT,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			179 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => $invalidValue = Values::STRING,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			180 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => Values::NULL,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_NULL ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			181 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => $invalidValue = Values::createResource(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			182 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => Values::createClosedResource(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_CLOSED_RESOURCE ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			183 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => Values::ARRAY,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_ARRAY ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			184 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => $invalidValue = Values::createStandardObjectFixture(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			185 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => $invalidValue = Values::createInheritedStandardObjectFixture(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			186 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => Values::createStringableObject(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::STRING ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			187 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_FALSE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			188 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_TRUE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			189 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => $invalidValue = Values::INTEGER,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			190 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => $invalidValue = Values::FLOAT,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			191 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => $invalidValue = Values::STRING,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
		];
	}
}
