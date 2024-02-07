<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\ObjectNotFoundExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\ObjectNotFoundException;
use CodeKandis\Types\Tests\Fixtures\Values;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with nonexistent object's class name, expected throwable class name and expected throwable message.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithNonExistentObjectsClassNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'throwableClassName'          => $throwableClassName = ObjectNotFoundException::class,
				'nonExistentObjectsClassName' => $nonExistentObjectsClassName = Values::CLASS_NAME,
				'expectedThrowableClassName'  => $throwableClassName,
				'expectedThrowableMessage'    => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_OBJECTS_CLASS_NAME, $nonExistentObjectsClassName )
			],
			1 => [
				'throwableClassName'          => $throwableClassName = ObjectNotFoundException::class,
				'nonExistentObjectsClassName' => $nonExistentObjectsClassName = Values
					::createStdClassObject()
					::class,
				'expectedThrowableClassName'  => $throwableClassName,
				'expectedThrowableMessage'    => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_OBJECTS_CLASS_NAME, $nonExistentObjectsClassName )
			],
			2 => [
				'throwableClassName'          => $throwableClassName = ObjectNotFoundException::class,
				'nonExistentObjectsClassName' => $nonExistentObjectsClassName = Values
					::createInheritedStdClassObject()
					::class,
				'expectedThrowableClassName'  => $throwableClassName,
				'expectedThrowableMessage'    => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_OBJECTS_CLASS_NAME, $nonExistentObjectsClassName )
			],
			3 => [
				'throwableClassName'          => $throwableClassName = ObjectNotFoundException::class,
				'nonExistentObjectsClassName' => $nonExistentObjectsClassName = Values
					::createStandardObjectFixture()
					::class,
				'expectedThrowableClassName'  => $throwableClassName,
				'expectedThrowableMessage'    => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_OBJECTS_CLASS_NAME, $nonExistentObjectsClassName )
			],
			4 => [
				'throwableClassName'          => $throwableClassName = ObjectNotFoundException::class,
				'nonExistentObjectsClassName' => $nonExistentObjectsClassName = Values
					::createInheritedStandardObjectFixture()
					::class,
				'expectedThrowableClassName'  => $throwableClassName,
				'expectedThrowableMessage'    => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_OBJECTS_CLASS_NAME, $nonExistentObjectsClassName )
			],
			5 => [
				'throwableClassName'          => $throwableClassName = ObjectNotFoundException::class,
				'nonExistentObjectsClassName' => $nonExistentObjectsClassName = Values
					::createBaseObjectFixture()
					::class,
				'expectedThrowableClassName'  => $throwableClassName,
				'expectedThrowableMessage'    => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_OBJECTS_CLASS_NAME, $nonExistentObjectsClassName )
			],
			6 => [
				'throwableClassName'          => $throwableClassName = ObjectNotFoundException::class,
				'nonExistentObjectsClassName' => $nonExistentObjectsClassName = Values
					::createInheritedBaseObjectFixture()
					::class,
				'expectedThrowableClassName'  => $throwableClassName,
				'expectedThrowableMessage'    => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_OBJECTS_CLASS_NAME, $nonExistentObjectsClassName )
			],
			7 => [
				'throwableClassName'          => $throwableClassName = ObjectNotFoundException::class,
				'nonExistentObjectsClassName' => $nonExistentObjectsClassName = Values
					::createStringableObject()
					::class,
				'expectedThrowableClassName'  => $throwableClassName,
				'expectedThrowableMessage'    => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_OBJECTS_CLASS_NAME, $nonExistentObjectsClassName )
			]
		];
	}
}
