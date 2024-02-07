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
	 * @var string
	 */
	public const string UNKNOWN_TYPE = 'unknown';

	/**
	 * Represents a null type.
	 * @var string
	 */
	public const string NULL = 'null';

	/**
	 * Represents a resource.
	 * @var string
	 */
	public const string RESOURCE = 'resource';

	/**
	 * Represents a closed resource.
	 * @var string
	 */
	public const string CLOSED_RESOURCE = 'resource (closed)';

	/**
	 * Represents an array.
	 * @var string
	 */
	public const string ARRAY = 'array';

	/**
	 * Represents an object.
	 * @var string
	 */
	public const string OBJECT = 'object';

	/**
	 * Represents a boolean.
	 * @var string
	 */
	public const string BOOLEAN = 'bool';

	/**
	 * Represents an integer.
	 * @var string
	 */
	public const string INTEGER = 'int';

	/**
	 * Represents a float.
	 * @var string
	 */
	public const string FLOAT = 'float';

	/**
	 * Represents a string.
	 * @var string
	 */
	public const string STRING = 'string';
}
