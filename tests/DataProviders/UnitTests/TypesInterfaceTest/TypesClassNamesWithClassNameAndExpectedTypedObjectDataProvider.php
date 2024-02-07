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
 * Represents a data provider providing types class names with class name and expected typed object.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class TypesClassNamesWithClassNameAndExpectedTypedObjectDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'typesClassName'      => GetTypeTypes::class,
				'className'           => $className = Values::CLASS_NAME,
				'expectedTypedObject' => Types::createGetTypeTypedObjectTypeByClassName( $className )
			],
			1 => [
				'typesClassName'      => MaskedGetTypeTypes::class,
				'className'           => $className = Values::CLASS_NAME,
				'expectedTypedObject' => Types::createMaskedGetTypeTypedObjectTypeByClassName( $className )
			],
			2 => [
				'typesClassName'      => TypeHintTypes::class,
				'className'           => $className = Values::CLASS_NAME,
				'expectedTypedObject' => Types::createTypeHintTypedObjectTypeByClassName( $className )
			],
			3 => [
				'typesClassName'      => MaskedTypeHintTypes::class,
				'className'           => $className = Values::CLASS_NAME,
				'expectedTypedObject' => Types::createMaskedTypeHintTypedObjectTypeByClassName( $className )
			]
		];
	}
}
