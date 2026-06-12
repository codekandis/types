<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\Unit\TypesInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\DecoratedGetTypeTypes;
use CodeKandis\Types\DecoratedTypeHintTypes;
use CodeKandis\Types\GetTypeTypes;
use CodeKandis\Types\Tests\Fixtures\Types;
use CodeKandis\Types\Tests\Fixtures\Values;
use CodeKandis\Types\TypeHintTypes;
use Override;

/**
 * Represents a data provider providing types with value and expected typed boolean.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
final class TypesWithValueAndExpectedTypedBooleanDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'types'                => new GetTypeTypes(),
				'value'                => $value = Values::BOOLEAN_FALSE,
				'expectedTypedBoolean' => Types::createGetTypeTypedBooleanTypeByValue( $value )
			],
			1 => [
				'types'                => new GetTypeTypes(),
				'value'                => $value = Values::BOOLEAN_TRUE,
				'expectedTypedBoolean' => Types::createGetTypeTypedBooleanTypeByValue( $value )
			],
			2 => [
				'types'                => new DecoratedGetTypeTypes(),
				'value'                => $value = Values::BOOLEAN_FALSE,
				'expectedTypedBoolean' => Types::createDecoratedGetTypeTypedBooleanTypeByValue( $value )
			],
			3 => [
				'types'                => new DecoratedGetTypeTypes(),
				'value'                => $value = Values::BOOLEAN_TRUE,
				'expectedTypedBoolean' => Types::createDecoratedGetTypeTypedBooleanTypeByValue( $value )
			],
			4 => [
				'types'                => new TypeHintTypes(),
				'value'                => $value = Values::BOOLEAN_FALSE,
				'expectedTypedBoolean' => Types::createTypeHintTypedBooleanTypeByValue( $value )
			],
			5 => [
				'types'                => new TypeHintTypes(),
				'value'                => $value = Values::BOOLEAN_TRUE,
				'expectedTypedBoolean' => Types::createTypeHintTypedBooleanTypeByValue( $value )
			],
			6 => [
				'types'                => new DecoratedTypeHintTypes(),
				'value'                => $value = Values::BOOLEAN_FALSE,
				'expectedTypedBoolean' => Types::createDecoratedTypeHintTypedBooleanTypeByValue( $value )
			],
			7 => [
				'types'                => new DecoratedTypeHintTypes(),
				'value'                => $value = Values::BOOLEAN_TRUE,
				'expectedTypedBoolean' => Types::createDecoratedTypeHintTypedBooleanTypeByValue( $value )
			]
		];
	}
}
