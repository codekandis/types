<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use Throwable;
use function sprintf;

/**
 * Represents an exception if an object does not exist.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ObjectNotFoundException extends AccessErrorException implements ObjectNotFoundExceptionInterface
{
	/**
	 * {@inheritDoc}
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The object does not exist.';

	/**
	 * Represents the exception message with the nonexistent object's FQCN.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN = 'The object with the FQCN `%1$s` does not exist.';

	/**
	 * Represents the exception message with the nonexistent object's qualified PHP object ID.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_NONEXISTENT_QUALIFIED_OBJECT_ID = 'The object with the qualified object ID `%1$s` does not exist.';

	/**
	 * Static constructor method.
	 * @param string $nonexistentFqcn The nonexistent object's FQCN.
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

	/**
	 * Static constructor method.
	 * @param string $nonexistentQualifiedObjectId The nonexistent object's qualified PHP object ID.
	 * @param int $code The error code of the exception.
	 * @param ?Throwable $previous The previous throwable.
	 * @return static
	 */
	public static function withNonexistentQualifiedObjectId( string $nonexistentQualifiedObjectId, int $code = 0, ?Throwable $previous = null ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_NONEXISTENT_QUALIFIED_OBJECT_ID, $nonexistentQualifiedObjectId ),
			$code,
			$previous
		);
	}
}
