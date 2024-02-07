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
 * Represents a data provider providing types with expected `typedResourceTemplate` value.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class TypesWithExpectedTypedResourceTemplateValueDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'types'                              => new GetTypeTypes(),
				'expectedTypedResourceTemplateValue' => Types::GET_TYPE_TYPED_RESOUCRE_TEMPLATE
			],
			1 => [
				'types'                              => new MaskedGetTypeTypes(),
				'expectedTypedResourceTemplateValue' => Types::MASKED_GET_TYPE_TYPED_RESOUCRE_TEMPLATE
			],
			2 => [
				'types'                              => new TypeHintTypes(),
				'expectedTypedResourceTemplateValue' => Types::TYPE_HINT_TYPED_RESOUCRE_TEMPLATE
			],
			3 => [
				'types'                              => new MaskedTypeHintTypes(),
				'expectedTypedResourceTemplateValue' => Types::MASKED_TYPE_HINT_TYPED_RESOUCRE_TEMPLATE
			],
		];
	}
}
