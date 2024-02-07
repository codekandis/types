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
 * Represents a data provider providing types with expected `object` value.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class TypesWithExpectedObjectValueDataProvider implements DataProviderInterface
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
				'expectedObjectValue' => new Types()->getTypeTypeClosedObject
			],
			1 => [
				'types'               => new MaskedGetTypeTypes(),
				'expectedObjectValue' => new Types()->maskedGetTypeTypeObject
			],
			2 => [
				'types'               => new TypeHintTypes(),
				'expectedObjectValue' => new Types()->typeHintTypeClosedObject
			],
			3 => [
				'types'               => new MaskedTypeHintTypes(),
				'expectedObjectValue' => new Types()->maskedTypeHintTypeObject
			]
		];
	}
}
