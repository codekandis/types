<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

/**
 * Represents the interface of any type determinator.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
interface TypeDeterminatorInterface
{
	/**
	 * Determines the type of a value.
	 * @param mixed $value The value to determine its type.
	 * @param bool $native True if the determined type has to be native, false if the determined type has to be straight.
	 * @return string The determined type.
	 */
	public function determine( mixed $value, bool $native ): string;
}
