<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use Override;

/**
 * Represents the base class of any object.
 * It provides reusable object behavior for classes extending it.
 * @package codekandis/types
 * @author Christian Ramelow
 */
class BaseObject implements ObjectInterface
{
	/**
	 * {@inheritDoc}
	 */
	public TypeInterface $type {
		get => new Type( $this );
	}

	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public function __toString(): string
	{
		return static::class;
	}

	/**
	 * {@inheritDoc}
	 */
	#[Override]
	final public function toString(): string
	{
		return $this->__toString();
	}
}
