<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\TypeInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\Tests\Fixtures\Values;
use CodeKandis\Types\Type;
use Override;

/**
 * Represents a data provider providing types with expected type name.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class TypesWithExpectedTypeNameDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'type'             => new Type(
					$instance = Values::createStdClassObject()
				),
				'expectedTypeName' => $instance::class
			],
			1 => [
				'type'             => new Type(
					$instance = Values::createInheritedStdClassObject()
				),
				'expectedTypeName' => $instance::class
			],
			2 => [
				'type'             => new Type(
					$instance = Values::createStandardObject()
				),
				'expectedTypeName' => $instance::class
			],
			3 => [
				'type'             => new Type(
					$instance = Values::createInheritedStandardObject()
				),
				'expectedTypeName' => $instance::class
			],
			4 => [
				'type'             => new Type(
					$instance = Values::createBaseObject()
				),
				'expectedTypeName' => $instance::class
			],
			5 => [
				'type'             => new Type(
					$instance = Values::createInheritedBaseObject()
				),
				'expectedTypeName' => $instance::class
			]
		];
	}
}
