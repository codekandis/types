<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\Unit\TypeInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\Tests\Fixtures\Values;
use CodeKandis\Types\Type;
use Override;

/**
 * Represents a data provider providing types with expected qualified object ID.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class TypesWithExpectedQualifiedObjectIdDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'type'                      => new Type(
					$instance = Values::createStdClassObject()
				),
				'expectedQualifiedObjectId' => Values::createQualifiedObjectId( $instance )
			],
			1 => [
				'type'                      => new Type(
					$instance = Values::createInheritedStdClassObject()
				),
				'expectedQualifiedObjectId' => Values::createQualifiedObjectId( $instance )
			],
			2 => [
				'type'                      => new Type(
					$instance = Values::createStandardObjectFixture()
				),
				'expectedQualifiedObjectId' => Values::createQualifiedObjectId( $instance )
			],
			3 => [
				'type'                      => new Type(
					$instance = Values::createInheritedStandardObjectFixture()
				),
				'expectedQualifiedObjectId' => Values::createQualifiedObjectId( $instance )
			],
			4 => [
				'type'                      => new Type(
					$instance = Values::createBaseObjectFixture()
				),
				'expectedQualifiedObjectId' => Values::createQualifiedObjectId( $instance )
			],
			5 => [
				'type'                      => new Type(
					$instance = Values::createInheritedBaseObjectFixture()
				),
				'expectedQualifiedObjectId' => Values::createQualifiedObjectId( $instance )
			]
		];
	}
}
