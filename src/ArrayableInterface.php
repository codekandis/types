<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

/**
 * Represents the interface of any class able to be converted into its `array` representation.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ArrayableInterface
{
	/**
	 * Converts the object into its `array` representation.
	 * @return array The `array` representation.
	 */
	public function toArray(): array;
}
