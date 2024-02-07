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
 * Represents a data provider providing types with expected `closedResource` value.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class TypesWithExpectedClosedResourceValueDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'types'                       => new GetTypeTypes(),
				'expectedClosedResourceValue' => Types::GET_TYPE_TYPE_CLOSED_RESOURCE
			],
			1 => [
				'types'                       => new MaskedGetTypeTypes(),
				'expectedClosedResourceValue' => Types::MASKED_GET_TYPE_TYPE_CLOSED_RESOURCE
			],
			2 => [
				'types'                       => new TypeHintTypes(),
				'expectedClosedResourceValue' => Types::TYPE_HINT_TYPE_CLOSED_RESOURCE
			],
			3 => [
				'types'                       => new MaskedTypeHintTypes(),
				'expectedClosedResourceValue' => Types::MASKED_TYPE_HINT_TYPE_CLOSED_RESOURCE
			],
		];
	}
}
