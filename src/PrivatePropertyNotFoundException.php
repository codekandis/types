<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use Throwable;

/**
 * Represents an exception if a private property does not exist.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class PrivatePropertyNotFoundException extends PropertyNotFoundException implements PrivatePropertyNotFoundExceptionInterface
{
	/**
	 * {@inheritDoc}
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The private property does not exist.';

	/**
	 * Represents the exception message with the interface or class FQCN and nonexistent private property name.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME = 'The private property `%1$s::%2$s` does not exist.';

	/**
	 * Static constructor method.
	 * @param string $fqcn The interface or class FQCN of the nonexistent private property.
	 * @param string $nonexistentPropertyName The nonexistent private property name.
	 * @param int $code The error code of the exception.
	 * @param ?Throwable $previous The previous throwable.
	 * @return static
	 */
	public static function withFqcnAndNonexistentPropertyName( string $fqcn, string $nonexistentPropertyName, int $code = 0, ?Throwable $previous = null ): static
	{
		return parent::withFqcnAndNonexistentPropertyName( $fqcn, $nonexistentPropertyName, $code, $previous );
	}
}
