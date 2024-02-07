<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\TypeDeterminatorInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\Tests\Fixtures\Types;
use CodeKandis\Types\Tests\Fixtures\Values;
use CodeKandis\Types\TypeDeterminator;
use Override;

/**
 * Represents a data provider providing type determinators with value, native and expected type.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class TypeDeterminatorsWithValueStrictAndExpectedValuesDataProvider implements DataProviderInterface
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
				'native'           => true,
				'expectedType'     => Types::NATIVE_NULL
			],
			1  => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::NULL,
				'native'           => false,
				'expectedType'     => Types::STRAIGHT_NULL
			],
			2  => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::createResource(),
				'native'           => true,
				'expectedType'     => Types::NATIVE_RESOURCE
			],
			3  => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::createResource(),
				'native'           => false,
				'expectedType'     => Types::STRAIGHT_RESOURCE
			],
			4  => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::createClosedResource(),
				'native'           => true,
				'expectedType'     => Types::NATIVE_CLOSED_RESOURCE
			],
			5  => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::createClosedResource(),
				'native'           => false,
				'expectedType'     => Types::STRAIGHT_CLOSED_RESOURCE
			],
			6  => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::ARRAY,
				'native'           => true,
				'expectedType'     => Types::NATIVE_ARRAY
			],
			7  => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::ARRAY,
				'native'           => false,
				'expectedType'     => Types::STRAIGHT_ARRAY
			],
			8  => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::createObject(),
				'native'           => true,
				'expectedType'     => Types::NATIVE_OBJECT
			],
			9  => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::createObject(),
				'native'           => false,
				'expectedType'     => Types::STRAIGHT_OBJECT
			],
			10 => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::BOOLEAN_FALSE,
				'native'           => true,
				'expectedType'     => Types::NATIVE_BOOLEAN
			],
			11 => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::BOOLEAN_FALSE,
				'native'           => false,
				'expectedType'     => Types::STRAIGHT_BOOLEAN
			],
			12 => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::INTEGER,
				'native'           => true,
				'expectedType'     => Types::NATIVE_INTEGER
			],
			13 => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::INTEGER,
				'native'           => false,
				'expectedType'     => Types::STRAIGHT_INTEGER
			],
			14 => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::FLOAT,
				'native'           => true,
				'expectedType'     => Types::NATIVE_FLOAT
			],
			15 => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::FLOAT,
				'native'           => false,
				'expectedType'     => Types::STRAIGHT_FLOAT
			],
			16 => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::STRING,
				'native'           => true,
				'expectedType'     => Types::NATIVE_STRING
			],
			17 => [
				'typeDeterminator' => new TypeDeterminator(),
				'value'            => Values::STRING,
				'native'           => false,
				'expectedType'     => Types::STRAIGHT_STRING
			]
		];
	}
}
