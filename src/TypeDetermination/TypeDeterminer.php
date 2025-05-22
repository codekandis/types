<?php declare( strict_types = 1 );
namespace CodeKandis\Types\TypeDetermination;

use CodeKandis\Types\BaseObject;
use CodeKandis\Types\GetTypeTypes;
use CodeKandis\Types\TypeHintTypes;
use CodeKandis\Types\TypesInterface;
use Override;
use function get_resource_type;
use function gettype;

/**
 * Represents a type determiner.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class TypeDeterminer extends BaseObject implements TypeDeterminerInterface
{
	/**
	 * Gets the `gettype()` types.
	 * @var TypesInterface
	 */
	private TypesInterface $getTypeTypes {
		get => $this->getTypeTypes ??= new GetTypeTypes();
	}

	/**
	 * Gets the type hint types.
	 * @var TypesInterface
	 */
	private TypesInterface $typeHintTypes {
		get => $this->typeHintTypes ??= new TypeHintTypes();
	}

	/**
	 * Determines the value type using PHP's `gettype()` format.
	 * @param mixed $value The value to inspect.
	 * @return string The `gettype()` type.
	 */
	private function determineGetTyped( mixed $value ): string
	{
		return gettype( $value );
	}

	/**
	 * Determines the value type using PHP's `gettype()` format with resource, object and boolean details.
	 * @param mixed $value The value to inspect.
	 * @return string The detailed `gettype()` type.
	 */
	private function determineGetTypedDetailed( mixed $value ): string
	{
		$getTypeType = gettype( $value );

		return match ( $getTypeType )
		{
			$this->getTypeTypes->resource => $this->getTypeTypes->createTypedResource(
				get_resource_type( $value )
			),
			$this->getTypeTypes->object   => $this->getTypeTypes->createTypedObject( $value::class ),
			$this->getTypeTypes->boolean  => $this->getTypeTypes->createTypedBoolean( $value ),
			default                       => $getTypeType
		};
	}

	/**
	 * Determines the value type using PHP type-hint names.
	 * @param mixed $value The value to inspect.
	 * @return string The type-hint name.
	 */
	private function determineTypeHinted( mixed $value ): string
	{
		$getTypeType = $this->determineGetTyped( $value );

		return match ( $getTypeType )
		{
			$this->getTypeTypes->unknownType    => $this->typeHintTypes->unknownType,
			$this->getTypeTypes->null           => $this->typeHintTypes->null,
			$this->getTypeTypes->resource       => $this->typeHintTypes->resource,
			$this->getTypeTypes->closedResource => $this->typeHintTypes->closedResource,
			$this->getTypeTypes->array          => $this->typeHintTypes->array,
			$this->getTypeTypes->object         => $this->typeHintTypes->object,
			$this->getTypeTypes->boolean        => $this->typeHintTypes->boolean,
			$this->getTypeTypes->integer        => $this->typeHintTypes->integer,
			$this->getTypeTypes->float          => $this->typeHintTypes->float,
			$this->getTypeTypes->string         => $this->typeHintTypes->string
		};
	}

	/**
	 * Determines the value type using PHP type-hint names with resource, object and boolean details.
	 * @param mixed $value The value to inspect.
	 * @return string The detailed type-hint name.
	 */
	private function determineTypeHintedDetailed( mixed $value ): string
	{
		$getTypeType = $this->determineGetTyped( $value );

		return match ( $getTypeType )
		{
			$this->getTypeTypes->unknownType    => $this->typeHintTypes->unknownType,
			$this->getTypeTypes->null           => $this->typeHintTypes->null,
			$this->getTypeTypes->resource       => $this->typeHintTypes->createTypedResource(
				get_resource_type( $value )
			),
			$this->getTypeTypes->closedResource => $this->typeHintTypes->closedResource,
			$this->getTypeTypes->array          => $this->typeHintTypes->array,
			$this->getTypeTypes->object         => $this->typeHintTypes->createTypedObject( $value::class ),
			$this->getTypeTypes->boolean        => $this->typeHintTypes->createTypedBoolean( $value ),
			$this->getTypeTypes->integer        => $this->typeHintTypes->integer,
			$this->getTypeTypes->float          => $this->typeHintTypes->float,
			$this->getTypeTypes->string         => $this->typeHintTypes->string
		};
	}

	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public function determine( mixed $value, TypeDeterminationKind $kind ): string
	{
		return match ( $kind )
		{
			TypeDeterminationKind::GetType          => $this->determineGetTyped( $value ),
			TypeDeterminationKind::GetTypeDetailed  => $this->determineGetTypedDetailed( $value ),
			TypeDeterminationKind::TypeHint         => $this->determineTypeHinted( $value ),
			TypeDeterminationKind::TypeHintDetailed => $this->determineTypeHintedDetailed( $value )
		};
	}
}
