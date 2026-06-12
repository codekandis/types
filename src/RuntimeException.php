<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use RuntimeException as OriginRuntimeException;

/**
 * Represents an exception if a runtime error occurred.
 * It describes failures caused by runtime values or runtime state.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class RuntimeException extends OriginRuntimeException implements RuntimeExceptionInterface
{
	use ExceptionTrait;

	/**
	 * Represents the default exception message.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'A runtime error occurred.';
}
