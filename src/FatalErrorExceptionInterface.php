<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

/**
 * Represents the interface of any exception if a fatal error occurred.
 * It describes fatal runtime failures categorized as error-like.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
interface FatalErrorExceptionInterface extends RuntimeExceptionInterface
{
}
