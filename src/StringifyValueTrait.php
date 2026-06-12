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

		$getTypeTypes           = new GetTypeTypes();
		$decoratedTypeHintTypes = new DecoratedTypeHintTypes();

		return match ( $valueType )
		{
			$getTypeTypes->null           => $decoratedTypeHintTypes->null,
			$getTypeTypes->resource       => $decoratedTypeHintTypes->createTypedResource(
				get_resource_type( $value )
			),
			$getTypeTypes->closedResource => $decoratedTypeHintTypes->closedResource,
			$getTypeTypes->array          => $decoratedTypeHintTypes->array,
			$getTypeTypes->object         => $value instanceof Stringable
				? $value->__toString()
				: $decoratedTypeHintTypes->createTypedObject( $value::class ),
			$getTypeTypes->boolean        => $decoratedTypeHintTypes->createTypedBoolean( $value ),
			default                       => (string) $value
		};
	}
}
