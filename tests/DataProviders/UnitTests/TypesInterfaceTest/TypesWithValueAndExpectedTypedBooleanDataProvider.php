<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\TypesInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\GetTypeTypes;
use CodeKandis\Types\MaskedGetTypeTypes;
use CodeKandis\Types\MaskedTypeHintTypes;
use CodeKandis\Types\Tests\Fixtures\Types;
use CodeKandis\Types\Tests\Fixtures\Values;
use CodeKandis\Types\TypeHintTypes;
use Override;

/**
 * Represents a data provider providing types with value and expected typed boolean.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class TypesWithValueAndExpectedTypedBooleanDataProvider implements DataProviderInterface
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
				'types'                => new MaskedGetTypeTypes(),
				'value'                => $value = Values::BOOLEAN_FALSE,
				'expectedTypedBoolean' => Types::createMaskedGetTypeTypedBooleanTypeByValue( $value )
			],
			3 => [
				'types'                => new MaskedGetTypeTypes(),
				'value'                => $value = Values::BOOLEAN_TRUE,
				'expectedTypedBoolean' => Types::createMaskedGetTypeTypedBooleanTypeByValue( $value )
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
				'types'                => new MaskedTypeHintTypes(),
				'value'                => $value = Values::BOOLEAN_FALSE,
				'expectedTypedBoolean' => Types::createMaskedTypeHintTypedBooleanTypeByValue( $value )
			],
			7 => [
				'types'                => new MaskedTypeHintTypes(),
				'value'                => $value = Values::BOOLEAN_TRUE,
				'expectedTypedBoolean' => Types::createMaskedTypeHintTypedBooleanTypeByValue( $value )
			],
		];
	}
}
