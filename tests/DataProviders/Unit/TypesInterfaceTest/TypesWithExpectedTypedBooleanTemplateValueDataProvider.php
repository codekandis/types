<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\Unit\TypesInterfaceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\DecoratedGetTypeTypes;
use CodeKandis\Types\DecoratedTypeHintTypes;
use CodeKandis\Types\GetTypeTypes;
use CodeKandis\Types\Tests\Fixtures\Types;
use CodeKandis\Types\TypeHintTypes;
use Override;

/**
 * Represents a data provider providing types with expected `typedBooleanTemplate` value.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
final class TypesWithExpectedTypedBooleanTemplateValueDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'types'                             => new GetTypeTypes(),
				'expectedTypedBooleanTemplateValue' => Types::GET_TYPE_TYPED_BOOLEAN_TEMPLATE
			],
			1 => [
				'types'                             => new DecoratedGetTypeTypes(),
				'expectedTypedBooleanTemplateValue' => Types::DECORATED_GET_TYPE_TYPED_BOOLEAN_TEMPLATE
			],
			2 => [
				'types'                             => new TypeHintTypes(),
				'expectedTypedBooleanTemplateValue' => Types::TYPE_HINT_TYPED_BOOLEAN_TEMPLATE
			],
			3 => [
				'types'                             => new DecoratedTypeHintTypes(),
				'expectedTypedBooleanTemplateValue' => Types::DECORATED_TYPE_HINT_TYPED_BOOLEAN_TEMPLATE
			]
		];
	}
}
