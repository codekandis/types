<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use Throwable;
use function sprintf;

/**
 * Represents an exception if an interface does not exist.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class InterfaceNotFoundException extends AccessErrorException implements InterfaceNotFoundExceptionInterface
{
	/**
	 * @inheritdoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The interface does not exist.';

	/**
	 * Represents the exception message with the nonexistent interface name.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_NAME = 'The interface `%1$s` does not exist.';

	/**
	 * Static constructor method.
	 * @param string $nonExistentInterfaceName The nonexistent interface name.
	 * @param int $code The error code of the exception.
	 * @param ?Throwable $previous The previously catched throwable.
	 * @return static
	 */
	public static function withNonExistentInterfaceName( string $nonExistentInterfaceName, int $code = 0, ?Throwable $previous = null ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INTERFACE_NAME, $nonExistentInterfaceName ),
			$code,
			$previous
		);
	}
}
