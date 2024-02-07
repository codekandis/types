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
 * Represents a data provider providing types class names with resource type and expected typed resource.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class TypesClassNamesWithResourceTypeAndExpectedTypedResourceDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'typesClassName'        => GetTypeTypes::class,
				'resourceType'          => $resourceType = Values::RESOURCE_TYPE,
				'expectedTypedResource' => Types::createGetTypeTypedResourceTypeByResourceType( $resourceType )
			],
			1 => [
				'typesClassName'        => MaskedGetTypeTypes::class,
				'resourceType'          => $resourceType = Values::RESOURCE_TYPE,
				'expectedTypedResource' => Types::createMaskedGetTypeTypedResourceTypeByResourceType( $resourceType )
			],
			2 => [
				'typesClassName'        => TypeHintTypes::class,
				'resourceType'          => $resourceType = Values::RESOURCE_TYPE,
				'expectedTypedResource' => Types::createTypeHintTypedResourceTypeByResourceType( $resourceType )
			],
			3 => [
				'typesClassName'        => MaskedTypeHintTypes::class,
				'resourceType'          => $resourceType = Values::RESOURCE_TYPE,
				'expectedTypedResource' => Types::createMaskedTypeHintTypedResourceTypeByResourceType( $resourceType )
			]
		];
	}
}
