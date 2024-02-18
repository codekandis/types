<?php declare( strict_types = 1 );
namespace CodeKandis\Types;

use Throwable;
use function sprintf;

/**
 * Represents an exception if an interface or class constant value does not exist.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class InterfaceOrClassConstantValueNotFoundException extends AccessErrorException implements InterfaceOrClassConstantValueNotFoundExceptionInterface
{
	use StringifyValueTrait;

	/**
	 * {@inheritDoc}
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The interface or class constant value does not exist.';

	/**
	 * Represents the exception message with the interface or class FQCN and nonexistent constant value.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE = 'The interface or class FQCN `%1$s` does not define the constant value `%2$s`.';

	/**
	 * Static constructor method.
	 * @param string $fqcn The interface or class FQCN of the nonexistent constant value.
	 * @param null|bool|int|float|string|array<array-key, mixed> $nonexistentConstantValue The nonexistent constant value.
	 * @param int $code The error code of the exception.
	 * @param ?Throwable $previous The previous throwable.
	 * @return static
	 */
	public static function withFqcnAndNonexistentConstantValue( string $fqcn, null | bool | int | float | string | array $nonexistentConstantValue, int $code = 0, ?Throwable $previous = null ): static
	{
		$stringifiedNonexistentConstantValue = static::stringifyValue( $nonexistentConstantValue );

		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_CONSTANT_VALUE, $fqcn, $stringifiedNonexistentConstantValue ),
			$code,
			$previous
		);
	}
}
