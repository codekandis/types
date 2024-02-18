<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use CodeKandis\Types\TypeDetermination\TypeDeterminationKind;
use CodeKandis\Types\TypeDetermination\TypeDeterminer;
use Stringable;
use function get_resource_type;
use function implode;
use function sprintf;

/**
 * Represents an exception if an index is invalid.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class InvalidIndexException extends RuntimeException implements InvalidIndexExceptionInterface
{
	/**
	 * @inheritdoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The index is invalid.';

	/**
	 * Represents the exception message with the invalid index.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_INVALID_INDEX = 'The index `%1$s` is invalid.';

	/**
	 * Represents the exception message with the invalid index and expected indices.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES = 'The index `%1$s` is invalid. `%2$s` expected.';

	/**
	 * Stringifies a specific index.
	 * @param mixed $index The index to stringify.
	 * @return string The stringified index.
	 */
	protected static function stringifyIndex( mixed $index ): string
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
	 * @param mixed $invalidIndex The invalid index.
	 * @return static
	 */
	public static function withInvalidIndex( mixed $invalidIndex ): static
	{
		$stringfiedInvalidIndex = static::stringifyIndex( $invalidIndex );

		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_INVALID_INDEX, $stringfiedInvalidIndex )
		);
	}

	/**
	 * Static constructor method.
	 * @param mixed $invalidIndex The invalid index.
	 * @param string[] $expectedIndices The expected indices.
	 * @return static
	 */
	public static function withInvalidIndexAndExpectedIndices( mixed $invalidIndex, string ...$expectedIndices ): static
	{
		$stringifiedInvalidIndex    = static::stringifyIndex( $invalidIndex );
		$stringyfiedExpectedIndices = implode( ' | ', $expectedIndices );

		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_INVALID_INDEX_AND_EXPECTED_INDICES, $stringifiedInvalidIndex, $stringyfiedExpectedIndices )
		);
	}
}
