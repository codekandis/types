<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use Throwable;
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
	 * @param int $code The error code of the exception.
	 * @param ?Throwable $previous The previously catched throwable.
	 * @return static
	 */
	public static function withNonEmptyValue( mixed $nonEmptyValue, int $code = 0, ?Throwable $previous = null ): static
	{
		$stringfiedNonEmptyValue = static::stringifyValue( $nonEmptyValue );

		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_NONEMPTY_VALUE, $stringfiedNonEmptyValue ),
			$code,
			$previous
		);
	}
}
