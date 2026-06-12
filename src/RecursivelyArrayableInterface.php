<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use Override;

/**
 * Represents the interface of any class able to be converted into its recursive `array` representation.
 * The implementing class defines the shape and meaning of the returned recursive array.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
interface RecursivelyArrayableInterface extends ArrayableInterface
{
	/**
	 * Converts the object into its recursive `array` representation.
	 * @return array<array-key, mixed> The recursive `array` representation.
	 */
	#[Override]
	public function toArray(): array;
}
