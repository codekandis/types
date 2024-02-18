<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use DomainException as OriginDomainException;

/**
 * Represents an exception if a domain error occurred.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class DomainException extends OriginDomainException implements DomainExceptionInterface
{
	use ExceptionTrait;

	/**
	 * Represents the default exception message.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'A domain error occurred.';
}
