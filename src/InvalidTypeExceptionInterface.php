<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

/**
 * Represents the interface of any exception if a type is invalid.
 * It describes values failing a type check.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
interface InvalidTypeExceptionInterface extends RuntimeExceptionInterface
{
}
