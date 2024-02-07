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
 * Represents a data provider providing types with expected `array` value.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class TypesWithExpectedArrayValueDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'types'              => new GetTypeTypes(),
				'expectedArrayValue' => Types::GET_TYPE_TYPE_ARRAY
			],
			1 => [
				'types'              => new MaskedGetTypeTypes(),
				'expectedArrayValue' => Types::MASKED_GET_TYPE_TYPE_ARRAY
			],
			2 => [
				'types'              => new TypeHintTypes(),
				'expectedArrayValue' => Types::TYPE_HINT_TYPE_ARRAY
			],
			3 => [
				'types'              => new MaskedTypeHintTypes(),
				'expectedArrayValue' => Types::MASKED_TYPE_HINT_TYPE_ARRAY
			],
		];
	}
}
