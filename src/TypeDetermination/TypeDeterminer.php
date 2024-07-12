<?php declare( strict_types = 1 );
namespace CodeKandis\Types\TypeDetermination;

use CodeKandis\Types\BaseObject;
use CodeKandis\Types\GetTypeTypes;
use CodeKandis\Types\TypeHintTypes;
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
	 * Determines the native type of a value identical to the returned value of PHP's function `gettype()`.
	 * @param mixed $value The value to determine its native type.
	 * @return string The determined native type.
	 */
	private function determineGetTyped( mixed $value ): string
	{
		return gettype( $value );
	}

	/**
	 * Determines the native type of a value identical to the returned value of PHP's function `gettype()` with details.
	 * @param mixed $value The value to determine its native type.
	 * @return string The determined native type.
	 */
	private function determineGetTypedDetailed( mixed $value ): string
	{
		$getTypeType = gettype( $value );

		return match ( $getTypeType )
		{
			GetTypeTypes::RESOURCE => GetTypeTypes::createTypedResource(
				get_resource_type( $value )
			),
			GetTypeTypes::OBJECT   => GetTypeTypes::createTypedObject( $value::class ),
			GetTypeTypes::BOOLEAN  => GetTypeTypes::createTypedBoolean( $value ),
			default                => $getTypeType
		};
	}

	/**
	 * Determines the straight type of a value identical to PHP's type hints.
	 * @param mixed $value The value to determine its straight type.
	 * @return string The determined straight type.
	 */
	private function determineTypeHinted( mixed $value ): string
	{
		$getTypeType = $this->determineGetTyped( $value );

		return match ( $getTypeType )
		{
			GetTypeTypes::UNKNOWN_TYPE    => TypeHintTypes::UNKNOWN_TYPE,
			GetTypeTypes::NULL            => TypeHintTypes::NULL,
			GetTypeTypes::RESOURCE        => TypeHintTypes::RESOURCE,
			GetTypeTypes::CLOSED_RESOURCE => TypeHintTypes::CLOSED_RESOURCE,
			GetTypeTypes::ARRAY           => TypeHintTypes::ARRAY,
			GetTypeTypes::OBJECT          => TypeHintTypes::OBJECT,
			GetTypeTypes::BOOLEAN         => TypeHintTypes::BOOLEAN,
			GetTypeTypes::INTEGER         => TypeHintTypes::INTEGER,
			GetTypeTypes::FLOAT           => TypeHintTypes::FLOAT,
			GetTypeTypes::STRING          => TypeHintTypes::STRING
		};
	}

	/**
	 * Determines the straight type of a value identical to PHP's type hints with details.
	 * @param mixed $value The value to determine its straight type.
	 * @return string The determined straight type.
	 */
	private function determineTypeHintedDetailed( mixed $value ): string
	{
		$getTypeType = $this->determineGetTyped( $value );

		return match ( $getTypeType )
		{
			GetTypeTypes::UNKNOWN_TYPE    => TypeHintTypes::UNKNOWN_TYPE,
			GetTypeTypes::NULL            => TypeHintTypes::NULL,
			GetTypeTypes::RESOURCE        => TypeHintTypes::createTypedResource(
				get_resource_type( $value )
			),
			GetTypeTypes::CLOSED_RESOURCE => TypeHintTypes::CLOSED_RESOURCE,
			GetTypeTypes::ARRAY           => TypeHintTypes::ARRAY,
			GetTypeTypes::OBJECT          => TypeHintTypes::createTypedObject( $value::class ),
			GetTypeTypes::BOOLEAN         => TypeHintTypes::createTypedBoolean( $value ),
			GetTypeTypes::INTEGER         => TypeHintTypes::INTEGER,
			GetTypeTypes::FLOAT           => TypeHintTypes::FLOAT,
			GetTypeTypes::STRING          => TypeHintTypes::STRING
		};
	}

	/**
	 * @inheritdoc
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
