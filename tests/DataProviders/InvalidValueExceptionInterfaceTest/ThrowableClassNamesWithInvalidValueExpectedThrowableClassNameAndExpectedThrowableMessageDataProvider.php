<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\InvalidValueExceptionInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\InvalidValueException;
use CodeKandis\Types\Tests\Fixtures\Values;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with invalid value, expected throwable class name and expected throwable message.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithInvalidValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::NULL,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE, Values::MASKED_NULL )
			],
			1  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::createClosedResource(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE, Values::MASKED_CLOSED_RESOURCE )
			],
			2  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::createResource(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE, Values::MASKED_RESOURCE )
			],
			3  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::ARRAY,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE, Values::MASKED_ARRAY )
			],
			4  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::createStringableObject(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE, Values::STRING )
			],
			5  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::createObject(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE, Values::MASKED_OBJECT )
			],
			6  => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::BOOLEAN_FALSE,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE, Values::MASKED_BOOLEAN_FALSE )
			],
			10 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => Values::BOOLEAN_TRUE,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE, Values::MASKED_BOOLEAN_TRUE )
			],
			11 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::INTEGER,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE, $invalidValue )
			],
			12 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::FLOAT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE, $invalidValue )
			],
			13 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'invalidValue'               => $invalidValue = Values::STRING,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InvalidValueException::EXCEPTION_MESSAGE_INVALID_VALUE, $invalidValue )
			]
		];
	}
}
