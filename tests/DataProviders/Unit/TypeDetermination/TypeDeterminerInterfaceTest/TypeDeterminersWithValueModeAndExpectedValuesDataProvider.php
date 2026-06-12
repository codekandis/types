<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\Unit\TypeDetermination\TypeDeterminerInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\Tests\Fixtures\Types;
use CodeKandis\Types\Tests\Fixtures\Values;
use CodeKandis\Types\TypeDetermination\TypeDeterminationMode;
use CodeKandis\Types\TypeDetermination\TypeDeterminer;
use Override;

/**
 * Represents a data provider providing type determiners with value, mode and expected type.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
final class TypeDeterminersWithValueModeAndExpectedValuesDataProvider implements DataProviderInterface
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
				'mode'           => TypeDeterminationMode::GetType,
				'expectedType'   => Types::GET_TYPE_TYPE_NULL
			],
			1  => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::NULL,
				'mode'           => TypeDeterminationMode::GetTypeDetailed,
				'expectedType'   => Types::GET_TYPE_TYPE_NULL
			],
			2  => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::NULL,
				'mode'           => TypeDeterminationMode::TypeHint,
				'expectedType'   => Types::TYPE_HINT_TYPE_NULL
			],
			3  => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::NULL,
				'mode'           => TypeDeterminationMode::TypeHintDetailed,
				'expectedType'   => Types::TYPE_HINT_TYPE_NULL
			],
			4  => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::createResource(),
				'mode'           => TypeDeterminationMode::GetType,
				'expectedType'   => Types::GET_TYPE_TYPE_RESOURCE
			],
			5  => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => $value = Values::createResource(),
				'mode'           => TypeDeterminationMode::GetTypeDetailed,
				'expectedType'   => Types::createGetTypeTypedResourceTypeByResource( $value )
			],
			6  => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::createResource(),
				'mode'           => TypeDeterminationMode::TypeHint,
				'expectedType'   => Types::TYPE_HINT_TYPE_RESOURCE
			],
			7  => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => $value = Values::createResource(),
				'mode'           => TypeDeterminationMode::TypeHintDetailed,
				'expectedType'   => Types::createTypeHintTypedResourceTypeByResource( $value )
			],
			8  => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::createClosedResource(),
				'mode'           => TypeDeterminationMode::GetType,
				'expectedType'   => Types::GET_TYPE_TYPE_CLOSED_RESOURCE
			],
			9  => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::createClosedResource(),
				'mode'           => TypeDeterminationMode::GetTypeDetailed,
				'expectedType'   => Types::GET_TYPE_TYPE_CLOSED_RESOURCE
			],
			10 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::createClosedResource(),
				'mode'           => TypeDeterminationMode::TypeHint,
				'expectedType'   => Types::TYPE_HINT_TYPE_CLOSED_RESOURCE
			],
			11 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::createClosedResource(),
				'mode'           => TypeDeterminationMode::TypeHintDetailed,
				'expectedType'   => Types::TYPE_HINT_TYPE_CLOSED_RESOURCE
			],
			12 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::ARRAY,
				'mode'           => TypeDeterminationMode::GetType,
				'expectedType'   => Types::GET_TYPE_TYPE_ARRAY
			],
			13 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::ARRAY,
				'mode'           => TypeDeterminationMode::GetTypeDetailed,
				'expectedType'   => Types::GET_TYPE_TYPE_ARRAY
			],
			14 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::ARRAY,
				'mode'           => TypeDeterminationMode::TypeHint,
				'expectedType'   => Types::TYPE_HINT_TYPE_ARRAY
			],
			15 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::ARRAY,
				'mode'           => TypeDeterminationMode::TypeHintDetailed,
				'expectedType'   => Types::TYPE_HINT_TYPE_ARRAY
			],
			16 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::createStdClassObject(),
				'mode'           => TypeDeterminationMode::GetType,
				'expectedType'   => Types::GET_TYPE_TYPE_OBJECT
			],
			17 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => $value = Values::createStdClassObject(),
				'mode'           => TypeDeterminationMode::GetTypeDetailed,
				'expectedType'   => Types::createGetTypeTypedObjectTypeByObject( $value )
			],
			18 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::createStdClassObject(),
				'mode'           => TypeDeterminationMode::TypeHint,
				'expectedType'   => Types::TYPE_HINT_TYPE_OBJECT
			],
			19 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => $value = Values::createStdClassObject(),
				'mode'           => TypeDeterminationMode::TypeHintDetailed,
				'expectedType'   => Types::createTypeHintTypedObjectTypeByObject( $value )
			],
			20 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::createStandardObjectFixture(),
				'mode'           => TypeDeterminationMode::GetType,
				'expectedType'   => Types::GET_TYPE_TYPE_OBJECT
			],
			21 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => $value = Values::createStandardObjectFixture(),
				'mode'           => TypeDeterminationMode::GetTypeDetailed,
				'expectedType'   => Types::createGetTypeTypedObjectTypeByObject( $value )
			],
			22 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::createStandardObjectFixture(),
				'mode'           => TypeDeterminationMode::TypeHint,
				'expectedType'   => Types::TYPE_HINT_TYPE_OBJECT
			],
			23 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => $value = Values::createStandardObjectFixture(),
				'mode'           => TypeDeterminationMode::TypeHintDetailed,
				'expectedType'   => Types::createTypeHintTypedObjectTypeByObject( $value )
			],
			24 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::createInheritedStandardObjectFixture(),
				'mode'           => TypeDeterminationMode::GetType,
				'expectedType'   => Types::GET_TYPE_TYPE_OBJECT
			],
			25 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => $value = Values::createInheritedStandardObjectFixture(),
				'mode'           => TypeDeterminationMode::GetTypeDetailed,
				'expectedType'   => Types::createGetTypeTypedObjectTypeByObject( $value )
			],
			26 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::createInheritedStandardObjectFixture(),
				'mode'           => TypeDeterminationMode::TypeHint,
				'expectedType'   => Types::TYPE_HINT_TYPE_OBJECT
			],
			27 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => $value = Values::createInheritedStandardObjectFixture(),
				'mode'           => TypeDeterminationMode::TypeHintDetailed,
				'expectedType'   => Types::createTypeHintTypedObjectTypeByObject( $value )
			],
			28 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::createBaseObjectFixture(),
				'mode'           => TypeDeterminationMode::GetType,
				'expectedType'   => Types::GET_TYPE_TYPE_OBJECT
			],
			29 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => $value = Values::createBaseObjectFixture(),
				'mode'           => TypeDeterminationMode::GetTypeDetailed,
				'expectedType'   => Types::createGetTypeTypedObjectTypeByObject( $value )
			],
			30 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::createBaseObjectFixture(),
				'mode'           => TypeDeterminationMode::TypeHint,
				'expectedType'   => Types::TYPE_HINT_TYPE_OBJECT
			],
			31 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => $value = Values::createBaseObjectFixture(),
				'mode'           => TypeDeterminationMode::TypeHintDetailed,
				'expectedType'   => Types::createTypeHintTypedObjectTypeByObject( $value )
			],
			32 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::createInheritedBaseObjectFixture(),
				'mode'           => TypeDeterminationMode::GetType,
				'expectedType'   => Types::GET_TYPE_TYPE_OBJECT
			],
			33 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => $value = Values::createInheritedBaseObjectFixture(),
				'mode'           => TypeDeterminationMode::GetTypeDetailed,
				'expectedType'   => Types::createGetTypeTypedObjectTypeByObject( $value )
			],
			34 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::createInheritedBaseObjectFixture(),
				'mode'           => TypeDeterminationMode::TypeHint,
				'expectedType'   => Types::TYPE_HINT_TYPE_OBJECT
			],
			35 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => $value = Values::createInheritedBaseObjectFixture(),
				'mode'           => TypeDeterminationMode::TypeHintDetailed,
				'expectedType'   => Types::createTypeHintTypedObjectTypeByObject( $value )
			],
			36 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::BOOLEAN_FALSE,
				'mode'           => TypeDeterminationMode::GetType,
				'expectedType'   => Types::GET_TYPE_TYPE_BOOLEAN
			],
			37 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::BOOLEAN_TRUE,
				'mode'           => TypeDeterminationMode::GetType,
				'expectedType'   => Types::GET_TYPE_TYPE_BOOLEAN
			],
			38 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => $value = Values::BOOLEAN_FALSE,
				'mode'           => TypeDeterminationMode::GetTypeDetailed,
				'expectedType'   => Types::createGetTypeTypedBooleanTypeByValue( $value )
			],
			39 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => $value = Values::BOOLEAN_TRUE,
				'mode'           => TypeDeterminationMode::GetTypeDetailed,
				'expectedType'   => Types::createGetTypeTypedBooleanTypeByValue( $value )
			],
			40 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::BOOLEAN_FALSE,
				'mode'           => TypeDeterminationMode::TypeHint,
				'expectedType'   => Types::TYPE_HINT_TYPE_BOOLEAN
			],
			41 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::BOOLEAN_TRUE,
				'mode'           => TypeDeterminationMode::TypeHint,
				'expectedType'   => Types::TYPE_HINT_TYPE_BOOLEAN
			],
			42 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => $value = Values::BOOLEAN_FALSE,
				'mode'           => TypeDeterminationMode::TypeHintDetailed,
				'expectedType'   => Types::createTypeHintTypedBooleanTypeByValue( $value )
			],
			43 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => $value = Values::BOOLEAN_TRUE,
				'mode'           => TypeDeterminationMode::TypeHintDetailed,
				'expectedType'   => Types::createTypeHintTypedBooleanTypeByValue( $value )
			],
			44 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::INTEGER,
				'mode'           => TypeDeterminationMode::GetType,
				'expectedType'   => Types::GET_TYPE_TYPE_INTEGER
			],
			45 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::INTEGER,
				'mode'           => TypeDeterminationMode::GetTypeDetailed,
				'expectedType'   => Types::GET_TYPE_TYPE_INTEGER
			],
			46 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::INTEGER,
				'mode'           => TypeDeterminationMode::TypeHint,
				'expectedType'   => Types::TYPE_HINT_TYPE_INTEGER
			],
			47 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::INTEGER,
				'mode'           => TypeDeterminationMode::TypeHintDetailed,
				'expectedType'   => Types::TYPE_HINT_TYPE_INTEGER
			],
			48 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::FLOAT,
				'mode'           => TypeDeterminationMode::GetType,
				'expectedType'   => Types::GET_TYPE_TYPE_FLOAT
			],
			49 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::FLOAT,
				'mode'           => TypeDeterminationMode::GetTypeDetailed,
				'expectedType'   => Types::GET_TYPE_TYPE_FLOAT
			],
			50 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::FLOAT,
				'mode'           => TypeDeterminationMode::TypeHint,
				'expectedType'   => Types::TYPE_HINT_TYPE_FLOAT
			],
			51 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::FLOAT,
				'mode'           => TypeDeterminationMode::TypeHintDetailed,
				'expectedType'   => Types::TYPE_HINT_TYPE_FLOAT
			],
			52 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::STRING,
				'mode'           => TypeDeterminationMode::GetType,
				'expectedType'   => Types::GET_TYPE_TYPE_STRING
			],
			53 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::STRING,
				'mode'           => TypeDeterminationMode::GetTypeDetailed,
				'expectedType'   => Types::GET_TYPE_TYPE_STRING
			],
			54 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::STRING,
				'mode'           => TypeDeterminationMode::TypeHint,
				'expectedType'   => Types::TYPE_HINT_TYPE_STRING
			],
			55 => [
				'typeDeterminer' => new TypeDeterminer(),
				'value'          => Values::STRING,
				'mode'           => TypeDeterminationMode::TypeHintDetailed,
				'expectedType'   => Types::TYPE_HINT_TYPE_STRING
			]
		];
	}
}
