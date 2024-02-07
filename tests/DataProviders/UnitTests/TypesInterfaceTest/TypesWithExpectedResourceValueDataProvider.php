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
 * Represents a data provider providing types with expected `resource` value.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class TypesWithExpectedResourceValueDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'types'                 => new GetTypeTypes(),
				'expectedResourceValue' => Types::GET_TYPE_TYPE_RESOURCE
			],
			1 => [
				'types'                 => new MaskedGetTypeTypes(),
				'expectedResourceValue' => Types::MASKED_GET_TYPE_TYPE_RESOURCE
			],
			2 => [
				'types'                 => new TypeHintTypes(),
				'expectedResourceValue' => Types::TYPE_HINT_TYPE_RESOURCE
			],
			3 => [
				'types'                 => new MaskedTypeHintTypes(),
				'expectedResourceValue' => Types::MASKED_TYPE_HINT_TYPE_RESOURCE
			],
		];
	}
}
