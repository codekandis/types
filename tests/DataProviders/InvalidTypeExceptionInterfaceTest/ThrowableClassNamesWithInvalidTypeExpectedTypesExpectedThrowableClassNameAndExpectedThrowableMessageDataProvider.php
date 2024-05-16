<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\InvalidTypeExceptionInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\InvalidTypeException;
use CodeKandis\Types\Tests\Fixtures\Types;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with invalid type, expected types, expected throwable class name and expected throwable message.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithInvalidTypeExpectedTypesExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => $invalidType = Types::INVALID_TYPE,
				'expectedTypes'              => Types::EXPECTED_SINGLE_NATIVE_TYPE,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE,
					$invalidType,
					Types::createConcatinatedExpectedSingleNativeType()
				)
			],
			1 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => $invalidType = Types::INVALID_TYPE,
				'expectedTypes'              => Types::EXPECTED_NATIVE_TYPES,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE,
					$invalidType,
					Types::createConcatinatedExpectedNativeTypes()
				)
			],
			2 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => $invalidType = Types::INVALID_TYPE,
				'expectedTypes'              => Types::EXPECTED_SINGLE_STRAIGHT_TYPE,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE,
					$invalidType,
					Types::createConcatinatedExpectedSingleStraightType()
				)
			],
			3 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => $invalidType = Types::INVALID_TYPE,
				'expectedTypes'              => Types::EXPECTED_STRAIGHT_TYPES,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_INVALID_TYPE,
					$invalidType,
					Types::createConcatinatedExpectedStraightTypes()
				)
			]
		];
	}
}
