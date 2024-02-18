<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use Throwable;
use function sprintf;

/**
 * Represents an exception if an object already exists.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class DuplicateObjectException extends AccessErrorException implements DuplicateObjectExceptionInterface
{
	/**
	 * {@inheritDoc}
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The object already exists.';

	/**
	 * Represents the exception message with the duplicated object's FQCN.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN = 'The object with the FQCN `%1$s` already exists.';

	/**
	 * Represents the exception message with the duplicated object's qualified PHP object ID.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_DUPLICATED_QUALIFIED_OBJECT_ID = 'The object with the qualified object ID `%1$s` already exists.';

	/**
	 * Static constructor method.
	 * @param string $duplicatedFqcn The duplicated object's FQCN.
	 * @param int $code The error code of the exception.
	 * @param ?Throwable $previous The previous throwable.
	 * @return static
	 */
	public static function withDuplicatedFqcn( string $duplicatedFqcn, int $code = 0, ?Throwable $previous = null ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_DUPLICATED_FQCN, $duplicatedFqcn ),
			$code,
			$previous
		);
	}

	/**
	 * Static constructor method.
	 * @param string $duplicatedQualifiedObjectId The duplicated object's qualified PHP object ID.
	 * @param int $code The error code of the exception.
	 * @param ?Throwable $previous The previous throwable.
	 * @return static
	 */
	public static function withDuplicatedQualifiedObjectId( string $duplicatedQualifiedObjectId, int $code = 0, ?Throwable $previous = null ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_DUPLICATED_QUALIFIED_OBJECT_ID, $duplicatedQualifiedObjectId ),
			$code,
			$previous
		);
	}
}
