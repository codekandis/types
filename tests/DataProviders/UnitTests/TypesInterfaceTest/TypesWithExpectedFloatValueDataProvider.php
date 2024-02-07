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
 * Represents a data provider providing types with expected `float` value.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class TypesWithExpectedFloatValueDataProvider implements DataProviderInterface
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
				'expectedFloatValue' => Types::GET_TYPE_TYPE_FLOAT
			],
			1 => [
				'types'              => new MaskedGetTypeTypes(),
				'expectedFloatValue' => Types::MASKED_GET_TYPE_TYPE_FLOAT
			],
			2 => [
				'types'              => new TypeHintTypes(),
				'expectedFloatValue' => Types::TYPE_HINT_TYPE_FLOAT
			],
			3 => [
				'types'              => new MaskedTypeHintTypes(),
				'expectedFloatValue' => Types::MASKED_TYPE_HINT_TYPE_FLOAT
			],
		];
	}
}
