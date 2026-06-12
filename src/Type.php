<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use Override;
use ReflectionClass;
use ReflectionObject;
use function spl_object_id;
use function sprintf;

/**
 * Represents a type describing an object.
 * It provides metadata and comparison behavior for one object instance.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class Type extends BaseObject implements TypeInterface
{
	/**
	 * {@inheritDoc}
	 */
	public object $instance {
		get => $this->instance;
	}

	/**
	 * Gets the represented object's PHP object ID.
	 * The value is the result of `spl_object_id()`.
	 * @var int
	 */
	public int $objectId {
		get => spl_object_id( $this->instance );
	}

	/**
	 * Gets the represented object's qualified PHP object ID.
	 * The value uses the format `object(FQCN)#id`.
	 * @var string
	 */
	public string $qualifiedObjectId {
		get => sprintf(
			'object(%1$s)#%2$d',
			$this->typeName,
			$this->objectId
		);
	}

	/**
	 * {@inheritDoc}
	 */
	public string $typeName {
		get => $this->instance::class;
	}

	/**
	 * {@inheritDoc}
	 */
	public ReflectionClass $reflectedClass {
		get => new ReflectionClass( $this->instance );
	}

	/**
	 * {@inheritDoc}
	 */
	public ReflectionObject $reflectedObject {
		get => new ReflectionObject( $this->instance );
	}

	/**
	 * Constructor method.
	 * @param object $instance The object instance represented by the type.
	 */
	public function __construct( object $instance )
	{
		$this->instance = $instance;
	}

	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public function isInstanceOf( string | object $classNameOrObject ): bool
	{
		return $this->instance instanceof $classNameOrObject;
	}

	/**
	 * Determines the equality of the represented object and a specified object.
	 * The comparison uses PHP's object equality operator `==`.
	 * @param object $object The object to compare with.
	 * @return bool `true` if the represented object is equal to the specified object, otherwise `false`.
	 */
	#[Override]
	public function isEqual( object $object ): bool
	{
		return $this->instance == $object;
	}

	/**
	 * Determines the identity of the represented object and a specified object.
	 * The comparison uses PHP's object identity operator `===`.
	 * @param object $object The object to compare with.
	 * @return bool `true` if the represented object refers to the same instance, otherwise `false`.
	 */
	#[Override]
	public function isIdentical( object $object ): bool
	{
		return $this->instance === $object;
	}
}
