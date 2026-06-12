<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

/**
 * Represents the interface of any exception if an index is out of range.
 * It describes ordered indices outside accepted ranges.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
interface IndexOutOfRangeExceptionInterface extends RuntimeExceptionInterface
{
}
