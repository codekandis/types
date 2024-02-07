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
 * Represents a data provider providing types with expected `null` value.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class TypesWithExpectedNullValueDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'types'             => new GetTypeTypes(),
				'expectedNullValue' => new Types()->getTypeTypeNull
			],
			1 => [
				'types'             => new MaskedGetTypeTypes(),
				'expectedNullValue' => new Types()->maskedGetTypeTypeNull
			],
			2 => [
				'types'             => new TypeHintTypes(),
				'expectedNullValue' => new Types()->typeHintTypeNull
			],
			3 => [
				'types'             => new MaskedTypeHintTypes(),
				'expectedNullValue' => new Types()->maskedTypeHintTypeNull
			]
		];
	}
}
