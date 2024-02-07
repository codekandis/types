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
 * Represents a data provider providing types with expected `typedObjectTemplate` value.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class TypesWithExpectedTypedObjectTemplateValueDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'types'                            => new GetTypeTypes(),
				'expectedTypedObjectTemplateValue' => new Types()->getTypeTypeTypedObjectTemplate
			],
			1 => [
				'types'                            => new MaskedGetTypeTypes(),
				'expectedTypedObjectTemplateValue' => new Types()->maskedGetTypeTypeTypedObjectTemplate
			],
			2 => [
				'types'                            => new TypeHintTypes(),
				'expectedTypedObjectTemplateValue' => new Types()->typeHintTypeTypedObjectTemplate
			],
			3 => [
				'types'                            => new MaskedTypeHintTypes(),
				'expectedTypedObjectTemplateValue' => new Types()->maskedTypeHintTypeTypedObject_TEMPLATE
			]
		];
	}
}
