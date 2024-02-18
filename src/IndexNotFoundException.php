<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use CodeKandis\Types\TypeDetermination\TypeDeterminationKind;
use CodeKandis\Types\TypeDetermination\TypeDeterminer;
use Stringable;
use function get_resource_type;
use function implode;
use function sprintf;

/**
 * Represents an exception if an index does not exist.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class IndexNotFoundException extends RuntimeException implements IndexNotFoundExceptionInterface
{
	/**
	 * @inheritdoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The index does not exist.';

	/**
	 * Represents the exception message with the nonexistent index.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX = 'The index `%1$s` does not exist.';

	/**
	 * Represents the exception message with the nonexistent index and expected indices.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES = 'The index `%1$s` does not exist. `%2$s` expected.';

	/**
	 * Stringifies a specific index.
	 * @param mixed $index The index to stringify.
	 * @return string The stringified index.
	 */
	private static function stringifyIndex( mixed $index ): string
	{
		$indexType = new TypeDeterminer()
			->determine( $index, TypeDeterminationKind::GetType );

		return match ( $indexType )
		{
			GetTypeTypes::NULL            => MaskedTypeHintTypes::NULL,
			GetTypeTypes::RESOURCE        => MaskedTypeHintTypes::createTypedResource(
				get_resource_type( $index )
			),
			GetTypeTypes::CLOSED_RESOURCE => MaskedTypeHintTypes::CLOSED_RESOURCE,
			GetTypeTypes::ARRAY           => MaskedTypeHintTypes::ARRAY,
			GetTypeTypes::OBJECT          => $index instanceof Stringable
				? $index->__toString()
				: MaskedTypeHintTypes::createTypedObject( $index::class ),
			GetTypeTypes::BOOLEAN         => MaskedTypeHintTypes::createTypedBoolean( $index ),
			default                       => (string) $index
		};
	}

	/**
	 * Static constructor method.
	 * @param mixed $nonExistentIndex The nonexistent index.
	 * @return static
	 */
	public static function withNonExistentIndex( mixed $nonExistentIndex ): static
	{
		$stringfiedNonExistentIndex = static::stringifyIndex( $nonExistentIndex );

		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX, $stringfiedNonExistentIndex )
		);
	}

	/**
	 * Static constructor method.
	 * @param mixed $nonExistentIndex The nonexistent index.
	 * @param string[] $expectedIndices The expected indices.
	 * @return static
	 */
	public static function withNonExistentIndexAndExpectedIndices( mixed $nonExistentIndex, string ...$expectedIndices ): static
	{
		$stringifiedNonExistentIndex = static::stringifyIndex( $nonExistentIndex );
		$stringyfiedExpectedIndices  = implode( ' | ', $expectedIndices );

		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_NONEXISTENT_INDEX_AND_EXPECTED_INDICES, $stringifiedNonExistentIndex, $stringyfiedExpectedIndices )
		);
	}
}
