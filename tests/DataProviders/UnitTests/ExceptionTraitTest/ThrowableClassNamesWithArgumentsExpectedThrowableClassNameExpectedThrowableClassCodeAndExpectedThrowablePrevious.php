<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\ExceptionTraitTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\AccessErrorException;
use CodeKandis\Types\ClassNotFoundException;
use CodeKandis\Types\ConstantNotFoundException;
use CodeKandis\Types\EnumNotFoundException;
use CodeKandis\Types\ErrorException;
use CodeKandis\Types\FatalErrorException;
use CodeKandis\Types\IndexOutOfRangeException;
use CodeKandis\Types\InterfaceNotFoundException;
use CodeKandis\Types\InvalidIndexException;
use CodeKandis\Types\InvalidTypeException;
use CodeKandis\Types\InvalidValueException;
use CodeKandis\Types\LogicException;
use CodeKandis\Types\MethodNotFoundException;
use CodeKandis\Types\PrivateMethodNotFoundException;
use CodeKandis\Types\PrivatePropertyNotFoundException;
use CodeKandis\Types\PropertyNotFoundException;
use CodeKandis\Types\ProtectedMethodNotFoundException;
use CodeKandis\Types\ProtectedPropertyNotFoundException;
use CodeKandis\Types\PublicMethodNotFoundException;
use CodeKandis\Types\PublicPropertyNotFoundException;
use CodeKandis\Types\RuntimeException;
use CodeKandis\Types\Tests\Fixtures\Values;
use CodeKandis\Types\TraitNotFoundException;
use CodeKandis\Types\UnknownIndexException;
use CodeKandis\Types\UnsupportedOperationException;
use CodeKandis\Types\ValueIsEmptyException;
use CodeKandis\Types\ValueIsNotEmptyException;
use CodeKandis\Types\ValueIsNotNullException;
use CodeKandis\Types\ValueIsNullException;
use Override;

/**
 * Represents a data provider providing throwable class names with expected throwable class name and expected throwable message.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithArgumentsExpectedThrowableClassNameExpectedThrowableClassCodeAndExpectedThrowablePrevious implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0   => [
				'throwableClassName'         => $throwableClassName = AccessErrorException::class,
				'arguments'                  => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			1   => [
				'throwableClassName'         => $throwableClassName = AccessErrorException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			2   => [
				'throwableClassName'         => $throwableClassName = AccessErrorException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			3   => [
				'throwableClassName'         => $throwableClassName = AccessErrorException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			4   => [
				'throwableClassName'         => $throwableClassName = AccessErrorException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			5   => [
				'throwableClassName'         => $throwableClassName = AccessErrorException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'    => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			6   => [
				'throwableClassName'         => $throwableClassName = AccessErrorException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'    => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			7   => [
				'throwableClassName'         => $throwableClassName = AccessErrorException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			8   => [
				'throwableClassName'         => $throwableClassName = AccessErrorException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			9   => [
				'throwableClassName'         => $throwableClassName = AccessErrorException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			10  => [
				'throwableClassName'         => $throwableClassName = AccessErrorException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			11  => [
				'throwableClassName'         => $throwableClassName = AccessErrorException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			12  => [
				'throwableClassName'         => $throwableClassName = AccessErrorException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			13  => [
				'throwableClassName'         => $throwableClassName = AccessErrorException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			14  => [
				'throwableClassName'         => $throwableClassName = AccessErrorException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			15  => [
				'throwableClassName'         => $throwableClassName = ClassNotFoundException::class,
				'arguments'                  => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			16  => [
				'throwableClassName'         => $throwableClassName = ClassNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			17  => [
				'throwableClassName'         => $throwableClassName = ClassNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			18  => [
				'throwableClassName'         => $throwableClassName = ClassNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			19  => [
				'throwableClassName'         => $throwableClassName = ClassNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			20  => [
				'throwableClassName'         => $throwableClassName = ClassNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'    => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			21  => [
				'throwableClassName'         => $throwableClassName = ClassNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'    => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			22  => [
				'throwableClassName'         => $throwableClassName = ClassNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			23  => [
				'throwableClassName'         => $throwableClassName = ClassNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			24  => [
				'throwableClassName'         => $throwableClassName = ClassNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			25  => [
				'throwableClassName'         => $throwableClassName = ClassNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			26  => [
				'throwableClassName'         => $throwableClassName = ClassNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			27  => [
				'throwableClassName'         => $throwableClassName = ClassNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			28  => [
				'throwableClassName'         => $throwableClassName = ClassNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			29  => [
				'throwableClassName'         => $throwableClassName = ClassNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			30  => [
				'throwableClassName'         => $throwableClassName = ConstantNotFoundException::class,
				'arguments'                  => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			31  => [
				'throwableClassName'         => $throwableClassName = ConstantNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			32  => [
				'throwableClassName'         => $throwableClassName = ConstantNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			33  => [
				'throwableClassName'         => $throwableClassName = ConstantNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			34  => [
				'throwableClassName'         => $throwableClassName = ConstantNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			35  => [
				'throwableClassName'         => $throwableClassName = ConstantNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'    => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			36  => [
				'throwableClassName'         => $throwableClassName = ConstantNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'    => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			37  => [
				'throwableClassName'         => $throwableClassName = ConstantNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			38  => [
				'throwableClassName'         => $throwableClassName = ConstantNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			39  => [
				'throwableClassName'         => $throwableClassName = ConstantNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			40  => [
				'throwableClassName'         => $throwableClassName = ConstantNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			41  => [
				'throwableClassName'         => $throwableClassName = ConstantNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			42  => [
				'throwableClassName'         => $throwableClassName = ConstantNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			43  => [
				'throwableClassName'         => $throwableClassName = ConstantNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			44  => [
				'throwableClassName'         => $throwableClassName = ConstantNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			45  => [
				'throwableClassName'         => $throwableClassName = EnumNotFoundException::class,
				'arguments'                  => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			46  => [
				'throwableClassName'         => $throwableClassName = EnumNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			47  => [
				'throwableClassName'         => $throwableClassName = EnumNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			48  => [
				'throwableClassName'         => $throwableClassName = EnumNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			49  => [
				'throwableClassName'         => $throwableClassName = EnumNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			50  => [
				'throwableClassName'         => $throwableClassName = EnumNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'    => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			51  => [
				'throwableClassName'         => $throwableClassName = EnumNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'    => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			52  => [
				'throwableClassName'         => $throwableClassName = EnumNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			53  => [
				'throwableClassName'         => $throwableClassName = EnumNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			54  => [
				'throwableClassName'         => $throwableClassName = EnumNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			55  => [
				'throwableClassName'         => $throwableClassName = EnumNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			56  => [
				'throwableClassName'         => $throwableClassName = EnumNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			57  => [
				'throwableClassName'         => $throwableClassName = EnumNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			58  => [
				'throwableClassName'         => $throwableClassName = EnumNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			59  => [
				'throwableClassName'         => $throwableClassName = EnumNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			60  => [
				'throwableClassName'         => $throwableClassName = ErrorException::class,
				'arguments'                  => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			61  => [
				'throwableClassName'         => $throwableClassName = ErrorException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			62  => [
				'throwableClassName'         => $throwableClassName = ErrorException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			63  => [
				'throwableClassName'         => $throwableClassName = ErrorException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			64  => [
				'throwableClassName'         => $throwableClassName = ErrorException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			65  => [
				'throwableClassName'         => $throwableClassName = ErrorException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'    => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			66  => [
				'throwableClassName'         => $throwableClassName = ErrorException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'    => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			67  => [
				'throwableClassName'         => $throwableClassName = ErrorException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			68  => [
				'throwableClassName'         => $throwableClassName = ErrorException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			69  => [
				'throwableClassName'         => $throwableClassName = ErrorException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			70  => [
				'throwableClassName'         => $throwableClassName = ErrorException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			71  => [
				'throwableClassName'         => $throwableClassName = ErrorException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			72  => [
				'throwableClassName'         => $throwableClassName = ErrorException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			73  => [
				'throwableClassName'         => $throwableClassName = ErrorException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			74  => [
				'throwableClassName'         => $throwableClassName = ErrorException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			75  => [
				'throwableClassName'         => $throwableClassName = FatalErrorException::class,
				'arguments'                  => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			76  => [
				'throwableClassName'         => $throwableClassName = FatalErrorException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			77  => [
				'throwableClassName'         => $throwableClassName = FatalErrorException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			78  => [
				'throwableClassName'         => $throwableClassName = FatalErrorException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			79  => [
				'throwableClassName'         => $throwableClassName = FatalErrorException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			80  => [
				'throwableClassName'         => $throwableClassName = FatalErrorException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'    => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			81  => [
				'throwableClassName'         => $throwableClassName = FatalErrorException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'    => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			82  => [
				'throwableClassName'         => $throwableClassName = FatalErrorException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			83  => [
				'throwableClassName'         => $throwableClassName = FatalErrorException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			84  => [
				'throwableClassName'         => $throwableClassName = FatalErrorException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			85  => [
				'throwableClassName'         => $throwableClassName = FatalErrorException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			86  => [
				'throwableClassName'         => $throwableClassName = FatalErrorException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			87  => [
				'throwableClassName'         => $throwableClassName = FatalErrorException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			88  => [
				'throwableClassName'         => $throwableClassName = FatalErrorException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			89  => [
				'throwableClassName'         => $throwableClassName = FatalErrorException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			90  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'arguments'                  => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			91  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			92  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			93  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			94  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			95  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'    => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			96  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'    => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			97  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			98  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			99  => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			100 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			101 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			102 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			103 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			104 => [
				'throwableClassName'         => $throwableClassName = IndexOutOfRangeException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			105 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			106 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			107 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			108 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			109 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			110 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'    => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			111 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'    => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			112 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			113 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			114 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			115 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			116 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			117 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			118 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			119 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			120 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			121 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			122 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			123 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			124 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			125 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'    => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			126 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'    => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			127 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			128 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			129 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			130 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			131 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			132 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			133 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			134 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			135 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			136 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			137 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			138 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			139 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			140 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'    => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			141 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'    => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			142 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			143 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			144 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			145 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			146 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			147 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			148 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			149 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			150 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			151 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			152 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			153 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			154 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			155 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'    => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			156 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'    => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			157 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			158 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			159 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			160 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			161 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			162 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			163 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			164 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			165 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			166 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			167 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			168 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			169 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			170 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'    => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			171 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'    => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			172 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			173 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			174 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			175 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			176 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			177 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			178 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			179 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			180 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			181 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			182 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			183 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			184 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			185 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'    => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			186 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'    => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			187 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			188 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			189 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			190 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			191 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			192 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			193 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			194 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			195 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
				'arguments'                  => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			196 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			197 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			198 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			199 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			200 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'    => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			201 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'    => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			202 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			203 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			204 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			205 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			206 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			207 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			208 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			209 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			210 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'arguments'                  => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			211 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			212 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			213 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			214 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			215 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'    => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			216 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'    => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			217 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			218 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			219 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			220 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			221 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			222 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			223 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			224 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			225 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
				'arguments'                  => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			226 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			227 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			228 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			229 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			230 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'    => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			231 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'    => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			232 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			233 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			234 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			235 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			236 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			237 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			238 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			239 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			240 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'arguments'                  => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			241 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			242 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			243 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			244 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			245 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'    => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			246 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'    => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			247 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			248 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			249 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			250 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			251 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			252 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			253 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			254 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			255 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
				'arguments'                  => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			256 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			257 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			258 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			259 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			260 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'    => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			261 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'    => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			262 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			263 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			264 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			265 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			266 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			267 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			268 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			269 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			270 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
				'arguments'                  => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			271 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			272 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			273 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			274 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			275 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'    => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			276 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'    => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			277 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			278 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			279 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			280 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			281 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			282 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			283 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			284 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			285 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
				'arguments'                  => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			286 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			287 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			288 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			289 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			290 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'    => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			291 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'    => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			292 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			293 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			294 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			295 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			296 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			297 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			298 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			299 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			300 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
				'arguments'                  => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			301 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			302 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			303 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			304 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			305 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'    => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			306 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'    => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			307 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			308 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			309 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			310 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			311 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			312 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			313 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			314 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			315 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
				'arguments'                  => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			316 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			317 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			318 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			319 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			320 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'    => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			321 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'    => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			322 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			323 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			324 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			325 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			326 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			327 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			328 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			329 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			330 => [
				'throwableClassName'         => $throwableClassName = UnknownIndexException::class,
				'arguments'                  => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			331 => [
				'throwableClassName'         => $throwableClassName = UnknownIndexException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			332 => [
				'throwableClassName'         => $throwableClassName = UnknownIndexException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			333 => [
				'throwableClassName'         => $throwableClassName = UnknownIndexException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			334 => [
				'throwableClassName'         => $throwableClassName = UnknownIndexException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			335 => [
				'throwableClassName'         => $throwableClassName = UnknownIndexException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'    => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			336 => [
				'throwableClassName'         => $throwableClassName = UnknownIndexException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'    => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			337 => [
				'throwableClassName'         => $throwableClassName = UnknownIndexException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			338 => [
				'throwableClassName'         => $throwableClassName = UnknownIndexException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			339 => [
				'throwableClassName'         => $throwableClassName = UnknownIndexException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			340 => [
				'throwableClassName'         => $throwableClassName = UnknownIndexException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			341 => [
				'throwableClassName'         => $throwableClassName = UnknownIndexException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			342 => [
				'throwableClassName'         => $throwableClassName = UnknownIndexException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			343 => [
				'throwableClassName'         => $throwableClassName = UnknownIndexException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			344 => [
				'throwableClassName'         => $throwableClassName = UnknownIndexException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			345 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
				'arguments'                  => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			346 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			347 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			348 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			349 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			350 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'    => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			351 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'    => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			352 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			353 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			354 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			355 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			356 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			357 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			358 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			359 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			360 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'arguments'                  => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			361 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			362 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			363 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			364 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			365 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'    => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			366 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'    => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			367 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			368 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			369 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			370 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			371 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			372 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			373 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			374 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			375 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'arguments'                  => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			376 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			377 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			378 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			379 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			380 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'    => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			381 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'    => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			382 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			383 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			384 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			385 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			386 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			387 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			388 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			389 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			390 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'arguments'                  => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			391 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			392 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			393 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			394 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			395 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'    => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			396 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'    => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			397 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			398 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			399 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			400 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			401 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			402 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			403 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			404 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			405 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'arguments'                  => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			406 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			407 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			408 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			409 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			410 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'    => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			411 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'    => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT
			],
			412 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			413 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			414 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			415 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			416 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			417 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			418 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			],
			419 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowablePrevious()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious
			]
		];
	}
}
