<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

/**
 * Represents the interface of any exception if an enum does not exist.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
interface EnumNotFoundExceptionInterface extends AccessErrorExceptionInterface
{
}
