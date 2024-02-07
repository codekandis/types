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
 * Represents a data provider providing types with expected `integer` value.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class TypesWithExpectedIntegerValueDataProvider implements DataProviderInterface
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
				'expectedIntegerValue' => Types::GET_TYPE_TYPE_INTEGER
			],
			1 => [
				'types'                => new MaskedGetTypeTypes(),
				'expectedIntegerValue' => Types::MASKED_GET_TYPE_TYPE_INTEGER
			],
			2 => [
				'types'                => new TypeHintTypes(),
				'expectedIntegerValue' => Types::TYPE_HINT_TYPE_INTEGER
			],
			3 => [
				'types'                => new MaskedTypeHintTypes(),
				'expectedIntegerValue' => Types::MASKED_TYPE_HINT_TYPE_INTEGER
			],
		];
	}
}
