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
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'types'              => new GetTypeTypes(),
				'expectedFloatValue' => new Types()->getTypeTypeFloat
			],
			1 => [
				'types'              => new MaskedGetTypeTypes(),
				'expectedFloatValue' => new Types()->maskedGetTypeTypeFloat
			],
			2 => [
				'types'              => new TypeHintTypes(),
				'expectedFloatValue' => new Types()->typeHintTypeFloat
			],
			3 => [
				'types'              => new MaskedTypeHintTypes(),
				'expectedFloatValue' => new Types()->maskedTypeHintTypeFloat
			]
		];
	}
}
