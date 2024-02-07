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
 * Represents a data provider providing types with expected `null` value.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class TypesWithExpectedNullValueDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'types'             => new GetTypeTypes(),
				'expectedNullValue' => Types::GET_TYPE_TYPE_NULL
			],
			1 => [
				'types'             => new MaskedGetTypeTypes(),
				'expectedNullValue' => Types::MASKED_GET_TYPE_TYPE_NULL
			],
			2 => [
				'types'             => new TypeHintTypes(),
				'expectedNullValue' => Types::TYPE_HINT_TYPE_NULL
			],
			3 => [
				'types'             => new MaskedTypeHintTypes(),
				'expectedNullValue' => Types::MASKED_TYPE_HINT_TYPE_NULL
			],
		];
	}
}
