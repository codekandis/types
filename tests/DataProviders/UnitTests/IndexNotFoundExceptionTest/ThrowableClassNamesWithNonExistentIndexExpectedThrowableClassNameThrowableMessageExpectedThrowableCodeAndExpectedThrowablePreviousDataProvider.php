<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\IndexNotFoundExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\IndexNotFoundException;
use CodeKandis\Types\Tests\Fixtures\Indices;
use CodeKandis\Types\Tests\Fixtures\Types;
use CodeKandis\Types\Tests\Fixtures\Values;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with nonexistent index, expected throwable class name, expected throwable message, expected throwable code and expected throwable previous.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithNonExistentIndexExpectedThrowableClassNameThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => Indices::NULL,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX, Indices::MASKED_NULL ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			1  => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::createResource(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $nonExistentIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			2  => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => Indices::createClosedResource(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX, Indices::MASKED_CLOSED_RESOURCE ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			3  => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => Indices::ARRAY,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX, Indices::MASKED_ARRAY ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			4  => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::createStandardObject(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $nonExistentIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			5  => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::createInheritedStandardObject(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $nonExistentIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			6  => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => Indices::createStringableObject(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX, Indices::STRING ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			7  => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::BOOLEAN_FALSE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $nonExistentIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			8  => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::BOOLEAN_TRUE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $nonExistentIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			9  => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::INTEGER,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX, $nonExistentIndex ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			10 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::FLOAT,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX, $nonExistentIndex ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			11 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::STRING,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX, $nonExistentIndex ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			12 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => Indices::NULL,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX, Indices::MASKED_NULL ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			13 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::createResource(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $nonExistentIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			14 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => Indices::createClosedResource(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX, Indices::MASKED_CLOSED_RESOURCE ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			15 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => Indices::ARRAY,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX, Indices::MASKED_ARRAY ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			16 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::createStandardObject(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $nonExistentIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			17 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::createInheritedStandardObject(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $nonExistentIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			18 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => Indices::createStringableObject(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX, Indices::STRING ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			19 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::BOOLEAN_FALSE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $nonExistentIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			20 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::BOOLEAN_TRUE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $nonExistentIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			21 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::INTEGER,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX, $nonExistentIndex ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			22 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::FLOAT,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX, $nonExistentIndex ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			23 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::STRING,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX, $nonExistentIndex ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			24 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => Indices::NULL,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX, Indices::MASKED_NULL ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			25 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::createResource(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $nonExistentIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			26 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => Indices::createClosedResource(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX, Indices::MASKED_CLOSED_RESOURCE ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			27 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => Indices::ARRAY,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX, Indices::MASKED_ARRAY ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			28 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::createStandardObject(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $nonExistentIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			29 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::createInheritedStandardObject(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $nonExistentIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			30 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => Indices::createStringableObject(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX, Indices::STRING ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			31 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::BOOLEAN_FALSE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $nonExistentIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			32 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::BOOLEAN_TRUE,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $nonExistentIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			33 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::INTEGER,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX, $nonExistentIndex ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			34 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::FLOAT,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX, $nonExistentIndex ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			35 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::STRING,
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX, $nonExistentIndex ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			36 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => Indices::NULL,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX, Indices::MASKED_NULL ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			37 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::createResource(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX,
					Types::createMaskedTypeHintTypedResourceTypeByResource( $nonExistentIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			38 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => Indices::createClosedResource(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX, Indices::MASKED_CLOSED_RESOURCE ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			39 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => Indices::ARRAY,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX, Indices::MASKED_ARRAY ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			40 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::createStandardObject(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $nonExistentIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			41 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::createInheritedStandardObject(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX,
					Types::createMaskedTypeHintTypedObjectTypeByObject( $nonExistentIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			42 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => Indices::createStringableObject(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX, Indices::STRING ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			43 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::BOOLEAN_FALSE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $nonExistentIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			44 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::BOOLEAN_TRUE,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf(
					$throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX,
					Types::createMaskedTypeHintTypedBooleanTypeByValue( $nonExistentIndex )
				),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			45 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::INTEGER,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX, $nonExistentIndex ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			46 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::FLOAT,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX, $nonExistentIndex ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
			47 => [
				'throwableClassName'         => $throwableClassName = IndexNotFoundException::class,
				'nonExistentIndex'           => $nonExistentIndex = Indices::STRING,
				'code'                       => $code = Values::THROWABLE_CODE,
				'previous'                   => $previous = Values::createThrowable(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX, $nonExistentIndex ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previous
			],
		];
	}
}
