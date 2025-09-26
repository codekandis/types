<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

/**
 * Represents the interface of any class able to be converted into its recursively `array` representation.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
interface RecursivelyArrayableInterface
{
	/**
	 * Converts the object into its recursively `array` representation.
	 * @return array The recursively `array` representation.
	 */
	public function toRecursiveArray(): array;
}
