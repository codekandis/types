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
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'types'                            => new GetTypeTypes(),
				'expectedTypedObjectTemplateValue' => Types::GET_TYPE_TYPED_OBJECT_TEMPLATE
			],
			1 => [
				'types'                            => new MaskedGetTypeTypes(),
				'expectedTypedObjectTemplateValue' => Types::MASKED_GET_TYPE_TYPED_OBJECT_TEMPLATE
			],
			2 => [
				'types'                            => new TypeHintTypes(),
				'expectedTypedObjectTemplateValue' => Types::TYPE_HINT_TYPED_OBJECT_TEMPLATE
			],
			3 => [
				'types'                            => new MaskedTypeHintTypes(),
				'expectedTypedObjectTemplateValue' => Types::MASKED_TYPE_HINT_TYPED_OBJECT_TEMPLATE
			],
		];
	}
}
