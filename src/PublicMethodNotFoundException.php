<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use Throwable;

/**
 * Represents an exception if a public method does not exist.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class PublicMethodNotFoundException extends MethodNotFoundException implements PublicMethodNotFoundExceptionInterface
{
	/**
	 * {@inheritDoc}
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The public method does not exist.';

	/**
	 * Represents the exception message with the interface or class FQCN and nonexistent public method name.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME = 'The public method `%1$s::%2$s` does not exist.';

	/**
	 * Static constructor method.
	 * @param string $fqcn The interface or class FQCN of the nonexistent public method.
	 * @param string $nonexistentMethodName The nonexistent public method name.
	 * @param int $code The error code of the exception.
	 * @param ?Throwable $previous The previous throwable.
	 * @return static
	 */
	public static function withFqcnAndNonexistentMethodName( string $fqcn, string $nonexistentMethodName, int $code = 0, ?Throwable $previous = null ): static
	{
		return parent::withFqcnAndNonexistentMethodName( $fqcn, $nonexistentMethodName, $code, $previous );
	}
}
