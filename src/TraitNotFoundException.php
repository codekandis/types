<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use function sprintf;

/**
 * Represents an exception if a trait does not exist.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class TraitNotFoundException extends AccessErrorException implements TraitNotFoundExceptionInterface
{
	/**
	 * @inheritDoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The trait does not exist.';

	/**
	 * Represents the exception message if a trait does not exist.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_TRAIT_NOT_FOUND = 'The trait `%s` does not exist.';

	/**
	 * Static constructor method.
	 * @param string $traitName The name of the trait which does not exist.
	 * @return static
	 */
	public static function with_traitName( string $traitName ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_TRAIT_NOT_FOUND, $traitName )
		);
	}
}
