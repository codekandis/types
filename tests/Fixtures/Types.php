<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\Fixtures;

use function get_resource_type;
use function implode;
use function sprintf;

/**
 * Represents an enumeration of types.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class Types
{
	/**
	 * Represents an invalid type.
	 * @var string
	 */
	public string $invalidType {
		get => 'invalidType';
	}

	/**
	 * Represents a `gettype()` `unknown` type.
	 * @var string
	 */
	public string $getTypeUnknownType {
		get => 'unknown type';
	}

	/**
	 * Represents a masked `gettype()` `unknown` type.
	 * @var string
	 */
	public string $maskedGetTypeTypeUnknownType {
		get => '<unknown type>';
	}

	/**
	 * Represents a type hint `unknown` type.
	 * @var string
	 */
	public string $typeHintTypeUnknownType {
		get => 'unknown-type';
	}

	/**
	 * Represents a masked type hint `unknown` type.
	 * @var string
	 */
	public string $maskedTypeHintTypeUnknownType {
		get => '<unknown-type>';
	}

	/**
	 * Represents a `gettype()` `null` type.
	 * @var string
	 */
	public string $getTypeTypeNull {
		get => 'NULL';
	}

	/**
	 * Represents a masked `gettype()` `null` type.
	 * @var string
	 */
	public string $maskedGetTypeTypeNull {
		get => '<NULL>';
	}

	/**
	 * Represents a type hint `null` type.
	 * @var string
	 */
	public string $typeHintTypeNull {
		get => 'null';
	}

	/**
	 * Represents a masked type hint `null` type.
	 * @var string
	 */
	public string $maskedTypeHintTypeNull {
		get => '<null>';
	}

	/**
	 * Represents a `gettype()` `resource`.
	 * @var string
	 */
	public string $getTypeTypeResource {
		get => 'resource';
	}

	/**
	 * Represents a masked `gettype()` `resource`.
	 * @var string
	 */
	public string $maskedGetTypeTypeResource {
		get => '<resource>';
	}

	/**
	 * Represents a type hint `resource`.
	 * @var string
	 */
	public string $typeHintTypeResource {
		get => 'resource';
	}

	/**
	 * Represents a masked type hint `resource`.
	 * @var string
	 */
	public string $maskedTypeHintTypeResource {
		get => '<resource>';
	}

	/**
	 * Represents a `gettype()` typed `resource` template.
	 * @var string
	 */
	public string $getTypeTypeTypedResourceTemplate {
		get => 'resource<%s>';
	}

	/**
	 * Represents a masked `gettype()` typed `resource` template.
	 * @var string
	 */
	public string $maskedGetTypeTypeTypedResourceTemplate {
		get => '<resource<%s>>';
	}

	/**
	 * Represents a type hint typed `resource` template.
	 * @var string
	 */
	public string $typeHintTypeTypedResourceTemplate {
		get => 'resource<%s>';
	}

	/**
	 * Represents a masked type hint typed `resource` template.
	 * @var string
	 */
	public string $maskedTypeHintTypeTypedResourceTemplate {
		get => '<resource<%s>>';
	}

	/**
	 * Represents a `gettype()` `closed resource`.
	 * @var string
	 */
	public string $getTypeTypeClosedResource {
		get => 'resource (closed)';
	}

	/**
	 * Represents a masked `gettype()` `closed resource`.
	 * @var string
	 */
	public string $maskedGetTypeTypeClosedResource {
		get => '<resource (closed)>';
	}

	/**
	 * Represents a type hint `closed resource`.
	 * @var string
	 */
	public string $typeHintTypeClosedResource {
		get => 'closed-resource';
	}

	/**
	 * Represents a masked type hint `closed resource`.
	 * @var string
	 */
	public string $maskedTypeHintTypeClosedResource {
		get => '<closed-resource>';
	}

	/**
	 * Represents a `gettype()` `array`.
	 * @var string
	 */
	public string $getTypeTypeClosedArray {
		get => 'array';
	}

	/**
	 * Represents a masked `gettype()` `array`.
	 * @var string
	 */
	public string $maskedGetTypeTypeArray {
		get => '<array>';
	}

	/**
	 * Represents a type hint `array`.
	 * @var string
	 */
	public string $typeHintTypeClosedArray {
		get => 'array';
	}

	/**
	 * Represents a masked type hint `array`.
	 * @var string
	 */
	public string $maskedTypeHintTypeArray {
		get => '<array>';
	}

	/**
	 * Represents a `gettype()` `object`.
	 * @var string
	 */
	public string $getTypeTypeClosedObject {
		get => 'object';
	}

	/**
	 * Represents a masked `gettype()` `object`.
	 * @var string
	 */
	public string $maskedGetTypeTypeObject {
		get => '<object>';
	}

	/**
	 * Represents a type hint `object`.
	 * @var string
	 */
	public string $typeHintTypeClosedObject {
		get => 'object';
	}

	/**
	 * Represents a masked type hint `object`.
	 * @var string
	 */
	public string $maskedTypeHintTypeObject {
		get => '<object>';
	}

	/**
	 * Represents a `gettype()` typed `object` template.
	 * @var string
	 */
	public string $getTypeTypeTypedObjectTemplate {
		get => 'object<%s>';
	}

	/**
	 * Represents a masked `gettype()` typed `object` template.
	 * @var string
	 */
	public string $maskedGetTypeTypeTypedObjectTemplate {
		get => '<object<%s>>';
	}

	/**
	 * Represents a type hint typed `object` template.
	 * @var string
	 */
	public string $typeHintTypeTypedObjectTemplate {
		get => 'object<%s>';
	}

	/**
	 * Represents a masked type hint typed `object` template.
	 * @var string
	 */
	public string $maskedTypeHintTypeTypedObject_TEMPLATE {
		get => '<object<%s>>';
	}

	/**
	 * Represents a `gettype()` `boolean`.
	 * @var string
	 */
	public string $getTypeTypeBoolean {
		get => 'boolean';
	}

	/**
	 * Represents a masked `gettype()` `boolean`.
	 * @var string
	 */
	public string $maskedGetTypeTypeBoolean {
		get => '<boolean>';
	}

	/**
	 * Represents a type hint `boolean`.
	 * @var string
	 */
	public string $typeHintTypeBoolean {
		get => 'bool';
	}

	/**
	 * Represents a masked type hint `boolean`.
	 * @var string
	 */
	public string $maskedTypeHintTypeBoolean {
		get => '<bool>';
	}

	/**
	 * Represents a `gettype()` typed `boolean` template.
	 * @var string
	 */
	public string $getTypeTypeTypedBooleanTemplate {
		get => 'boolean<%s>';
	}

	/**
	 * Represents a masked `gettype()` typed `boolean` template.
	 * @var string
	 */
	public string $maskedGetTypeTypeTypedBooleanTemplate {
		get => '<boolean<%s>>';
	}

	/**
	 * Represents a type hint typed `boolean` template.
	 * @var string
	 */
	public string $typeHintTypeTypedBooleanTemplate {
		get => 'bool<%s>';
	}

	/**
	 * Represents a masked type hint typed `boolean` template.
	 * @var string
	 */
	public string $maskedTypeHintTypeTypedBoolean_TEMPLATE {
		get => '<bool<%s>>';
	}

	/**
	 * Represents a `gettype()` `integer`.
	 * @var string
	 */
	public string $getTypeTypeInteger {
		get => 'integer';
	}

	/**
	 * Represents a masked `gettype()` `integer`.
	 * @var string
	 */
	public string $maskedGetTypeTypeInteger {
		get => '<integer>';
	}

	/**
	 * Represents a type hint `integer`.
	 * @var string
	 */
	public string $typeHintTypeInteger {
		get => 'int';
	}

	/**
	 * Represents a masked type hint `integer`.
	 * @var string
	 */
	public string $maskedTypeHintTypeInteger {
		get => '<int>';
	}

	/**
	 * Represents a `gettype()` `float`.
	 * @var string
	 */
	public string $getTypeTypeFloat {
		get => 'double';
	}

	/**
	 * Represents a masked `gettype()` `float`.
	 * @var string
	 */
	public string $maskedGetTypeTypeFloat {
		get => '<double>';
	}

	/**
	 * Represents a type hint `float`.
	 * @var string
	 */
	public string $typeHintTypeFloat {
		get => 'float';
	}

	/**
	 * Represents a masked type hint `float`.
	 * @var string
	 */
	public string $maskedTypeHintTypeFloat {
		get => '<float>';
	}

	/**
	 * Represents a `gettype()` `string`.
	 * @var string
	 */
	public string $getTypeTypeString {
		get => 'string';
	}

	/**
	 * Represents a masked `gettype()` `string`.
	 * @var string
	 */
	public string $maskedGetTypeTypeString {
		get => '<string>';
	}

	/**
	 * Represents a type hint `string`.
	 * @var string
	 */
	public string $typeHintTypeString {
		get => 'string';
	}

	/**
	 * Represents a masked type hint `string`.
	 * @var string
	 */
	public string $maskedTypeHintTypeString {
		get => '<string>';
	}

	/**
	 * Represents a set of an expected single `gettype()` type.
	 * @var string[]
	 */
	public array $expectedSingleGetTypeType {
		get => [
			$this->getTypeUnknownType
		];
	}

	/**
	 * Represents a set of expected `gettype()` types.
	 * @var string[]
	 */
	public array $expectedGetTypeTypes {
		get => [
			$this->getTypeUnknownType,
			$this->getTypeTypeNull,
			$this->getTypeTypeResource,
			$this->getTypeTypeClosedResource,
			$this->getTypeTypeClosedArray,
			$this->getTypeTypeClosedObject,
			$this->getTypeTypeBoolean,
			$this->getTypeTypeInteger,
			$this->getTypeTypeFloat,
			$this->getTypeTypeString
		];
	}

	/**
	 * Represents a set of an expected single masked `gettype()` type.
	 * @var string[]
	 */
	public array $expectedSingletMaskedGetTypeType {
		get => [
			$this->maskedGetTypeTypeUnknownType
		];
	}

	/**
	 * Represents a set of expected masked `gettype()` types.
	 * @var string[]
	 */
	public array $expectedMaskedGetTypeTypes {
		get => [
			$this->maskedGetTypeTypeUnknownType,
			$this->maskedGetTypeTypeNull,
			$this->maskedGetTypeTypeResource,
			$this->maskedGetTypeTypeClosedResource,
			$this->maskedGetTypeTypeArray,
			$this->maskedGetTypeTypeObject,
			$this->maskedGetTypeTypeBoolean,
			$this->maskedGetTypeTypeInteger,
			$this->maskedGetTypeTypeFloat,
			$this->maskedGetTypeTypeString
		];
	}

	/**
	 * Represents a set of an expected single type hint type.
	 * @var string[]
	 */
	public array $expectedSingleTypeHintType {
		get => [
			$this->typeHintTypeUnknownType
		];
	}

	/**
	 * Represents a set of expected type hint types.
	 * @var string[]
	 */
	public array $expectedTypeHintTypes {
		get => [
			$this->typeHintTypeUnknownType,
			$this->typeHintTypeNull,
			$this->typeHintTypeResource,
			$this->typeHintTypeClosedResource,
			$this->typeHintTypeClosedArray,
			$this->typeHintTypeClosedObject,
			$this->typeHintTypeBoolean,
			$this->typeHintTypeInteger,
			$this->typeHintTypeFloat,
			$this->typeHintTypeString
		];
	}

	/**
	 * Represents a set of an expected single masked type hint type.
	 * @var string[]
	 */
	public array $expectedSingleMaskedTypeHintType {
		get => [
			$this->maskedTypeHintTypeUnknownType
		];
	}

	/**
	 * Represents a set of expected masked type hint types.
	 * @var string[]
	 */
	public array $expectedMaskedTypeHintTypes {
		get => [
			$this->maskedTypeHintTypeUnknownType,
			$this->maskedTypeHintTypeNull,
			$this->maskedTypeHintTypeResource,
			$this->maskedTypeHintTypeClosedResource,
			$this->maskedTypeHintTypeArray,
			$this->maskedTypeHintTypeObject,
			$this->maskedTypeHintTypeBoolean,
			$this->maskedTypeHintTypeInteger,
			$this->maskedTypeHintTypeFloat,
			$this->maskedTypeHintTypeString
		];
	}

	/**
	 * Creates a `gettype()` typed `resource` type of a specific resource type.
	 * @param string $resourceType The resource type to create the `gettype()` typed `resource` type from.
	 * @return string The created `gettype()` typed `resource` type.
	 */
	public function createGetTypeTypedResourceTypeByResourceType( string $resourceType ): string
	{
		return sprintf( $this->getTypeTypeTypedResourceTemplate, $resourceType );
	}

	/**
	 * Creates a `gettype()` typed `resource` type of a specific resource.
	 * @param resource $resource The resource to create the `gettype()` typed `resource` type from.
	 * @return string The created `gettype()` typed `resource` type.
	 */
	public function createGetTypeTypedResourceTypeByResource( $resource ): string
	{
		return $this->createGetTypeTypedResourceTypeByResourceType(
			get_resource_type( $resource )
		);
	}

	/**
	 * Creates a `gettype()` typed `object` type of a specific class name.
	 * @param string $className The class name to create the `gettype()` typed `object` type from.
	 * @return string The created `gettype()` typed `object` type.
	 */
	public function createGetTypeTypedObjectTypeByClassName( string $className ): string
	{
		return sprintf( $this->getTypeTypeTypedObjectTemplate, $className );
	}

	/**
	 * Creates a `gettype()` typed `object` type of a specific object.
	 * @param object $object The object to create the `gettype()` typed `object` type from.
	 * @return string The created `gettype()` typed `object` type.
	 */
	public function createGetTypeTypedObjectTypeByObject( object $object ): string
	{
		return $this->createGetTypeTypedObjectTypeByClassName( $object::class );
	}

	/**
	 * Creates a `gettype()` typed `boolean` type of a specific value.
	 * @param bool $value The value to create the `gettype()` typed `boolean` type from.
	 * @return string The created `gettype()` typed `boolean` type.
	 */
	public function createGetTypeTypedBooleanTypeByValue( bool $value ): string
	{
		return sprintf(
			$this->getTypeTypeTypedBooleanTemplate,
			false === $value
				? 'false'
				: 'true'
		);
	}

	/**
	 * Creates a masked `gettype()` typed `resource` type of a specific resource type.
	 * @param string $resourceType The resource type to create the masked `gettype()` typed `resource` type from.
	 * @return string The created masked `gettype()` typed `resource` type.
	 */
	public function createMaskedGetTypeTypedResourceTypeByResourceType( string $resourceType ): string
	{
		return sprintf( $this->maskedGetTypeTypeTypedResourceTemplate, $resourceType );
	}

	/**
	 * Creates a masked `gettype()` typed `object` type of a specific class name.
	 * @param string $className The class name to create the masked `gettype()` typed `object` type from.
	 * @return string The created masked `gettype()` typed `object` type.
	 */
	public function createMaskedGetTypeTypedObjectTypeByClassName( string $className ): string
	{
		return sprintf( $this->maskedGetTypeTypeTypedObjectTemplate, $className );
	}

	/**
	 * Creates a masked `gettype()` typed `boolean` type of a specific value.
	 * @param bool $value The value to create the masked `gettype()` typed `boolean` type from.
	 * @return string The created masked `gettype()` typed `boolean` type.
	 */
	public function createMaskedGetTypeTypedBooleanTypeByValue( bool $value ): string
	{
		return sprintf(
			$this->maskedGetTypeTypeTypedBooleanTemplate,
			false === $value
				? 'false'
				: 'true'
		);
	}

	/**
	 * Creates a type hint typed `resource` type of a specific resource type.
	 * @param string $resourceType The resource type to create the type hint typed `resource` type from.
	 * @return string The created type hint typed `resource` type.
	 */
	public function createTypeHintTypedResourceTypeByResourceType( string $resourceType ): string
	{
		return sprintf( $this->typeHintTypeTypedResourceTemplate, $resourceType );
	}

	/**
	 * Creates a type hint typed `resource` type of a specific resource.
	 * @param resource $resource The resource to create the type hint typed `resource` type from.
	 * @return string The created type hint typed `resource` type.
	 */
	public function createTypeHintTypedResourceTypeByResource( $resource ): string
	{
		return $this->createTypeHintTypedResourceTypeByResourceType(
			get_resource_type( $resource )
		);
	}

	/**
	 * Creates a type hint typed `object` type of a specific object.
	 * @param string $className The class name to create the type hint typed `object` type from.
	 * @return string The created type hint typed `object` type.
	 */
	public function createTypeHintTypedObjectTypeByClassName( string $className ): string
	{
		return sprintf( $this->typeHintTypeTypedObjectTemplate, $className );
	}

	/**
	 * Creates a type hint typed `object` type of a specific object.
	 * @param object $object The object to create the type hint typed `object` type from.
	 * @return string The created type hint typed `object` type.
	 */
	public function createTypeHintTypedObjectTypeByObject( object $object ): string
	{
		return $this->createTypeHintTypedObjectTypeByClassName( $object::class );
	}

	/**
	 * Creates a type hint typed `boolean` type of a specific value.
	 * @param bool $value The value to create the type hint typed `boolean` type from.
	 * @return string The created type hint typed `boolean` type.
	 */
	public function createTypeHintTypedBooleanTypeByValue( bool $value ): string
	{
		return sprintf(
			$this->typeHintTypeTypedBooleanTemplate,
			false === $value
				? 'false'
				: 'true'
		);
	}

	/**
	 * Creates a masked type hint typed `resource` type of a specific resource type.
	 * @param string $resourceType The resource type to create the masked type hint typed `resource` type from.
	 * @return string The created masked type hint typed `resource` type.
	 */
	public function createMaskedTypeHintTypedResourceTypeByResourceType( string $resourceType ): string
	{
		return sprintf( $this->maskedTypeHintTypeTypedResourceTemplate, $resourceType );
	}

	/**
	 * Creates a masked type hint typed `resource` type of a specific resource.
	 * @param resource $resource The resource to create the masked type hint typed `resource` type from.
	 * @return string The created masked type hint typed `resource` type.
	 */
	public function createMaskedTypeHintTypedResourceTypeByResource( $resource ): string
	{
		return $this->createMaskedTypeHintTypedResourceTypeByResourceType(
			get_resource_type( $resource )
		);
	}

	/**
	 * Creates a masked type hint typed `object` type of a specific object.
	 * @param string $className The class name to create the masked type hint typed `object` type from.
	 * @return string The masked created type hint typed `object` type.
	 */
	public function createMaskedTypeHintTypedObjectTypeByClassName( string $className ): string
	{
		return sprintf( $this->maskedTypeHintTypeTypedObject_TEMPLATE, $className );
	}

	/**
	 * Creates a masked type hint typed `object` type of a specific object.
	 * @param object $object The object to create the masked type hint typed `object` type from.
	 * @return string The created masked type hint typed `object` type.
	 */
	public function createMaskedTypeHintTypedObjectTypeByObject( object $object ): string
	{
		return $this->createMaskedTypeHintTypedObjectTypeByClassName( $object::class );
	}

	/**
	 * Creates a masked type hint typed `boolean` type of a specific value.
	 * @param bool $value The value to create the masked type hint typed `boolean` type from.
	 * @return string The created masked type hint typed `boolean` type.
	 */
	public function createMaskedTypeHintTypedBooleanTypeByValue( bool $value ): string
	{
		return sprintf(
			$this->maskedTypeHintTypeTypedBoolean_TEMPLATE,
			false === $value
				? 'false'
				: 'true'
		);
	}

	/**
	 * Creates a string of an expected single `gettype()` type.
	 * @return string The created string of an expected single `gettype()` type.
	 */
	public function createConcatinatedExpectedSingleGetTypeType(): string
	{
		return implode( ' | ', $this->expectedSingleGetTypeType );
	}

	/**
	 * Creates a string of expected `gettype()` types.
	 * @return string The created string of expected `gettype()` types.
	 */
	public function createConcatinatedExpectedGetTypeTypes(): string
	{
		return implode( ' | ', $this->expectedGetTypeTypes );
	}

	/**
	 * Creates a string of an expected singlemasked `gettype()` type.
	 * @return string The created string of an expected singlemasked `gettype()` type.
	 */
	public function createConcatinatedExpectedSingleMaskedGetTypeType(): string
	{
		return implode( ' | ', $this->expectedSingletMaskedGetTypeType );
	}

	/**
	 * Creates a string of expectedmasked `gettype()` types.
	 * @return string The created string of expectedmasked `gettype()` types.
	 */
	public function createConcatinatedExpectedMaskedGetTypeTypes(): string
	{
		return implode( ' | ', $this->expectedMaskedGetTypeTypes );
	}

	/**
	 * Creates a string of an expected single type hint type.
	 * @return string The created string of an expected single type hint type.
	 */
	public function createConcatinatedExpectedSingleTypeHintType(): string
	{
		return implode( ' | ', $this->expectedSingleTypeHintType );
	}

	/**
	 * Creates a string of expected type hint types.
	 * @return string The created string of expected type hint types.
	 */
	public function createConcatinatedExpectedTypeHintTypes(): string
	{
		return implode( ' | ', $this->expectedTypeHintTypes );
	}

	/**
	 * Creates a string of an expected single masked type hint type.
	 * @return string The created string of an expected single masked type hint type.
	 */
	public function createConcatinatedExpectedSingleMaskedTypeHintType(): string
	{
		return implode( ' | ', $this->expectedSingleMaskedTypeHintType );
	}

	/**
	 * Creates a string of expected masked type hint types.
	 * @return string The created string of expected masked type hint types.
	 */
	public function createConcatinatedExpectedMaskedTypeHintTypes(): string
	{
		return implode( ' | ', $this->expectedMaskedTypeHintTypes );
	}
}
