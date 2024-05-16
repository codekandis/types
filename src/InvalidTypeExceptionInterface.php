<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

/**
 * Represents the interface of any exception if a type is invalid.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
interface InvalidTypeExceptionInterface
{
	/**
	 * Static constructor.
	 * @param string $invalidType The invalid type.
	 * @param string[] $expectedTypes The expected types.
	 */
	public static function with_invalidTypeAndExpectedTypes( string $invalidType, string ...$expectedTypes ): static;
}
