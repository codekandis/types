<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use Override;

/**
 * Represents the interface of any class able to be converted into its recursively `array` representation.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
interface RecursivelyArrayableInterface extends ArrayableInterface
{
	/**
	 * Converts the object into its recursively `array` representation.
	 * @return array<array-key, mixed> The recursively `array` representation.
	 */
	#[Override]
	public function toArray(): array;
}
