<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\IndexOutOfRangeExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\IndexOutOfRangeException;
use CodeKandis\Types\Tests\Fixtures\Indices;
use CodeKandis\Types\Tests\Fixtures\Types;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with out of range index, expected throwable class name and expected throwable message.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithOutOfRangeIndexExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => new Indices()->null,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX, new Indices()->maskedNull )
			],
			1  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = new Indices()->createResource(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					new Types()->createMaskedTypeHintTypedResourceTypeByResource( $outOfRangeIndex )
				)
			],
			2  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => new Indices()->createClosedResource(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX, new Indices()->maskedClosedResource )
			],
			3  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => new Indices()->array,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX, new Indices()->maskedArray )
			],
			4  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = new Indices()->createStandardObject(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					new Types()->createMaskedTypeHintTypedObjectTypeByObject( $outOfRangeIndex )
				)
			],
			5  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = new Indices()->createInheritedStandardObject(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					new Types()->createMaskedTypeHintTypedObjectTypeByObject( $outOfRangeIndex )
				)
			],
			6  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => new Indices()->createStringableObject(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX, new Indices()->string )
			],
			7  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = new Indices()->booleanFalse,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					new Types()->createMaskedTypeHintTypedBooleanTypeByValue( $outOfRangeIndex )
				)
			],
			8  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = new Indices()->booleanTrue,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX,
					new Types()->createMaskedTypeHintTypedBooleanTypeByValue( $outOfRangeIndex )
				)
			],
			9  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = new Indices()->integer,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX, $outOfRangeIndex )
			],
			10 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = new Indices()->float,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX, $outOfRangeIndex )
			],
			11 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = new Indices()->string,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_OUT_OF_RANGE_INDEX, $outOfRangeIndex )
			]
		];
	}
}
