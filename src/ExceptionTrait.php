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
	public function __construct( string $message = "", int $code = 0, ?Throwable $previous = null )
	{
		return '' === $message
			? parent::__construct( static::EXCEPTION_MESSAGE_DEFAULT, $code, $previous )
			: parent::__construct( $message, $code, $previous );
	}
}
