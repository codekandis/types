<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\Unit\ExceptionTraitTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\InterfaceClassEnumOrTraitNotFoundException;
use CodeKandis\Types\InterfaceClassOrEnumNotFoundException;
use CodeKandis\Types\InterfaceNotFoundException;
use CodeKandis\Types\InterfaceOrClassConstantNotFoundException;
use CodeKandis\Types\InterfaceOrClassConstantValueNotFoundException;
use CodeKandis\Types\InterfaceOrClassNotFoundException;
use CodeKandis\Types\InvalidIndexException;
use CodeKandis\Types\InvalidOffsetException;
use CodeKandis\Types\InvalidTypeException;
use CodeKandis\Types\InvalidValueException;
use CodeKandis\Types\LogicException;
use CodeKandis\Types\MethodNotFoundException;
use CodeKandis\Types\NotImplementedOperationException;
use CodeKandis\Types\Tests\Fixtures\Values;
use Override;

/**
 * Represents a data provider providing throwable class names with expected throwable class name, expected throwable message, expected throwable code and expected throwable previous.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
final class ThrowableClassNamesWithArgumentsExpectedThrowableClassNameExpectedThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider0001 implements DataProviderInterface
{
	/**
	 * {@inheritdoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			1000 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1001 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1002 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1003 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1004 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1005 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1006 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1007 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1008 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1009 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1010 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1011 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1012 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1013 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1014 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1015 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1016 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1017 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1018 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1019 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1020 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1021 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1022 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1023 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1024 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1025 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1026 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1027 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1028 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1029 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1030 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1031 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1032 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1033 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1034 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1035 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1036 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1037 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1038 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1039 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1040 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1041 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1042 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1043 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1044 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1045 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1046 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1047 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1048 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1049 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1050 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1051 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1052 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1053 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1054 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1055 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1056 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1057 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1058 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1059 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1060 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1061 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1062 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1063 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1064 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1065 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1066 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1067 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1068 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1069 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1070 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1071 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1072 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1073 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1074 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1075 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1076 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1077 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1078 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1079 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1080 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1081 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1082 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1083 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1084 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1085 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1086 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1087 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1088 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1089 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1090 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1091 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1092 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1093 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1094 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1095 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1096 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1097 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1098 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1099 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1100 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1101 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1102 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1103 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1104 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1105 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1106 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1107 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1108 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1109 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1110 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1111 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1112 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1113 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1114 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1115 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1116 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1117 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1118 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1119 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1120 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1121 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1122 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1123 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1124 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1125 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1126 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1127 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1128 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1129 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1130 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1131 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1132 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1133 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassOrEnumNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1134 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1135 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1136 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1137 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1138 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1139 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1140 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1141 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1142 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1143 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1144 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1145 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1146 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1147 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1148 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1149 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1150 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1151 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1152 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1153 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1154 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1155 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1156 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1157 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1158 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1159 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1160 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1161 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1162 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1163 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1164 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1165 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1166 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1167 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1168 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1169 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1170 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1171 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1172 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1173 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1174 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1175 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1176 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1177 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1178 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1179 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1180 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1181 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1182 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1183 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1184 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1185 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1186 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1187 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1188 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1189 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1190 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1191 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1192 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1193 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1194 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1195 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1196 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1197 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1198 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1199 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1200 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1201 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1202 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1203 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1204 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1205 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1206 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1207 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1208 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1209 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1210 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1211 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1212 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1213 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1214 => [
				'throwableClassName'         => $throwableClassName = InterfaceNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1215 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1216 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1217 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1218 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1219 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1220 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1221 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1222 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1223 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1224 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1225 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1226 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1227 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1228 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1229 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1230 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1231 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1232 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1233 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1234 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1235 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1236 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1237 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1238 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1239 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1240 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1241 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1242 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1243 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1244 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1245 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1246 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1247 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1248 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1249 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1250 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1251 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1252 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1253 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1254 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1255 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1256 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1257 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1258 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1259 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1260 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1261 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1262 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1263 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1264 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1265 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1266 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1267 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1268 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1269 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1270 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1271 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1272 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1273 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1274 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1275 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1276 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1277 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1278 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1279 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1280 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1281 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1282 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1283 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1284 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1285 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1286 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1287 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1288 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1289 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1290 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1291 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1292 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1293 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1294 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1295 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1296 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1297 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1298 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1299 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1300 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1301 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1302 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1303 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1304 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1305 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1306 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1307 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1308 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1309 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1310 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1311 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1312 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1313 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1314 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1315 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1316 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1317 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1318 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1319 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1320 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1321 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1322 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1323 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1324 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1325 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1326 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1327 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1328 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1329 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1330 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1331 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1332 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1333 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1334 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1335 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1336 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1337 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1338 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1339 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1340 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1341 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1342 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1343 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1344 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1345 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1346 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1347 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1348 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1349 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1350 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1351 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1352 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1353 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1354 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1355 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1356 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1357 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1358 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1359 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1360 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1361 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1362 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1363 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1364 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1365 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1366 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1367 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1368 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1369 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1370 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1371 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1372 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1373 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1374 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1375 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1376 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassConstantValueNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1377 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1378 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1379 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1380 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1381 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1382 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1383 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1384 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1385 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1386 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1387 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1388 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1389 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1390 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1391 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1392 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1393 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1394 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1395 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1396 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1397 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1398 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1399 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1400 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1401 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1402 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1403 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1404 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1405 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1406 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1407 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1408 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1409 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1410 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1411 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1412 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1413 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1414 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1415 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1416 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1417 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1418 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1419 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1420 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1421 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1422 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1423 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1424 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1425 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1426 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1427 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1428 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1429 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1430 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1431 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1432 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1433 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1434 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1435 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1436 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1437 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1438 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1439 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1440 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1441 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1442 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1443 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1444 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1445 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1446 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1447 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1448 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1449 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1450 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1451 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1452 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1453 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1454 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1455 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1456 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1457 => [
				'throwableClassName'         => $throwableClassName = InterfaceOrClassNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1458 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1459 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1460 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1461 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1462 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1463 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1464 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1465 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1466 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1467 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1468 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1469 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1470 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1471 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1472 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1473 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1474 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1475 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1476 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1477 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1478 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1479 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1480 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1481 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1482 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1483 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1484 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1485 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1486 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1487 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1488 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1489 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1490 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1491 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1492 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1493 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1494 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1495 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1496 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1497 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1498 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1499 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1500 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1501 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1502 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1503 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1504 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1505 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1506 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1507 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1508 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1509 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1510 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1511 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1512 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1513 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1514 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1515 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1516 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1517 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1518 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1519 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1520 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1521 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1522 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1523 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1524 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1525 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1526 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1527 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1528 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1529 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1530 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1531 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1532 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1533 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1534 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1535 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1536 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1537 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1538 => [
				'throwableClassName'         => $throwableClassName = InvalidIndexException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1539 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1540 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1541 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1542 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1543 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1544 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1545 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1546 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1547 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1548 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1549 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1550 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1551 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1552 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1553 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1554 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1555 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1556 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1557 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1558 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1559 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1560 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1561 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1562 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1563 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1564 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1565 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1566 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1567 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1568 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1569 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1570 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1571 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1572 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1573 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1574 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1575 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1576 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1577 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1578 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1579 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1580 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1581 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1582 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1583 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1584 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1585 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1586 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1587 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1588 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1589 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1590 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1591 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1592 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1593 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1594 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1595 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1596 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1597 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1598 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1599 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1600 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1601 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1602 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1603 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1604 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1605 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1606 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1607 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1608 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1609 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1610 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1611 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1612 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1613 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1614 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1615 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1616 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1617 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1618 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1619 => [
				'throwableClassName'         => $throwableClassName = InvalidOffsetException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1620 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1621 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1622 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1623 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1624 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1625 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1626 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1627 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1628 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1629 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1630 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1631 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1632 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1633 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1634 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1635 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1636 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1637 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1638 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1639 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1640 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1641 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1642 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1643 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1644 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1645 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1646 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1647 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1648 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1649 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1650 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1651 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1652 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1653 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1654 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1655 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1656 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1657 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1658 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1659 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1660 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1661 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1662 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1663 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1664 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1665 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1666 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1667 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1668 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1669 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1670 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1671 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1672 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1673 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1674 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1675 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1676 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1677 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1678 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1679 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1680 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1681 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1682 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1683 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1684 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1685 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1686 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1687 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1688 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1689 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1690 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1691 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1692 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1693 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1694 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1695 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1696 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1697 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1698 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1699 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1700 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1701 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1702 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1703 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1704 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1705 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1706 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1707 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1708 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1709 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1710 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1711 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1712 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1713 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1714 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1715 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1716 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1717 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1718 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1719 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1720 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1721 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1722 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1723 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1724 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1725 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1726 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1727 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1728 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1729 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1730 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1731 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1732 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1733 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1734 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1735 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1736 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1737 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1738 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1739 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1740 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1741 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1742 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1743 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1744 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1745 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1746 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1747 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1748 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1749 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1750 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1751 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1752 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1753 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1754 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1755 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1756 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1757 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1758 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1759 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1760 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1761 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1762 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1763 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1764 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1765 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1766 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1767 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1768 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1769 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1770 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1771 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1772 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1773 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1774 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1775 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1776 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1777 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1778 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1779 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1780 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1781 => [
				'throwableClassName'         => $throwableClassName = InvalidValueException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1782 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1783 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1784 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1785 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1786 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1787 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1788 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1789 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1790 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1791 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1792 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1793 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1794 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1795 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1796 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1797 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1798 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1799 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1800 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1801 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1802 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1803 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1804 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1805 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1806 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1807 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1808 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1809 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1810 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1811 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1812 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1813 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1814 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1815 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1816 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1817 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1818 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1819 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1820 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1821 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1822 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1823 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1824 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1825 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1826 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1827 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1828 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1829 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1830 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1831 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1832 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1833 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1834 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1835 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1836 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1837 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1838 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1839 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1840 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1841 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1842 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1843 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1844 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1845 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1846 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1847 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1848 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1849 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1850 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1851 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1852 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1853 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1854 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1855 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1856 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1857 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1858 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1859 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1860 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1861 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1862 => [
				'throwableClassName'         => $throwableClassName = LogicException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1863 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1864 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1865 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1866 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1867 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1868 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1869 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1870 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1871 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1872 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1873 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1874 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1875 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1876 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1877 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1878 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1879 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1880 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1881 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1882 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1883 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1884 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1885 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1886 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1887 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1888 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1889 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1890 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1891 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1892 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1893 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1894 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1895 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1896 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1897 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1898 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1899 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1900 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1901 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1902 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1903 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1904 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1905 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1906 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1907 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1908 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1909 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1910 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1911 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1912 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1913 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1914 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1915 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1916 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1917 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1918 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1919 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1920 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1921 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1922 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1923 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1924 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1925 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1926 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1927 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1928 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1929 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1930 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1931 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1932 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1933 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1934 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1935 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1936 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1937 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1938 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1939 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1940 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1941 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1942 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1943 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1944 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
				'arguments'                  => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1945 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
				'arguments'                  => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1946 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
				'arguments'                  => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1947 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1948 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1949 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1950 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1951 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
				'arguments'                  => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1952 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
				'arguments'                  => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1953 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1954 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1955 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1956 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1957 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1958 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1959 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1960 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1961 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1962 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1963 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1964 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1965 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1966 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
				'arguments'                  => [
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1967 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1968 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
				'arguments'                  => [
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1969 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1970 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
				'arguments'                  => [
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1971 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1972 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
				'arguments'                  => [
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1973 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1974 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1975 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1976 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
				'arguments'                  => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1977 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1978 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1979 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1980 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1981 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1982 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => Values::THROWABLE_MESSAGE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1983 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1984 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'message'  => $throwableMessage = Values::THROWABLE_MESSAGE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1985 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1986 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1987 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1988 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1989 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1990 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => Values::THROWABLE_MESSAGE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1991 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1992 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
				'arguments'                  => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'message' => $throwableMessage = Values::THROWABLE_MESSAGE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableMessage,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1993 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1994 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1995 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1996 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1997 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1998 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			],
			1999 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
				'arguments'                  => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => $throwableClassName::EXCEPTION_MESSAGE_DEFAULT,
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => null,
					'additional' => $throwableContext
				]
			]
		];
	}
}
