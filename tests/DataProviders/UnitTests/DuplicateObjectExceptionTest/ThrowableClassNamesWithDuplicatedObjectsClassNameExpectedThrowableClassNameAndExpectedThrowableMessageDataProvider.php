<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\DuplicateObjectExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\DuplicateObjectException;
use CodeKandis\Types\Tests\Fixtures\Values;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with duplicate object's class name, expected throwable class name and expected throwable message.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithDuplicatedObjectsClassNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'duplicatedObjectsClassName' => $duplicatedObjectsClassName = Values::CLASS_NAME,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATED_OBJECTS_CLASS_NAME, $duplicatedObjectsClassName )
			],
			1 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'duplicatedObjectsClassName' => $duplicatedObjectsClassName = Values
					::createStdClassObject()
					::class,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATED_OBJECTS_CLASS_NAME, $duplicatedObjectsClassName )
			],
			2 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'duplicatedObjectsClassName' => $duplicatedObjectsClassName = Values
					::createInheritedStdClassObject()
					::class,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATED_OBJECTS_CLASS_NAME, $duplicatedObjectsClassName )
			],
			3 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'duplicatedObjectsClassName' => $duplicatedObjectsClassName = Values
					::createStandardObjectFixture()
					::class,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATED_OBJECTS_CLASS_NAME, $duplicatedObjectsClassName )
			],
			4 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'duplicatedObjectsClassName' => $duplicatedObjectsClassName = Values
					::createInheritedStandardObjectFixture()
					::class,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATED_OBJECTS_CLASS_NAME, $duplicatedObjectsClassName )
			],
			5 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'duplicatedObjectsClassName' => $duplicatedObjectsClassName = Values
					::createBaseObjectFixture()
					::class,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATED_OBJECTS_CLASS_NAME, $duplicatedObjectsClassName )
			],
			6 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'duplicatedObjectsClassName' => $duplicatedObjectsClassName = Values
					::createInheritedBaseObjectFixture()
					::class,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATED_OBJECTS_CLASS_NAME, $duplicatedObjectsClassName )
			],
			7 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'duplicatedObjectsClassName' => $duplicatedObjectsClassName = Values
					::createStringableObject()
					::class,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATED_OBJECTS_CLASS_NAME, $duplicatedObjectsClassName )
			]
		];
	}
}
