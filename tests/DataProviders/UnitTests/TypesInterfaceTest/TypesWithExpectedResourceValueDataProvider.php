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
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'types'                 => new GetTypeTypes(),
				'expectedResourceValue' => new Types()->getTypeTypeResource
			],
			1 => [
				'types'                 => new MaskedGetTypeTypes(),
				'expectedResourceValue' => new Types()->maskedGetTypeTypeResource
			],
			2 => [
				'types'                 => new TypeHintTypes(),
				'expectedResourceValue' => new Types()->typeHintTypeResource
			],
			3 => [
				'types'                 => new MaskedTypeHintTypes(),
				'expectedResourceValue' => new Types()->maskedTypeHintTypeResource
			]
		];
	}
}
