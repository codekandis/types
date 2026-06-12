<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\Unit\ExceptionTraitTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\Tests\Fixtures\Values;
use CodeKandis\Types\UnexpectedErrorException;
use CodeKandis\Types\UnsupportedOperationException;
use CodeKandis\Types\ValueIsEmptyException;
use CodeKandis\Types\ValueIsNotEmptyException;
use CodeKandis\Types\ValueIsNotNullException;
use CodeKandis\Types\ValueIsNullException;
use Override;

/**
 * Represents a data provider providing throwable class names with expected throwable class name, expected throwable message, expected throwable code and expected throwable previous.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
final class ThrowableClassNamesWithArgumentsExpectedThrowableClassNameExpectedThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider0003 implements DataProviderInterface
{
	/**
	 * {@inheritdoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			3000 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3001 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3002 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3003 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3004 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3005 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3006 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3007 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3008 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3009 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3010 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3011 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3012 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3013 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3014 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3015 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3016 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3017 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3018 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3019 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3020 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3021 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3022 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3023 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3024 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3025 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3026 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3027 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3028 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3029 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3030 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3031 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3032 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3033 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3034 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3035 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3036 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3037 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3038 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3039 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3040 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3041 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3042 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3043 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3044 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3045 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3046 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3047 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3048 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3049 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3050 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3051 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3052 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3053 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3054 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3055 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3056 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3057 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3058 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3059 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3060 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3061 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3062 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3063 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3064 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3065 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3066 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3067 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3068 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3069 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3070 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3071 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3072 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3073 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3074 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3075 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3076 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3077 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			3078 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3079 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3080 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3081 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3082 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3083 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3084 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3085 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3086 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3087 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3088 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3089 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3090 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3091 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3092 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3093 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3094 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3095 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3096 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3097 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3098 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3099 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3100 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3101 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3102 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3103 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3104 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3105 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3106 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3107 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3108 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3109 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3110 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3111 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3112 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3113 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3114 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3115 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3116 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3117 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3118 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3119 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3120 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3121 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3122 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3123 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3124 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3125 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3126 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3127 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3128 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3129 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3130 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3131 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3132 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3133 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3134 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3135 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3136 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3137 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3138 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3139 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3140 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3141 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3142 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3143 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3144 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3145 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3146 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3147 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3148 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3149 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3150 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3151 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3152 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3153 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3154 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3155 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3156 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3157 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3158 => [
				'throwableClassName'         => $throwableClassName = UnsupportedOperationException::class,
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
			3159 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3160 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3161 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3162 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3163 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3164 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3165 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3166 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3167 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3168 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3169 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3170 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3171 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3172 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3173 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3174 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3175 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3176 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3177 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3178 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3179 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3180 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3181 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3182 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3183 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3184 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3185 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3186 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3187 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3188 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3189 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3190 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3191 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3192 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3193 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3194 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3195 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3196 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3197 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3198 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3199 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3200 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3201 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3202 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3203 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3204 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3205 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3206 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3207 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3208 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3209 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3210 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3211 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3212 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3213 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3214 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3215 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3216 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3217 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3218 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3219 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3220 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3221 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3222 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3223 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3224 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3225 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3226 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3227 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3228 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3229 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3230 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3231 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3232 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3233 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3234 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3235 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3236 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3237 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3238 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3239 => [
				'throwableClassName'         => $throwableClassName = ValueIsEmptyException::class,
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
			3240 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3241 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3242 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3243 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3244 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3245 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3246 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3247 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3248 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3249 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3250 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3251 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3252 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3253 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3254 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3255 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3256 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3257 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3258 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3259 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3260 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3261 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3262 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3263 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3264 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3265 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3266 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3267 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3268 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3269 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3270 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3271 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3272 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3273 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3274 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3275 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3276 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3277 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3278 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3279 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3280 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3281 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3282 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3283 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3284 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3285 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3286 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3287 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3288 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3289 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3290 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3291 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3292 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3293 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3294 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3295 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3296 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3297 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3298 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3299 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3300 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3301 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3302 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3303 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3304 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3305 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3306 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3307 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3308 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3309 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3310 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3311 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3312 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3313 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3314 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3315 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3316 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3317 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3318 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3319 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3320 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotEmptyException::class,
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
			3321 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3322 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3323 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3324 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3325 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3326 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3327 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3328 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3329 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3330 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3331 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3332 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3333 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3334 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3335 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3336 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3337 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3338 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3339 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3340 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3341 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3342 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3343 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3344 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3345 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3346 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3347 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3348 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3349 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3350 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3351 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3352 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3353 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3354 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3355 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3356 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3357 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3358 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3359 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3360 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3361 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3362 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3363 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3364 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3365 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3366 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3367 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3368 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3369 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3370 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3371 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3372 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3373 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3374 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3375 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3376 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3377 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3378 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3379 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3380 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3381 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3382 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3383 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3384 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3385 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3386 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3387 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3388 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3389 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3390 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3391 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3392 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3393 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3394 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3395 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3396 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3397 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3398 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3399 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3400 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3401 => [
				'throwableClassName'         => $throwableClassName = ValueIsNotNullException::class,
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
			3402 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3403 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3404 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3405 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3406 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3407 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3408 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3409 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3410 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3411 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3412 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3413 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3414 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3415 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3416 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3417 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3418 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3419 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3420 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3421 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3422 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3423 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3424 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3425 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3426 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3427 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3428 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3429 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3430 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3431 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3432 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3433 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3434 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3435 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3436 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3437 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3438 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3439 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3440 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3441 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3442 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3443 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3444 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3445 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3446 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3447 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3448 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3449 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3450 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3451 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3452 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3453 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3454 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3455 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3456 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3457 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3458 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3459 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3460 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3461 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3462 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3463 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3464 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3465 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3466 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3467 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3468 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3469 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3470 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3471 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3472 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3473 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3474 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3475 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3476 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3477 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3478 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3479 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3480 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3481 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			3482 => [
				'throwableClassName'         => $throwableClassName = ValueIsNullException::class,
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
			]
		];
	}
}
