<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\IndexNotFoundExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\IndexNotFoundException;
use CodeKandis\Types\Tests\Fixtures\Indices;
use CodeKandis\Types\Tests\Fixtures\Types;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with nonexistent index, expected throwable class name and expected throwable message.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithNonExistentIndexExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => new Indices()->null,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX, new Indices()->maskedNull )
			],
			1  => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = new Indices()->createResource(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX,
					new Types()->createMaskedTypeHintTypedResourceTypeByResource( $nonExistentIndex )
				)
			],
			2  => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => new Indices()->createClosedResource(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX, new Indices()->maskedClosedResource )
			],
			3  => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => new Indices()->array,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX, new Indices()->maskedArray )
			],
			4  => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = new Indices()->createStandardObject(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX,
					new Types()->createMaskedTypeHintTypedObjectTypeByObject( $nonExistentIndex )
				)
			],
			5  => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = new Indices()->createInheritedStandardObject(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX,
					new Types()->createMaskedTypeHintTypedObjectTypeByObject( $nonExistentIndex )
				)
			],
			6  => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => new Indices()->createStringableObject(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX, new Indices()->string )
			],
			7  => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = new Indices()->booleanFalse,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX,
					new Types()->createMaskedTypeHintTypedBooleanTypeByValue( $nonExistentIndex )
				)
			],
			8  => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = new Indices()->booleanTrue,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX,
					new Types()->createMaskedTypeHintTypedBooleanTypeByValue( $nonExistentIndex )
				)
			],
			9  => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = new Indices()->integer,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX, $nonExistentIndex )
			],
			10 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = new Indices()->float,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX, $nonExistentIndex )
			],
			11 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = new Indices()->string,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX, $nonExistentIndex )
			]
		];
	}
}
