<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use Throwable;

/**
 * Represents an exception if a string backed enum does not exist.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class StringBackedEnumNotFoundException extends BackedEnumNotFoundException implements StringBackedEnumNotFoundExceptionInterface
{
	/**
	 * {@inheritDoc}
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The string-backed enum does not exist.';

	/**
	 * Represents the exception message with the nonexistent string backed enum FQCN.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN = 'The string-backed enum FQCN `%1$s` does not exist.';

	/**
	 * Static constructor method.
	 * @param string $nonexistentFqcn The nonexistent string backed enum FQCN.
	 * @param int $code The error code of the exception.
	 * @param ?Throwable $previous The previous throwable.
	 * @return static
	 */
	public static function withNonexistentFqcn( string $nonexistentFqcn, int $code = 0, ?Throwable $previous = null ): static
	{
		return parent::withNonexistentFqcn( $nonexistentFqcn, $code, $previous );
	}
}
