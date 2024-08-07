<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\TypeInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\Tests\Fixtures\Values;
use CodeKandis\Types\Type;
use Override;

/**
 * Represents a data provider providing types with expected instance.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class TypesWithExpectedInstanceDataProvider implements DataProviderInterface
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
				'expectedInstance' => $instance
			],
			1 => [
				'type'             => new Type(
					$instance = Values::createInheritedStdClassObject()
				),
				'expectedInstance' => $instance
			],
			2 => [
				'type'             => new Type(
					$instance = Values::createStandardObject()
				),
				'expectedInstance' => $instance
			],
			3 => [
				'type'             => new Type(
					$instance = Values::createInheritedStandardObject()
				),
				'expectedInstance' => $instance
			],
			4 => [
				'type'             => new Type(
					$instance = Values::createBaseObject()
				),
				'expectedInstance' => $instance
			],
			5 => [
				'type'             => new Type(
					$instance = Values::createInheritedBaseObject()
				),
				'expectedInstance' => $instance
			]
		];
	}
}
