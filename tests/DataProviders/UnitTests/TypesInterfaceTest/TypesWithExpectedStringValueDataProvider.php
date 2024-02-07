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
 * Represents a data provider providing types with expected `string` value.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class TypesWithExpectedStringValueDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'types'               => new GetTypeTypes(),
				'expectedStringValue' => Types::GET_TYPE_TYPE_STRING
			],
			1 => [
				'types'               => new MaskedGetTypeTypes(),
				'expectedStringValue' => Types::MASKED_GET_TYPE_TYPE_STRING
			],
			2 => [
				'types'               => new TypeHintTypes(),
				'expectedStringValue' => Types::TYPE_HINT_TYPE_STRING
			],
			3 => [
				'types'               => new MaskedTypeHintTypes(),
				'expectedStringValue' => Types::MASKED_TYPE_HINT_TYPE_STRING
			],
		];
	}
}
