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
	 * @inheritdoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The trait does not exist.';

	/**
	 * Represents the exception message with the nonexistent trait name.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_NONEXISTENT_TRAIT_NAME = 'The trait `%1$s` does not exist.';

	/**
	 * Static constructor method.
	 * @param string $nonExistentTraitName The nonexistent trait name.
	 * @return static
	 */
	public static function withNonExistentTraitName( string $nonExistentTraitName ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_NONEXISTENT_TRAIT_NAME, $nonExistentTraitName )
		);
	}
}
