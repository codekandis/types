<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\TypeDetermination\TypeDeterminatorInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\Tests\Fixtures\Types;
use CodeKandis\Types\Tests\Fixtures\Values;
use CodeKandis\Types\TypeDetermination\TypeDeterminationKind;
use CodeKandis\Types\TypeDetermination\TypeDeterminator;
use Override;

/**
 * Represents a data provider providing type determinators with value, kind and expected type.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class TypeDeterminatorsWithValueKindAndExpectedValuesDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::NULL,
				'kind'             => TypeDeterminationKind::GetType,
				'expectedType'     => Types::GET_TYPE_NULL
			],
			1  => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::NULL,
				'kind'             => TypeDeterminationKind::GetTypeDetailed,
				'expectedType'     => Types::GET_TYPE_NULL
			],
			2  => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::NULL,
				'kind'             => TypeDeterminationKind::TypeHint,
				'expectedType'     => Types::TYPE_HINT_NULL
			],
			3  => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::NULL,
				'kind'             => TypeDeterminationKind::TypeHintDetailed,
				'expectedType'     => Types::TYPE_HINT_NULL
			],
			4  => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::createResource(),
				'kind'             => TypeDeterminationKind::GetType,
				'expectedType'     => Types::GET_TYPE_RESOURCE
			],
			5  => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => $value = Values::createResource(),
				'kind'             => TypeDeterminationKind::GetTypeDetailed,
				'expectedType'     => Types::createGetTypeTypedResourceTypeByResource( $value )
			],
			6  => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::createResource(),
				'kind'             => TypeDeterminationKind::TypeHint,
				'expectedType'     => Types::TYPE_HINT_RESOURCE
			],
			7  => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => $value = Values::createResource(),
				'kind'             => TypeDeterminationKind::TypeHintDetailed,
				'expectedType'     => Types::createTypeHintTypedResourceTypeByResource( $value )
			],
			8  => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::createClosedResource(),
				'kind'             => TypeDeterminationKind::GetType,
				'expectedType'     => Types::GET_TYPE_CLOSED_RESOURCE
			],
			9  => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::createClosedResource(),
				'kind'             => TypeDeterminationKind::GetTypeDetailed,
				'expectedType'     => Types::GET_TYPE_CLOSED_RESOURCE
			],
			10 => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::createClosedResource(),
				'kind'             => TypeDeterminationKind::TypeHint,
				'expectedType'     => Types::TYPE_HINT_CLOSED_RESOURCE
			],
			11 => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::createClosedResource(),
				'kind'             => TypeDeterminationKind::TypeHintDetailed,
				'expectedType'     => Types::TYPE_HINT_CLOSED_RESOURCE
			],
			12 => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::ARRAY,
				'kind'             => TypeDeterminationKind::GetType,
				'expectedType'     => Types::GET_TYPE_ARRAY
			],
			13 => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::ARRAY,
				'kind'             => TypeDeterminationKind::GetTypeDetailed,
				'expectedType'     => Types::GET_TYPE_ARRAY
			],
			14 => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::ARRAY,
				'kind'             => TypeDeterminationKind::TypeHint,
				'expectedType'     => Types::TYPE_HINT_ARRAY
			],
			15 => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::ARRAY,
				'kind'             => TypeDeterminationKind::TypeHintDetailed,
				'expectedType'     => Types::TYPE_HINT_ARRAY
			],
			16 => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::createStdClassObject(),
				'kind'             => TypeDeterminationKind::GetType,
				'expectedType'     => Types::GET_TYPE_OBJECT
			],
			17 => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => $value = Values::createStdClassObject(),
				'kind'             => TypeDeterminationKind::GetTypeDetailed,
				'expectedType'     => Types::createGetTypeTypedObjectTypeByObject( $value )
			],
			18 => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::createStdClassObject(),
				'kind'             => TypeDeterminationKind::TypeHint,
				'expectedType'     => Types::TYPE_HINT_OBJECT
			],
			19 => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => $value = Values::createStdClassObject(),
				'kind'             => TypeDeterminationKind::TypeHintDetailed,
				'expectedType'     => Types::createTypeHintTypedObjectTypeByObject( $value )
			],
			20 => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::createStandardObject(),
				'kind'             => TypeDeterminationKind::GetType,
				'expectedType'     => Types::GET_TYPE_OBJECT
			],
			21 => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => $value = Values::createStandardObject(),
				'kind'             => TypeDeterminationKind::GetTypeDetailed,
				'expectedType'     => Types::createGetTypeTypedObjectTypeByObject( $value )
			],
			22 => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::createStandardObject(),
				'kind'             => TypeDeterminationKind::TypeHint,
				'expectedType'     => Types::TYPE_HINT_OBJECT
			],
			23 => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => $value = Values::createStandardObject(),
				'kind'             => TypeDeterminationKind::TypeHintDetailed,
				'expectedType'     => Types::createTypeHintTypedObjectTypeByObject( $value )
			],
			24 => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::createInheritedStandardObject(),
				'kind'             => TypeDeterminationKind::GetType,
				'expectedType'     => Types::GET_TYPE_OBJECT
			],
			25 => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => $value = Values::createInheritedStandardObject(),
				'kind'             => TypeDeterminationKind::GetTypeDetailed,
				'expectedType'     => Types::createGetTypeTypedObjectTypeByObject( $value )
			],
			26 => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::createInheritedStandardObject(),
				'kind'             => TypeDeterminationKind::TypeHint,
				'expectedType'     => Types::TYPE_HINT_OBJECT
			],
			27 => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => $value = Values::createInheritedStandardObject(),
				'kind'             => TypeDeterminationKind::TypeHintDetailed,
				'expectedType'     => Types::createTypeHintTypedObjectTypeByObject( $value )
			],
			28 => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::createBaseObject(),
				'kind'             => TypeDeterminationKind::GetType,
				'expectedType'     => Types::GET_TYPE_OBJECT
			],
			29 => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => $value = Values::createBaseObject(),
				'kind'             => TypeDeterminationKind::GetTypeDetailed,
				'expectedType'     => Types::createGetTypeTypedObjectTypeByObject( $value )
			],
			30 => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::createBaseObject(),
				'kind'             => TypeDeterminationKind::TypeHint,
				'expectedType'     => Types::TYPE_HINT_OBJECT
			],
			31 => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => $value = Values::createBaseObject(),
				'kind'             => TypeDeterminationKind::TypeHintDetailed,
				'expectedType'     => Types::createTypeHintTypedObjectTypeByObject( $value )
			],
			32 => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::createInheritedBaseObject(),
				'kind'             => TypeDeterminationKind::GetType,
				'expectedType'     => Types::GET_TYPE_OBJECT
			],
			33 => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => $value = Values::createInheritedBaseObject(),
				'kind'             => TypeDeterminationKind::GetTypeDetailed,
				'expectedType'     => Types::createGetTypeTypedObjectTypeByObject( $value )
			],
			34 => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::createInheritedBaseObject(),
				'kind'             => TypeDeterminationKind::TypeHint,
				'expectedType'     => Types::TYPE_HINT_OBJECT
			],
			35 => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => $value = Values::createInheritedBaseObject(),
				'kind'             => TypeDeterminationKind::TypeHintDetailed,
				'expectedType'     => Types::createTypeHintTypedObjectTypeByObject( $value )
			],
			36 => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::BOOLEAN_FALSE,
				'kind'             => TypeDeterminationKind::GetType,
				'expectedType'     => Types::GET_TYPE_BOOLEAN
			],
			37 => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::BOOLEAN_TRUE,
				'kind'             => TypeDeterminationKind::GetType,
				'expectedType'     => Types::GET_TYPE_BOOLEAN
			],
			38 => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => $value = Values::BOOLEAN_FALSE,
				'kind'             => TypeDeterminationKind::GetTypeDetailed,
				'expectedType'     => Types::createGetTypeTypedBooleanTypeByValue( $value )
			],
			39 => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => $value = Values::BOOLEAN_TRUE,
				'kind'             => TypeDeterminationKind::GetTypeDetailed,
				'expectedType'     => Types::createGetTypeTypedBooleanTypeByValue( $value )
			],
			40 => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::BOOLEAN_FALSE,
				'kind'             => TypeDeterminationKind::TypeHint,
				'expectedType'     => Types::TYPE_HINT_BOOLEAN
			],
			41 => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::BOOLEAN_TRUE,
				'kind'             => TypeDeterminationKind::TypeHint,
				'expectedType'     => Types::TYPE_HINT_BOOLEAN
			],
			42 => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => $value = Values::BOOLEAN_FALSE,
				'kind'             => TypeDeterminationKind::TypeHintDetailed,
				'expectedType'     => Types::createTypeHintTypedBooleanTypeByValue( $value )
			],
			43 => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => $value = Values::BOOLEAN_TRUE,
				'kind'             => TypeDeterminationKind::TypeHintDetailed,
				'expectedType'     => Types::createTypeHintTypedBooleanTypeByValue( $value )
			],
			44 => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::INTEGER,
				'kind'             => TypeDeterminationKind::GetType,
				'expectedType'     => Types::GET_TYPE_INTEGER
			],
			45 => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::INTEGER,
				'kind'             => TypeDeterminationKind::GetTypeDetailed,
				'expectedType'     => Types::GET_TYPE_INTEGER
			],
			46 => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::INTEGER,
				'kind'             => TypeDeterminationKind::TypeHint,
				'expectedType'     => Types::TYPE_HINT_INTEGER
			],
			47 => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::INTEGER,
				'kind'             => TypeDeterminationKind::TypeHintDetailed,
				'expectedType'     => Types::TYPE_HINT_INTEGER
			],
			48 => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::FLOAT,
				'kind'             => TypeDeterminationKind::GetType,
				'expectedType'     => Types::GET_TYPE_FLOAT
			],
			49 => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::FLOAT,
				'kind'             => TypeDeterminationKind::GetTypeDetailed,
				'expectedType'     => Types::GET_TYPE_FLOAT
			],
			50 => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::FLOAT,
				'kind'             => TypeDeterminationKind::TypeHint,
				'expectedType'     => Types::TYPE_HINT_FLOAT
			],
			51 => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::FLOAT,
				'kind'             => TypeDeterminationKind::TypeHintDetailed,
				'expectedType'     => Types::TYPE_HINT_FLOAT
			],
			52 => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::STRING,
				'kind'             => TypeDeterminationKind::GetType,
				'expectedType'     => Types::GET_TYPE_STRING
			],
			53 => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::STRING,
				'kind'             => TypeDeterminationKind::GetTypeDetailed,
				'expectedType'     => Types::GET_TYPE_STRING
			],
			54 => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::STRING,
				'kind'             => TypeDeterminationKind::TypeHint,
				'expectedType'     => Types::TYPE_HINT_STRING
			],
			55 => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::STRING,
				'kind'             => TypeDeterminationKind::TypeHintDetailed,
				'expectedType'     => Types::TYPE_HINT_STRING
			]
		];
	}
}
