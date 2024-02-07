<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\TypesInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\GetTypeTypes;
use CodeKandis\Types\MaskedGetTypeTypes;
use CodeKandis\Types\MaskedTypeHintTypes;
use CodeKandis\Types\Tests\Fixtures\Types;
use CodeKandis\Types\Tests\Fixtures\Values;
use CodeKandis\Types\TypeHintTypes;
use Override;

/**
 * Represents a data provider providing types with resource type and expected typed resource.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class TypesWithResourceTypeAndExpectedTypedResourceDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'types'                 => new GetTypeTypes(),
				'resourceType'          => $resourceType = Values::RESOURCE_TYPE,
				'expectedTypedResource' => Types::createGetTypeTypedResourceTypeByResourceType( $resourceType )
			],
			1 => [
				'types'                 => new MaskedGetTypeTypes(),
				'resourceType'          => $resourceType = Values::RESOURCE_TYPE,
				'expectedTypedResource' => Types::createMaskedGetTypeTypedResourceTypeByResourceType( $resourceType )
			],
			2 => [
				'types'                 => new TypeHintTypes(),
				'resourceType'          => $resourceType = Values::RESOURCE_TYPE,
				'expectedTypedResource' => Types::createTypeHintTypedResourceTypeByResourceType( $resourceType )
			],
			3 => [
				'types'                 => new MaskedTypeHintTypes(),
				'resourceType'          => $resourceType = Values::RESOURCE_TYPE,
				'expectedTypedResource' => Types::createMaskedTypeHintTypedResourceTypeByResourceType( $resourceType )
			],
		];
	}
}
