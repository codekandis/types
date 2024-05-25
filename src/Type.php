<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use Override;
use ReflectionClass;
use ReflectionObject;

/**
 * Represents a type representing an object.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class Type extends BaseObject implements TypeInterface
{
	/**
	 * Constructor method.
	 * @param object $instance The object the type represents.
	 */
	public function __construct( private readonly object $instance )
	{
	}

	/**
	 * @inheritDoc
	 */
	#[Override]
	public function getInstance(): object
	{
		return $this->instance;
	}

	/**
	 * @inheritDoc
	 */
	#[Override]
	public function getTypeName(): string
	{
		return $this->instance::class;
	}

	/**
	 * @inheritDoc
	 */
	#[Override]
	public function getReflectedClass(): ReflectionClass
	{
		return new ReflectionClass( $this->instance );
	}

	/**
	 * @inheritDoc
	 */
	#[Override]
	public function getReflectedObject(): ReflectionObject
	{
		return new ReflectionObject( $this->instance );
	}

	/**
	 * @inheritDoc
	 */
	#[Override]
	public function isInstanceOf( string|object $classNameOrObject ): bool
	{
		return $this->instance instanceof $classNameOrObject;
	}

	/**
	 * @inheritDoc
	 */
	#[Override]
	public function isEqual( object $object ): bool
	{
		return $object == $this->instance;
	}

	/**
	 * @inheritDoc
	 */
	#[Override]
	public function isIdentical( object $object ): bool
	{
		return $object === $this->instance;
	}
}
