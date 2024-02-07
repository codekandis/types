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
				'outOfRangeIndex'            => Indices::NULL,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_INDEX_OUT_OF_RANGE, Indices::MASKED_NULL )
			],
			1  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = Indices::createResource(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_INDEX_OUT_OF_RANGE,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $outOfRangeIndex )
				)
			],
			2  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => Indices::createClosedResource(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_INDEX_OUT_OF_RANGE, Indices::MASKED_CLOSED_RESOURCE )
			],
			3  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => Indices::ARRAY,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_INDEX_OUT_OF_RANGE, Indices::MASKED_ARRAY )
			],
			4  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = Indices::createStandardObject(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_INDEX_OUT_OF_RANGE,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $outOfRangeIndex )
				)
			],
			5  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = Indices::createInheritedStandardObject(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_INDEX_OUT_OF_RANGE,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $outOfRangeIndex )
				)
			],
			6  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => Indices::createStringableObject(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_INDEX_OUT_OF_RANGE, Indices::STRING )
			],
			7  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = Indices::BOOLEAN_FALSE,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_INDEX_OUT_OF_RANGE,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $outOfRangeIndex )
				)
			],
			8  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = Indices::BOOLEAN_TRUE,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_INDEX_OUT_OF_RANGE,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $outOfRangeIndex )
				)
			],
			9  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = Indices::INTEGER,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_INDEX_OUT_OF_RANGE, $outOfRangeIndex )
			],
			10 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = Indices::FLOAT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_INDEX_OUT_OF_RANGE, $outOfRangeIndex )
			],
			11 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'outOfRangeIndex'            => $outOfRangeIndex = Indices::STRING,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_INDEX_OUT_OF_RANGE, $outOfRangeIndex )
			]
		];
	}
}
