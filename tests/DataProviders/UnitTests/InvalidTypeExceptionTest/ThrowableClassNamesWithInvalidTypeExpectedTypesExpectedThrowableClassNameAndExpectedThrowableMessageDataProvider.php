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
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => $invalidType = new Types()->invalidType,
				'expectedTypes'              => new Types()->expectedSingleGetTypeType,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					new Types()->createConcatinatedExpectedSingleGetTypeType()
				)
			],
			1 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => $invalidType = new Types()->invalidType,
				'expectedTypes'              => new Types()->expectedSingletMaskedGetTypeType,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					new Types()->createConcatinatedExpectedSingleMaskedGetTypeType()
				)
			],
			2 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => $invalidType = new Types()->invalidType,
				'expectedTypes'              => new Types()->expectedGetTypeTypes,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					new Types()->createConcatinatedExpectedGetTypeTypes()
				)
			],
			3 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => $invalidType = new Types()->invalidType,
				'expectedTypes'              => new Types()->expectedMaskedGetTypeTypes,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					new Types()->createConcatinatedExpectedMaskedGetTypeTypes()
				)
			],
			4 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => $invalidType = new Types()->invalidType,
				'expectedTypes'              => new Types()->expectedSingleTypeHintType,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					new Types()->createConcatinatedExpectedSingleTypeHintType()
				)
			],
			5 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => $invalidType = new Types()->invalidType,
				'expectedTypes'              => new Types()->expectedSingleMaskedTypeHintType,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					new Types()->createConcatinatedExpectedSingleMaskedTypeHintType()
				)
			],
			6 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => $invalidType = new Types()->invalidType,
				'expectedTypes'              => new Types()->expectedTypeHintTypes,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					new Types()->createConcatinatedExpectedTypeHintTypes()
				)
			],
			7 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => $invalidType = new Types()->invalidType,
				'expectedTypes'              => new Types()->expectedMaskedTypeHintTypes,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					new Types()->createConcatinatedExpectedMaskedTypeHintTypes()
				)
			]
		];
	}
}
