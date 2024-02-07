<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\InvalidIndexExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\IndexOutOfRangeException;
use CodeKandis\Types\InvalidIndexException;
use CodeKandis\Types\Tests\Fixtures\Indices;
use CodeKandis\Types\Tests\Fixtures\Types;
use CodeKandis\Types\Tests\Fixtures\Values;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with invalid index, expected throwable class name, expected throwable message, expected throwable code and expected throwable previous.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithInvalidIndexExpectedThrowableClassNameThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => Indices::NULL,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, Indices::MASKED_NULL ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			1  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::createResource(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $invalidIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			2  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => Indices::createClosedResource(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, Indices::MASKED_CLOSED_RESOURCE ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			3  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => Indices::ARRAY,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, Indices::MASKED_ARRAY ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			4  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::createStandardObject(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			5  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::createInheritedStandardObject(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			6  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => Indices::createStringableObject(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, Indices::STRING ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			7  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::BOOLEAN_FALSE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			8  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::BOOLEAN_TRUE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			9  => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::INTEGER,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, $invalidIndex ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			10 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::FLOAT,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, $invalidIndex ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			11 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::STRING,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, $invalidIndex ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			12 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => Indices::NULL,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, Indices::MASKED_NULL ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			13 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::createResource(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $invalidIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			14 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => Indices::createClosedResource(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, Indices::MASKED_CLOSED_RESOURCE ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			15 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => Indices::ARRAY,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, Indices::MASKED_ARRAY ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			16 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::createStandardObject(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			17 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::createInheritedStandardObject(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			18 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => Indices::createStringableObject(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, Indices::STRING ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			19 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::BOOLEAN_FALSE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			20 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::BOOLEAN_TRUE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			21 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::INTEGER,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, $invalidIndex ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			22 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::FLOAT,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, $invalidIndex ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			23 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::STRING,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, $invalidIndex ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			24 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => Indices::NULL,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, Indices::MASKED_NULL ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			25 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::createResource(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $invalidIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			26 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => Indices::createClosedResource(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, Indices::MASKED_CLOSED_RESOURCE ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			27 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => Indices::ARRAY,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, Indices::MASKED_ARRAY ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			28 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::createStandardObject(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			29 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::createInheritedStandardObject(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			30 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => Indices::createStringableObject(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, Indices::STRING ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			31 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::BOOLEAN_FALSE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			32 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::BOOLEAN_TRUE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			33 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::INTEGER,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, $invalidIndex ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			34 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::FLOAT,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, $invalidIndex ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			35 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::STRING,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, $invalidIndex ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			36 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => Indices::NULL,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, Indices::MASKED_NULL ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			37 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::createResource(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $invalidIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			38 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => Indices::createClosedResource(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, Indices::MASKED_CLOSED_RESOURCE ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			39 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => Indices::ARRAY,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, Indices::MASKED_ARRAY ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			40 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::createStandardObject(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			41 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::createInheritedStandardObject(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			42 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => Indices::createStringableObject(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, Indices::STRING ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			43 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::BOOLEAN_FALSE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			44 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::BOOLEAN_TRUE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			45 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::INTEGER,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, $invalidIndex ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			46 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::FLOAT,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, $invalidIndex ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			47 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::STRING,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, $invalidIndex ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			48 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => Indices::NULL,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, Indices::MASKED_NULL ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			49 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::createResource(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $invalidIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			50 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => Indices::createClosedResource(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, Indices::MASKED_CLOSED_RESOURCE ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			51 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => Indices::ARRAY,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, Indices::MASKED_ARRAY ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			52 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::createStandardObject(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			53 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::createInheritedStandardObject(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			54 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => Indices::createStringableObject(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, Indices::STRING ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			55 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::BOOLEAN_FALSE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			56 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::BOOLEAN_TRUE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			57 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::INTEGER,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, $invalidIndex ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			58 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::FLOAT,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, $invalidIndex ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			59 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::STRING,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, $invalidIndex ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			60 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => Indices::NULL,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, Indices::MASKED_NULL ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			61 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::createResource(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $invalidIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			62 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => Indices::createClosedResource(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, Indices::MASKED_CLOSED_RESOURCE ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			63 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => Indices::ARRAY,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, Indices::MASKED_ARRAY ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			64 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::createStandardObject(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			65 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::createInheritedStandardObject(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			66 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => Indices::createStringableObject(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, Indices::STRING ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			67 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::BOOLEAN_FALSE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			68 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::BOOLEAN_TRUE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			69 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::INTEGER,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, $invalidIndex ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			70 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::FLOAT,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, $invalidIndex ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			71 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::STRING,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, $invalidIndex ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			72 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => Indices::NULL,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, Indices::MASKED_NULL ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			73 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::createResource(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $invalidIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			74 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => Indices::createClosedResource(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, Indices::MASKED_CLOSED_RESOURCE ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			75 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => Indices::ARRAY,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, Indices::MASKED_ARRAY ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			76 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::createStandardObject(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			77 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::createInheritedStandardObject(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			78 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => Indices::createStringableObject(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, Indices::STRING ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			79 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::BOOLEAN_FALSE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			80 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::BOOLEAN_TRUE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			81 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::INTEGER,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, $invalidIndex ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			82 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::FLOAT,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, $invalidIndex ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			83 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'invalidIndex'               => $invalidIndex = Indices::STRING,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, $invalidIndex ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			84 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => Indices::NULL,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, Indices::MASKED_NULL ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			85 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::createResource(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $invalidIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			86 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => Indices::createClosedResource(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, Indices::MASKED_CLOSED_RESOURCE ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			87 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => Indices::ARRAY,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, Indices::MASKED_ARRAY ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			88 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::createStandardObject(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			89 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::createInheritedStandardObject(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $invalidIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			90 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => Indices::createStringableObject(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, Indices::STRING ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			91 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::BOOLEAN_FALSE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			92 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::BOOLEAN_TRUE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $invalidIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			93 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::INTEGER,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, $invalidIndex ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			94 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::FLOAT,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, $invalidIndex ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			95 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'invalidIndex'               => $invalidIndex = Indices::STRING,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, $invalidIndex ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
		];
	}
}
