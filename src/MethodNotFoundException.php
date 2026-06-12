<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use Throwable;
use function sprintf;

/**
 * Represents an exception if a method does not exist.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class MethodNotFoundException extends AccessErrorException implements MethodNotFoundExceptionInterface
{
	/**
	 * {@inheritDoc}
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The method does not exist.';

	/**
	 * Represents the exception message with the interface or class FQCN and nonexistent method name.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME = 'The method `%1$s::%2$s` does not exist.';

	/**
	 * Static constructor method.
	 * @param string $fqcn The interface or class FQCN of the nonexistent method.
	 * @param string $nonexistentMethodName The nonexistent method name.
	 * @param int $code The error code of the exception.
	 * @param ?Throwable $previous The previous throwable.
	 * @param ?array<string, mixed> $context The context of the exception.
	 * @return static
	 */
	public static function withFqcnAndNonexistentMethodName( string $fqcn, string $nonexistentMethodName, int $code = 0, ?Throwable $previous = null, ?array $context = null ): static
	{
		$exception                         = new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
			$code,
			$previous,
			$context
		);
		$exception->context[ 'exception' ] = [
			'fqcn'                  => $fqcn,
			'nonexistentMethodName' => $nonexistentMethodName
		];

		return $exception;
	}
}
