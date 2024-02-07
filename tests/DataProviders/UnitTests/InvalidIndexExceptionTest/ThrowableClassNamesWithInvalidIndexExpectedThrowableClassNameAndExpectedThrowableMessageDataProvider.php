<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\InvalidIndexExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\IndexOutOfRangeException;
use CodeKandis\Types\InvalidIndexException;
use CodeKandis\Types\Tests\Fixtures\Indices;
use CodeKandis\Types\Tests\Fixtures\Types;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with invalid index, expected throwable class name and expected throwable message.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithInvalidIndexExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => new Indices()->null,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, new Indices()->maskedNull )
			],
			1  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = new Indices()->createResource(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					new Types()->createMaskedTypeHintTypedResourceTypeByResource( $invalidIndex )
				)
			],
			2  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => new Indices()->createClosedResource(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, new Indices()->maskedClosedResource )
			],
			3  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => new Indices()->array,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, new Indices()->maskedArray )
			],
			4  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = new Indices()->createStandardObject(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					new Types()->createMaskedTypeHintTypedObjectTypeByObject( $invalidIndex )
				)
			],
			5  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = new Indices()->createInheritedStandardObject(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					new Types()->createMaskedTypeHintTypedObjectTypeByObject( $invalidIndex )
				)
			],
			6  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => new Indices()->createStringableObject(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, new Indices()->string )
			],
			7  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = new Indices()->booleanFalse,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					new Types()->createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex )
				)
			],
			8  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = new Indices()->booleanTrue,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					new Types()->createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex )
				)
			],
			9  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = new Indices()->integer,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, $invalidIndex )
			],
			10 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = new Indices()->float,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, $invalidIndex )
			],
			11 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = new Indices()->string,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, $invalidIndex )
			],
			12 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => new Indices()->null,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, new Indices()->maskedNull )
			],
			13 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = new Indices()->createResource(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					new Types()->createMaskedTypeHintTypedResourceTypeByResource( $invalidIndex )
				)
			],
			14 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => new Indices()->createClosedResource(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, new Indices()->maskedClosedResource )
			],
			15 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => new Indices()->array,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, new Indices()->maskedArray )
			],
			16 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = new Indices()->createStandardObject(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					new Types()->createMaskedTypeHintTypedObjectTypeByObject( $invalidIndex )
				)
			],
			17 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = new Indices()->createInheritedStandardObject(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					new Types()->createMaskedTypeHintTypedObjectTypeByObject( $invalidIndex )
				)
			],
			18 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => new Indices()->createStringableObject(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, new Indices()->string )
			],
			19 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = new Indices()->booleanFalse,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					new Types()->createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex )
				)
			],
			20 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = new Indices()->booleanTrue,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					new Types()->createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex )
				)
			],
			21 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = new Indices()->integer,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, $invalidIndex )
			],
			22 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = new Indices()->float,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, $invalidIndex )
			],
			23 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = new Indices()->string,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, $invalidIndex )
			]
		];
	}
}
