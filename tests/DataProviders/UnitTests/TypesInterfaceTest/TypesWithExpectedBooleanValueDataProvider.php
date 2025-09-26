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
 * Represents a data provider providing types with expected `boolean` value.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class TypesWithExpectedBooleanValueDataProvider implements DataProviderInterface
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
				'expectedBooleanValue' => Types::GET_TYPE_TYPE_BOOLEAN
			],
			1 => [
				'types'                => new MaskedGetTypeTypes(),
				'expectedBooleanValue' => Types::MASKED_GET_TYPE_TYPE_BOOLEAN
			],
			2 => [
				'types'                => new TypeHintTypes(),
				'expectedBooleanValue' => Types::TYPE_HINT_TYPE_BOOLEAN
			],
			3 => [
				'types'                => new MaskedTypeHintTypes(),
				'expectedBooleanValue' => Types::MASKED_TYPE_HINT_TYPE_BOOLEAN
			],
		];
	}
}
