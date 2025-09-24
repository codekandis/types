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
	 * @param ?Throwable $previous The previously catched throwable.
	 */
	public function __construct( string $message = '', int $code = 0, ?Throwable $previous = null )
	{
		return '' === $message
			? parent::__construct( static::EXCEPTION_MESSAGE_DEFAULT, $code, $previous )
			: parent::__construct( $message, $code, $previous );
	}
}
