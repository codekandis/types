<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

/**
 * Represents the interface of any class able to be converted into its `array` representation.
 * The implementing class defines the shape and meaning of the returned array.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ArrayableInterface
{
	/**
	 * Converts the object into its `array` representation.
	 * @return array<array-key, mixed> The `array` representation.
	 */
	public function toArray(): array;
}
