<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

/**
 * Represents the interface of any object providing context.
 * Context exposes named values associated with the represented object or operation, if available.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ContextProviderInterface
{
	/**
	 * Gets the contextual values.
	 * @var array{
	 *     exception: ?array<string, mixed>,
	 *     additional: ?array<string, mixed>
	 * }
	 */
	public array $context {
		get;
	}
}
