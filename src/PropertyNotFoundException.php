<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use Throwable;
use function sprintf;

/**
 * Represents an exception if a property does not exist.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class PropertyNotFoundException extends AccessErrorException implements PropertyNotFoundExceptionInterface
{
	/**
	 * {@inheritDoc}
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The property does not exist.';

	/**
	 * Represents the exception message with the interface or class FQCN and nonexistent property name.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME = 'The property `%1$s::%2$s` does not exist.';

	/**
	 * Static constructor method.
	 * @param string $fqcn The interface or class FQCN of the nonexistent property.
	 * @param string $nonexistentPropertyName The nonexistent property name.
	 * @param int $code The error code of the exception.
	 * @param ?Throwable $previous The previous throwable.
	 * @return static
	 */
	public static function withFqcnAndNonexistentPropertyName( string $fqcn, string $nonexistentPropertyName, int $code = 0, ?Throwable $previous = null ): static
	{
		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
			$code,
			$previous
		);
	}
}
