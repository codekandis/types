<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

/**
 * Represents an enumeration of loose types.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class StraightTypes
{
	/**
	 * Represents an unknown type.
	 */
	public const string UNKNOWN_TYPE = 'unknown';

	/**
	 * Represents a null type.
	 */
	public const string NULL = 'null';

	/**
	 * Represents a resource.
	 */
	public const string RESOURCE = 'resource';

	/**
	 * Represents a closed resource.
	 */
	public const string CLOSED_RESOURCE = 'resource (closed)';

	/**
	 * Represents an array.
	 */
	public const string ARRAY = 'array';

	/**
	 * Represents an object.
	 */
	public const string OBJECT = 'object';

	/**
	 * Represents a boolean.
	 */
	public const string BOOLEAN = 'bool';

	/**
	 * Represents an integer.
	 */
	public const string INTEGER = 'int';

	/**
	 * Represents a float.
	 */
	public const string FLOAT = 'float';

	/**
	 * Represents a string.
	 */
	public const string STRING = 'string';
}
