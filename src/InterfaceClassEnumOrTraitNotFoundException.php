<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use Throwable;
use function sprintf;

/**
 * Represents an exception if an interface, class, enum or trait does not exist.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class InterfaceClassEnumOrTraitNotFoundException extends AccessErrorException implements InterfaceClassEnumOrTraitNotFoundExceptionInterface
{
	/**
	 * {@inheritDoc}
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The interface, class, enum or trait does not exist.';

	/**
	 * Represents the exception message with the nonexistent interface, class, enum or trait FQCN.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN = 'The interface, class, enum or trait FQCN `%1$s` does not exist.';

	/**
	 * Static constructor method.
	 * @param string $nonexistentFqcn The nonexistent interface, class, enum or trait FQCN.
	 * @param int $code The error code of the exception.
	 * @param ?Throwable $previous The previous throwable.
	 * @return static
	 */
	public static function withNonexistentFqcn( string $nonexistentFqcn, int $code = 0, ?Throwable $previous = null ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
			$code,
			$previous
		);
	}
}
