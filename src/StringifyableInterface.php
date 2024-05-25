<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use Stringable;

/**
 * Represents the interface of any class able to return its `string` representation.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
interface StringifyableInterface extends Stringable
{
	/**
	 * Gets the `string` representation of the object.
	 * @return string The `string` representation of the object.
	 */
	public function __toString(): string;

	/**
	 * Gets the `string` representation of the object.
	 * @return string The `string` representation of the object.
	 */
	public function toString(): string;
}
