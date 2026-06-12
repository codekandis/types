<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

/**
 * Represents the interface of any exception if an index does not exist.
 * It describes an acceptable index for which no entry exists.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
interface IndexNotFoundExceptionInterface extends RuntimeExceptionInterface
{
}
