<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use LogicException;
use function implode;
use function sprintf;

/**
 * Represents an exception if a type is invalid.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class InvalidTypeException extends LogicException implements InvalidTypeExceptionInterface
{
	/**
	 * Represents the exception message if a type is invalid.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_INVALID_TYPE = 'The type is invalid. `%1$s` expected, but `%2$s` given.';

	/**
	 * Static constructor method.
	 * @param string $invalidType The invalid type.
	 * @param string[] $expectedTypes The expected types.
	 * @return static
	 */
	public static function withInvalidTypeAndExpectedTypes( string $invalidType, string ...$expectedTypes ): static
	{
		return new static(
			sprintf(
				static::EXCEPTION_MESSAGE_INVALID_TYPE,
				implode( ' | ', $expectedTypes ),
				$invalidType
			)
		);
	}
}
