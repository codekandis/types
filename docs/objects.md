# Objects

[Back to documentation index][doclink-documentation-index] | [Back to project README][doclink-project-readme]

## Index

* [Purpose](#purpose)
* [Object contracts](#object-contracts)
* [`BaseObject`](#baseobject)
* [`TypeInterface` and `Type`](#typeinterface-and-type)
* [Comparison semantics](#comparison-semantics)
* [When to use this model](#when-to-use-this-model)
* [Source reference](#source-reference)

## Purpose

The object model provides a small shared baseline for packages that need deterministic object metadata.

The central idea is simple:

* an object can expose metadata about itself through `$type`
* `Type` represents one concrete object instance
* object identity, object equality and object type checks are separate concepts

This package does not add domain identity. If an application has an aggregate ID, database ID or UUID, that remains
application logic.

## Object contracts

`StringifyableInterface` requires `__toString()` and `toString()`.

`ObjectInterface` extends `StringifyableInterface` and requires a `$type` property returning `TypeInterface`.

`ArrayableInterface` and `RecursivelyArrayableInterface` define array conversion contracts. They do not impose a
specific object model.

## `BaseObject`

`BaseObject` is the reusable implementation of `ObjectInterface`.

It exposes its own metadata through `$type`.

```php
use CodeKandis\Types\BaseObject;

class ExampleObject extends BaseObject
{
}

$object = new ExampleObject();

$object->type->typeName;
// ExampleObject
```

`BaseObject::__toString()` returns the object's FQCN. `BaseObject::toString()` is final and delegates to
`__toString()`.

```php
$object->toString();
// ExampleObject

(string) $object;
// ExampleObject
```

Override `__toString()` when a subclass needs a different string representation. Do not override `toString()`, because
it is the stable delegating entry point.

## `TypeInterface` and `Type`

`TypeInterface` describes metadata for one represented object. `Type` is the default implementation.

```php
use CodeKandis\Types\Type;

$instance = new stdClass();
$type     = new Type( $instance );
```

The represented object is available through `$instance`.

```php
$type->instance;
// $instance
```

`$objectId` is the integer ID returned by `spl_object_id()`.

```php
$type->objectId;
// 1
```

`$qualifiedObjectId` is a readable object ID in the form `object(FQCN)#id`.

```php
$type->qualifiedObjectId;
// object(stdClass)#1
```

`$typeName` is the represented object's FQCN.

```php
$type->typeName;
// stdClass
```

Reflection metadata is exposed through `$reflectedClass` and `$reflectedObject`.

```php
$type->reflectedClass;
// ReflectionClass for stdClass

$type->reflectedObject;
// ReflectionObject for $instance
```

## Comparison semantics

`Type::isInstanceOf()` checks whether the represented object is an instance of a given FQCN or object.

```php
$type->isInstanceOf( stdClass::class );
// true

$type->isInstanceOf( new stdClass() );
// true
```

`Type::isEqual()` uses PHP object equality with `==`. Two different objects can be equal if they are instances of the
same class and have equal attributes.

```php
$type->isEqual( clone $instance );
// true
```

`Type::isIdentical()` uses PHP object identity with `===`. Only the same instance is identical.

```php
$type->isIdentical( clone $instance );
// false

$type->isIdentical( $instance );
// true
```

## When to use this model

Use `Type` when code needs metadata about an object instance without inventing a local wrapper for `spl_object_id()`,
`ReflectionClass`, `ReflectionObject` and FQCN access.

Use `$qualifiedObjectId` for human-readable diagnostics. It is useful in exception messages and logs, but it is not a
stable persistent identifier.

Do not use `Type` as a domain identity model. It describes PHP object runtime identity and type metadata, not business
identity.

## Source reference

See the complete [source reference][doclink-source-reference].



[doclink-documentation-index]: ./README.md
[doclink-project-readme]: ../README.md
[doclink-source-reference]: ./source-reference.md
