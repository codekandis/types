<?php declare( strict_types = 1 );
namespace CodeKandis\Types\TypeDetermination;

/**
 * Represents an enumeration of type determination modes.
 * Each mode defines the type-name format and whether boolean values, objects and resources include details.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
enum TypeDeterminationMode
{
	/**
	 * The returned type has to be identical to the returned value of PHP's function `gettype()`.
	 * Boolean, object and resource values are returned without additional details.
	 */
	case GetType;

	/**
	 * The returned type has to be identical to the returned value of PHP's function `gettype()` with specific detail.
	 * Boolean, object and resource values include their value, class name or resource type.
	 */
	case GetTypeDetailed;

	/**
	 * The returned type has to be identical to PHP's type hints.
	 * Boolean, object and resource values are returned without additional details.
	 */
	case TypeHint;

	/**
	 * The returned type has to be identical to PHP's type hints with specific detail.
	 * Boolean, object and resource values include their value, class name or resource type.
	 */
	case TypeHintDetailed;
}
