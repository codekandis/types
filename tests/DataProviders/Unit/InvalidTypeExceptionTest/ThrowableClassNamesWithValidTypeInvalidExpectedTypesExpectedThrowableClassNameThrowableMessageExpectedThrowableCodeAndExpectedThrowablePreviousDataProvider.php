<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\Unit\InvalidTypeExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\InvalidTypeException;
use CodeKandis\Types\Tests\Fixtures\Types;
use CodeKandis\Types\Tests\Fixtures\Values;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with valid type, invalid expected types, expected throwable class name, expected throwable message, expected throwable code and expected throwable previous.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
final class ThrowableClassNamesWithValidTypeInvalidExpectedTypesExpectedThrowableClassNameThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider implements DataProviderInterface
{
	/**
	 * {@inheritdoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => Types::INVALID_TYPE,
				'invalidExpectedTypes'       => Types::EXPECTED_TYPES_WITH_SINGLE_INVALID_NULL_TYPE,
				'code'                       => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::GET_TYPE_TYPE_NULL,
					Types::TYPE_HINT_TYPE_STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			1 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => Types::INVALID_TYPE,
				'invalidExpectedTypes'       => Types::EXPECTED_TYPES_WITH_SINGLE_INVALID_BOOLEAN_TYPE,
				'code'                       => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::GET_TYPE_TYPE_BOOLEAN,
					Types::TYPE_HINT_TYPE_STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			2 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => Types::INVALID_TYPE,
				'invalidExpectedTypes'       => Types::EXPECTED_TYPES_WITH_SINGLE_INVALID_INTEGER_TYPE,
				'code'                       => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::GET_TYPE_TYPE_INTEGER,
					Types::TYPE_HINT_TYPE_STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			3 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => Types::INVALID_TYPE,
				'invalidExpectedTypes'       => Types::EXPECTED_TYPES_WITH_VALID_STRING_TYPE_AT_BEGINNING,
				'code'                       => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::GET_TYPE_TYPE_NULL,
					Types::TYPE_HINT_TYPE_STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			4 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => Types::INVALID_TYPE,
				'invalidExpectedTypes'       => Types::EXPECTED_TYPES_WITH_MULTIPLE_VALID_TYPE_STRINGS_BEFORE_INVALID_NULL_TYPE,
				'code'                       => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::GET_TYPE_TYPE_NULL,
					Types::TYPE_HINT_TYPE_STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			5 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => Types::INVALID_TYPE,
				'invalidExpectedTypes'       => Types::EXPECTED_TYPES_WITH_VALID_STRING_TYPE_IN_BETWEEN,
				'code'                       => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::GET_TYPE_TYPE_NULL,
					Types::TYPE_HINT_TYPE_STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			6 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => Types::INVALID_TYPE,
				'invalidExpectedTypes'       => Types::EXPECTED_TYPES_WITH_VALID_STRING_TYPE_AT_END,
				'code'                       => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::GET_TYPE_TYPE_NULL,
					Types::TYPE_HINT_TYPE_STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			7 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => Types::INVALID_TYPE,
				'invalidExpectedTypes'       => Types::EXPECTED_TYPES_WITH_MULTIPLE_INVALID_SCALAR_TYPES,
				'code'                       => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::GET_TYPE_TYPE_NULL,
					Types::TYPE_HINT_TYPE_STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			8 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => Types::INVALID_TYPE,
				'invalidExpectedTypes'       => Types::EXPECTED_TYPES_WITH_MULTIPLE_INVALID_NUMERIC_TYPES,
				'code'                       => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::GET_TYPE_TYPE_INTEGER,
					Types::TYPE_HINT_TYPE_STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			9 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => Types::INVALID_TYPE,
				'invalidExpectedTypes'       => Types::EXPECTED_TYPES_WITH_MULTIPLE_INVALID_ARRAY_AND_BOOLEAN_TYPES,
				'code'                       => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::GET_TYPE_TYPE_ARRAY,
					Types::TYPE_HINT_TYPE_STRING
				),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			]
		];
	}
}
