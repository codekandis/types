<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\TypeDetermination\TypeDeterminerInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\Tests\Fixtures\Types;
use CodeKandis\Types\Tests\Fixtures\Values;
use CodeKandis\Types\TypeDetermination\TypeDeterminationKind;
use CodeKandis\Types\TypeDetermination\TypeDeterminer;
use Override;

/**
 * Represents a data provider providing type determiners with value, kind and expected type.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class TypeDeterminersWithValueKindAndExpectedValuesDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::NULL,
				'kind'           => TypeDeterminationKind::GetType,
				'expectedType'   => new Types()->getTypeTypeNull
			],
			1  => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::NULL,
				'kind'           => TypeDeterminationKind::GetTypeDetailed,
				'expectedType'   => new Types()->getTypeTypeNull
			],
			2  => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::NULL,
				'kind'           => TypeDeterminationKind::TypeHint,
				'expectedType'   => new Types()->typeHintTypeNull
			],
			3  => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::NULL,
				'kind'           => TypeDeterminationKind::TypeHintDetailed,
				'expectedType'   => new Types()->typeHintTypeNull
			],
			4  => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::createResource(),
				'kind'           => TypeDeterminationKind::GetType,
				'expectedType'   => new Types()->getTypeTypeResource
			],
			5  => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => $value = Values::createResource(),
				'kind'           => TypeDeterminationKind::GetTypeDetailed,
				'expectedType'   => new Types()->createGetTypeTypedResourceTypeByResource( $value )
			],
			6  => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::createResource(),
				'kind'           => TypeDeterminationKind::TypeHint,
				'expectedType'   => new Types()->typeHintTypeResource
			],
			7  => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => $value = Values::createResource(),
				'kind'           => TypeDeterminationKind::TypeHintDetailed,
				'expectedType'   => new Types()->createTypeHintTypedResourceTypeByResource( $value )
			],
			8  => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::createClosedResource(),
				'kind'           => TypeDeterminationKind::GetType,
				'expectedType'   => new Types()->getTypeTypeClosedResource
			],
			9  => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::createClosedResource(),
				'kind'           => TypeDeterminationKind::GetTypeDetailed,
				'expectedType'   => new Types()->getTypeTypeClosedResource
			],
			10 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::createClosedResource(),
				'kind'           => TypeDeterminationKind::TypeHint,
				'expectedType'   => new Types()->typeHintTypeClosedResource
			],
			11 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::createClosedResource(),
				'kind'           => TypeDeterminationKind::TypeHintDetailed,
				'expectedType'   => new Types()->typeHintTypeClosedResource
			],
			12 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::ARRAY,
				'kind'           => TypeDeterminationKind::GetType,
				'expectedType'   => new Types()->getTypeTypeClosedArray
			],
			13 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::ARRAY,
				'kind'           => TypeDeterminationKind::GetTypeDetailed,
				'expectedType'   => new Types()->getTypeTypeClosedArray
			],
			14 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::ARRAY,
				'kind'           => TypeDeterminationKind::TypeHint,
				'expectedType'   => new Types()->typeHintTypeClosedArray
			],
			15 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::ARRAY,
				'kind'           => TypeDeterminationKind::TypeHintDetailed,
				'expectedType'   => new Types()->typeHintTypeClosedArray
			],
			16 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::createStdClassObject(),
				'kind'           => TypeDeterminationKind::GetType,
				'expectedType'   => new Types()->getTypeTypeClosedObject
			],
			17 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => $value = Values::createStdClassObject(),
				'kind'           => TypeDeterminationKind::GetTypeDetailed,
				'expectedType'   => new Types()->createGetTypeTypedObjectTypeByObject( $value )
			],
			18 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::createStdClassObject(),
				'kind'           => TypeDeterminationKind::TypeHint,
				'expectedType'   => new Types()->typeHintTypeClosedObject
			],
			19 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => $value = Values::createStdClassObject(),
				'kind'           => TypeDeterminationKind::TypeHintDetailed,
				'expectedType'   => new Types()->createTypeHintTypedObjectTypeByObject( $value )
			],
			20 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::createStandardObjectFixture(),
				'kind'           => TypeDeterminationKind::GetType,
				'expectedType'   => new Types()->getTypeTypeClosedObject
			],
			21 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => $value = Values::createStandardObjectFixture(),
				'kind'           => TypeDeterminationKind::GetTypeDetailed,
				'expectedType'   => new Types()->createGetTypeTypedObjectTypeByObject( $value )
			],
			22 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::createStandardObjectFixture(),
				'kind'           => TypeDeterminationKind::TypeHint,
				'expectedType'   => new Types()->typeHintTypeClosedObject
			],
			23 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => $value = Values::createStandardObjectFixture(),
				'kind'           => TypeDeterminationKind::TypeHintDetailed,
				'expectedType'   => new Types()->createTypeHintTypedObjectTypeByObject( $value )
			],
			24 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::createInheritedStandardObjectFixture(),
				'kind'           => TypeDeterminationKind::GetType,
				'expectedType'   => new Types()->getTypeTypeClosedObject
			],
			25 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => $value = Values::createInheritedStandardObjectFixture(),
				'kind'           => TypeDeterminationKind::GetTypeDetailed,
				'expectedType'   => new Types()->createGetTypeTypedObjectTypeByObject( $value )
			],
			26 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::createInheritedStandardObjectFixture(),
				'kind'           => TypeDeterminationKind::TypeHint,
				'expectedType'   => new Types()->typeHintTypeClosedObject
			],
			27 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => $value = Values::createInheritedStandardObjectFixture(),
				'kind'           => TypeDeterminationKind::TypeHintDetailed,
				'expectedType'   => new Types()->createTypeHintTypedObjectTypeByObject( $value )
			],
			28 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::createBaseObjectFixture(),
				'kind'           => TypeDeterminationKind::GetType,
				'expectedType'   => new Types()->getTypeTypeClosedObject
			],
			29 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => $value = Values::createBaseObjectFixture(),
				'kind'           => TypeDeterminationKind::GetTypeDetailed,
				'expectedType'   => new Types()->createGetTypeTypedObjectTypeByObject( $value )
			],
			30 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::createBaseObjectFixture(),
				'kind'           => TypeDeterminationKind::TypeHint,
				'expectedType'   => new Types()->typeHintTypeClosedObject
			],
			31 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => $value = Values::createBaseObjectFixture(),
				'kind'           => TypeDeterminationKind::TypeHintDetailed,
				'expectedType'   => new Types()->createTypeHintTypedObjectTypeByObject( $value )
			],
			32 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::createInheritedBaseObjectFixture(),
				'kind'           => TypeDeterminationKind::GetType,
				'expectedType'   => new Types()->getTypeTypeClosedObject
			],
			33 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => $value = Values::createInheritedBaseObjectFixture(),
				'kind'           => TypeDeterminationKind::GetTypeDetailed,
				'expectedType'   => new Types()->createGetTypeTypedObjectTypeByObject( $value )
			],
			34 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::createInheritedBaseObjectFixture(),
				'kind'           => TypeDeterminationKind::TypeHint,
				'expectedType'   => new Types()->typeHintTypeClosedObject
			],
			35 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => $value = Values::createInheritedBaseObjectFixture(),
				'kind'           => TypeDeterminationKind::TypeHintDetailed,
				'expectedType'   => new Types()->createTypeHintTypedObjectTypeByObject( $value )
			],
			36 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::BOOLEAN_FALSE,
				'kind'           => TypeDeterminationKind::GetType,
				'expectedType'   => new Types()->getTypeTypeBoolean
			],
			37 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::BOOLEAN_TRUE,
				'kind'           => TypeDeterminationKind::GetType,
				'expectedType'   => new Types()->getTypeTypeBoolean
			],
			38 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => $value = Values::BOOLEAN_FALSE,
				'kind'           => TypeDeterminationKind::GetTypeDetailed,
				'expectedType'   => new Types()->createGetTypeTypedBooleanTypeByValue( $value )
			],
			39 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => $value = Values::BOOLEAN_TRUE,
				'kind'           => TypeDeterminationKind::GetTypeDetailed,
				'expectedType'   => new Types()->createGetTypeTypedBooleanTypeByValue( $value )
			],
			40 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::BOOLEAN_FALSE,
				'kind'           => TypeDeterminationKind::TypeHint,
				'expectedType'   => new Types()->typeHintTypeBoolean
			],
			41 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::BOOLEAN_TRUE,
				'kind'           => TypeDeterminationKind::TypeHint,
				'expectedType'   => new Types()->typeHintTypeBoolean
			],
			42 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => $value = Values::BOOLEAN_FALSE,
				'kind'           => TypeDeterminationKind::TypeHintDetailed,
				'expectedType'   => new Types()->createTypeHintTypedBooleanTypeByValue( $value )
			],
			43 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => $value = Values::BOOLEAN_TRUE,
				'kind'           => TypeDeterminationKind::TypeHintDetailed,
				'expectedType'   => new Types()->createTypeHintTypedBooleanTypeByValue( $value )
			],
			44 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::INTEGER,
				'kind'           => TypeDeterminationKind::GetType,
				'expectedType'   => new Types()->getTypeTypeInteger
			],
			45 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::INTEGER,
				'kind'           => TypeDeterminationKind::GetTypeDetailed,
				'expectedType'   => new Types()->getTypeTypeInteger
			],
			46 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::INTEGER,
				'kind'           => TypeDeterminationKind::TypeHint,
				'expectedType'   => new Types()->typeHintTypeInteger
			],
			47 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::INTEGER,
				'kind'           => TypeDeterminationKind::TypeHintDetailed,
				'expectedType'   => new Types()->typeHintTypeInteger
			],
			48 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::FLOAT,
				'kind'           => TypeDeterminationKind::GetType,
				'expectedType'   => new Types()->getTypeTypeFloat
			],
			49 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::FLOAT,
				'kind'           => TypeDeterminationKind::GetTypeDetailed,
				'expectedType'   => new Types()->getTypeTypeFloat
			],
			50 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::FLOAT,
				'kind'           => TypeDeterminationKind::TypeHint,
				'expectedType'   => new Types()->typeHintTypeFloat
			],
			51 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::FLOAT,
				'kind'           => TypeDeterminationKind::TypeHintDetailed,
				'expectedType'   => new Types()->typeHintTypeFloat
			],
			52 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::STRING,
				'kind'           => TypeDeterminationKind::GetType,
				'expectedType'   => new Types()->getTypeTypeString
			],
			53 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::STRING,
				'kind'           => TypeDeterminationKind::GetTypeDetailed,
				'expectedType'   => new Types()->getTypeTypeString
			],
			54 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::STRING,
				'kind'           => TypeDeterminationKind::TypeHint,
				'expectedType'   => new Types()->typeHintTypeString
			],
			55 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::STRING,
				'kind'           => TypeDeterminationKind::TypeHintDetailed,
				'expectedType'   => new Types()->typeHintTypeString
			]
		];
	}
}
