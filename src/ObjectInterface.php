<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

/**
 * Represents the interface of any object.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ObjectInterface extends StringifyableInterface
{
	/**
	 * Gets the type representing the object.
	 * @return TypeInterface The type representing the object.
	 */
	public function getType(): TypeInterface;
}
