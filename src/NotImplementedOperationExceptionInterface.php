<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

/**
 * Represents the interface of any exception if an operation is not implemented.
 * It describes declared operations without an implementation.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
interface NotImplementedOperationExceptionInterface extends UnsupportedOperationExceptionInterface
{
}
