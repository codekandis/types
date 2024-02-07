<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\InvalidTypeExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\InvalidTypeException;
use CodeKandis\Types\Tests\Fixtures\Types;
use CodeKandis\Types\Tests\Fixtures\Values;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with invalid type, expected types, expected throwable class name, expected throwable message, expected throwable code and expected throwable previous.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithInvalidTypeExpectedTypesExpectedThrowableClassNameThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => $invalidType = Types::INVALID_TYPE,
				'expectedTypes'              => Types::EXPECTED_SINGLE_GET_TYPE_TYPE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					Types::createConcatinatedExpectedSingleGetTypeType()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			1  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => $invalidType = Types::INVALID_TYPE,
				'expectedTypes'              => Types::EXPECTED_SINGLE_MASKED_GET_TYPE_TYPE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					Types::createConcatinatedExpectedSingleMaskedGetTypeType()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			2  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => $invalidType = Types::INVALID_TYPE,
				'expectedTypes'              => Types::EXPECTED_GET_TYPE_TYPES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					Types::createConcatinatedExpectedGetTypeTypes()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			3  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => $invalidType = Types::INVALID_TYPE,
				'expectedTypes'              => Types::EXPECTED_MASKED_GET_TYPE_TYPES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					Types::createConcatinatedExpectedMaskedGetTypeTypes()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			4  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => $invalidType = Types::INVALID_TYPE,
				'expectedTypes'              => Types::EXPECTED_SINGLE_TYPE_HINT_TYPE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					Types::createConcatinatedExpectedSingleTypeHintType()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			5  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => $invalidType = Types::INVALID_TYPE,
				'expectedTypes'              => Types::EXPECTED_SINGLE_MASKED_TYPE_HINT_TYPE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					Types::createConcatinatedExpectedSingleMaskedTypeHintType()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			6  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => $invalidType = Types::INVALID_TYPE,
				'expectedTypes'              => Types::EXPECTED_TYPE_HINT_TYPES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					Types::createConcatinatedExpectedTypeHintTypes()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			7  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => $invalidType = Types::INVALID_TYPE,
				'expectedTypes'              => Types::EXPECTED_MASKED_TYPE_HINT_TYPES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					Types::createConcatinatedExpectedMaskedTypeHintTypes()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			8  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => $invalidType = Types::INVALID_TYPE,
				'expectedTypes'              => Types::EXPECTED_SINGLE_GET_TYPE_TYPE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					Types::createConcatinatedExpectedSingleGetTypeType()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			9  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => $invalidType = Types::INVALID_TYPE,
				'expectedTypes'              => Types::EXPECTED_SINGLE_MASKED_GET_TYPE_TYPE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					Types::createConcatinatedExpectedSingleMaskedGetTypeType()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			10 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => $invalidType = Types::INVALID_TYPE,
				'expectedTypes'              => Types::EXPECTED_GET_TYPE_TYPES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					Types::createConcatinatedExpectedGetTypeTypes()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			11 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => $invalidType = Types::INVALID_TYPE,
				'expectedTypes'              => Types::EXPECTED_MASKED_GET_TYPE_TYPES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					Types::createConcatinatedExpectedMaskedGetTypeTypes()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			12 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => $invalidType = Types::INVALID_TYPE,
				'expectedTypes'              => Types::EXPECTED_SINGLE_TYPE_HINT_TYPE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					Types::createConcatinatedExpectedSingleTypeHintType()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			13 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => $invalidType = Types::INVALID_TYPE,
				'expectedTypes'              => Types::EXPECTED_SINGLE_MASKED_TYPE_HINT_TYPE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					Types::createConcatinatedExpectedSingleMaskedTypeHintType()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			14 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => $invalidType = Types::INVALID_TYPE,
				'expectedTypes'              => Types::EXPECTED_TYPE_HINT_TYPES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					Types::createConcatinatedExpectedTypeHintTypes()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			15 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => $invalidType = Types::INVALID_TYPE,
				'expectedTypes'              => Types::EXPECTED_MASKED_TYPE_HINT_TYPES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					Types::createConcatinatedExpectedMaskedTypeHintTypes()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			16 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => $invalidType = Types::INVALID_TYPE,
				'expectedTypes'              => Types::EXPECTED_SINGLE_GET_TYPE_TYPE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					Types::createConcatinatedExpectedSingleGetTypeType()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			17 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => $invalidType = Types::INVALID_TYPE,
				'expectedTypes'              => Types::EXPECTED_SINGLE_MASKED_GET_TYPE_TYPE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					Types::createConcatinatedExpectedSingleMaskedGetTypeType()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			18 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => $invalidType = Types::INVALID_TYPE,
				'expectedTypes'              => Types::EXPECTED_GET_TYPE_TYPES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					Types::createConcatinatedExpectedGetTypeTypes()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			19 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => $invalidType = Types::INVALID_TYPE,
				'expectedTypes'              => Types::EXPECTED_MASKED_GET_TYPE_TYPES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					Types::createConcatinatedExpectedMaskedGetTypeTypes()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			20 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => $invalidType = Types::INVALID_TYPE,
				'expectedTypes'              => Types::EXPECTED_SINGLE_TYPE_HINT_TYPE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					Types::createConcatinatedExpectedSingleTypeHintType()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			21 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => $invalidType = Types::INVALID_TYPE,
				'expectedTypes'              => Types::EXPECTED_SINGLE_MASKED_TYPE_HINT_TYPE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					Types::createConcatinatedExpectedSingleMaskedTypeHintType()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			22 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => $invalidType = Types::INVALID_TYPE,
				'expectedTypes'              => Types::EXPECTED_TYPE_HINT_TYPES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					Types::createConcatinatedExpectedTypeHintTypes()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			23 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => $invalidType = Types::INVALID_TYPE,
				'expectedTypes'              => Types::EXPECTED_MASKED_TYPE_HINT_TYPES,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					Types::createConcatinatedExpectedMaskedTypeHintTypes()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			24 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => $invalidType = Types::INVALID_TYPE,
				'expectedTypes'              => Types::EXPECTED_SINGLE_GET_TYPE_TYPE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					Types::createConcatinatedExpectedSingleGetTypeType()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			25 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => $invalidType = Types::INVALID_TYPE,
				'expectedTypes'              => Types::EXPECTED_SINGLE_MASKED_GET_TYPE_TYPE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					Types::createConcatinatedExpectedSingleMaskedGetTypeType()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			26 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => $invalidType = Types::INVALID_TYPE,
				'expectedTypes'              => Types::EXPECTED_GET_TYPE_TYPES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					Types::createConcatinatedExpectedGetTypeTypes()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			27 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => $invalidType = Types::INVALID_TYPE,
				'expectedTypes'              => Types::EXPECTED_MASKED_GET_TYPE_TYPES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					Types::createConcatinatedExpectedMaskedGetTypeTypes()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			28 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => $invalidType = Types::INVALID_TYPE,
				'expectedTypes'              => Types::EXPECTED_SINGLE_TYPE_HINT_TYPE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					Types::createConcatinatedExpectedSingleTypeHintType()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			29 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => $invalidType = Types::INVALID_TYPE,
				'expectedTypes'              => Types::EXPECTED_SINGLE_MASKED_TYPE_HINT_TYPE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					Types::createConcatinatedExpectedSingleMaskedTypeHintType()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			30 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => $invalidType = Types::INVALID_TYPE,
				'expectedTypes'              => Types::EXPECTED_TYPE_HINT_TYPES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					Types::createConcatinatedExpectedTypeHintTypes()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			31 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'invalidType'                => $invalidType = Types::INVALID_TYPE,
				'expectedTypes'              => Types::EXPECTED_MASKED_TYPE_HINT_TYPES,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_TYPE_AND_EXPECTED_TYPES,
					$invalidType,
					Types::createConcatinatedExpectedMaskedTypeHintTypes()
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
		];
	}
}
