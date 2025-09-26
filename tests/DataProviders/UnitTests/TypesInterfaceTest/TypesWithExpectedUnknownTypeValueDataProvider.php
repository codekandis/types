<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\TypesInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\GetTypeTypes;
use CodeKandis\Types\MaskedGetTypeTypes;
use CodeKandis\Types\MaskedTypeHintTypes;
use CodeKandis\Types\Tests\Fixtures\Types;
use CodeKandis\Types\TypeHintTypes;
use Override;

/**
 * Represents a data provider providing types with expected `unknownType` value.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class TypesWithExpectedUnknownTypeValueDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'types'                    => new GetTypeTypes(),
				'expectedUnknownTypeValue' => Types::GET_TYPE_UNKNOWN_TYPE
			],
			1 => [
				'types'                    => new MaskedGetTypeTypes(),
				'expectedUnknownTypeValue' => Types::MASKED_GET_TYPE_UNKNOWN_TYPE
			],
			2 => [
				'types'                    => new TypeHintTypes(),
				'expectedUnknownTypeValue' => Types::TYPE_HINT_TYPE_UNKNOWN_TYPE
			],
			3 => [
				'types'                    => new MaskedTypeHintTypes(),
				'expectedUnknownTypeValue' => Types::MASKED_TYPE_HINT_TYPE_UNKNOWN_TYPE
			],
		];
	}
}
