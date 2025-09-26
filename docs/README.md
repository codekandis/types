# Documentation

## Index

* [Introduction](#introduction)
* [`BaseObject`](#base-object)
  * [`BaseObject::__toString()`](#baseobject__tostring)
    * [Definition](#definition)
    * [Examples](#examples)
  * [`BaseObject::toString()`](#baseobjecttostring)
    * [Definition](#definition-1)
    * [Examples](#examples-1)
  * [`BaseObject::getType()`](#baseobjectgettype)
    * [Definition](#definition-2)
* [`Type`](#type)
  * [`Type::__construct()`](#type__construct)
    * [Definition](#definition-3)
    * [Examples](#examples-2)
  * [`Type::getInstance()`](#typegetinstance)
    * [Definition](#definition-4)
    * [Examples](#examples-3)
  * [`Type::getTypeName()`](#typegettypename)
    * [Definition](#definition-5)
    * [Examples](#examples-4)
  * [`Type::getReflectedClass()`](#typegetreflectedclass)
    * [Definition](#definition-6)
  * [`Type::getReflectedObject()`](#typegetreflectedobject)
    * [Definition](#definition-7)
  * [`Type::isInstanceOf()`](#typeisinstanceof)
    * [Definition](#definition-8)
    * [Examples](#examples-5)
  * [`Type::isEqual()`](#typeisequal)
    * [Definition](#definition-9)
    * [Examples](#examples-6)
  * [`Type::isIdentical()`](#typeisidentical)
    * [Definition](#definition-10)
    * [Examples](#examples-7)
* [`GetTypeTypes`](#gettypetypes)
  * [`GetTypeTypes::createTypedResource()`](#gettypetypescreatetypedresource)
    * [Definition](#definition-11)
    * [Examples](#examples-8)
  * [`GetTypeTypes::createTypedObject()`](#gettypetypescreatetypedobject)
    * [Definition](#definition-12)
    * [Examples](#examples-9)
  * [`GetTypeTypes::createTypedBoolean()`](#gettypetypescreatetypedboolean)
    * [Definition](#definition-13)
    * [Examples](#examples-10)
* [`MaskedGetTypeTypes`](#maskedgettypetypes)
  * [`MaskedGetTypeTypes::createTypedResource()`](#maskedgettypetypescreatetypedresource)
    * [Definition](#definition-14)
    * [Examples](#examples-11)
  * [`MaskedGetTypeTypes::createTypedObject()`](#maskedgettypetypescreatetypedobject)
    * [Definition](#definition-15)
    * [Examples](#examples-12)
  * [`MaskedGetTypeTypes::createTypedBoolean()`](#maskedgettypetypescreatetypedboolean)
    * [Definition](#definition-16)
    * [Examples](#examples-13)
* [`TypeHintTypes`](#gettypetypes)
  * [`TypeHintTypes::createTypedResource()`](#typehinttypescreatetypedresource)
    * [Definition](#definition-17)
    * [Examples](#examples-14)
  * [`TypeHintTypes::createTypedObject()`](#typehinttypescreatetypedobject)
    * [Definition](#definition-18)
    * [Examples](#examples-15)
  * [`TypeHintTypes::createTypedBoolean()`](#typehinttypescreatetypedboolean)
    * [Definition](#definition-19)
    * [Examples](#examples-16)
* [`MaskedTypeHintTypes`](#gettypetypes)
  * [`MaskedTypeHintTypes::createTypedResource()`](#maskedtypehinttypescreatetypedresource)
    * [Definition](#definition-20)
    * [Examples](#examples-17)
  * [`MaskedTypeHintTypes::createTypedObject()`](#maskedtypehinttypescreatetypedobject)
    * [Definition](#definition-21)
    * [Examples](#examples-18)
  * [`MaskedTypeHintTypes::createTypedBoolean()`](#maskedtypehinttypescreatetypedboolean)
    * [Definition](#definition-22)
    * [Examples](#examples-19)
* [`TypeDetermination\TypeDeterminator`](#typedeterminationtypedeterminator)
    * [Definition](#definition-23)
    * [Examples](#examples-20)

## Introduction

This documentation is incomplete while it lacks the documentation of any exception class. The provided exception methods are named constructor methods and assumed to be self-explanatory.

## [`BaseObject`][srclink-BaseObject]

Represents the base class of any object.

### [`BaseObject::__toString()`][srclink-BaseObject-__toString]

Gets the `string` representation of the object.

#### Definition

```php
BaseObject::__toString(): string
```

#### Examples

##### #1

```php
class Foo extends BaseObject
{
}

$object = new Foo();

(string) $object;
/**
 * Foo
 */

$object->__toString();
/**
 * Foo
 */
```

##### #2

```php
class Foo extends BaseObject
{
    public function __toString(): string
    {
        return 'Bar';
    }
}

$object = new Foo();

(string) $object;
/**
 * Bar
 */

$object->__toString();
/**
 * Bar
 */
```

### [`BaseObject::toString()`][srclink-BaseObject-toString]

Gets the `string` representation of the object.

#### Definition

```php
BaseObject::toString(): string
```

#### Examples

##### #1

```php
class Foo extends BaseObject
{
}

$object = new Foo();

$object->toString();
/**
 * Foo
 */
```

##### #2

```php
class Foo extends BaseObject
{
    public function toString(): string
    {
        return 'Bar';
    }
}

$object = new Foo();

$object->toString();
/**
 * Bar
 */
```

### [`BaseObject::getType()`][srclink-BaseObject-getType]

Gets the type representing the object.

#### Definition

```php
BaseObject::getType(): TypeInterface
```

## [`Type`][srclink-Type]

Represents a type representing an object.

### [`Type::__construct()`][srclink-Type-__construct]

Constructor method.

#### Definition

```php
Type::__construct( private readonly object $instance )
```

* `$instance` - The object the type represents.

#### Examples

##### #1

```php
$instance = new stdClass();

$type = new Type( $instance );
```

### [`Type::getInstance()`][srclink-Type-getInstance]

Gets the object the type depends on.

#### Definition

```php
Type::getInstance(): object
```

#### Examples

##### #1

```php
$instance = new stdClass();
$type     = new Type( $instance );

$type->getInstance();
/**
 * class stdClass#1 (0) {
 * }
 */
```

### [`Type::getTypeName()`][srclink-Type-getTypeName]

Gets the type name of the class of the represented object.

#### Definition

```php
Type::getTypeName(): string
```

#### Examples

##### #1

```php
$instance = new stdClass();
$type     = new Type( $instance );

$type->getTypeName();
/**
 * stdClass
 */
```

### [`Type::getReflectedClass()`][srclink-Type-getReflectedClass]

Gets the [`ReflectionClass`][xtlink-php-net-ReflectionClass] representing the class of the represented object.

#### Definition

```php
Type::getReflectedClass(): ReflectionClass
```

### [`Type::getReflectedObject()`][srclink-Type-getReflectedObject]

Gets the [`ReflectionObject`][xtlink-php-net-ReflectionObject] representing the represented object.

#### Definition

```php
Type::getReflectedObject(): ReflectionObject
```

### [`Type::isInstanceOf()`][srclink-Type-isInstanceOf]

Determines if the represented object is an instance of a specified class name or object.

#### Definition

```php
Type::isInstanceOf( string|object $classNameOrObject ): bool
```

* `$classNameOrObject` - The class name or object to compare with.

#### Examples

##### #1

```php
class Foo
{
}

$instance = new Foo();
$type     = new Type( $instance );

$type->isInstanceOf( Foo::class );
/**
 * true
 */
```

##### #2

```php
class Foo
{
}

$instance_1 = new Foo();
$instance_2 = new Foo();
$type       = new Type( $instance_1 );

$type->isInstanceOf( $instance_2::class );
/**
 * true
 */

$type->isInstanceOf( $instance_2 );
/**
 * true
 */
```

##### #3

```php
class Foo
{
}

$instance_1 = new Foo();
$instance_2 = new stdClass();
$type       = new Type( $instance_1 );

$type->isInstanceOf( $instance_2::class );
/**
 * false
 */

$type->isInstanceOf( $instance_2 );
/**
 * false
 */
```

### [`Type::isEqual()`][srclink-Type-isEqual]

Determines if the represented object is an instance of the same class and has the same attributes and values like a specified object.

#### Definition

```php
Type::isEqual( object $object ): bool
```

* `$object` - The object to compare with.

#### Examples

##### #1

```php
class Foo
{
   public int $value = 42;
}

$instance_1 = new Foo();
$instance_2 = new Foo();
$type       = new Type( $instance_1 );

$type->isEqual( $instance_2 );
/**
 * true
 */
```

##### #2

```php
class Foo
{
   public int $value = 42;
}

$instance_1        = new Foo();
$instance_2        = new Foo();
$instance_2->value = 24;
$type              = new Type( $instance_1 );

$type->isEqual( $instance_2 );
/**
 * false
 */
```

##### #3

```php
class Foo
{
   public int $value = 42;
}

$instance_1 = new Foo();
$instance_2 = new stdClass();
$type       = new Type( $instance_1 );

$type->isEqual( $instance_2 );
/**
 * false
 */
```

### [`Type::isIdentical()`][srclink-Type-isIdentical]

Determines if the represented object refers to the same instance like a specified object.

#### Definition

```php
Type::isIdentical( object $object ): bool
```

* `$object` - The object to compare with.

#### Examples

##### #1

```php
class Foo
{
   public int $value = 42;
}

$instance_1 = new Foo();
$instance_2 = $instance_1;
$type       = new Type( $instance_1 );

$type->isIdentical( $instance_2 );
/**
 * true
 */
```

##### #2

```php
class Foo
{
   public int $value = 42;
}

$instance_1 = new Foo();
$instance_2 = new Foo();
$type       = new Type( $instance_1 );

$type->isIdentical( $instance_2 );
/**
 * false
 */
```

##### #3

```php
class Foo
{
   public int $value = 42;
}

$instance_1 = new Foo();
$instance_2 = new stdClass();
$type       = new Type( $instance_1 );

$type->isIdentical( $instance_2  );
/**
 * false
 */
```

## [`GetTypeTypes`][srclink-GetTypeTypes]

Represents an enumeration of types like PHP's [`gettype()`][xtlink-php-net-gettype] function.

### [`GetTypeTypes::createTypedResource()`][srclink-GetTypeTypes-createTypedResource]

Creates a typed `resource` by a specific resource type.

#### Definition

```php
static createTypedResource( string $resourceType ): string
```

* `$resourceType` - The type of the `resource`.

#### Examples

##### #1

```php
$resource     = fopen( 'php://memory', 'rb' );
$resourceType = get_resource_type( $resource );

GetTypeTypes::createTypedResource( $resourceType );
/**
 * resource<stream>
 */
```

### [`GetTypeTypes::createTypedObject()`][srclink-GetTypeTypes-createTypedObject]

Creates a typed `object` by a specific class name.

#### Definition

```php
static createTypedObject( string $className ): string
```

* `$className` - The name of the class.

#### Examples

##### #1

```php
$object = new stdClass();

GetTypeTypes::createTypedObject( $object::class );
/**
 * object<stdClass>
 */
```

### [`GetTypeTypes::createTypedBoolean()`][srclink-GetTypeTypes-createTypedBoolean]

Creates a typed `boolean` by a specific value.

#### Definition

```php
static createTypedBoolean( bool $value ): string
```

* `$value` - The value.

#### Examples

##### #1

```php
$object = new stdClass();

GetTypeTypes::createTypedBoolean( $object::class );
/**
 * object<stdClass>
 */
```

## [`MaskedGetTypeTypes`][srclink-MaskedGetTypeTypes]

Represents an enumeration of masked types like PHP's [`gettype()`][xtlink-php-net-gettype] function.

### [`MaskedGetTypeTypes::createTypedResource()`][srclink-MaskedGetTypeTypes-createTypedResource]

Creates a typed `resource` by a specific resource type.

#### Definition

```php
static createTypedResource( string $resourceType ): string
```

* `$resourceType` - The type of the `resource`.

#### Examples

##### #1

```php
$resource     = fopen( 'php://memory', 'rb' );
$resourceType = get_resource_type( $resource );

MaskedGetTypeTypes::createTypedResource( $resourceType );
/**
 * resource<stream>
 */
```

### [`MaskedGetTypeTypes::createTypedObject()`][srclink-MaskedGetTypeTypes-createTypedObject]

Creates a typed `object` by a specific class name.

#### Definition

```php
static createTypedObject( string $className ): string
```

* `$className` - The name of the class.

#### Examples

##### #1

```php
$object = new stdClass();

MaskedGetTypeTypes::createTypedObject( $object::class );
/**
 * object<stdClass>
 */
```

### [`MaskedGetTypeTypes::createTypedBoolean()`][srclink-MaskedGetTypeTypes-createTypedBoolean]

Creates a typed `boolean` by a specific value.

#### Definition

```php
static createTypedBoolean( bool $value ): string
```

* `$value` - The value.

#### Examples

##### #1

```php
$object = new stdClass();

MaskedGetTypeTypes::createTypedBoolean( $object::class );
/**
 * object<stdClass>
 */
```

## [`TypeHintTypes`][srclink-TypeHintTypes]

Represents an enumeration of types like PHP's type hints.

### [`TypeHintTypes::createTypedResource()`][srclink-TypeHintTypes-createTypedResource]

Creates a typed `resource` by a specific resource type.

#### Definition

```php
static createTypedResource( string $resourceType ): string
```

* `$resourceType` - The type of the `resource`.

#### Examples

##### #1

```php
$resource     = fopen( 'php://memory', 'rb' );
$resourceType = get_resource_type( $resource );

TypeHintTypes::createTypedResource( $resourceType );
/**
 * resource<stream>
 */
```

### [`TypeHintTypes::createTypedObject()`][srclink-TypeHintTypes-createTypedObject]

Creates a typed `object` by a specific class name.

#### Definition

```php
static createTypedObject( string $className ): string
```

* `$className` - The name of the class.

#### Examples

##### #1

```php
$object = new stdClass();

TypeHintTypes::createTypedObject( $object::class );
/**
 * object<stdClass>
 */
```

### [`TypeHintTypes::createTypedBoolean()`][srclink-TypeHintTypes-createTypedBoolean]

Creates a typed `boolean` by a specific value.

#### Definition

```php
static createTypedBoolean( bool $value ): string
```

* `$value` - The value.

#### Examples

##### #1

```php
$object = new stdClass();

TypeHintTypes::createTypedBoolean( $object::class );
/**
 * object<stdClass>
 */
```

## [`MaskedTypeHintTypes`][srclink-MaskedTypeHintTypes]

Represents an enumeration of masked types like PHP's type hints.

### [`MaskedTypeHintTypes::createTypedResource()`][srclink-MaskedTypeHintTypes-createTypedResource]

Creates a typed `resource` by a specific resource type.

#### Definition

```php
static createTypedResource( string $resourceType ): string
```

* `$resourceType` - The type of the `resource`.

#### Examples

##### #1

```php
$resource     = fopen( 'php://memory', 'rb' );
$resourceType = get_resource_type( $resource );

MaskedTypeHintTypes::createTypedResource( $resourceType );
/**
 * resource<stream>
 */
```

### [`MaskedTypeHintTypes::createTypedObject()`][srclink-MaskedTypeHintTypes-createTypedObject]

Creates a typed `object` by a specific class name.

#### Definition

```php
static createTypedObject( string $className ): string
```

* `$className` - The name of the class.

#### Examples

##### #1

```php
$object = new stdClass();

MaskedTypeHintTypes::createTypedObject( $object::class );
/**
 * object<stdClass>
 */
```

### [`MaskedTypeHintTypes::createTypedBoolean()`][srclink-MaskedTypeHintTypes-createTypedBoolean]

Creates a typed `boolean` by a specific value.

#### Definition

```php
static createTypedBoolean( bool $value ): string
```

* `$value` - The value.

#### Examples

##### #1

```php
$object = new stdClass();

MaskedTypeHintTypes::createTypedBoolean( $object::class );
/**
 * object<stdClass>
 */
```

### [`TypeDetermination\TypeDeterminator`][srclink-TypeDetermination-TypeDeterminator]

Represents a type determinator. A type determinator determines the type of any value.

#### Definition

```php
TypeDeterminator::determine( mixed $value, TypeDeterminationKind $kind ): string
```

* `$value` - The value to determine its type.
* `$kind` - How the determined type must be returned.
  * [`TypeDeterminationKind::GetType`][srclink-TypeDetermination-TypeDeterminationKind-GetType] if the determined type has to be identical to the returned value of PHP's function [`gettype()`][xtlink-php-net-gettype].
  * [`TypeDeterminationKind::TypeHint`][srclink-TypeDetermination-TypeDeterminationKind-TypeHint] if the determined type has to be identical to PHP's type hints.

#### Examples

##### #1

```php
$value = false;

( new TypeDeterminator() )
  ->determine( $value, TypeDeterminationKind::GetType );
/**
 * boolean
 */

( new TypeDeterminator() )
  ->determine( $value, TypeDeterminationKind::TypeHint );
/**
 * bool
 */
```

##### #2

```php
$value = 42.42;

( new TypeDeterminator() )
  ->determine( $value, TypeDeterminationKind::GetType );
/**
 * double
 */

( new TypeDeterminator() )
  ->determine( $value, TypeDeterminationKind::TypeHint );
/**
 * float
 */
```



[xtlink-php-net-gettype]: https://www.php.net/manual/en/function.gettype.php
[xtlink-php-net-ReflectionClass]: https://www.php.net/manual/en/class.reflectionclass.php
[xtlink-php-net-ReflectionObject]: https://www.php.net/manual/en/class.reflectionobject.php

[srclink-BaseObject]: ../src/BaseObject.php
[srclink-BaseObject-__toString]: ../src/BaseObject.php#L22
[srclink-BaseObject-toString]: ../src/BaseObject.php#L31
[srclink-BaseObject-getType]: ../src/BaseObject.php#L40

[srclink-Type]: ../src/Type.php
[srclink-Type-__construct]: ../src/Type.php#L19
[srclink-Type-getInstance]: ../src/Type.php#L27
[srclink-Type-getTypeName]: ../src/Type.php#L36
[srclink-Type-getReflectedClass]: ../src/Type.php#L45
[srclink-Type-getReflectedObject]: ../src/Type.php#L54
[srclink-Type-isInstanceOf]: ../src/Type.php#L63
[srclink-Type-isEqual]: ../src/Type.php#L72
[srclink-Type-isIdentical]: ../src/Type.php#L81

[srclink-GetTypeTypes]: ../src/GetTypeTypes.php
[srclink-GetTypeTypes-createTypedResource]: ../src/GetTypeTypes.php#L96
[srclink-GetTypeTypes-createTypedObject]: ../src/GetTypeTypes.php#L105
[srclink-GetTypeTypes-createTypedBoolean]: ../src/GetTypeTypes.php#L114

[srclink-MaskedGetTypeTypes]: ../src/MaskedGetTypeTypes.php
[srclink-MaskedGetTypeTypes-createTypedResource]: ../src/MaskedGetTypeTypes.php#L96
[srclink-MaskedGetTypeTypes-createTypedObject]: ../src/MaskedGetTypeTypes.php#L105
[srclink-MaskedGetTypeTypes-createTypedBoolean]: ../src/MaskedGetTypeTypes.php#L114

[srclink-TypeHintTypes]: ../src/TypeHintTypes.php
[srclink-TypeHintTypes-createTypedResource]: ../src/TypeHintTypes.php#L96
[srclink-TypeHintTypes-createTypedObject]: ../src/TypeHintTypes.php#L105
[srclink-TypeHintTypes-createTypedBoolean]: ../src/TypeHintTypes.php#L114

[srclink-MaskedTypeHintTypes]: ../src/MaskedTypeHintTypes.php
[srclink-MaskedTypeHintTypes-createTypedResource]: ../src/MaskedTypeHintTypes.php#L96
[srclink-MaskedTypeHintTypes-createTypedObject]: ../src/MaskedTypeHintTypes.php#L105
[srclink-MaskedTypeHintTypes-createTypedBoolean]: ../src/MaskedTypeHintTypes.php#L114

[srclink-TypeDetermination-TypeDeterminationKind-GetType]: ../src/TypeDetermination/TypeDeterminationKind.php#L14
[srclink-TypeDetermination-TypeDeterminationKind-TypeHint]: ../src/TypeDetermination/TypeDeterminationKind.php#L19
[srclink-TypeDetermination-TypeDeterminator]: ../src/TypeDetermination/TypeDeterminator.php
