<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use Throwable;
use function sprintf;

/**
 * Represents an exception if a constant does not exist.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ConstantNotFoundException extends AccessErrorException implements ConstantNotFoundExceptionInterface
{
	/**
	 * {@inheritDoc}
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The constant does not exist.';

	/**
	 * Represents the exception message with the nonexistent constant name.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_NONEXISTENT_CONSTANT_NAME = 'The constant `%1$s` does not exist.';

	/**
	 * Static constructor method.
	 * @param string $nonexistentConstantName The nonexistent constant name.
	 * @param int $code The error code of the exception.
	 * @param ?Throwable $previous The previous throwable.
	 * @return static
	 */
	public static function withNonexistentConstantName( string $nonexistentConstantName, int $code = 0, ?Throwable $previous = null ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_NONEXISTENT_CONSTANT_NAME, $nonexistentConstantName ),
			$code,
			$previous
		);
	}
}
