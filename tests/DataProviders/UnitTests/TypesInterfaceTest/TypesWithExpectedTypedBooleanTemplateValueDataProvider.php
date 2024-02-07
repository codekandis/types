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
 * Represents a data provider providing types with expected `typedBooleanTemplate` value.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class TypesWithExpectedTypedBooleanTemplateValueDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'types'                             => new GetTypeTypes(),
				'expectedTypedBooleanTemplateValue' => new Types()->getTypeTypeTypedBooleanTemplate
			],
			1 => [
				'types'                             => new MaskedGetTypeTypes(),
				'expectedTypedBooleanTemplateValue' => new Types()->maskedGetTypeTypeTypedBooleanTemplate
			],
			2 => [
				'types'                             => new TypeHintTypes(),
				'expectedTypedBooleanTemplateValue' => new Types()->typeHintTypeTypedBooleanTemplate
			],
			3 => [
				'types'                             => new MaskedTypeHintTypes(),
				'expectedTypedBooleanTemplateValue' => new Types()->maskedTypeHintTypeTypedBoolean_TEMPLATE
			]
		];
	}
}
