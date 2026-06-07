# Documentation

[Back to project README][doclink-project-readme]

## Index

* [Introduction](#introduction)
* [Contents](#contents)
* [Reading guide](#reading-guide)

## Introduction

`codekandis/types` provides reusable building blocks for object metadata, type string determination and exception
categories.

The package is intentionally small. It does not validate application-specific rules. It gives other packages stable
contracts, deterministic type descriptions and exception types with human-readable messages.

## Contents

* [Objects][doclink-objects]
  Object contracts, `BaseObject`, `TypeInterface`, `Type` and object comparison semantics.
* [Type strings][doclink-type-strings]
  Static type string collections for `gettype()` style values, type-hint style values and masked values.
* [Type determination][doclink-type-determination]
  Runtime type string determination through `TypeDeterminer` and `TypeDeterminationKind`.
* [Value stringification][doclink-value-stringification]
  Message-oriented value stringification for exception messages.
* [Exceptions][doclink-exceptions]
  Exception categories, named constructors and when each exception type should be used.
* [Source reference][doclink-source-reference]
  Complete source file index for public contracts, classes, traits, enums and exceptions.

## Reading guide

Start with [objects][doclink-objects] if a package needs metadata for object instances.

Use [type strings][doclink-type-strings] and [type determination][doclink-type-determination] when runtime values must
be represented as deterministic type names.

Use [value stringification][doclink-value-stringification] when a value must be converted into a readable exception
message fragment.

Use [exceptions][doclink-exceptions] when selecting the correct failure category. That document is the semantic entry
point for the exception hierarchy.



[doclink-exceptions]: ./exceptions.md
[doclink-objects]: ./objects.md
[doclink-project-readme]: ../README.md
[doclink-source-reference]: ./source-reference.md
[doclink-type-determination]: ./type-determination.md
[doclink-type-strings]: ./type-strings.md
[doclink-value-stringification]: ./value-stringification.md
