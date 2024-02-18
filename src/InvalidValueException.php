<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use LogicException;
use Override;
use Stringable;
use function gettype;
use function implode;
use function sprintf;

/**
 * Represents an exception if a value is invalid.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class InvalidValueException extends LogicException implements InvalidValueExceptionInterface
{
	/**
	 * Represents the exception message if a value to convert is not valid.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_INVALID_VALUE = 'The value `%s` is invalid.';

	/**
	 * Represents the exception message if a value to convert is not valid and expected values are provided.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES = 'The value `%s` is invalid. `%s` expected.';

	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function with_invalidValue( mixed $invalidValue ): static
	{
		$invalidValueType                 = gettype( $invalidValue );
		$invalidValueStringRepresentation = match ( $invalidValueType )
		{
			NativeTypes::NULL            => '<null>',
			NativeTypes::CLOSED_RESOURCE => '<closed resource>',
			NativeTypes::RESOURCE        => '<resource>',
			NativeTypes::ARRAY           => '<array>',
			NativeTypes::OBJECT          => $invalidValue instanceof Stringable
				? $invalidValue->__toString()
				: '<object>',
			NativeTypes::BOOLEAN         => false === $invalidValue
				? '<false>'
				: '<true>',
			default                      => (string) $invalidValue
		};

		return new static(
			sprintf( static::EXCEPTION_MESSAGE_INVALID_VALUE, $invalidValueStringRepresentation )
		);
	}

	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function with_invalidValueAndExpectedValues( mixed $invalidValue, string ...$expectedValues ): static
	{
		$invalidValueType                 = gettype( $invalidValue );
		$invalidValueStringRepresentation = match ( $invalidValueType )
		{
			NativeTypes::NULL            => '<null>',
			NativeTypes::CLOSED_RESOURCE => '<closed resource>',
			NativeTypes::RESOURCE        => '<resource>',
			NativeTypes::ARRAY           => '<array>',
			NativeTypes::OBJECT          => $invalidValue instanceof Stringable
				? $invalidValue->__toString()
				: '<object>',
			NativeTypes::BOOLEAN         => false === $invalidValue
				? '<false>'
				: '<true>',
			default                      => (string) $invalidValue
		};

		return new static(
			sprintf(
				static::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES,
				$invalidValueStringRepresentation,
				implode( ' | ', $expectedValues )
			)
		);
	}
}
