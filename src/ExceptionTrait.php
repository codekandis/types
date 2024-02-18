<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use Throwable;

/**
 * Represents the trait of any exception.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
trait ExceptionTrait
{
	/**
	 * Constructor method.
	 * @param string $message The message of the exception.
	 * @param int $code The error code of the exception.
	 * @param ?Throwable $previous The previous throwable.
	 */
	public function __construct( string $message = '', int $code = 0, ?Throwable $previous = null )
	{
		parent::__construct(
			'' === $message
				? static::EXCEPTION_MESSAGE_DEFAULT
				: $message,
			$code,
			$previous
		);
	}
}
