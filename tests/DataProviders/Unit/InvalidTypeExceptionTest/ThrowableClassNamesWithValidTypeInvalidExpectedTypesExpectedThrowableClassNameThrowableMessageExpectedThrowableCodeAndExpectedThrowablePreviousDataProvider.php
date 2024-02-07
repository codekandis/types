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
class ThrowableClassNamesWithValidTypeInvalidExpectedTypesExpectedThrowableClassNameThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider implements DataProviderInterface
{
	/**
	 * {@inheritdoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'throwableClassName'         => $expectedThrowableClassName = InvalidTypeException::class,
				'invalidType'                => Types::INVALID_TYPE,
				'invalidExpectedTypes'       => Types::EXPECTED_TYPES_WITH_SINGLE_INVALID_NULL_TYPE,
				'code'                       => $expectedThrowableCode = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $expectedPreviousThrowable = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $expectedThrowableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::GET_TYPE_TYPE_NULL,
					Types::TYPE_HINT_TYPE_STRING
				),
				'expectedThrowableCode'      => $expectedThrowableCode,
				'expectedPreviousThrowable'  => $expectedPreviousThrowable
			],
			1 => [
				'throwableClassName'         => $expectedThrowableClassName = InvalidTypeException::class,
				'invalidType'                => Types::INVALID_TYPE,
				'invalidExpectedTypes'       => Types::EXPECTED_TYPES_WITH_SINGLE_INVALID_BOOLEAN_TYPE,
				'code'                       => $expectedThrowableCode = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $expectedPreviousThrowable = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $expectedThrowableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::GET_TYPE_TYPE_BOOLEAN,
					Types::TYPE_HINT_TYPE_STRING
				),
				'expectedThrowableCode'      => $expectedThrowableCode,
				'expectedPreviousThrowable'  => $expectedPreviousThrowable
			],
			2 => [
				'throwableClassName'         => $expectedThrowableClassName = InvalidTypeException::class,
				'invalidType'                => Types::INVALID_TYPE,
				'invalidExpectedTypes'       => Types::EXPECTED_TYPES_WITH_SINGLE_INVALID_INTEGER_TYPE,
				'code'                       => $expectedThrowableCode = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $expectedPreviousThrowable = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $expectedThrowableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::GET_TYPE_TYPE_INTEGER,
					Types::TYPE_HINT_TYPE_STRING
				),
				'expectedThrowableCode'      => $expectedThrowableCode,
				'expectedPreviousThrowable'  => $expectedPreviousThrowable
			],
			3 => [
				'throwableClassName'         => $expectedThrowableClassName = InvalidTypeException::class,
				'invalidType'                => Types::INVALID_TYPE,
				'invalidExpectedTypes'       => Types::EXPECTED_TYPES_WITH_VALID_STRING_TYPE_AT_BEGINNING,
				'code'                       => $expectedThrowableCode = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $expectedPreviousThrowable = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $expectedThrowableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::GET_TYPE_TYPE_NULL,
					Types::TYPE_HINT_TYPE_STRING
				),
				'expectedThrowableCode'      => $expectedThrowableCode,
				'expectedPreviousThrowable'  => $expectedPreviousThrowable
			],
			4 => [
				'throwableClassName'         => $expectedThrowableClassName = InvalidTypeException::class,
				'invalidType'                => Types::INVALID_TYPE,
				'invalidExpectedTypes'       => Types::EXPECTED_TYPES_WITH_MULTIPLE_VALID_TYPE_STRINGS_BEFORE_INVALID_NULL_TYPE,
				'code'                       => $expectedThrowableCode = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $expectedPreviousThrowable = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $expectedThrowableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::GET_TYPE_TYPE_NULL,
					Types::TYPE_HINT_TYPE_STRING
				),
				'expectedThrowableCode'      => $expectedThrowableCode,
				'expectedPreviousThrowable'  => $expectedPreviousThrowable
			],
			5 => [
				'throwableClassName'         => $expectedThrowableClassName = InvalidTypeException::class,
				'invalidType'                => Types::INVALID_TYPE,
				'invalidExpectedTypes'       => Types::EXPECTED_TYPES_WITH_VALID_STRING_TYPE_IN_BETWEEN,
				'code'                       => $expectedThrowableCode = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $expectedPreviousThrowable = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $expectedThrowableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::GET_TYPE_TYPE_NULL,
					Types::TYPE_HINT_TYPE_STRING
				),
				'expectedThrowableCode'      => $expectedThrowableCode,
				'expectedPreviousThrowable'  => $expectedPreviousThrowable
			],
			6 => [
				'throwableClassName'         => $expectedThrowableClassName = InvalidTypeException::class,
				'invalidType'                => Types::INVALID_TYPE,
				'invalidExpectedTypes'       => Types::EXPECTED_TYPES_WITH_VALID_STRING_TYPE_AT_END,
				'code'                       => $expectedThrowableCode = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $expectedPreviousThrowable = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $expectedThrowableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::GET_TYPE_TYPE_NULL,
					Types::TYPE_HINT_TYPE_STRING
				),
				'expectedThrowableCode'      => $expectedThrowableCode,
				'expectedPreviousThrowable'  => $expectedPreviousThrowable
			],
			7 => [
				'throwableClassName'         => $expectedThrowableClassName = InvalidTypeException::class,
				'invalidType'                => Types::INVALID_TYPE,
				'invalidExpectedTypes'       => Types::EXPECTED_TYPES_WITH_MULTIPLE_INVALID_SCALAR_TYPES,
				'code'                       => $expectedThrowableCode = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $expectedPreviousThrowable = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $expectedThrowableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::GET_TYPE_TYPE_NULL,
					Types::TYPE_HINT_TYPE_STRING
				),
				'expectedThrowableCode'      => $expectedThrowableCode,
				'expectedPreviousThrowable'  => $expectedPreviousThrowable
			],
			8 => [
				'throwableClassName'         => $expectedThrowableClassName = InvalidTypeException::class,
				'invalidType'                => Types::INVALID_TYPE,
				'invalidExpectedTypes'       => Types::EXPECTED_TYPES_WITH_MULTIPLE_INVALID_NUMERIC_TYPES,
				'code'                       => $expectedThrowableCode = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $expectedPreviousThrowable = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $expectedThrowableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::GET_TYPE_TYPE_INTEGER,
					Types::TYPE_HINT_TYPE_STRING
				),
				'expectedThrowableCode'      => $expectedThrowableCode,
				'expectedPreviousThrowable'  => $expectedPreviousThrowable
			],
			9 => [
				'throwableClassName'         => $expectedThrowableClassName = InvalidTypeException::class,
				'invalidType'                => Types::INVALID_TYPE,
				'invalidExpectedTypes'       => Types::EXPECTED_TYPES_WITH_MULTIPLE_INVALID_ARRAY_AND_BOOLEAN_TYPES,
				'code'                       => $expectedThrowableCode = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $expectedPreviousThrowable = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $expectedThrowableClassName,
				'expectedThrowableMessage'   => sprintf(
					InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					Types::GET_TYPE_TYPE_ARRAY,
					Types::TYPE_HINT_TYPE_STRING
				),
				'expectedThrowableCode'      => $expectedThrowableCode,
				'expectedPreviousThrowable'  => $expectedPreviousThrowable
			]
		];
	}
}
