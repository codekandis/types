# Exceptions

[Back to documentation index][doclink-documentation-index] | [Back to project README][doclink-project-readme]

## Index

* [Model](#model)
* [Constructor behavior](#constructor-behavior)
* [Exception interfaces](#exception-interfaces)
* [Base categories](#base-categories)
* [Symbol not-found exceptions](#symbol-not-found-exceptions)
* [Constant and member not-found exceptions](#constant-and-member-not-found-exceptions)
* [Object existence exceptions](#object-existence-exceptions)
* [Invalid value, index, offset and type exceptions](#invalid-value-index-offset-and-type-exceptions)
* [Range exceptions](#range-exceptions)
* [Value state exceptions](#value-state-exceptions)
* [Operation exceptions](#operation-exceptions)
* [Unexpected errors](#unexpected-errors)
* [Source reference](#source-reference)

## Model

Exception classes in this package describe failure categories.

The class type is the machine-readable signal. The message is human-readable context.

The package does not decide whether application data is valid. Application code makes that decision and chooses the
exception type that communicates the failure category.

Named constructors build common message variants. They keep the usual throwable `code` and `previous` arguments unless
the concrete named constructor documents a different shape.

## Constructor behavior

Concrete exception classes define `EXCEPTION_MESSAGE_DEFAULT`.

Passing an empty message to the constructor uses the default message.

```php
use CodeKandis\Types\RuntimeException;

$throwable = new RuntimeException();

$throwable->getMessage();
// A runtime error occurred.
```

## Exception interfaces

Concrete exception classes implement matching exception interfaces.

The interfaces are useful when callers want to catch a package-specific category without depending on a concrete class.
The behavioral contract is carried by the exception class and its constructor semantics.

## Base categories

`DomainException` represents a domain error and extends PHP's `DomainException`.

Use it when a value violates a domain rule and no more specific exception in this package fits.

`LogicException` represents a logic error and extends PHP's `LogicException`.

Use it for failures caused by invalid code state or invalid use of an API.

`AccessErrorException` extends `LogicException`.

Use it for access failures. In this package that mostly means failed symbol, member or object access. The category is
broader than PHP reflection access and can also fit other access domains in packages built on top of this one.

`RuntimeException` represents a runtime error and extends PHP's `RuntimeException`.

Use it for failures that arise from runtime values or runtime state.

`ErrorException` and `FatalErrorException` specialize runtime errors for error-like failure categories.

## Symbol not-found exceptions

Symbol not-found exceptions describe missing PHP symbols by FQCN.

Use `InterfaceClassEnumOrTraitNotFoundException` when any interface, class, enum or trait would be acceptable.

Use `InterfaceClassOrEnumNotFoundException` when traits are explicitly not part of the accepted set.

Use `InterfaceOrClassNotFoundException` when only interfaces or classes are accepted.

Use `InterfaceNotFoundException`, `ClassNotFoundException`, `EnumNotFoundException` or `TraitNotFoundException` when
the expected symbol kind is known.

Use `BackedEnumNotFoundException`, `IntegerBackedEnumNotFoundException` or `StringBackedEnumNotFoundException` when
the expected enum kind is known more precisely.

All these exceptions provide:

```php
withNonexistentFqcn( string $nonexistentFqcn, int $code = 0, ?Throwable $previous = null ): static
```

Example:

```php
use CodeKandis\Types\ClassNotFoundException;

throw ClassNotFoundException::withNonexistentFqcn( 'Vendor\\Package\\MissingClass' );
```

## Constant and member not-found exceptions

`ConstantNotFoundException` describes a missing global constant.

Use it for constants created through PHP's global constant system, for example `define()`.

`InterfaceOrClassConstantNotFoundException` describes a missing interface or class constant by FQCN and constant name.

Use it when the owner is an interface or class and the constant name is known.

`InterfaceOrClassConstantValueNotFoundException` describes a missing constant value on an interface or class.

Use it when lookup is value-driven instead of name-driven.

`PropertyNotFoundException` describes a missing property by FQCN and property name.

Use `PublicPropertyNotFoundException`, `ProtectedPropertyNotFoundException` or `PrivatePropertyNotFoundException` when
the expected visibility is part of the failure category.

`MethodNotFoundException` describes a missing method by FQCN and method name.

Use `PublicMethodNotFoundException`, `ProtectedMethodNotFoundException` or `PrivateMethodNotFoundException` when the
expected visibility is part of the failure category.

Named constructors:

```php
withNonexistentConstantName( string $nonexistentConstantName, int $code = 0, ?Throwable $previous = null ): static

withFqcnAndNonexistentConstantName(
	string $fqcn,
	string $nonexistentConstantName,
	int $code = 0,
	?Throwable $previous = null
): static

withFqcnAndNonexistentConstantValue(
	string $fqcn,
	null | bool | int | float | string | array $nonexistentConstantValue,
	int $code = 0,
	?Throwable $previous = null
): static

withFqcnAndNonexistentPropertyName(
	string $fqcn,
	string $nonexistentPropertyName,
	int $code = 0,
	?Throwable $previous = null
): static

withFqcnAndNonexistentMethodName(
	string $fqcn,
	string $nonexistentMethodName,
	int $code = 0,
	?Throwable $previous = null
): static
```

Example:

```php
use CodeKandis\Types\PrivateMethodNotFoundException;

throw PrivateMethodNotFoundException::withFqcnAndNonexistentMethodName(
	'Vendor\\Package\\Example',
	'execute'
);
```

## Object existence exceptions

`ObjectNotFoundException` describes a missing object.

Use `withNonexistentFqcn()` when the missing object is identified by the represented object's FQCN.

Use `withNonexistentQualifiedObjectId()` when the missing object is identified by a qualified object ID in the form
`object(FQCN)#id`.

`DuplicateObjectException` describes a duplicated object.

Use `withDuplicatedFqcn()` when duplication is detected by FQCN.

Use `withDuplicatedQualifiedObjectId()` when duplication is detected by qualified object ID.

```php
use CodeKandis\Types\ObjectNotFoundException;

throw ObjectNotFoundException::withNonexistentQualifiedObjectId( 'object(Vendor\\Package\\Example)#42' );
```

## Invalid value, index, offset and type exceptions

`InvalidValueException` describes a value that is not allowed in the current context.

Use `withInvalidValue()` when the invalid value itself is enough context.

Use `withInvalidValueAndExpectedValues()` when the message should also list expected values.

`InvalidTypeException` describes an invalid type string.

Use it when a type name is the subject of the failure, not when an arbitrary runtime value has the wrong shape.

`InvalidTypeException::withInvalidTypeAndExpectedTypes()` requires at least one expected type. Every expected type must
be a string. Invalid expected type metadata throws an exception before the target exception is created.

`InvalidIndexException` describes an index that is not allowed.

`IndexNotFoundException` describes an index that does not exist.

`InvalidOffsetException` describes an offset that is not allowed.

The distinction is semantic:

* invalid means "this value is not accepted here"
* not found means "this value would be acceptable, but no entry exists"
* out of range means "this value is ordered, but outside the allowed boundaries"

Indices and offsets accept `mixed` values. This is deliberate. PHP arrays are not the only possible offset/index
domain, and `ArrayAccess` implementations can define their own accepted offset model.

Named constructors:

```php
withInvalidValue( mixed $invalidValue, int $code = 0, ?Throwable $previous = null ): static

withInvalidValueAndExpectedValues(
	mixed $invalidValue,
	array $expectedValues,
	int $code = 0,
	?Throwable $previous = null
): static

withInvalidType( string $invalidType, int $code = 0, ?Throwable $previous = null ): static

withInvalidTypeAndExpectedTypes(
	string $invalidType,
	array $expectedTypes,
	int $code = 0,
	?Throwable $previous = null
): static

withInvalidIndex( mixed $invalidIndex, int $code = 0, ?Throwable $previous = null ): static

withInvalidIndexAndExpectedIndices(
	mixed $invalidIndex,
	array $expectedIndices,
	int $code = 0,
	?Throwable $previous = null
): static

withNonexistentIndex( mixed $nonexistentIndex, int $code = 0, ?Throwable $previous = null ): static

withNonexistentIndexAndExpectedIndices(
	mixed $nonexistentIndex,
	array $expectedIndices,
	int $code = 0,
	?Throwable $previous = null
): static

withInvalidOffset( mixed $invalidOffset, int $code = 0, ?Throwable $previous = null ): static

withInvalidOffsetAndExpectedOffsets(
	mixed $invalidOffset,
	array $expectedOffsets,
	int $code = 0,
	?Throwable $previous = null
): static
```

## Range exceptions

`IndexOutOfRangeException` describes an ordered index outside an accepted range.

`OffsetOutOfRangeException` describes an ordered offset outside an accepted range.

Out of range does not imply integer-only. It implies an order. A date outside a date window is out of range even though
it is not numeric.

Named constructors:

```php
withOutOfRangeIndex( mixed $outOfRangeIndex, int $code = 0, ?Throwable $previous = null ): static

withOutOfRangeIndexExpectedMinIndexAndExpectedMaxIndex(
	mixed $outOfRangeIndex,
	mixed $expectedMinIndex,
	mixed $expectedMaxIndex,
	int $code = 0,
	?Throwable $previous = null
): static

withOutOfRangeOffset( mixed $outOfRangeOffset, int $code = 0, ?Throwable $previous = null ): static

withOutOfRangeOffsetExpectedMinOffsetAndExpectedMaxOffset(
	mixed $outOfRangeOffset,
	mixed $expectedMinOffset,
	mixed $expectedMaxOffset,
	int $code = 0,
	?Throwable $previous = null
): static
```

Example:

```php
use CodeKandis\Types\OffsetOutOfRangeException;

throw OffsetOutOfRangeException::withOutOfRangeOffsetExpectedMinOffsetAndExpectedMaxOffset(
	'2026-06-07',
	'2026-01-01',
	'2026-12-31'
);
```

## Value state exceptions

`ValueIsEmptyException` describes a value that is empty when it must not be empty.

`ValueIsNotEmptyException` describes a value that is not empty when it must be empty.

`ValueIsNullException` describes a value that is `null` when it must not be `null`.

`ValueIsNotNullException` describes a value that is not `null` when it must be `null`.

Named constructors exist for the variants where the actual value is useful message context:

```php
withNonEmptyValue( mixed $nonEmptyValue, int $code = 0, ?Throwable $previous = null ): static

withNonNullValue( mixed $nonNullValue, int $code = 0, ?Throwable $previous = null ): static
```

## Operation exceptions

`UnsupportedOperationException` describes an operation that is not supported.

Use it when the operation is not part of the supported capability set.

`NotImplementedOperationException` describes an operation that is known, but not implemented.

Use it when an API surface exists but the implementation intentionally does not provide behavior yet.

The distinction matters:

* unsupported means "this operation does not belong here"
* not implemented means "this operation belongs here, but has no implementation"

## Unexpected errors

`UnexpectedErrorException` wraps a previously caught throwable when a lower-level failure must be raised as a package
runtime error.

Its named constructor differs from the general `code` and `previous` shape:

```php
withPreviouslyCatchedThrowable( Throwable $previouslyCatchedThrowable, int $code = 0 ): static
```

The passed throwable becomes the previous throwable.

```php
use CodeKandis\Types\UnexpectedErrorException;

try
{
	// application code
}
catch ( Throwable $throwable )
{
	throw UnexpectedErrorException::withPreviouslyCatchedThrowable( $throwable );
}
```

## Source reference

See the complete [source reference][doclink-source-reference].



[doclink-documentation-index]: ./README.md
[doclink-project-readme]: ../README.md
[doclink-source-reference]: ./source-reference.md
