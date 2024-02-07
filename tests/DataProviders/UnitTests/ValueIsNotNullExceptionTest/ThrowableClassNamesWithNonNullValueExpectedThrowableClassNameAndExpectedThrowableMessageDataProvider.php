<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\ValueIsNotNullExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\Tests\Fixtures\Types;
use CodeKandis\Types\Tests\Fixtures\Values;
use CodeKandis\Types\ValueIsNotNullException;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with nonnull value, expected throwable class name and expected throwable message.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithNonNullValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'nonNullValue'               => Values::NULL,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONNULL_VALUE, Values::MASKED_NULL )
			],
			1  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'nonNullValue'               => $nonNullValue = Values::createResource(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONNULL_VALUE,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $nonNullValue )
				)
			],
			2  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'nonNullValue'               => Values::createClosedResource(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONNULL_VALUE, Values::MASKED_CLOSED_RESOURCE )
			],
			3  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'nonNullValue'               => Values::ARRAY,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONNULL_VALUE, Values::MASKED_ARRAY )
			],
			4  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'nonNullValue'               => $nonNullValue = Values::createStandardObjectFixture(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONNULL_VALUE,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $nonNullValue )
				)
			],
			5  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'nonNullValue'               => $nonNullValue = Values::createInheritedStandardObjectFixture(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONNULL_VALUE,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $nonNullValue )
				)
			],
			6  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'nonNullValue'               => Values::createStringableObject(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONNULL_VALUE, Values::STRING )
			],
			7  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'nonNullValue'               => $nonNullValue = Values::BOOLEAN_FALSE,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONNULL_VALUE,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $nonNullValue )
				)
			],
			8  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'nonNullValue'               => $nonNullValue = Values::BOOLEAN_TRUE,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONNULL_VALUE,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $nonNullValue )
				)
			],
			9  => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'nonNullValue'               => $nonNullValue = Values::INTEGER,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONNULL_VALUE, $nonNullValue )
			],
			10 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'nonNullValue'               => $nonNullValue = Values::FLOAT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONNULL_VALUE, $nonNullValue )
			],
			11 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'nonNullValue'               => $nonNullValue = Values::STRING,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONNULL_VALUE, $nonNullValue )
			]
		];
	}
}
