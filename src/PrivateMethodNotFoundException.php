<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use Throwable;

/**
 * Represents an exception if a private method does not exist.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class PrivateMethodNotFoundException extends MethodNotFoundException implements PrivateMethodNotFoundExceptionInterface
{
	/**
	 * {@inheritDoc}
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The private method does not exist.';

	/**
	 * Represents the exception message with the interface or class FQCN and nonexistent private method name.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME = 'The private method `%1$s::%2$s` does not exist.';

	/**
	 * Static constructor method.
	 * @param string $fqcn The interface or class FQCN of the nonexistent private method.
	 * @param string $nonexistentMethodName The nonexistent private method name.
	 * @param int $code The error code of the exception.
	 * @param ?Throwable $previous The previous throwable.
	 * @return static
	 */
	public static function withFqcnAndNonexistentMethodName( string $fqcn, string $nonexistentMethodName, int $code = 0, ?Throwable $previous = null ): static
	{
		return parent::withFqcnAndNonexistentMethodName( $fqcn, $nonexistentMethodName, $code, $previous );
	}
}
