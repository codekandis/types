<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use CodeKandis\Types\TypeDetermination\TypeDeterminationKind;
use CodeKandis\Types\TypeDetermination\TypeDeterminer;
use LogicException;
use Stringable;
use function get_resource_type;
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
	 * Represents the exception message if a value is invalid.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_INVALID_VALUE = 'The value is invalid. `%1$s` expected, but `%2$s` given.';

	/**
	 * Static constructor method.
	 * @param mixed $invalidValue The invalid value.
	 * @param string[] $expectedValues The expected values.
	 * @return static
	 */
	public static function withInvalidValueAndExpectedValues( mixed $invalidValue, string ...$expectedValues ): static
	{
		$invalidValueType                 = ( new TypeDeterminer() )
			->determine( $invalidValue, TypeDeterminationKind::GetType );
		$invalidValueStringRepresentation = match ( $invalidValueType )
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

		return new static(
			sprintf(
				static::EXCEPTION_MESSAGE_INVALID_VALUE,
				implode( ' | ', $expectedValues ),
				$invalidValueStringRepresentation
			)
		);
	}
}
