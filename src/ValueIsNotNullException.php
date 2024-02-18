<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use function sprintf;

/**
 * Represents an exception if a value is not null.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValueIsNotNullException extends InvalidValueException implements ValueIsNotNullExceptionInterface
{
	/**
	 * @inheritdoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The value is not null.';

	/**
	 * Represents the exception message with the nonnull value.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_NONNULL_VALUE = 'The value `%1$s` is not null.';

	/**
	 * Static constructor method.
	 * @param mixed $nonNullValue The nonnull value.
	 * @return static
	 */
	public static function withNonNullValue( mixed $nonNullValue ): static
	{
		$stringfiedNonNullValue = static::stringifyValue( $nonNullValue );

		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_NONNULL_VALUE, $stringfiedNonNullValue )
		);
	}
}
