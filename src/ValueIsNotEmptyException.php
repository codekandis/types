<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use Throwable;
use function sprintf;

/**
 * Represents an exception if a value is not empty.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValueIsNotEmptyException extends RuntimeException implements ValueIsNotEmptyExceptionInterface
{
	use StringifyValueTrait;

	/**
	 * {@inheritDoc}
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The value is not empty.';

	/**
	 * Represents the exception message with the non-empty value.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE = 'The value `%1$s` is not empty.';

	/**
	 * Static constructor method.
	 * @param mixed $nonEmptyValue The non-empty value.
	 * @param int $code The error code of the exception.
	 * @param ?Throwable $previous The previous throwable.
	 * @param ?array<string, mixed> $context The context of the exception.
	 * @return static
	 */
	public static function withNonEmptyValue( mixed $nonEmptyValue, int $code = 0, ?Throwable $previous = null, ?array $context = null ): static
	{
		$stringifiedNonEmptyValue = static::stringifyValue( $nonEmptyValue );

		$exception                         = new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_NON_EMPTY_VALUE, $stringifiedNonEmptyValue ),
			$code,
			$previous,
			$context
		);
		$exception->context[ 'exception' ] = [
			'nonEmptyValue' => $nonEmptyValue
		];

		return $exception;
	}
}
