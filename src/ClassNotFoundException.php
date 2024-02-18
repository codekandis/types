<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use Throwable;

/**
 * Represents an exception if a class does not exist.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ClassNotFoundException extends InterfaceOrClassNotFoundException implements ClassNotFoundExceptionInterface
{
	/**
	 * {@inheritDoc}
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The class does not exist.';

	/**
	 * Represents the exception message with the nonexistent class FQCN.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN = 'The class FQCN `%1$s` does not exist.';

	/**
	 * Static constructor method.
	 * @param string $nonexistentFqcn The nonexistent class FQCN.
	 * @param int $code The error code of the exception.
	 * @param ?Throwable $previous The previous throwable.
	 * @return static
	 */
	public static function withNonexistentFqcn( string $nonexistentFqcn, int $code = 0, ?Throwable $previous = null ): static
	{
		return parent::withNonexistentFqcn( $nonexistentFqcn, $code, $previous );
	}
}
