<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use Throwable;

/**
 * Represents the trait of any exception.
 * It provides reusable behavior for exception implementations.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
trait ExceptionTrait
{
	/**
	 * {@inheritDoc}
	 */
	public protected(set) array $context = [
		'exception'  => null,
		'additional' => null
	];

	/**
	 * Constructor method.
	 * @param string $message The message of the exception, or an empty string to use the default message.
	 * @param int $code The error code of the exception.
	 * @param ?Throwable $previous The previous throwable.
	 * @param ?array<string, mixed> $context The context of the exception.
	 */
	public function __construct( string $message = '', int $code = 0, ?Throwable $previous = null, ?array $context = null )
	{
		parent::__construct(
			$message === ''
				? static::EXCEPTION_MESSAGE_DEFAULT
				: $message,
			$code,
			$previous
		);

		$this->context[ 'additional' ] = $context;
	}
}
