<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

/**
 * Represents an enumeration of native types.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class NativeTypes
{
	/**
	 * Represents an unknown type.
	 */
	public const string UNKNOWN_TYPE = 'unknown type';

	/**
	 * Represents a null type.
	 */
	public const string NULL = 'NULL';

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
	public const string BOOLEAN = 'boolean';

	/**
	 * Represents an integer.
	 */
	public const string INTEGER = 'integer';

	/**
	 * Represents a float.
	 */
	public const string FLOAT = 'double';

	/**
	 * Represents a string.
	 */
	public const string STRING = 'string';
}
