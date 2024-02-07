<?php declare( strict_types = 1 );
namespace CodeKandis\Types\TypeDetermination;

/**
 * Represents an enumeration of type determination kinds how a determined type has to be returned.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
enum TypeDeterminationKind
{
	/**
	 * The returned type has to be identical to the returned value of PHP's function `gettype()`.
	 */
	case GetType;

	/**
	 * The returned type has to be identical to PHP's type hints.
	 */
	case TypeHint;
}
