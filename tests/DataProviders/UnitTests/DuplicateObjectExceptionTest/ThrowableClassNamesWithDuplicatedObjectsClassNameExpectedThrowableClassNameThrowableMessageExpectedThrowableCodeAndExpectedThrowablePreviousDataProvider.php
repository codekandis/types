<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\DuplicateObjectExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\DuplicateObjectException;
use CodeKandis\Types\Tests\Fixtures\Values;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with duplicate object's class name, expected throwable class name, expected throwable message, expected throwable code and expected throwable previous.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithDuplicatedObjectsClassNameExpectedThrowableClassNameThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'duplicatedObjectsClassName' => $duplicatedObjectsClassName = Values::CLASS_NAME,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATED_OBJECTS_CLASS_NAME, $duplicatedObjectsClassName ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			1  => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'duplicatedObjectsClassName' => $duplicatedObjectsClassName = Values
					::createStdClassObject()
					::class,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATED_OBJECTS_CLASS_NAME, $duplicatedObjectsClassName ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			2  => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'duplicatedObjectsClassName' => $duplicatedObjectsClassName = Values
					::createInheritedStdClassObject()
					::class,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATED_OBJECTS_CLASS_NAME, $duplicatedObjectsClassName ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			3  => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'duplicatedObjectsClassName' => $duplicatedObjectsClassName = Values
					::createStandardObjectFixture()
					::class,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATED_OBJECTS_CLASS_NAME, $duplicatedObjectsClassName ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			4  => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'duplicatedObjectsClassName' => $duplicatedObjectsClassName = Values
					::createInheritedStandardObjectFixture()
					::class,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATED_OBJECTS_CLASS_NAME, $duplicatedObjectsClassName ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			5  => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'duplicatedObjectsClassName' => $duplicatedObjectsClassName = Values
					::createBaseObjectFixture()
					::class,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATED_OBJECTS_CLASS_NAME, $duplicatedObjectsClassName ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			6  => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'duplicatedObjectsClassName' => $duplicatedObjectsClassName = Values
					::createInheritedBaseObjectFixture()
					::class,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATED_OBJECTS_CLASS_NAME, $duplicatedObjectsClassName ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			7  => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'duplicatedObjectsClassName' => $duplicatedObjectsClassName = Values
					::createStringableObject()
					::class,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATED_OBJECTS_CLASS_NAME, $duplicatedObjectsClassName ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			8  => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'duplicatedObjectsClassName' => $duplicatedObjectsClassName = Values::CLASS_NAME,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATED_OBJECTS_CLASS_NAME, $duplicatedObjectsClassName ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			9  => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'duplicatedObjectsClassName' => $duplicatedObjectsClassName = Values
					::createStdClassObject()
					::class,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATED_OBJECTS_CLASS_NAME, $duplicatedObjectsClassName ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			10 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'duplicatedObjectsClassName' => $duplicatedObjectsClassName = Values
					::createInheritedStdClassObject()
					::class,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATED_OBJECTS_CLASS_NAME, $duplicatedObjectsClassName ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			11 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'duplicatedObjectsClassName' => $duplicatedObjectsClassName = Values
					::createStandardObjectFixture()
					::class,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATED_OBJECTS_CLASS_NAME, $duplicatedObjectsClassName ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			12 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'duplicatedObjectsClassName' => $duplicatedObjectsClassName = Values
					::createInheritedStandardObjectFixture()
					::class,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATED_OBJECTS_CLASS_NAME, $duplicatedObjectsClassName ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			13 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'duplicatedObjectsClassName' => $duplicatedObjectsClassName = Values
					::createBaseObjectFixture()
					::class,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATED_OBJECTS_CLASS_NAME, $duplicatedObjectsClassName ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			14 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'duplicatedObjectsClassName' => $duplicatedObjectsClassName = Values
					::createInheritedBaseObjectFixture()
					::class,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATED_OBJECTS_CLASS_NAME, $duplicatedObjectsClassName ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			15 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'duplicatedObjectsClassName' => $duplicatedObjectsClassName = Values
					::createStringableObject()
					::class,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATED_OBJECTS_CLASS_NAME, $duplicatedObjectsClassName ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			16 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'duplicatedObjectsClassName' => $duplicatedObjectsClassName = Values::CLASS_NAME,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATED_OBJECTS_CLASS_NAME, $duplicatedObjectsClassName ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			17 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'duplicatedObjectsClassName' => $duplicatedObjectsClassName = Values
					::createStdClassObject()
					::class,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATED_OBJECTS_CLASS_NAME, $duplicatedObjectsClassName ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			18 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'duplicatedObjectsClassName' => $duplicatedObjectsClassName = Values
					::createInheritedStdClassObject()
					::class,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATED_OBJECTS_CLASS_NAME, $duplicatedObjectsClassName ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			19 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'duplicatedObjectsClassName' => $duplicatedObjectsClassName = Values
					::createStandardObjectFixture()
					::class,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATED_OBJECTS_CLASS_NAME, $duplicatedObjectsClassName ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			20 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'duplicatedObjectsClassName' => $duplicatedObjectsClassName = Values
					::createInheritedStandardObjectFixture()
					::class,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATED_OBJECTS_CLASS_NAME, $duplicatedObjectsClassName ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			21 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'duplicatedObjectsClassName' => $duplicatedObjectsClassName = Values
					::createBaseObjectFixture()
					::class,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATED_OBJECTS_CLASS_NAME, $duplicatedObjectsClassName ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			22 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'duplicatedObjectsClassName' => $duplicatedObjectsClassName = Values
					::createInheritedBaseObjectFixture()
					::class,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATED_OBJECTS_CLASS_NAME, $duplicatedObjectsClassName ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			23 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'duplicatedObjectsClassName' => $duplicatedObjectsClassName = Values
					::createStringableObject()
					::class,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATED_OBJECTS_CLASS_NAME, $duplicatedObjectsClassName ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			24 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'duplicatedObjectsClassName' => $duplicatedObjectsClassName = Values::CLASS_NAME,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATED_OBJECTS_CLASS_NAME, $duplicatedObjectsClassName ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			25 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'duplicatedObjectsClassName' => $duplicatedObjectsClassName = Values
					::createStdClassObject()
					::class,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATED_OBJECTS_CLASS_NAME, $duplicatedObjectsClassName ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			26 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'duplicatedObjectsClassName' => $duplicatedObjectsClassName = Values
					::createInheritedStdClassObject()
					::class,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATED_OBJECTS_CLASS_NAME, $duplicatedObjectsClassName ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			27 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'duplicatedObjectsClassName' => $duplicatedObjectsClassName = Values
					::createStandardObjectFixture()
					::class,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATED_OBJECTS_CLASS_NAME, $duplicatedObjectsClassName ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			28 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'duplicatedObjectsClassName' => $duplicatedObjectsClassName = Values
					::createInheritedStandardObjectFixture()
					::class,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATED_OBJECTS_CLASS_NAME, $duplicatedObjectsClassName ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			29 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'duplicatedObjectsClassName' => $duplicatedObjectsClassName = Values
					::createBaseObjectFixture()
					::class,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATED_OBJECTS_CLASS_NAME, $duplicatedObjectsClassName ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			30 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'duplicatedObjectsClassName' => $duplicatedObjectsClassName = Values
					::createInheritedBaseObjectFixture()
					::class,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATED_OBJECTS_CLASS_NAME, $duplicatedObjectsClassName ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			31 => [
				'throwableClassName'         => $throwableClassName = DuplicateObjectException::class,
				'duplicatedObjectsClassName' => $duplicatedObjectsClassName = Values
					::createStringableObject()
					::class,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_DUPLICATED_OBJECTS_CLASS_NAME, $duplicatedObjectsClassName ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
		];
	}
}
