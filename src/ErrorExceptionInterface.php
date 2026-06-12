<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

/**
 * Represents the interface of any exception if an error occurred.
 * It describes runtime failures categorized as error-like.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ErrorExceptionInterface extends RuntimeExceptionInterface
{
}
