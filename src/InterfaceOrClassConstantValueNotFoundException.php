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
	 * @inheritdoc
	 */
	public const string EXCEPTION_MESSAGE_DEFAULT = 'The interface or class constant value does not exist.';

	/**
	 * Represents the exception message with the interface or class name and nonexistent constant value.
	 * @var string
	 */
	public const string EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE = 'The interface or class constant value `%1$s::%2$s` does not exist.';

	/**
	 * Static constructor method.
	 * @param string $interfaceOrClassName The interface or class name of the nonexistent constant value.
	 * @param null|bool|int|float|string|array $nonExistentConstantValue The nonexistent constant value.
	 * @param int $code The error code of the exception.
	 * @param ?Throwable $previous The previously catched throwable.
	 * @return static
	 */
	public static function withInterfaceOrClassNameAndNonExistentConstantValue( string $interfaceOrClassName, null | bool | int | float | string | array $nonExistentConstantValue, int $code = 0, ?Throwable $previous = null ): static
	{
		$stringifiedNonExistentConstantValue = static::stringifyValue( $nonExistentConstantValue );

		return new static(
			sprintf( static::EXCEPTION_MESSAGE_WITH_INTERFACE_OR_CLASS_NAME_AND_NONEXISTENT_CONSTANT_VALUE, $interfaceOrClassName, $stringifiedNonExistentConstantValue ),
			$code,
			$previous
		);
	}
}
