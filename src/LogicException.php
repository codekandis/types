<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use LogicException as OriginLogicException;

/**
 * Represents an exception if a logic error occurred.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class LogicException extends OriginLogicException implements LogicExceptionInterface
{
	use ExceptionTrait;

	/**
	 * Represents the default exception message.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'A logic error occurred.';
}
