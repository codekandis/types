<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\ObjectNotFoundExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\ObjectNotFoundException;
use CodeKandis\Types\Tests\Fixtures\Values;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with nonexistent object's class name, expected throwable class name, expected throwable message, expected throwable code and expected throwable previous.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithNonExistentObjectsClassNameExpectedThrowableClassNameThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'throwableClassName'          => $throwableClassName = ObjectNotFoundException::class,
				'nonExistentObjectsClassName' => $nonExistentObjectsClassName = Values::CLASS_NAME,
				'code'                        => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                    => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName'  => $throwableClassName,
				'expectedThrowableMessage'    => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_OBJECTS_CLASS_NAME, $nonExistentObjectsClassName ),
				'expectedThrowableCode'       => $code,
				'expectedThrowablePrevious'   => $previous
			],
			1  => [
				'throwableClassName'          => $throwableClassName = ObjectNotFoundException::class,
				'nonExistentObjectsClassName' => $nonExistentObjectsClassName = Values
					::createStdClassObject()
					::class,
				'code'                        => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                    => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName'  => $throwableClassName,
				'expectedThrowableMessage'    => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_OBJECTS_CLASS_NAME, $nonExistentObjectsClassName ),
				'expectedThrowableCode'       => $code,
				'expectedThrowablePrevious'   => $previous
			],
			2  => [
				'throwableClassName'          => $throwableClassName = ObjectNotFoundException::class,
				'nonExistentObjectsClassName' => $nonExistentObjectsClassName = Values
					::createInheritedStdClassObject()
					::class,
				'code'                        => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                    => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName'  => $throwableClassName,
				'expectedThrowableMessage'    => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_OBJECTS_CLASS_NAME, $nonExistentObjectsClassName ),
				'expectedThrowableCode'       => $code,
				'expectedThrowablePrevious'   => $previous
			],
			3  => [
				'throwableClassName'          => $throwableClassName = ObjectNotFoundException::class,
				'nonExistentObjectsClassName' => $nonExistentObjectsClassName = Values
					::createStandardObjectFixture()
					::class,
				'code'                        => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                    => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName'  => $throwableClassName,
				'expectedThrowableMessage'    => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_OBJECTS_CLASS_NAME, $nonExistentObjectsClassName ),
				'expectedThrowableCode'       => $code,
				'expectedThrowablePrevious'   => $previous
			],
			4  => [
				'throwableClassName'          => $throwableClassName = ObjectNotFoundException::class,
				'nonExistentObjectsClassName' => $nonExistentObjectsClassName = Values
					::createInheritedStandardObjectFixture()
					::class,
				'code'                        => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                    => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName'  => $throwableClassName,
				'expectedThrowableMessage'    => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_OBJECTS_CLASS_NAME, $nonExistentObjectsClassName ),
				'expectedThrowableCode'       => $code,
				'expectedThrowablePrevious'   => $previous
			],
			5  => [
				'throwableClassName'          => $throwableClassName = ObjectNotFoundException::class,
				'nonExistentObjectsClassName' => $nonExistentObjectsClassName = Values
					::createBaseObjectFixture()
					::class,
				'code'                        => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                    => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName'  => $throwableClassName,
				'expectedThrowableMessage'    => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_OBJECTS_CLASS_NAME, $nonExistentObjectsClassName ),
				'expectedThrowableCode'       => $code,
				'expectedThrowablePrevious'   => $previous
			],
			6  => [
				'throwableClassName'          => $throwableClassName = ObjectNotFoundException::class,
				'nonExistentObjectsClassName' => $nonExistentObjectsClassName = Values
					::createInheritedBaseObjectFixture()
					::class,
				'code'                        => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                    => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName'  => $throwableClassName,
				'expectedThrowableMessage'    => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_OBJECTS_CLASS_NAME, $nonExistentObjectsClassName ),
				'expectedThrowableCode'       => $code,
				'expectedThrowablePrevious'   => $previous
			],
			7  => [
				'throwableClassName'          => $throwableClassName = ObjectNotFoundException::class,
				'nonExistentObjectsClassName' => $nonExistentObjectsClassName = Values
					::createStringableObject()
					::class,
				'code'                        => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                    => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName'  => $throwableClassName,
				'expectedThrowableMessage'    => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_OBJECTS_CLASS_NAME, $nonExistentObjectsClassName ),
				'expectedThrowableCode'       => $code,
				'expectedThrowablePrevious'   => $previous
			],
			8  => [
				'throwableClassName'          => $throwableClassName = ObjectNotFoundException::class,
				'nonExistentObjectsClassName' => $nonExistentObjectsClassName = Values::CLASS_NAME,
				'code'                        => $code = Values::THROWABLE_CODE,
				'previous'                    => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName'  => $throwableClassName,
				'expectedThrowableMessage'    => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_OBJECTS_CLASS_NAME, $nonExistentObjectsClassName ),
				'expectedThrowableCode'       => $code,
				'expectedThrowablePrevious'   => $previous
			],
			9  => [
				'throwableClassName'          => $throwableClassName = ObjectNotFoundException::class,
				'nonExistentObjectsClassName' => $nonExistentObjectsClassName = Values
					::createStdClassObject()
					::class,
				'code'                        => $code = Values::THROWABLE_CODE,
				'previous'                    => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName'  => $throwableClassName,
				'expectedThrowableMessage'    => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_OBJECTS_CLASS_NAME, $nonExistentObjectsClassName ),
				'expectedThrowableCode'       => $code,
				'expectedThrowablePrevious'   => $previous
			],
			10 => [
				'throwableClassName'          => $throwableClassName = ObjectNotFoundException::class,
				'nonExistentObjectsClassName' => $nonExistentObjectsClassName = Values
					::createInheritedStdClassObject()
					::class,
				'code'                        => $code = Values::THROWABLE_CODE,
				'previous'                    => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName'  => $throwableClassName,
				'expectedThrowableMessage'    => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_OBJECTS_CLASS_NAME, $nonExistentObjectsClassName ),
				'expectedThrowableCode'       => $code,
				'expectedThrowablePrevious'   => $previous
			],
			11 => [
				'throwableClassName'          => $throwableClassName = ObjectNotFoundException::class,
				'nonExistentObjectsClassName' => $nonExistentObjectsClassName = Values
					::createStandardObjectFixture()
					::class,
				'code'                        => $code = Values::THROWABLE_CODE,
				'previous'                    => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName'  => $throwableClassName,
				'expectedThrowableMessage'    => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_OBJECTS_CLASS_NAME, $nonExistentObjectsClassName ),
				'expectedThrowableCode'       => $code,
				'expectedThrowablePrevious'   => $previous
			],
			12 => [
				'throwableClassName'          => $throwableClassName = ObjectNotFoundException::class,
				'nonExistentObjectsClassName' => $nonExistentObjectsClassName = Values
					::createInheritedStandardObjectFixture()
					::class,
				'code'                        => $code = Values::THROWABLE_CODE,
				'previous'                    => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName'  => $throwableClassName,
				'expectedThrowableMessage'    => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_OBJECTS_CLASS_NAME, $nonExistentObjectsClassName ),
				'expectedThrowableCode'       => $code,
				'expectedThrowablePrevious'   => $previous
			],
			13 => [
				'throwableClassName'          => $throwableClassName = ObjectNotFoundException::class,
				'nonExistentObjectsClassName' => $nonExistentObjectsClassName = Values
					::createBaseObjectFixture()
					::class,
				'code'                        => $code = Values::THROWABLE_CODE,
				'previous'                    => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName'  => $throwableClassName,
				'expectedThrowableMessage'    => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_OBJECTS_CLASS_NAME, $nonExistentObjectsClassName ),
				'expectedThrowableCode'       => $code,
				'expectedThrowablePrevious'   => $previous
			],
			14 => [
				'throwableClassName'          => $throwableClassName = ObjectNotFoundException::class,
				'nonExistentObjectsClassName' => $nonExistentObjectsClassName = Values
					::createInheritedBaseObjectFixture()
					::class,
				'code'                        => $code = Values::THROWABLE_CODE,
				'previous'                    => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName'  => $throwableClassName,
				'expectedThrowableMessage'    => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_OBJECTS_CLASS_NAME, $nonExistentObjectsClassName ),
				'expectedThrowableCode'       => $code,
				'expectedThrowablePrevious'   => $previous
			],
			15 => [
				'throwableClassName'          => $throwableClassName = ObjectNotFoundException::class,
				'nonExistentObjectsClassName' => $nonExistentObjectsClassName = Values
					::createStringableObject()
					::class,
				'code'                        => $code = Values::THROWABLE_CODE,
				'previous'                    => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName'  => $throwableClassName,
				'expectedThrowableMessage'    => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_OBJECTS_CLASS_NAME, $nonExistentObjectsClassName ),
				'expectedThrowableCode'       => $code,
				'expectedThrowablePrevious'   => $previous
			],
			16 => [
				'throwableClassName'          => $throwableClassName = ObjectNotFoundException::class,
				'nonExistentObjectsClassName' => $nonExistentObjectsClassName = Values::CLASS_NAME,
				'code'                        => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                    => $previous = Values::createThrowable(),
				'expectedThrowableClassName'  => $throwableClassName,
				'expectedThrowableMessage'    => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_OBJECTS_CLASS_NAME, $nonExistentObjectsClassName ),
				'expectedThrowableCode'       => $code,
				'expectedThrowablePrevious'   => $previous
			],
			17 => [
				'throwableClassName'          => $throwableClassName = ObjectNotFoundException::class,
				'nonExistentObjectsClassName' => $nonExistentObjectsClassName = Values
					::createStdClassObject()
					::class,
				'code'                        => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                    => $previous = Values::createThrowable(),
				'expectedThrowableClassName'  => $throwableClassName,
				'expectedThrowableMessage'    => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_OBJECTS_CLASS_NAME, $nonExistentObjectsClassName ),
				'expectedThrowableCode'       => $code,
				'expectedThrowablePrevious'   => $previous
			],
			18 => [
				'throwableClassName'          => $throwableClassName = ObjectNotFoundException::class,
				'nonExistentObjectsClassName' => $nonExistentObjectsClassName = Values
					::createInheritedStdClassObject()
					::class,
				'code'                        => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                    => $previous = Values::createThrowable(),
				'expectedThrowableClassName'  => $throwableClassName,
				'expectedThrowableMessage'    => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_OBJECTS_CLASS_NAME, $nonExistentObjectsClassName ),
				'expectedThrowableCode'       => $code,
				'expectedThrowablePrevious'   => $previous
			],
			19 => [
				'throwableClassName'          => $throwableClassName = ObjectNotFoundException::class,
				'nonExistentObjectsClassName' => $nonExistentObjectsClassName = Values
					::createStandardObjectFixture()
					::class,
				'code'                        => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                    => $previous = Values::createThrowable(),
				'expectedThrowableClassName'  => $throwableClassName,
				'expectedThrowableMessage'    => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_OBJECTS_CLASS_NAME, $nonExistentObjectsClassName ),
				'expectedThrowableCode'       => $code,
				'expectedThrowablePrevious'   => $previous
			],
			20 => [
				'throwableClassName'          => $throwableClassName = ObjectNotFoundException::class,
				'nonExistentObjectsClassName' => $nonExistentObjectsClassName = Values
					::createInheritedStandardObjectFixture()
					::class,
				'code'                        => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                    => $previous = Values::createThrowable(),
				'expectedThrowableClassName'  => $throwableClassName,
				'expectedThrowableMessage'    => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_OBJECTS_CLASS_NAME, $nonExistentObjectsClassName ),
				'expectedThrowableCode'       => $code,
				'expectedThrowablePrevious'   => $previous
			],
			21 => [
				'throwableClassName'          => $throwableClassName = ObjectNotFoundException::class,
				'nonExistentObjectsClassName' => $nonExistentObjectsClassName = Values
					::createBaseObjectFixture()
					::class,
				'code'                        => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                    => $previous = Values::createThrowable(),
				'expectedThrowableClassName'  => $throwableClassName,
				'expectedThrowableMessage'    => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_OBJECTS_CLASS_NAME, $nonExistentObjectsClassName ),
				'expectedThrowableCode'       => $code,
				'expectedThrowablePrevious'   => $previous
			],
			22 => [
				'throwableClassName'          => $throwableClassName = ObjectNotFoundException::class,
				'nonExistentObjectsClassName' => $nonExistentObjectsClassName = Values
					::createInheritedBaseObjectFixture()
					::class,
				'code'                        => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                    => $previous = Values::createThrowable(),
				'expectedThrowableClassName'  => $throwableClassName,
				'expectedThrowableMessage'    => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_OBJECTS_CLASS_NAME, $nonExistentObjectsClassName ),
				'expectedThrowableCode'       => $code,
				'expectedThrowablePrevious'   => $previous
			],
			23 => [
				'throwableClassName'          => $throwableClassName = ObjectNotFoundException::class,
				'nonExistentObjectsClassName' => $nonExistentObjectsClassName = Values
					::createStringableObject()
					::class,
				'code'                        => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                    => $previous = Values::createThrowable(),
				'expectedThrowableClassName'  => $throwableClassName,
				'expectedThrowableMessage'    => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_OBJECTS_CLASS_NAME, $nonExistentObjectsClassName ),
				'expectedThrowableCode'       => $code,
				'expectedThrowablePrevious'   => $previous
			],
			24 => [
				'throwableClassName'          => $throwableClassName = ObjectNotFoundException::class,
				'nonExistentObjectsClassName' => $nonExistentObjectsClassName = Values::CLASS_NAME,
				'code'                        => $code = Values::THROWABLE_CODE,
				'previous'                    => $previous = Values::createThrowable(),
				'expectedThrowableClassName'  => $throwableClassName,
				'expectedThrowableMessage'    => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_OBJECTS_CLASS_NAME, $nonExistentObjectsClassName ),
				'expectedThrowableCode'       => $code,
				'expectedThrowablePrevious'   => $previous
			],
			25 => [
				'throwableClassName'          => $throwableClassName = ObjectNotFoundException::class,
				'nonExistentObjectsClassName' => $nonExistentObjectsClassName = Values
					::createStdClassObject()
					::class,
				'code'                        => $code = Values::THROWABLE_CODE,
				'previous'                    => $previous = Values::createThrowable(),
				'expectedThrowableClassName'  => $throwableClassName,
				'expectedThrowableMessage'    => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_OBJECTS_CLASS_NAME, $nonExistentObjectsClassName ),
				'expectedThrowableCode'       => $code,
				'expectedThrowablePrevious'   => $previous
			],
			26 => [
				'throwableClassName'          => $throwableClassName = ObjectNotFoundException::class,
				'nonExistentObjectsClassName' => $nonExistentObjectsClassName = Values
					::createInheritedStdClassObject()
					::class,
				'code'                        => $code = Values::THROWABLE_CODE,
				'previous'                    => $previous = Values::createThrowable(),
				'expectedThrowableClassName'  => $throwableClassName,
				'expectedThrowableMessage'    => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_OBJECTS_CLASS_NAME, $nonExistentObjectsClassName ),
				'expectedThrowableCode'       => $code,
				'expectedThrowablePrevious'   => $previous
			],
			27 => [
				'throwableClassName'          => $throwableClassName = ObjectNotFoundException::class,
				'nonExistentObjectsClassName' => $nonExistentObjectsClassName = Values
					::createStandardObjectFixture()
					::class,
				'code'                        => $code = Values::THROWABLE_CODE,
				'previous'                    => $previous = Values::createThrowable(),
				'expectedThrowableClassName'  => $throwableClassName,
				'expectedThrowableMessage'    => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_OBJECTS_CLASS_NAME, $nonExistentObjectsClassName ),
				'expectedThrowableCode'       => $code,
				'expectedThrowablePrevious'   => $previous
			],
			28 => [
				'throwableClassName'          => $throwableClassName = ObjectNotFoundException::class,
				'nonExistentObjectsClassName' => $nonExistentObjectsClassName = Values
					::createInheritedStandardObjectFixture()
					::class,
				'code'                        => $code = Values::THROWABLE_CODE,
				'previous'                    => $previous = Values::createThrowable(),
				'expectedThrowableClassName'  => $throwableClassName,
				'expectedThrowableMessage'    => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_OBJECTS_CLASS_NAME, $nonExistentObjectsClassName ),
				'expectedThrowableCode'       => $code,
				'expectedThrowablePrevious'   => $previous
			],
			29 => [
				'throwableClassName'          => $throwableClassName = ObjectNotFoundException::class,
				'nonExistentObjectsClassName' => $nonExistentObjectsClassName = Values
					::createBaseObjectFixture()
					::class,
				'code'                        => $code = Values::THROWABLE_CODE,
				'previous'                    => $previous = Values::createThrowable(),
				'expectedThrowableClassName'  => $throwableClassName,
				'expectedThrowableMessage'    => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_OBJECTS_CLASS_NAME, $nonExistentObjectsClassName ),
				'expectedThrowableCode'       => $code,
				'expectedThrowablePrevious'   => $previous
			],
			30 => [
				'throwableClassName'          => $throwableClassName = ObjectNotFoundException::class,
				'nonExistentObjectsClassName' => $nonExistentObjectsClassName = Values
					::createInheritedBaseObjectFixture()
					::class,
				'code'                        => $code = Values::THROWABLE_CODE,
				'previous'                    => $previous = Values::createThrowable(),
				'expectedThrowableClassName'  => $throwableClassName,
				'expectedThrowableMessage'    => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_OBJECTS_CLASS_NAME, $nonExistentObjectsClassName ),
				'expectedThrowableCode'       => $code,
				'expectedThrowablePrevious'   => $previous
			],
			31 => [
				'throwableClassName'          => $throwableClassName = ObjectNotFoundException::class,
				'nonExistentObjectsClassName' => $nonExistentObjectsClassName = Values
					::createStringableObject()
					::class,
				'code'                        => $code = Values::THROWABLE_CODE,
				'previous'                    => $previous = Values::createThrowable(),
				'expectedThrowableClassName'  => $throwableClassName,
				'expectedThrowableMessage'    => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_OBJECTS_CLASS_NAME, $nonExistentObjectsClassName ),
				'expectedThrowableCode'       => $code,
				'expectedThrowablePrevious'   => $previous
			],
		];
	}
}
