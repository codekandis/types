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
 * Represents a data provider providing throwable class names with invalid value, expected throwable class name and expected throwable message.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithInvalidValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
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
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_NULL )
			],
			1  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::createResource(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $invalidValue )
				)
			],
			2  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::createClosedResource(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_CLOSED_RESOURCE )
			],
			3  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::ARRAY,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_ARRAY )
			],
			4  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::createStandardObjectFixture(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidValue )
				)
			],
			5  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::createInheritedStandardObjectFixture(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidValue )
				)
			],
			6  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::createStringableObject(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::STRING )
			],
			7  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_FALSE,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue )
				)
			],
			8  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_TRUE,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue )
				)
			],
			9  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::INTEGER,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue )
			],
			10 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::FLOAT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue )
			],
			11 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::STRING,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue )
			],
			12 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => Values::NULL,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_NULL )
			],
			13 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => $invalidValue = Values::createResource(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $invalidValue )
				)
			],
			14 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => Values::createClosedResource(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_CLOSED_RESOURCE )
			],
			15 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => Values::ARRAY,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_ARRAY )
			],
			16 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => $invalidValue = Values::createStandardObjectFixture(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidValue )
				)
			],
			17 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => $invalidValue = Values::createInheritedStandardObjectFixture(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidValue )
				)
			],
			18 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => Values::createStringableObject(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::STRING )
			],
			19 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_FALSE,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue )
				)
			],
			20 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_TRUE,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue )
				)
			],
			21 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => $invalidValue = Values::INTEGER,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue )
			],
			22 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => $invalidValue = Values::FLOAT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue )
			],
			23 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'invalidValue'               => $invalidValue = Values::STRING,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue )
			],
			24 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => Values::NULL,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_NULL )
			],
			25 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => $invalidValue = Values::createResource(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $invalidValue )
				)
			],
			26 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => Values::createClosedResource(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_CLOSED_RESOURCE )
			],
			27 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => Values::ARRAY,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_ARRAY )
			],
			28 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => $invalidValue = Values::createStandardObjectFixture(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidValue )
				)
			],
			29 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => $invalidValue = Values::createInheritedStandardObjectFixture(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidValue )
				)
			],
			30 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => Values::createStringableObject(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::STRING )
			],
			31 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_FALSE,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue )
				)
			],
			32 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_TRUE,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue )
				)
			],
			33 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => $invalidValue = Values::INTEGER,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue )
			],
			34 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => $invalidValue = Values::FLOAT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue )
			],
			35 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'invalidValue'               => $invalidValue = Values::STRING,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue )
			],
			36 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => Values::NULL,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_NULL )
			],
			37 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => $invalidValue = Values::createResource(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $invalidValue )
				)
			],
			38 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => Values::createClosedResource(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_CLOSED_RESOURCE )
			],
			39 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => Values::ARRAY,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::MASKED_ARRAY )
			],
			40 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => $invalidValue = Values::createStandardObjectFixture(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidValue )
				)
			],
			41 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => $invalidValue = Values::createInheritedStandardObjectFixture(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidValue )
				)
			],
			42 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => Values::createStringableObject(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, Values::STRING )
			],
			43 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_FALSE,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue )
				)
			],
			44 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => $invalidValue = Values::BOOLEAN_TRUE,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidValue )
				)
			],
			45 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => $invalidValue = Values::INTEGER,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue )
			],
			46 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => $invalidValue = Values::FLOAT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue )
			],
			47 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'invalidValue'               => $invalidValue = Values::STRING,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $invalidValue )
			]
		];
	}
}
