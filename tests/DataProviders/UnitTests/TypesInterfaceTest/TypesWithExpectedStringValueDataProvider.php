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
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'types'               => new GetTypeTypes(),
				'expectedStringValue' => new Types()->getTypeTypeString
			],
			1 => [
				'types'               => new MaskedGetTypeTypes(),
				'expectedStringValue' => new Types()->maskedGetTypeTypeString
			],
			2 => [
				'types'               => new TypeHintTypes(),
				'expectedStringValue' => new Types()->typeHintTypeString
			],
			3 => [
				'types'               => new MaskedTypeHintTypes(),
				'expectedStringValue' => new Types()->maskedTypeHintTypeString
			]
		];
	}
}
