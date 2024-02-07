<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\ValueIsNotEmptyExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\Tests\Fixtures\Types;
use CodeKandis\Types\Tests\Fixtures\Values;
use CodeKandis\Types\ValueIsNotEmptyException;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with nonempty value, expected throwable class name and expected throwable message.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithNonEmptyValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'nonEmptyValue'              => Values::NULL,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEMPTY_VALUE, Values::MASKED_NULL )
			],
			1  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'nonEmptyValue'              => $nonEmptyValue = Values::createResource(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEMPTY_VALUE,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $nonEmptyValue )
				)
			],
			2  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'nonEmptyValue'              => Values::createClosedResource(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEMPTY_VALUE, Values::MASKED_CLOSED_RESOURCE )
			],
			3  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'nonEmptyValue'              => Values::ARRAY,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEMPTY_VALUE, Values::MASKED_ARRAY )
			],
			4  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'nonEmptyValue'              => $nonEmptyValue = Values::createStandardObjectFixture(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEMPTY_VALUE,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $nonEmptyValue )
				)
			],
			5  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'nonEmptyValue'              => $nonEmptyValue = Values::createInheritedStandardObjectFixture(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEMPTY_VALUE,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $nonEmptyValue )
				)
			],
			6  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'nonEmptyValue'              => Values::createStringableObject(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEMPTY_VALUE, Values::STRING )
			],
			7  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'nonEmptyValue'              => $nonEmptyValue = Values::BOOLEAN_FALSE,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEMPTY_VALUE,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $nonEmptyValue )
				)
			],
			8  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'nonEmptyValue'              => $nonEmptyValue = Values::BOOLEAN_TRUE,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEMPTY_VALUE,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $nonEmptyValue )
				)
			],
			9  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'nonEmptyValue'              => $nonEmptyValue = Values::INTEGER,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEMPTY_VALUE, $nonEmptyValue )
			],
			10 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'nonEmptyValue'              => $nonEmptyValue = Values::FLOAT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEMPTY_VALUE, $nonEmptyValue )
			],
			11 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'nonEmptyValue'              => $nonEmptyValue = Values::STRING,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEMPTY_VALUE, $nonEmptyValue )
			]
		];
	}
}
