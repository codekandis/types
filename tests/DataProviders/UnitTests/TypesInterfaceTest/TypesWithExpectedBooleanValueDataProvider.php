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
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'types'                => new GetTypeTypes(),
				'expectedBooleanValue' => new Types()->getTypeTypeBoolean
			],
			1 => [
				'types'                => new MaskedGetTypeTypes(),
				'expectedBooleanValue' => new Types()->maskedGetTypeTypeBoolean
			],
			2 => [
				'types'                => new TypeHintTypes(),
				'expectedBooleanValue' => new Types()->typeHintTypeBoolean
			],
			3 => [
				'types'                => new MaskedTypeHintTypes(),
				'expectedBooleanValue' => new Types()->maskedTypeHintTypeBoolean
			]
		];
	}
}
