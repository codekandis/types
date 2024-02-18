<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use CodeKandis\Types\TypeDetermination\TypeDeterminationKind;
use CodeKandis\Types\TypeDetermination\TypeDeterminer;
use Stringable;
use function get_resource_type;
use function implode;
use function sprintf;

/**
 * Represents an exception if a value is invalid.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class InvalidValueException extends RuntimeException implements InvalidValueExceptionInterface
{
	/**
	 * @inheritDoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The value is invalid.';

	/**
	 * Represents the exception message if a value is invalid.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_INVALID_VALUE = 'The value `%s` is invalid.';

	/**
	 * Represents the exception message if a value is invalid and expected values are provided.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES = 'The value `%s` is invalid. `%s` expected.';

	/**
	 * Stringifies a specific invalid value.
	 * @param mixed $invalidValue The invalid value to stringify.
	 * @return string The stringified invalid value.
	 */
	private static function stringifyInvalidValue( mixed $invalidValue ): string
	{
		$invalidValueType = new TypeDeterminer()
			->determine( $invalidValue, TypeDeterminationKind::GetType );

		return match ( $invalidValueType )
		{
			GetTypeTypes::NULL            => MaskedTypeHintTypes::NULL,
			GetTypeTypes::RESOURCE        => MaskedTypeHintTypes::createTypedResource(
				get_resource_type( $invalidValue )
			),
			GetTypeTypes::CLOSED_RESOURCE => MaskedTypeHintTypes::CLOSED_RESOURCE,
			GetTypeTypes::ARRAY           => MaskedTypeHintTypes::ARRAY,
			GetTypeTypes::OBJECT          => $invalidValue instanceof Stringable
				? $invalidValue->__toString()
				: MaskedTypeHintTypes::createTypedObject( $invalidValue::class ),
			GetTypeTypes::BOOLEAN         => MaskedTypeHintTypes::createTypedBoolean( $invalidValue ),
			default                       => (string) $invalidValue
		};
	}

	/**
	 * Static constructor method.
	 * @param mixed $invalidValue The invalid value.
	 * @return static
	 */
	public static function with_invalidValue( mixed $invalidValue ): static
	{
		$stringfiedInvalidValue = static::stringifyInvalidValue( $invalidValue );

		return new static(
			sprintf( static::EXCEPTION_MESSAGE_INVALID_VALUE, $stringfiedInvalidValue )
		);
	}

	/**
	 * Static constructor method.
	 * @param mixed $invalidValue The invalid value.
	 * @param string[] $expectedValues The expected values.
	 * @return static
	 */
	public static function with_invalidValueAndExpectedValues( mixed $invalidValue, string ...$expectedValues ): static
	{
		$stringifiedInvalidValue   = static::stringifyInvalidValue( $invalidValue );
		$stringyfiedExpectedValues = implode( ' | ', $expectedValues );

		return new static(
			sprintf( static::EXCEPTION_MESSAGE_INVALID_VALUE_AND_EXPECTED_VALUES, $stringifiedInvalidValue, $stringyfiedExpectedValues )
		);
	}
}
