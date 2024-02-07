<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\Fixtures;

use CodeKandis\Types\Tests\Fixtures\Objects\InheritedStandardObjectFixtureFixture;
use CodeKandis\Types\Tests\Fixtures\Objects\StandardObjectFixture;
use function fclose;
use function fopen;
use function implode;

/**
 * Represents an enumeration of indices.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class Indices
{
	/**
	 * Represents a `null` index.
	 * @var null
	 */
	public null $null {
		get => null;
	}

	/**
	 * Represents a masked `null` index.
	 * @var string
	 */
	public string $maskedNull {
		get => '<null>';
	}

	/**
	 * Represents a masked `closed resource` index.
	 * @var string
	 */
	public string $maskedClosedResource {
		get => '<closed-resource>';
	}

	/**
	 * Represents an `array` index.
	 * @var array
	 */
	public array $array {
		get => [
			'foo',
			'bar'
		];
	}

	/**
	 * Represents a masked `array` index.
	 * @var string
	 */
	public string $maskedArray {
		get => '<array>';
	}

	/**
	 * Represents a `boolean false` index.
	 * @var bool
	 */
	public bool $booleanFalse {
		get => false;
	}

	/**
	 * Represents a `boolean true` index.
	 * @var bool
	 */
	public bool $booleanTrue {
		get => true;
	}

	/**
	 * Represents an `integer` index.
	 * @var int
	 */
	public int $integer {
		get => 42;
	}

	/**
	 * Represents a `float` index.
	 * @var float
	 */
	public float $float {
		get => 42.42;
	}

	/**
	 * Represents a `string` index.
	 * @var string
	 */
	public string $string {
		get => 'foobar';
	}

	/**
	 * Represents a set of only one expected single index.
	 * @var array
	 */
	public array $expectedSingleIndex {
		get => [
			$this->maskedNull
		];
	}

	/**
	 * Represents a set of expected indices.
	 * @var array
	 */
	public array $expectedIndices {
		get => [
			'null',
			'false',
			'42',
			'42.42',
			'foobar'
		];
	}

	/**
	 * Represents an expected minimum index.
	 * @var string
	 */
	public string $expectedMinIndex {
		get => '24';
	}

	/**
	 * Represents an expected maximum index.
	 * @var string
	 */
	public string $expectedMaxIndex {
		get => '42';
	}

	/**
	 * Creates a `resource` index.
	 * @return resource The created `resource` index.
	 */
	public function createResource()
	{
		return fopen( 'php://memory', 'r' );
	}

	/**
	 * Creates a `closed resource` index.
	 * @return resource The created `closed resource` index.
	 */
	public function createClosedResource()
	{
		$resource = static::createResource();
		fclose( $resource );

		return $resource;
	}

	/**
	 * Creates a `StandardObjectFixture` index.
	 * @return StandardObjectFixture The created `StandardObjectFixture` index.
	 */
	public function createStandardObject(): StandardObjectFixture
	{
		return new StandardObjectFixture();
	}

	/**
	 * Creates an `InheritedStandardObjectFixtureFixture` index.
	 * @return InheritedStandardObjectFixtureFixture The created `InheritedStandardObjectFixtureFixture` index.
	 */
	public function createInheritedStandardObject(): InheritedStandardObjectFixtureFixture
	{
		return new InheritedStandardObjectFixtureFixture();
	}

	/**
	 * Creates an `object` index implementing `Stringable`.
	 * @return object The created `object` index.
	 */
	public function createStringableObject(): object
	{
		return new class()
		{
			public function __toString()
			{
				return new Indices()->string;
			}
		};
	}

	/**
	 * Creates a `string` index of an expected single index.
	 * @return string The created `string` index of an expected single index.
	 */
	public function createConcatinatedExpectedSingleIndex(): string
	{
		return implode( ' | ', $this->expectedSingleIndex );
	}

	/**
	 * Creates a string of expected indices.
	 * @return string The created string of expected indices.
	 */
	public function createConcatinatedExpectedIndices(): string
	{
		return implode( ' | ', $this->expectedIndices );
	}
}
