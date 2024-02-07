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
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::NULL,
				'kind'           => TypeDeterminationKind::GetType,
				'expectedType'   => Types::GET_TYPE_TYPE_NULL
			],
			1  => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::NULL,
				'kind'           => TypeDeterminationKind::GetTypeDetailed,
				'expectedType'   => Types::GET_TYPE_TYPE_NULL
			],
			2  => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::NULL,
				'kind'           => TypeDeterminationKind::TypeHint,
				'expectedType'   => Types::TYPE_HINT_TYPE_NULL
			],
			3  => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::NULL,
				'kind'           => TypeDeterminationKind::TypeHintDetailed,
				'expectedType'   => Types::TYPE_HINT_TYPE_NULL
			],
			4  => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::createResource(),
				'kind'           => TypeDeterminationKind::GetType,
				'expectedType'   => Types::GET_TYPE_TYPE_RESOURCE
			],
			5  => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => $value = Values::createResource(),
				'kind'           => TypeDeterminationKind::GetTypeDetailed,
				'expectedType'   => Types::createGetTypeTypedResourceTypeByResource( $value )
			],
			6  => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::createResource(),
				'kind'           => TypeDeterminationKind::TypeHint,
				'expectedType'   => Types::TYPE_HINT_TYPE_RESOURCE
			],
			7  => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => $value = Values::createResource(),
				'kind'           => TypeDeterminationKind::TypeHintDetailed,
				'expectedType'   => Types::createTypeHintTypedResourceTypeByResource( $value )
			],
			8  => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::createClosedResource(),
				'kind'           => TypeDeterminationKind::GetType,
				'expectedType'   => Types::GET_TYPE_TYPE_CLOSED_RESOURCE
			],
			9  => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::createClosedResource(),
				'kind'           => TypeDeterminationKind::GetTypeDetailed,
				'expectedType'   => Types::GET_TYPE_TYPE_CLOSED_RESOURCE
			],
			10 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::createClosedResource(),
				'kind'           => TypeDeterminationKind::TypeHint,
				'expectedType'   => Types::TYPE_HINT_TYPE_CLOSED_RESOURCE
			],
			11 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::createClosedResource(),
				'kind'           => TypeDeterminationKind::TypeHintDetailed,
				'expectedType'   => Types::TYPE_HINT_TYPE_CLOSED_RESOURCE
			],
			12 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::ARRAY,
				'kind'           => TypeDeterminationKind::GetType,
				'expectedType'   => Types::GET_TYPE_TYPE_ARRAY
			],
			13 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::ARRAY,
				'kind'           => TypeDeterminationKind::GetTypeDetailed,
				'expectedType'   => Types::GET_TYPE_TYPE_ARRAY
			],
			14 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::ARRAY,
				'kind'           => TypeDeterminationKind::TypeHint,
				'expectedType'   => Types::TYPE_HINT_TYPE_ARRAY
			],
			15 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::ARRAY,
				'kind'           => TypeDeterminationKind::TypeHintDetailed,
				'expectedType'   => Types::TYPE_HINT_TYPE_ARRAY
			],
			16 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::createStdClassObject(),
				'kind'           => TypeDeterminationKind::GetType,
				'expectedType'   => Types::GET_TYPE_TYPE_OBJECT
			],
			17 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => $value = Values::createStdClassObject(),
				'kind'           => TypeDeterminationKind::GetTypeDetailed,
				'expectedType'   => Types::createGetTypeTypedObjectTypeByObject( $value )
			],
			18 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::createStdClassObject(),
				'kind'           => TypeDeterminationKind::TypeHint,
				'expectedType'   => Types::TYPE_HINT_TYPE_OBJECT
			],
			19 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => $value = Values::createStdClassObject(),
				'kind'           => TypeDeterminationKind::TypeHintDetailed,
				'expectedType'   => Types::createTypeHintTypedObjectTypeByObject( $value )
			],
			20 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::createStandardObjectFixture(),
				'kind'           => TypeDeterminationKind::GetType,
				'expectedType'   => Types::GET_TYPE_TYPE_OBJECT
			],
			21 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => $value = Values::createStandardObjectFixture(),
				'kind'           => TypeDeterminationKind::GetTypeDetailed,
				'expectedType'   => Types::createGetTypeTypedObjectTypeByObject( $value )
			],
			22 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::createStandardObjectFixture(),
				'kind'           => TypeDeterminationKind::TypeHint,
				'expectedType'   => Types::TYPE_HINT_TYPE_OBJECT
			],
			23 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => $value = Values::createStandardObjectFixture(),
				'kind'           => TypeDeterminationKind::TypeHintDetailed,
				'expectedType'   => Types::createTypeHintTypedObjectTypeByObject( $value )
			],
			24 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::createInheritedStandardObjectFixture(),
				'kind'           => TypeDeterminationKind::GetType,
				'expectedType'   => Types::GET_TYPE_TYPE_OBJECT
			],
			25 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => $value = Values::createInheritedStandardObjectFixture(),
				'kind'           => TypeDeterminationKind::GetTypeDetailed,
				'expectedType'   => Types::createGetTypeTypedObjectTypeByObject( $value )
			],
			26 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::createInheritedStandardObjectFixture(),
				'kind'           => TypeDeterminationKind::TypeHint,
				'expectedType'   => Types::TYPE_HINT_TYPE_OBJECT
			],
			27 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => $value = Values::createInheritedStandardObjectFixture(),
				'kind'           => TypeDeterminationKind::TypeHintDetailed,
				'expectedType'   => Types::createTypeHintTypedObjectTypeByObject( $value )
			],
			28 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::createBaseObjectFixture(),
				'kind'           => TypeDeterminationKind::GetType,
				'expectedType'   => Types::GET_TYPE_TYPE_OBJECT
			],
			29 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => $value = Values::createBaseObjectFixture(),
				'kind'           => TypeDeterminationKind::GetTypeDetailed,
				'expectedType'   => Types::createGetTypeTypedObjectTypeByObject( $value )
			],
			30 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::createBaseObjectFixture(),
				'kind'           => TypeDeterminationKind::TypeHint,
				'expectedType'   => Types::TYPE_HINT_TYPE_OBJECT
			],
			31 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => $value = Values::createBaseObjectFixture(),
				'kind'           => TypeDeterminationKind::TypeHintDetailed,
				'expectedType'   => Types::createTypeHintTypedObjectTypeByObject( $value )
			],
			32 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::createInheritedBaseObjectFixture(),
				'kind'           => TypeDeterminationKind::GetType,
				'expectedType'   => Types::GET_TYPE_TYPE_OBJECT
			],
			33 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => $value = Values::createInheritedBaseObjectFixture(),
				'kind'           => TypeDeterminationKind::GetTypeDetailed,
				'expectedType'   => Types::createGetTypeTypedObjectTypeByObject( $value )
			],
			34 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::createInheritedBaseObjectFixture(),
				'kind'           => TypeDeterminationKind::TypeHint,
				'expectedType'   => Types::TYPE_HINT_TYPE_OBJECT
			],
			35 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => $value = Values::createInheritedBaseObjectFixture(),
				'kind'           => TypeDeterminationKind::TypeHintDetailed,
				'expectedType'   => Types::createTypeHintTypedObjectTypeByObject( $value )
			],
			36 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::BOOLEAN_FALSE,
				'kind'           => TypeDeterminationKind::GetType,
				'expectedType'   => Types::GET_TYPE_TYPE_BOOLEAN
			],
			37 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::BOOLEAN_TRUE,
				'kind'           => TypeDeterminationKind::GetType,
				'expectedType'   => Types::GET_TYPE_TYPE_BOOLEAN
			],
			38 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => $value = Values::BOOLEAN_FALSE,
				'kind'           => TypeDeterminationKind::GetTypeDetailed,
				'expectedType'   => Types::createGetTypeTypedBooleanTypeByValue( $value )
			],
			39 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => $value = Values::BOOLEAN_TRUE,
				'kind'           => TypeDeterminationKind::GetTypeDetailed,
				'expectedType'   => Types::createGetTypeTypedBooleanTypeByValue( $value )
			],
			40 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::BOOLEAN_FALSE,
				'kind'           => TypeDeterminationKind::TypeHint,
				'expectedType'   => Types::TYPE_HINT_TYPE_BOOLEAN
			],
			41 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::BOOLEAN_TRUE,
				'kind'           => TypeDeterminationKind::TypeHint,
				'expectedType'   => Types::TYPE_HINT_TYPE_BOOLEAN
			],
			42 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => $value = Values::BOOLEAN_FALSE,
				'kind'           => TypeDeterminationKind::TypeHintDetailed,
				'expectedType'   => Types::createTypeHintTypedBooleanTypeByValue( $value )
			],
			43 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => $value = Values::BOOLEAN_TRUE,
				'kind'           => TypeDeterminationKind::TypeHintDetailed,
				'expectedType'   => Types::createTypeHintTypedBooleanTypeByValue( $value )
			],
			44 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::INTEGER,
				'kind'           => TypeDeterminationKind::GetType,
				'expectedType'   => Types::GET_TYPE_TYPE_INTEGER
			],
			45 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::INTEGER,
				'kind'           => TypeDeterminationKind::GetTypeDetailed,
				'expectedType'   => Types::GET_TYPE_TYPE_INTEGER
			],
			46 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::INTEGER,
				'kind'           => TypeDeterminationKind::TypeHint,
				'expectedType'   => Types::TYPE_HINT_TYPE_INTEGER
			],
			47 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::INTEGER,
				'kind'           => TypeDeterminationKind::TypeHintDetailed,
				'expectedType'   => Types::TYPE_HINT_TYPE_INTEGER
			],
			48 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::FLOAT,
				'kind'           => TypeDeterminationKind::GetType,
				'expectedType'   => Types::GET_TYPE_TYPE_FLOAT
			],
			49 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::FLOAT,
				'kind'           => TypeDeterminationKind::GetTypeDetailed,
				'expectedType'   => Types::GET_TYPE_TYPE_FLOAT
			],
			50 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::FLOAT,
				'kind'           => TypeDeterminationKind::TypeHint,
				'expectedType'   => Types::TYPE_HINT_TYPE_FLOAT
			],
			51 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::FLOAT,
				'kind'           => TypeDeterminationKind::TypeHintDetailed,
				'expectedType'   => Types::TYPE_HINT_TYPE_FLOAT
			],
			52 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::STRING,
				'kind'           => TypeDeterminationKind::GetType,
				'expectedType'   => Types::GET_TYPE_TYPE_STRING
			],
			53 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::STRING,
				'kind'           => TypeDeterminationKind::GetTypeDetailed,
				'expectedType'   => Types::GET_TYPE_TYPE_STRING
			],
			54 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::STRING,
				'kind'           => TypeDeterminationKind::TypeHint,
				'expectedType'   => Types::TYPE_HINT_TYPE_STRING
			],
			55 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::STRING,
				'kind'           => TypeDeterminationKind::TypeHintDetailed,
				'expectedType'   => Types::TYPE_HINT_TYPE_STRING
			],
		];
	}
}
