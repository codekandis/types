<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use Override;
use ReflectionClass;
use ReflectionObject;
use function spl_object_id;
use function sprintf;

/**
 * Represents a type representing an object.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class Type extends BaseObject implements TypeInterface
{
	/**
	 * @inheritDoc
	 */
	public object $instance {
		get => $this->instance;
	}

	/**
	 * @inheritDoc
	 */
	public int $id {
		get => spl_object_id( $this->instance );
	}

	/**
	 * @inheritDoc
	 */
	public string $qualifiedId {
		get => sprintf(
			'object(%1$s)#%2$d',
			$this->typeName,
			$this->id
		);
	}

	/**
	 * @inheritDoc
	 */
	public string $typeName {
		get => $this->instance::class;
	}

	/**
	 * @inheritDoc
	 */
	public ReflectionClass $reflectedClass {
		get => new ReflectionClass( $this->instance );
	}

	/**
	 * @inheritDoc
	 */
	public ReflectionObject $reflectedObject {
		get => new ReflectionObject( $this->instance );
	}

	/**
	 * Constructor method.
	 * @param object $instance The object the type represents.
	 */
	public function __construct( object $instance )
	{
		$this->instance = $instance;
	}

	/**
	 * @inheritDoc
	 */
	#[Override]
	public function isInstanceOf( string | object $classNameOrObject ): bool
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
