<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\InvalidTypeExceptionTest;

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
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => $invalidType = Types::INVALID_TYPE,
				'expectedTypes'              => Types::EXPECTED_SINGLE_GET_TYPE_TYPE,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					Types::createConcatinatedExpectedSingleGetTypeType()
				)
			],
			1 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => $invalidType = Types::INVALID_TYPE,
				'expectedTypes'              => Types::EXPECTED_SINGLE_MASKED_GET_TYPE_TYPE,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					Types::createConcatinatedExpectedSingleMaskedGetTypeType()
				)
			],
			2 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => $invalidType = Types::INVALID_TYPE,
				'expectedTypes'              => Types::EXPECTED_GET_TYPE_TYPES,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					Types::createConcatinatedExpectedGetTypeTypes()
				)
			],
			3 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => $invalidType = Types::INVALID_TYPE,
				'expectedTypes'              => Types::EXPECTED_MASKED_GET_TYPE_TYPES,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					Types::createConcatinatedExpectedMaskedGetTypeTypes()
				)
			],
			4 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => $invalidType = Types::INVALID_TYPE,
				'expectedTypes'              => Types::EXPECTED_SINGLE_TYPE_HINT_TYPE,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					Types::createConcatinatedExpectedSingleTypeHintType()
				)
			],
			5 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => $invalidType = Types::INVALID_TYPE,
				'expectedTypes'              => Types::EXPECTED_SINGLE_MASKED_TYPE_HINT_TYPE,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					Types::createConcatinatedExpectedSingleMaskedTypeHintType()
				)
			],
			6 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => $invalidType = Types::INVALID_TYPE,
				'expectedTypes'              => Types::EXPECTED_TYPE_HINT_TYPES,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					Types::createConcatinatedExpectedTypeHintTypes()
				)
			],
			7 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => $invalidType = Types::INVALID_TYPE,
				'expectedTypes'              => Types::EXPECTED_MASKED_TYPE_HINT_TYPES,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					Types::createConcatinatedExpectedMaskedTypeHintTypes()
				)
			]
		];
	}
}
