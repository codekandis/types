<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\Fixtures;

use function implode;

/**
 * Represents an enumeration of offsets.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class Offsets
{
	/**
	 * Represents an `integer` offset.
	 * @var int
	 */
	public const int INTEGER = 42;

	/**
	 * Represents a set of only one expected single offset.
	 * @var array
	 */
	public const array EXPECTED_SINGLE_INDEX = [
		'<null>'
	];

	/**
	 * Represents a set of expected offsets.
	 * @var array
	 */
	public const array EXPECTED_OFFSETS = [
		'null',
		'false',
		'42',
		'42.42',
		'foobar'
	];

	/**
	 * Represents an expected minimum offset.
	 * @var string
	 */
	public const string EXPECTED_MIN_OFFSET = '24';

	/**
	 * Represents an expected maximum offset.
	 * @var string
	 */
	public const string EXPECTED_MAX_OFFSET = '42';

	/**
	 * Creates a `string` offset of an expected single offset.
	 * @return string The created `string` offset of an expected single offset.
	 */
	public static function createConcatinatedExpectedSingleOffset(): string
	{
		return implode( ' | ', static::EXPECTED_SINGLE_INDEX );
	}

	/**
	 * Creates a string of expected offsets.
	 * @return string The created string of expected offsets.
	 */
	public static function createConcatinatedExpectedOffsets(): string
	{
		return implode( ' | ', static::EXPECTED_OFFSETS );
	}
}
