<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use Override;

/**
 * Represents the base class of any object.
 * @package codekandis/types
 * @author Christian Ramelow
 */
class BaseObject implements ObjectInterface
{
	/**
	 * @inheritdoc
	 */
	public TypeInterface $type {
		get => new Type( $this );
	}

	/**
	 * @inheritdoc
	 */
	#[Override]
	public function __toString(): string
	{
		return static::class;
	}

	/**
	 * @inheritdoc
	 */
	#[Override]
	final public function toString(): string
	{
		return $this->__toString();
	}
}
