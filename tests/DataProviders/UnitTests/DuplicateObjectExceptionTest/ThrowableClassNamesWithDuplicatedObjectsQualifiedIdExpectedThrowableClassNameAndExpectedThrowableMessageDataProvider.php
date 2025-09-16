<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\DuplicateObjectExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\DuplicateObjectException;
use CodeKandis\Types\Tests\Fixtures\Values;
use Override;
use function spl_object_id;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with duplicated object's qualified ID, expected throwable class name and expected throwable message.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithDuplicatedObjectsQualifiedIdExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'throwableClassName'           => $throwableClassName = DuplicateObjectException::class,
				'duplicatedObjectsQualifiedId' => $duplicatedObjectsQualifiedId = Values::QUALIFIED_OBJECT_ID,
				'expectedThrowableClassName'   => $throwableClassName,
				'expectedThrowableMessage'     => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATED_OBJECTS_QUALIFIED_ID, $duplicatedObjectsQualifiedId )
			],
			1 => [
				'throwableClassName'           => $throwableClassName = DuplicateObjectException::class,
				'duplicatedObjectsQualifiedId' => $duplicatedObjectsQualifiedId = spl_object_id(
					Values::createStdClassObject()
				),
				'expectedThrowableClassName'   => $throwableClassName,
				'expectedThrowableMessage'     => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATED_OBJECTS_QUALIFIED_ID, $duplicatedObjectsQualifiedId )
			],
			2 => [
				'throwableClassName'           => $throwableClassName = DuplicateObjectException::class,
				'duplicatedObjectsQualifiedId' => $duplicatedObjectsQualifiedId = spl_object_id(
					Values::createInheritedStdClassObject()
				),
				'expectedThrowableClassName'   => $throwableClassName,
				'expectedThrowableMessage'     => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATED_OBJECTS_QUALIFIED_ID, $duplicatedObjectsQualifiedId )
			],
			3 => [
				'throwableClassName'           => $throwableClassName = DuplicateObjectException::class,
				'duplicatedObjectsQualifiedId' => $duplicatedObjectsQualifiedId = spl_object_id(
					Values::createStandardObjectFixture()
				),
				'expectedThrowableClassName'   => $throwableClassName,
				'expectedThrowableMessage'     => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATED_OBJECTS_QUALIFIED_ID, $duplicatedObjectsQualifiedId )
			],
			4 => [
				'throwableClassName'           => $throwableClassName = DuplicateObjectException::class,
				'duplicatedObjectsQualifiedId' => $duplicatedObjectsQualifiedId = spl_object_id(
					Values::createInheritedStandardObjectFixture()
				),
				'expectedThrowableClassName'   => $throwableClassName,
				'expectedThrowableMessage'     => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATED_OBJECTS_QUALIFIED_ID, $duplicatedObjectsQualifiedId )
			],
			5 => [
				'throwableClassName'           => $throwableClassName = DuplicateObjectException::class,
				'duplicatedObjectsQualifiedId' => $duplicatedObjectsQualifiedId = spl_object_id(
					Values::createBaseObjectFixture()
				),
				'expectedThrowableClassName'   => $throwableClassName,
				'expectedThrowableMessage'     => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATED_OBJECTS_QUALIFIED_ID, $duplicatedObjectsQualifiedId )
			],
			6 => [
				'throwableClassName'           => $throwableClassName = DuplicateObjectException::class,
				'duplicatedObjectsQualifiedId' => $duplicatedObjectsQualifiedId = spl_object_id(
					Values::createInheritedBaseObjectFixture()
				),
				'expectedThrowableClassName'   => $throwableClassName,
				'expectedThrowableMessage'     => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATED_OBJECTS_QUALIFIED_ID, $duplicatedObjectsQualifiedId )
			],
			7 => [
				'throwableClassName'           => $throwableClassName = DuplicateObjectException::class,
				'duplicatedObjectsQualifiedId' => $duplicatedObjectsQualifiedId = spl_object_id(
					Values::createStringableObject()
				),
				'expectedThrowableClassName'   => $throwableClassName,
				'expectedThrowableMessage'     => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATED_OBJECTS_QUALIFIED_ID, $duplicatedObjectsQualifiedId )
			]
		];
	}
}
