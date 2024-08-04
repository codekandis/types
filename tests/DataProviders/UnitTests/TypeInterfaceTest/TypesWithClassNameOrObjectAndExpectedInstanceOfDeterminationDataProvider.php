<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\TypeInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\Tests\Fixtures\Values;
use CodeKandis\Types\Type;
use Override;

/**
 * Represents a data provider providing types with class name or object and expected instance of determination.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class TypesWithClassNameOrObjectAndExpectedInstanceOfDeterminationDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'type'                            => new Type(
					$instance = Values::createStandardObject()
				),
				'classNameOrObject'               => $instance::class,
				'expectedInstanceOfDetermination' => true
			],
			1  => [
				'type'                            => new Type(
					$instance = Values::createStandardObject()
				),
				'classNameOrObject'               => $instance,
				'expectedInstanceOfDetermination' => true
			],
			2  => [
				'type'                            => new Type(
					Values::createStandardObject()
				),
				'classNameOrObject'               => Values
					::createStandardObject()
					::class,
				'expectedInstanceOfDetermination' => true
			],
			3  => [
				'type'                            => new Type(
					Values::createStandardObject()
				),
				'classNameOrObject'               => Values
					::createStandardObject(),
				'expectedInstanceOfDetermination' => true
			],
			4  => [
				'type'                            => new Type(
					Values::createStandardObject()
				),
				'classNameOrObject'               => Values
					::createInheritedStandardObject()
					::class,
				'expectedInstanceOfDetermination' => false
			],
			5  => [
				'type'                            => new Type(
					Values::createStandardObject()
				),
				'classNameOrObject'               => Values
					::createInheritedStandardObject(),
				'expectedInstanceOfDetermination' => false
			],
			6  => [
				'type'                            => new Type(
					$instance = Values::createInheritedStandardObject()
				),
				'classNameOrObject'               => $instance::class,
				'expectedInstanceOfDetermination' => true
			],
			7  => [
				'type'                            => new Type(
					$instance = Values::createInheritedStandardObject()
				),
				'classNameOrObject'               => $instance,
				'expectedInstanceOfDetermination' => true
			],
			8  => [
				'type'                            => new Type(
					Values::createInheritedStandardObject()
				),
				'classNameOrObject'               => Values
					::createInheritedStandardObject()
					::class,
				'expectedInstanceOfDetermination' => true
			],
			9  => [
				'type'                            => new Type(
					Values::createInheritedStandardObject()
				),
				'classNameOrObject'               => Values
					::createInheritedStandardObject(),
				'expectedInstanceOfDetermination' => true
			],
			10 => [
				'type'                            => new Type(
					Values::createInheritedStandardObject()
				),
				'classNameOrObject'               => Values
					::createStandardObject()
					::class,
				'expectedInstanceOfDetermination' => true
			],
			11 => [
				'type'                            => new Type(
					Values::createInheritedStandardObject()
				),
				'classNameOrObject'               => Values
					::createStandardObject(),
				'expectedInstanceOfDetermination' => true
			],
			12 => [
				'type'                            => new Type(
					$instance = Values::createBaseObject()
				),
				'classNameOrObject'               => $instance::class,
				'expectedInstanceOfDetermination' => true
			],
			13 => [
				'type'                            => new Type(
					$instance = Values::createBaseObject()
				),
				'classNameOrObject'               => $instance,
				'expectedInstanceOfDetermination' => true
			],
			14 => [
				'type'                            => new Type(
					Values::createBaseObject()
				),
				'classNameOrObject'               => Values
					::createBaseObject()
					::class,
				'expectedInstanceOfDetermination' => true
			],
			15 => [
				'type'                            => new Type(
					Values::createBaseObject()
				),
				'classNameOrObject'               => Values
					::createBaseObject(),
				'expectedInstanceOfDetermination' => true
			],
			16 => [
				'type'                            => new Type(
					Values::createBaseObject()
				),
				'classNameOrObject'               => Values
					::createInheritedBaseObject()
					::class,
				'expectedInstanceOfDetermination' => false
			],
			17 => [
				'type'                            => new Type(
					Values::createBaseObject()
				),
				'classNameOrObject'               => Values
					::createInheritedBaseObject(),
				'expectedInstanceOfDetermination' => false
			],
			18 => [
				'type'                            => new Type(
					$instance = Values::createInheritedBaseObject()
				),
				'classNameOrObject'               => $instance::class,
				'expectedInstanceOfDetermination' => true
			],
			19 => [
				'type'                            => new Type(
					$instance = Values::createInheritedBaseObject()
				),
				'classNameOrObject'               => $instance,
				'expectedInstanceOfDetermination' => true
			],
			20 => [
				'type'                            => new Type(
					Values::createInheritedBaseObject()
				),
				'classNameOrObject'               => Values
					::createInheritedBaseObject()
					::class,
				'expectedInstanceOfDetermination' => true
			],
			21 => [
				'type'                            => new Type(
					Values::createInheritedBaseObject()
				),
				'classNameOrObject'               => Values
					::createInheritedBaseObject(),
				'expectedInstanceOfDetermination' => true
			],
			22 => [
				'type'                            => new Type(
					Values::createInheritedBaseObject()
				),
				'classNameOrObject'               => Values
					::createBaseObject()
					::class,
				'expectedInstanceOfDetermination' => true
			],
			23 => [
				'type'                            => new Type(
					Values::createInheritedBaseObject()
				),
				'classNameOrObject'               => Values
					::createBaseObject(),
				'expectedInstanceOfDetermination' => true
			]
		];
	}
}
