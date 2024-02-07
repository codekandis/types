<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\ObjectNotFoundExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\ObjectNotFoundException;
use CodeKandis\Types\Tests\Fixtures\Values;
use Override;
use function spl_object_id;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with nonexistent object's qualified ID, expected throwable class name and expected throwable message.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithNonExistentObjectsQualifiedIdExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'throwableClassName'            => $throwableClassName = ObjectNotFoundException::class,
				'nonExistentObjectsQualifiedId' => $nonExistentObjectsQualifiedId = Values::QUALIFIED_OBJECT_ID,
				'expectedThrowableClassName'    => $throwableClassName,
				'expectedThrowableMessage'      => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_OBJECTS_QUALIFIED_ID, $nonExistentObjectsQualifiedId )
			],
			1 => [
				'throwableClassName'            => $throwableClassName = ObjectNotFoundException::class,
				'nonExistentObjectsQualifiedId' => $nonExistentObjectsQualifiedId = spl_object_id(
					Values::createStdClassObject()
				),
				'expectedThrowableClassName'    => $throwableClassName,
				'expectedThrowableMessage'      => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_OBJECTS_QUALIFIED_ID, $nonExistentObjectsQualifiedId )
			],
			2 => [
				'throwableClassName'            => $throwableClassName = ObjectNotFoundException::class,
				'nonExistentObjectsQualifiedId' => $nonExistentObjectsQualifiedId = spl_object_id(
					Values::createInheritedStdClassObject()
				),
				'expectedThrowableClassName'    => $throwableClassName,
				'expectedThrowableMessage'      => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_OBJECTS_QUALIFIED_ID, $nonExistentObjectsQualifiedId )
			],
			3 => [
				'throwableClassName'            => $throwableClassName = ObjectNotFoundException::class,
				'nonExistentObjectsQualifiedId' => $nonExistentObjectsQualifiedId = spl_object_id(
					Values::createStandardObjectFixture()
				),
				'expectedThrowableClassName'    => $throwableClassName,
				'expectedThrowableMessage'      => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_OBJECTS_QUALIFIED_ID, $nonExistentObjectsQualifiedId )
			],
			4 => [
				'throwableClassName'            => $throwableClassName = ObjectNotFoundException::class,
				'nonExistentObjectsQualifiedId' => $nonExistentObjectsQualifiedId = spl_object_id(
					Values::createInheritedStandardObjectFixture()
				),
				'expectedThrowableClassName'    => $throwableClassName,
				'expectedThrowableMessage'      => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_OBJECTS_QUALIFIED_ID, $nonExistentObjectsQualifiedId )
			],
			5 => [
				'throwableClassName'            => $throwableClassName = ObjectNotFoundException::class,
				'nonExistentObjectsQualifiedId' => $nonExistentObjectsQualifiedId = spl_object_id(
					Values::createBaseObjectFixture()
				),
				'expectedThrowableClassName'    => $throwableClassName,
				'expectedThrowableMessage'      => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_OBJECTS_QUALIFIED_ID, $nonExistentObjectsQualifiedId )
			],
			6 => [
				'throwableClassName'            => $throwableClassName = ObjectNotFoundException::class,
				'nonExistentObjectsQualifiedId' => $nonExistentObjectsQualifiedId = spl_object_id(
					Values::createInheritedBaseObjectFixture()
				),
				'expectedThrowableClassName'    => $throwableClassName,
				'expectedThrowableMessage'      => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_OBJECTS_QUALIFIED_ID, $nonExistentObjectsQualifiedId )
			],
			7 => [
				'throwableClassName'            => $throwableClassName = ObjectNotFoundException::class,
				'nonExistentObjectsQualifiedId' => $nonExistentObjectsQualifiedId = spl_object_id(
					Values::createStringableObject()
				),
				'expectedThrowableClassName'    => $throwableClassName,
				'expectedThrowableMessage'      => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_OBJECTS_QUALIFIED_ID, $nonExistentObjectsQualifiedId )
			]
		];
	}
}
