<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

/**
 * Represents the interface of any exception if a value is invalid.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
interface InvalidValueExceptionInterface
{
	/**
	 * Static constructor.
	 * @param mixed $invalidValue The invalid value.
	 */
	public static function with_invalidValue( mixed $invalidValue ): static;

	/**
	 * Static constructor.
	 * @param mixed $invalidValue The invalid value.
	 * @param string[] $expectedValues The expected values.
	 */
	public static function with_invalidValueAndExpectedValues( mixed $invalidValue, string ...$expectedValues ): static;
}
