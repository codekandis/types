<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

/**
 * Represents the interface of any exception if an unexpected error occurred.
 * It describes unexpected runtime failures surfaced at an error boundary.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
interface UnexpectedErrorExceptionInterface extends RuntimeExceptionInterface
{
}
