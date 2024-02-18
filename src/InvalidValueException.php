<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use Throwable;
use function implode;
use function sprintf;

/**
 * Represents an exception if a value is invalid.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class InvalidValueException extends RuntimeException implements InvalidValueExceptionInterface
{
	use StringifyValueTrait;

	/**
	 * {@inheritDoc}
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The value is invalid.';

	/**
	 * Represents the exception message with the invalid value.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_INVALID_VALUE = 'The value `%1$s` is invalid.';

	/**
	 * Represents the exception message with the invalid value and expected values.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES = 'The value `%1$s` is invalid. Expected `%2$s`.';

	/**
	 * Static constructor method.
	 * @param mixed $invalidValue The invalid value.
	 * @param int $code The error code of the exception.
	 * @param ?Throwable $previous The previous throwable.
	 * @return static
	 */
	public static function withInvalidValue( mixed $invalidValue, int $code = 0, ?Throwable $previous = null ): static
	{
		$stringifiedInvalidValue = static::stringifyValue( $invalidValue );

		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_INVALID_VALUE, $stringifiedInvalidValue ),
			$code,
			$previous
		);
	}

	/**
	 * Static constructor method.
	 * @param mixed $invalidValue The invalid value.
	 * @param array<array-key, mixed> $expectedValues The expected values.
	 * @param int $code The error code of the exception.
	 * @param ?Throwable $previous The previous throwable.
	 * @return static
	 */
	public static function withInvalidValueAndExpectedValues( mixed $invalidValue, array $expectedValues, int $code = 0, ?Throwable $previous = null ): static
	{
		$stringifiedInvalidValue   = static::stringifyValue( $invalidValue );
		$stringifiedExpectedValues = implode( ' | ', $expectedValues );

		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_INVALID_VALUE_AND_EXPECTED_VALUES, $stringifiedInvalidValue, $stringifiedExpectedValues ),
			$code,
			$previous
		);
	}
}
