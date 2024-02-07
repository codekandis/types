<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\Unit\TypesInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\GetTypeTypes;
use CodeKandis\Types\DecoratedGetTypeTypes;
use CodeKandis\Types\DecoratedTypeHintTypes;
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
				'types'                 => new DecoratedGetTypeTypes(),
				'resourceType'          => $resourceType = Values::RESOURCE_TYPE,
				'expectedTypedResource' => Types::createDecoratedGetTypeTypedResourceTypeByResourceType( $resourceType )
			],
			2 => [
				'types'                 => new TypeHintTypes(),
				'resourceType'          => $resourceType = Values::RESOURCE_TYPE,
				'expectedTypedResource' => Types::createTypeHintTypedResourceTypeByResourceType( $resourceType )
			],
			3 => [
				'types'                 => new DecoratedTypeHintTypes(),
				'resourceType'          => $resourceType = Values::RESOURCE_TYPE,
				'expectedTypedResource' => Types::createDecoratedTypeHintTypedResourceTypeByResourceType( $resourceType )
			]
		];
	}
}
