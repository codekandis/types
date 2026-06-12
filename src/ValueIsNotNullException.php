<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use Throwable;
use function sprintf;

/**
 * Represents an exception if a value is not null.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValueIsNotNullException extends RuntimeException implements ValueIsNotNullExceptionInterface
{
	use StringifyValueTrait;

	/**
	 * {@inheritDoc}
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The value is not null.';

	/**
	 * Represents the exception message with the non-null value.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE = 'The value `%1$s` is not null.';

	/**
	 * Static constructor method.
	 * @param mixed $nonNullValue The non-null value.
	 * @param int $code The error code of the exception.
	 * @param ?Throwable $previous The previous throwable.
	 * @param ?array<string, mixed> $context The context of the exception.
	 * @return static
	 */
	public static function withNonNullValue( mixed $nonNullValue, int $code = 0, ?Throwable $previous = null, ?array $context = null ): static
	{
		$stringifiedNonNullValue = static::stringifyValue( $nonNullValue );

		$exception                         = new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_NON_NULL_VALUE, $stringifiedNonNullValue ),
			$code,
			$previous,
			$context
		);
		$exception->context[ 'exception' ] = [
			'nonNullValue' => $nonNullValue
		];

		return $exception;
	}
}
