<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\Fixtures;

use function implode;

/**
 * Represents an enumeration of offsets.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class Offsets
{
	/**
	 * Represents an `integer` offset.
	 * @var int
	 */
	public int $integer {
		get => 42;
	}

	/**
	 * Represents a set of only one expected single offset.
	 * @var array
	 */
	public array $expectedSingleOffset {
		get => [
			'<null>'
		];
	}

	/**
	 * Represents a set of expected offsets.
	 * @var array
	 */
	public array $expectedOffsets {
		get => [
			'null',
			'false',
			'42',
			'42.42',
			'foobar'
		];
	}

	/**
	 * Represents an expected minimum offset.
	 * @var string
	 */
	public string $expectedMinOffset {
		get => '24';
	}

	/**
	 * Represents an expected maximum offset.
	 * @var string
	 */
	public string $expectedMaxOffset {
		get => '42';
	}

	/**
	 * Creates a `string` offset of an expected single offset.
	 * @return string The created `string` offset of an expected single offset.
	 */
	public function createConcatinatedExpectedSingleOffset(): string
	{
		return implode( ' | ', $this->expectedSingleOffset );
	}

	/**
	 * Creates a string of expected offsets.
	 * @return string The created string of expected offsets.
	 */
	public function createConcatinatedExpectedOffsets(): string
	{
		return implode( ' | ', $this->expectedOffsets );
	}
}
