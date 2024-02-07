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
 * Represents a data provider providing types with expected `unknownType` value.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class TypesWithExpectedUnknownTypeValueDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'types'                    => new GetTypeTypes(),
				'expectedUnknownTypeValue' => new Types()->getTypeUnknownType
			],
			1 => [
				'types'                    => new MaskedGetTypeTypes(),
				'expectedUnknownTypeValue' => new Types()->maskedGetTypeTypeUnknownType
			],
			2 => [
				'types'                    => new TypeHintTypes(),
				'expectedUnknownTypeValue' => new Types()->typeHintTypeUnknownType
			],
			3 => [
				'types'                    => new MaskedTypeHintTypes(),
				'expectedUnknownTypeValue' => new Types()->maskedTypeHintTypeUnknownType
			]
		];
	}
}
