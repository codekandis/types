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
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'types'                       => new GetTypeTypes(),
				'expectedClosedResourceValue' => new Types()->getTypeTypeClosedResource
			],
			1 => [
				'types'                       => new MaskedGetTypeTypes(),
				'expectedClosedResourceValue' => new Types()->maskedGetTypeTypeClosedResource
			],
			2 => [
				'types'                       => new TypeHintTypes(),
				'expectedClosedResourceValue' => new Types()->typeHintTypeClosedResource
			],
			3 => [
				'types'                       => new MaskedTypeHintTypes(),
				'expectedClosedResourceValue' => new Types()->maskedTypeHintTypeClosedResource
			]
		];
	}
}
