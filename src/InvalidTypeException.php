<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use LogicException;
use Override;
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
	 * Represents the exception message if the type of a value to convert is not valid.
	 */
	public const string EXCEPTION_MESSAGE_INVALID_TYPE = 'The type `%s` of the value is invalid. `%s` expected';

	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function with_invalidTypeAndExpectedTypes( string $invalidType, string ...$expectedTypes ): static
	{
		return new static(
			sprintf(
				static::EXCEPTION_MESSAGE_INVALID_TYPE,
				$invalidType,
				implode( ' | ', $expectedTypes )
			)
		);
	}
}
