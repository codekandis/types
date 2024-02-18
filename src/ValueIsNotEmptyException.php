<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use function sprintf;

/**
 * Represents an exception if a value is not empty.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValueIsNotEmptyException extends InvalidValueException implements ValueIsNotEmptyExceptionInterface
{
	/**
	 * @inheritdoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The value is not empty.';

	/**
	 * Represents the exception message with the nonempty value.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_NONEMPTY_VALUE = 'The value `%1$s` is not empty.';

	/**
	 * Static constructor method.
	 * @param mixed $nonEmptyValue The nonempty value.
	 * @return static
	 */
	public static function withNonEmptyValue( mixed $nonEmptyValue ): static
	{
		$stringfiedNonEmptyValue = static::stringifyValue( $nonEmptyValue );

		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_NONEMPTY_VALUE, $stringfiedNonEmptyValue )
		);
	}
}
