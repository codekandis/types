<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\Unit\InvalidTypeExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\InvalidTypeException;
use CodeKandis\Types\Tests\Fixtures\Types;
use CodeKandis\Types\Tests\Fixtures\Values;
use CodeKandis\Types\ValueIsEmptyException;
use Override;

/**
 * Represents a data provider providing throwable class names with valid type, empty expected types, expected throwable class name, expected throwable message, expected throwable code and expected throwable previous.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
final class ThrowableClassNamesWithValidTypeEmptyExpectedTypesExpectedThrowableClassNameThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider implements DataProviderInterface
{
	/**
	 * {@inheritdoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'throwableClassName'         => InvalidTypeException::class,
				'invalidType'                => Types::INVALID_TYPE,
				'emptyExpectedTypes'         => Types::EXPECTED_TYPES_WITH_NO_TYPES,
				'code'                       => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
				'previous'                   => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableClassName' => ValueIsEmptyException::class,
				'expectedThrowableMessage'   => ValueIsEmptyException::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			]
		];
	}
}
