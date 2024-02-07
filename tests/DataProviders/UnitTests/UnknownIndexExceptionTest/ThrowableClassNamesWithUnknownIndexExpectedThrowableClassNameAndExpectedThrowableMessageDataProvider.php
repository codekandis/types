<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\UnknownIndexExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\IndexOutOfRangeException;
use CodeKandis\Types\Tests\Fixtures\Indices;
use CodeKandis\Types\Tests\Fixtures\Types;
use CodeKandis\Types\UnknownIndexException;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with unknown index, expected throwable class name and expected throwable message.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithUnknownIndexExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'throwableClassName'         => $throwableClassName = UnknownIndexException::class,
				'unknownIndex'               => Indices::NULL,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_UNKNOWN_INDEX, Indices::MASKED_NULL )
			],
			1  => [
				'throwableClassName'         => $throwableClassName = UnknownIndexException::class,
				'unknownIndex'               => $unknownIndex = Indices::createResource(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_UNKNOWN_INDEX,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $unknownIndex )
				)
			],
			2  => [
				'throwableClassName'         => $throwableClassName = UnknownIndexException::class,
				'unknownIndex'               => Indices::createClosedResource(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_UNKNOWN_INDEX, Indices::MASKED_CLOSED_RESOURCE )
			],
			3  => [
				'throwableClassName'         => $throwableClassName = UnknownIndexException::class,
				'unknownIndex'               => Indices::ARRAY,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_UNKNOWN_INDEX, Indices::MASKED_ARRAY )
			],
			4  => [
				'throwableClassName'         => $throwableClassName = UnknownIndexException::class,
				'unknownIndex'               => $unknownIndex = Indices::createStandardObject(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_UNKNOWN_INDEX,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $unknownIndex )
				)
			],
			5  => [
				'throwableClassName'         => $throwableClassName = UnknownIndexException::class,
				'unknownIndex'               => $unknownIndex = Indices::createInheritedStandardObject(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_UNKNOWN_INDEX,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $unknownIndex )
				)
			],
			6  => [
				'throwableClassName'         => $throwableClassName = UnknownIndexException::class,
				'unknownIndex'               => Indices::createStringableObject(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_UNKNOWN_INDEX, Indices::STRING )
			],
			7  => [
				'throwableClassName'         => $throwableClassName = UnknownIndexException::class,
				'unknownIndex'               => $unknownIndex = Indices::BOOLEAN_FALSE,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_UNKNOWN_INDEX,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $unknownIndex )
				)
			],
			8  => [
				'throwableClassName'         => $throwableClassName = UnknownIndexException::class,
				'unknownIndex'               => $unknownIndex = Indices::BOOLEAN_TRUE,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_UNKNOWN_INDEX,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $unknownIndex )
				)
			],
			9  => [
				'throwableClassName'         => $throwableClassName = UnknownIndexException::class,
				'unknownIndex'               => $unknownIndex = Indices::INTEGER,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_UNKNOWN_INDEX, $unknownIndex )
			],
			10 => [
				'throwableClassName'         => $throwableClassName = UnknownIndexException::class,
				'unknownIndex'               => $unknownIndex = Indices::FLOAT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_UNKNOWN_INDEX, $unknownIndex )
			],
			11 => [
				'throwableClassName'         => $throwableClassName = UnknownIndexException::class,
				'unknownIndex'               => $unknownIndex = Indices::STRING,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_UNKNOWN_INDEX, $unknownIndex )
			],
			12 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'unknownIndex'               => Indices::NULL,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_UNKNOWN_INDEX, Indices::MASKED_NULL )
			],
			13 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'unknownIndex'               => $unknownIndex = Indices::createResource(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_UNKNOWN_INDEX,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $unknownIndex )
				)
			],
			14 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'unknownIndex'               => Indices::createClosedResource(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_UNKNOWN_INDEX, Indices::MASKED_CLOSED_RESOURCE )
			],
			15 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'unknownIndex'               => Indices::ARRAY,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_UNKNOWN_INDEX, Indices::MASKED_ARRAY )
			],
			16 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'unknownIndex'               => $unknownIndex = Indices::createStandardObject(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_UNKNOWN_INDEX,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $unknownIndex )
				)
			],
			17 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'unknownIndex'               => $unknownIndex = Indices::createInheritedStandardObject(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_UNKNOWN_INDEX,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $unknownIndex )
				)
			],
			18 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'unknownIndex'               => Indices::createStringableObject(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_UNKNOWN_INDEX, Indices::STRING )
			],
			19 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'unknownIndex'               => $unknownIndex = Indices::BOOLEAN_FALSE,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_UNKNOWN_INDEX,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $unknownIndex )
				)
			],
			20 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'unknownIndex'               => $unknownIndex = Indices::BOOLEAN_TRUE,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_UNKNOWN_INDEX,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $unknownIndex )
				)
			],
			21 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'unknownIndex'               => $unknownIndex = Indices::INTEGER,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_UNKNOWN_INDEX, $unknownIndex )
			],
			22 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'unknownIndex'               => $unknownIndex = Indices::FLOAT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_UNKNOWN_INDEX, $unknownIndex )
			],
			23 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'unknownIndex'               => $unknownIndex = Indices::STRING,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_UNKNOWN_INDEX, $unknownIndex )
			]
		];
	}
}
