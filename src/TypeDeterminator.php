<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use Override;
use function get_class;
use function gettype;

/**
 * Represents a type determinator.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class TypeDeterminator implements TypeDeterminatorInterface
{
	/**
	 * Determines the native type of a value.
	 * @param mixed $value The value to determine its native type.
	 * @return string The determined native type.
	 */
	private function determineNative( mixed $value ): string
	{
		return gettype( $value );
	}

	/**
	 * Determines the straight type of a value.
	 * @param mixed $value The value to determine its straight type.
	 * @return string The determined straight type.
	 */
	private function determineStraight( mixed $value ): string
	{
		$nativeType = $this->determineNative( $value );

		return match ( $nativeType )
		{
			NativeTypes::UNKNOWN_TYPE    => StraightTypes::UNKNOWN_TYPE,
			NativeTypes::NULL            => StraightTypes::NULL,
			NativeTypes::RESOURCE        => StraightTypes::RESOURCE,
			NativeTypes::CLOSED_RESOURCE => StraightTypes::CLOSED_RESOURCE,
			NativeTypes::ARRAY           => StraightTypes::ARRAY,
			NativeTypes::OBJECT          => get_class( $value ),
			NativeTypes::BOOLEAN         => StraightTypes::BOOLEAN,
			NativeTypes::INTEGER         => StraightTypes::INTEGER,
			NativeTypes::FLOAT           => StraightTypes::FLOAT,
			NativeTypes::STRING          => StraightTypes::STRING,
			default                      => $nativeType
		};
	}

	/**
	 * @inheritDoc
	 */
	#[Override]
	public function determine( mixed $value, bool $native = true ): string
	{
		return true === $native
			? $this->determineNative( $value )
			: $this->determineStraight( $value );
	}
}
