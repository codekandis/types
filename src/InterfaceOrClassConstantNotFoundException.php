<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use Throwable;
use function sprintf;

/**
 * Represents an exception if an interface or class constant does not exist.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class InterfaceOrClassConstantNotFoundException extends AccessErrorException implements InterfaceOrClassConstantNotFoundExceptionInterface
{
	/**
	 * {@inheritDoc}
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The interface or class constant does not exist.';

	/**
	 * Represents the exception message with the interface or class FQCN and nonexistent constant name.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME = 'The interface or class constant `%1$s::%2$s` does not exist.';

	/**
	 * Static constructor method.
	 * @param string $fqcn The interface or class FQCN of the nonexistent constant.
	 * @param string $nonexistentConstantName The nonexistent constant name.
	 * @param int $code The error code of the exception.
	 * @param ?Throwable $previous The previous throwable.
	 * @return static
	 */
	public static function withFqcnAndNonexistentConstantName( string $fqcn, string $nonexistentConstantName, int $code = 0, ?Throwable $previous = null ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_NAME, $fqcn, $nonexistentConstantName ),
			$code,
			$previous
		);
	}
}
