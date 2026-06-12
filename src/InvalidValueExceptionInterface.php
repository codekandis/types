<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

/**
 * Represents the interface of any exception if a value is invalid.
 * It describes a value rejected by the validation context.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
interface InvalidValueExceptionInterface extends RuntimeExceptionInterface
{
}
