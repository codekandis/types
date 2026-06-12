<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use CodeKandis\Types\TypeDetermination\TypeDeterminationMode;
use CodeKandis\Types\TypeDetermination\TypeDeterminer;
use Stringable;
use function get_resource_type;

/**
 * Represents the trait of any class able to stringify a value.
 * It provides reusable value stringification behavior.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
trait StringifyValueTrait
{
	/**
	 * Stringifies a specified value.
	 * @param mixed $value The value to stringify.
	 * @return string The value as a readable string fragment.
	 */
	protected static function stringifyValue( mixed $value ): string
	{
		$valueType = new TypeDeterminer()->determine( $value, TypeDeterminationMode::GetType );

		$getTypeTypes        = new GetTypeTypes();
		$maskedTypeHintTypes = new MaskedTypeHintTypes();

		return match ( $valueType )
		{
			$getTypeTypes->null           => $maskedTypeHintTypes->null,
			$getTypeTypes->resource       => $maskedTypeHintTypes->createTypedResource(
				get_resource_type( $value )
			),
			$getTypeTypes->closedResource => $maskedTypeHintTypes->closedResource,
			$getTypeTypes->array          => $maskedTypeHintTypes->array,
			$getTypeTypes->object         => $value instanceof Stringable
				? $value->__toString()
				: $maskedTypeHintTypes->createTypedObject( $value::class ),
			$getTypeTypes->boolean        => $maskedTypeHintTypes->createTypedBoolean( $value ),
			default                       => (string) $value
		};
	}
}
