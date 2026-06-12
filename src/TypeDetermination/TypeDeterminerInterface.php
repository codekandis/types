<?php declare( strict_types = 1 );
namespace CodeKandis\Types\TypeDetermination;

/**
 * Represents the interface of any type determiner.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
interface TypeDeterminerInterface
{
	/**
	 * Determines the type of a value.
	 * @param mixed $value The value to inspect.
	 * @param TypeDeterminationMode $mode The type determination mode.
	 * @return string The determined type.
	 */
	public function determine( mixed $value, TypeDeterminationMode $mode ): string;
}
