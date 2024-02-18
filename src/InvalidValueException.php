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
	 * @inheritdoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The value is invalid.';

	/**
	 * Represents the exception message with the invalid value.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_INVALID_VALUE = 'The value `%1$s` is invalid.';

	/**
	 * Represents the exception message with the invalid value and expected values.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES = 'The value `%1$s` is invalid. `%2$s` expected.';

	/**
	 * Stringifies a specific value.
	 * @param mixed $value The value to stringify.
	 * @return string The stringified value.
	 */
	protected static function stringifyValue( mixed $value ): string
	{
		$valueType = new TypeDeterminer()
			->determine( $value, TypeDeterminationKind::GetType );

		return match ( $valueType )
		{
			GetTypeTypes::NULL            => MaskedTypeHintTypes::NULL,
			GetTypeTypes::RESOURCE        => MaskedTypeHintTypes::createTypedResource(
				get_resource_type( $value )
			),
			GetTypeTypes::CLOSED_RESOURCE => MaskedTypeHintTypes::CLOSED_RESOURCE,
			GetTypeTypes::ARRAY           => MaskedTypeHintTypes::ARRAY,
			GetTypeTypes::OBJECT          => $value instanceof Stringable
				? $value->__toString()
				: MaskedTypeHintTypes::createTypedObject( $value::class ),
			GetTypeTypes::BOOLEAN         => MaskedTypeHintTypes::createTypedBoolean( $value ),
			default                       => (string) $value
		};
	}

	/**
	 * Static constructor method.
	 * @param mixed $invalidValue The invalid value.
	 * @return static
	 */
	public static function withInvalidValue( mixed $invalidValue ): static
	{
		$stringfiedInvalidValue = static::stringifyValue( $invalidValue );

		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $stringfiedInvalidValue )
		);
	}

	/**
	 * Static constructor method.
	 * @param mixed $invalidValue The invalid value.
	 * @param string[] $expectedValues The expected values.
	 * @return static
	 */
	public static function withInvalidValueAndExpectedValues( mixed $invalidValue, string ...$expectedValues ): static
	{
		$stringifiedInvalidValue   = static::stringifyValue( $invalidValue );
		$stringyfiedExpectedValues = implode( ' | ', $expectedValues );

		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $stringifiedInvalidValue, $stringyfiedExpectedValues )
		);
	}
}
