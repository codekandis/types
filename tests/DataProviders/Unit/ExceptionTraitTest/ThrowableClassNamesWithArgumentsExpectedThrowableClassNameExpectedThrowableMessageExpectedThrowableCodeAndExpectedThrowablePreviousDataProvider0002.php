<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\Unit\ExceptionTraitTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\NotImplementedOperationException;
use CodeKandis\Types\ObjectNotFoundException;
use CodeKandis\Types\OffsetOutOfRangeException;
use CodeKandis\Types\PrivateMethodNotFoundException;
use CodeKandis\Types\PrivatePropertyNotFoundException;
use CodeKandis\Types\PropertyNotFoundException;
use CodeKandis\Types\ProtectedMethodNotFoundException;
use CodeKandis\Types\ProtectedPropertyNotFoundException;
use CodeKandis\Types\PublicMethodNotFoundException;
use CodeKandis\Types\PublicPropertyNotFoundException;
use CodeKandis\Types\RuntimeException;
use CodeKandis\Types\StringBackedEnumNotFoundException;
use CodeKandis\Types\Tests\Fixtures\Values;
use CodeKandis\Types\TraitNotFoundException;
use CodeKandis\Types\UnexpectedErrorException;
use Override;

/**
 * Represents a data provider providing throwable class names with expected throwable class name, expected throwable message, expected throwable code and expected throwable previous.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
final class ThrowableClassNamesWithArgumentsExpectedThrowableClassNameExpectedThrowableMessageExpectedThrowableCodeAndExpectedThrowablePreviousDataProvider0002 implements DataProviderInterface
{
	/**
	 * {@inheritdoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			2000 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
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
			2001 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
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
			2002 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
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
			2003 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
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
			2004 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
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
			2005 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
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
			2006 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
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
			2007 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
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
			2008 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
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
			2009 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
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
			2010 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
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
			2011 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
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
			2012 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
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
			2013 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
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
			2014 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
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
			2015 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
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
			2016 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
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
			2017 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
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
			2018 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
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
			2019 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
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
			2020 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
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
			2021 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
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
			2022 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
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
			2023 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
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
			2024 => [
				'throwableClassName'         => $throwableClassName = NotImplementedOperationException::class,
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
			2025 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2026 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2027 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2028 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2029 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2030 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2031 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2032 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2033 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2034 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2035 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2036 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2037 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2038 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2039 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2040 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2041 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2042 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2043 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2044 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2045 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2046 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2047 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2048 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2049 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2050 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2051 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2052 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2053 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2054 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2055 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2056 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2057 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2058 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2059 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2060 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2061 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2062 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2063 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2064 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2065 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2066 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2067 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2068 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2069 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2070 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2071 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2072 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2073 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2074 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2075 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2076 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2077 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2078 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2079 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2080 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2081 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2082 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2083 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2084 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2085 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2086 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2087 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2088 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2089 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2090 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2091 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2092 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2093 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2094 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2095 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2096 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2097 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2098 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2099 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2100 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2101 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2102 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2103 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2104 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2105 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
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
			2106 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2107 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2108 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2109 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2110 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2111 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2112 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2113 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2114 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2115 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2116 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2117 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2118 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2119 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2120 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2121 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2122 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2123 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2124 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2125 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2126 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2127 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2128 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2129 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2130 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2131 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2132 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2133 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2134 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2135 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2136 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2137 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2138 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2139 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2140 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2141 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2142 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2143 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2144 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2145 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2146 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2147 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2148 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2149 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2150 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2151 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2152 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2153 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2154 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2155 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2156 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2157 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2158 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2159 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2160 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2161 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2162 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2163 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2164 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2165 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2166 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2167 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2168 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2169 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2170 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2171 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2172 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2173 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2174 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2175 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2176 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2177 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2178 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2179 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2180 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2181 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2182 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2183 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2184 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2185 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2186 => [
				'throwableClassName'         => $throwableClassName = OffsetOutOfRangeException::class,
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
			2187 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2188 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2189 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2190 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2191 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2192 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2193 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2194 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2195 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2196 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2197 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2198 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2199 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2200 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2201 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2202 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2203 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2204 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2205 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2206 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2207 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2208 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2209 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2210 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2211 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2212 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2213 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2214 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2215 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2216 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2217 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2218 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2219 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2220 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2221 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2222 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2223 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2224 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2225 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2226 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2227 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2228 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2229 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2230 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2231 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2232 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2233 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2234 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2235 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2236 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2237 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2238 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2239 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2240 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2241 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2242 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2243 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2244 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2245 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2246 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2247 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2248 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2249 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2250 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2251 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2252 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2253 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2254 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2255 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2256 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2257 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2258 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2259 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2260 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2261 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2262 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2263 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2264 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2265 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2266 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2267 => [
				'throwableClassName'         => $throwableClassName = PrivateMethodNotFoundException::class,
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
			2268 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2269 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2270 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2271 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2272 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2273 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2274 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2275 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2276 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2277 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2278 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2279 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2280 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2281 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2282 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2283 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2284 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2285 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2286 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2287 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2288 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2289 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2290 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2291 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2292 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2293 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2294 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2295 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2296 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2297 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2298 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2299 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2300 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2301 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2302 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2303 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2304 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2305 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2306 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2307 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2308 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2309 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2310 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2311 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2312 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2313 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2314 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2315 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2316 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2317 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2318 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2319 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2320 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2321 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2322 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2323 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2324 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2325 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2326 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2327 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2328 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2329 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2330 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2331 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2332 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2333 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2334 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2335 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2336 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2337 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2338 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2339 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2340 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2341 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2342 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2343 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2344 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2345 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2346 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2347 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2348 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
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
			2349 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2350 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2351 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2352 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2353 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2354 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2355 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2356 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2357 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2358 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2359 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2360 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2361 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2362 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2363 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2364 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2365 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2366 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2367 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2368 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2369 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2370 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2371 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2372 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2373 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2374 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2375 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2376 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2377 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2378 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2379 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2380 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2381 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2382 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2383 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2384 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2385 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2386 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2387 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2388 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2389 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2390 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2391 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2392 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2393 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2394 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2395 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2396 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2397 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2398 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2399 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2400 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2401 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2402 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2403 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2404 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2405 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2406 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2407 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2408 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2409 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2410 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2411 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2412 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2413 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2414 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2415 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2416 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2417 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2418 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2419 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2420 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2421 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2422 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2423 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2424 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2425 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2426 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2427 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2428 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2429 => [
				'throwableClassName'         => $throwableClassName = PropertyNotFoundException::class,
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
			2430 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2431 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2432 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2433 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2434 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2435 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2436 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2437 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2438 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2439 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2440 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2441 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2442 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2443 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2444 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2445 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2446 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2447 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2448 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2449 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2450 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2451 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2452 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2453 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2454 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2455 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2456 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2457 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2458 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2459 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2460 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2461 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2462 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2463 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2464 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2465 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2466 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2467 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2468 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2469 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2470 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2471 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2472 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2473 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2474 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2475 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2476 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2477 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2478 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2479 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2480 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2481 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2482 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2483 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2484 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2485 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2486 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2487 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2488 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2489 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2490 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2491 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2492 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2493 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2494 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2495 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2496 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2497 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2498 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2499 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2500 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2501 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2502 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2503 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2504 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2505 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2506 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2507 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2508 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2509 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2510 => [
				'throwableClassName'         => $throwableClassName = ProtectedMethodNotFoundException::class,
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
			2511 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2512 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2513 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2514 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2515 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2516 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2517 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2518 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2519 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2520 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2521 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2522 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2523 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2524 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2525 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2526 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2527 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2528 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2529 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2530 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2531 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2532 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2533 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2534 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2535 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2536 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2537 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2538 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2539 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2540 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2541 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2542 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2543 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2544 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2545 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2546 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2547 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2548 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2549 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2550 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2551 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2552 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2553 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2554 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2555 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2556 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2557 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2558 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2559 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2560 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2561 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2562 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2563 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2564 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2565 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2566 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2567 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2568 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2569 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2570 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2571 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2572 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2573 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2574 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2575 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2576 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2577 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2578 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2579 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2580 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2581 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2582 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2583 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2584 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2585 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2586 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2587 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2588 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2589 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2590 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2591 => [
				'throwableClassName'         => $throwableClassName = ProtectedPropertyNotFoundException::class,
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
			2592 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2593 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2594 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2595 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2596 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2597 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2598 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2599 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2600 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2601 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2602 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2603 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2604 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2605 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2606 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2607 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2608 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2609 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2610 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2611 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2612 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2613 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2614 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2615 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2616 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2617 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2618 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2619 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2620 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2621 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2622 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2623 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2624 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2625 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2626 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2627 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2628 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2629 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2630 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2631 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2632 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2633 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2634 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2635 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2636 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2637 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2638 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2639 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2640 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2641 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2642 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2643 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2644 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2645 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2646 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2647 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2648 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2649 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2650 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2651 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2652 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2653 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2654 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2655 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2656 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2657 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2658 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2659 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2660 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2661 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2662 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2663 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2664 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2665 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2666 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2667 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2668 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2669 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2670 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2671 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2672 => [
				'throwableClassName'         => $throwableClassName = PublicMethodNotFoundException::class,
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
			2673 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2674 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2675 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2676 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2677 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2678 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2679 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2680 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2681 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2682 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2683 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2684 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2685 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2686 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2687 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2688 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2689 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2690 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2691 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2692 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2693 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2694 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2695 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2696 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2697 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2698 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2699 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2700 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2701 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2702 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2703 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2704 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2705 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2706 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2707 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2708 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2709 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2710 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2711 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2712 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2713 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2714 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2715 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2716 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2717 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2718 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2719 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2720 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2721 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2722 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2723 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2724 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2725 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2726 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2727 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2728 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2729 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2730 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2731 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2732 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2733 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2734 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2735 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2736 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2737 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2738 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2739 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2740 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2741 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2742 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2743 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2744 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2745 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2746 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2747 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2748 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2749 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2750 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2751 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2752 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2753 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
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
			2754 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2755 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2756 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2757 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2758 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2759 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2760 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2761 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2762 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2763 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2764 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2765 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2766 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2767 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2768 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2769 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2770 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2771 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2772 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2773 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2774 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2775 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2776 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2777 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2778 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2779 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2780 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2781 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2782 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2783 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2784 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2785 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2786 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2787 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2788 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2789 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2790 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2791 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2792 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2793 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2794 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2795 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2796 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2797 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2798 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2799 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2800 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2801 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2802 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2803 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2804 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2805 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2806 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2807 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2808 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2809 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2810 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2811 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2812 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2813 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2814 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2815 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2816 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2817 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2818 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2819 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2820 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2821 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2822 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2823 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2824 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2825 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2826 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2827 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2828 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2829 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2830 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2831 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2832 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2833 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2834 => [
				'throwableClassName'         => $throwableClassName = RuntimeException::class,
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
			2835 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2836 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2837 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2838 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2839 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2840 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2841 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2842 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2843 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2844 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2845 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2846 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2847 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2848 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2849 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2850 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2851 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2852 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2853 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2854 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2855 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2856 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2857 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2858 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2859 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2860 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2861 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2862 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2863 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2864 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2865 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2866 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2867 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2868 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2869 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2870 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2871 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2872 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2873 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2874 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2875 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2876 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2877 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2878 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2879 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2880 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2881 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2882 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2883 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2884 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2885 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2886 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2887 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2888 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2889 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2890 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2891 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2892 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2893 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2894 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2895 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2896 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2897 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2898 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2899 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2900 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2901 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2902 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2903 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2904 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2905 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2906 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2907 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2908 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2909 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2910 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2911 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2912 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2913 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2914 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2915 => [
				'throwableClassName'         => $throwableClassName = StringBackedEnumNotFoundException::class,
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
			2916 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2917 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2918 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2919 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2920 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2921 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2922 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2923 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2924 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2925 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2926 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2927 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2928 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2929 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2930 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2931 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2932 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2933 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2934 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2935 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2936 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2937 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2938 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2939 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2940 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2941 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2942 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2943 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2944 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2945 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2946 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2947 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2948 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2949 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2950 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2951 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2952 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2953 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2954 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2955 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2956 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2957 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2958 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2959 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2960 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2961 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2962 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2963 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2964 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2965 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2966 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2967 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2968 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2969 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2970 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2971 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2972 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2973 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2974 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2975 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2976 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2977 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2978 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2979 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2980 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2981 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2982 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2983 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2984 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2985 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2986 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2987 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2988 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2989 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2990 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2991 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2992 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2993 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2994 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2995 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2996 => [
				'throwableClassName'         => $throwableClassName = TraitNotFoundException::class,
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
			2997 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			2998 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			2999 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
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
			]
		];
	}
}
