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
 * Represents a data provider providing types with expected `array` value.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class TypesWithExpectedArrayValueDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'types'              => new GetTypeTypes(),
				'expectedArrayValue' => new Types()->getTypeTypeClosedArray
			],
			1 => [
				'types'              => new MaskedGetTypeTypes(),
				'expectedArrayValue' => new Types()->maskedGetTypeTypeArray
			],
			2 => [
				'types'              => new TypeHintTypes(),
				'expectedArrayValue' => new Types()->typeHintTypeClosedArray
			],
			3 => [
				'types'              => new MaskedTypeHintTypes(),
				'expectedArrayValue' => new Types()->maskedTypeHintTypeArray
			]
		];
	}
}
