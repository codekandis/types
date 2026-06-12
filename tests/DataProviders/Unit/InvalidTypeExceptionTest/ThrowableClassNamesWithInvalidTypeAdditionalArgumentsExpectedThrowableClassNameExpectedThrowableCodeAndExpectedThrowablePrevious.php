<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\Unit\InvalidTypeExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\InvalidTypeException;
use CodeKandis\Types\Tests\Fixtures\Types;
use CodeKandis\Types\Tests\Fixtures\Values;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with additional arguments, expected throwable class name, expected throwable message and expected throwable previous.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
final class ThrowableClassNamesWithInvalidTypeAdditionalArgumentsExpectedThrowableClassNameExpectedThrowableCodeAndExpectedThrowablePrevious implements DataProviderInterface
{
	/**
	 * {@inheritdoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType' => $invalidType = Types::INVALID_TYPE
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE, $invalidType ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType' => $invalidType
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType' => $invalidType = Types::INVALID_TYPE
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE, $invalidType ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType' => $invalidType
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			2  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType' => $invalidType = Types::INVALID_TYPE
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE, $invalidType ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType' => $invalidType
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			3  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType' => $invalidType = Types::INVALID_TYPE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE, $invalidType ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType' => $invalidType
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			4  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType' => $invalidType = Types::INVALID_TYPE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE, $invalidType ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType' => $invalidType
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			5  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType' => $invalidType = Types::INVALID_TYPE
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE, $invalidType ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType' => $invalidType
					],
					'additional' => $throwableContext
				]
			],
			6  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType' => $invalidType = Types::INVALID_TYPE
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE, $invalidType ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType' => $invalidType
					],
					'additional' => $throwableContext
				]
			],
			7  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType' => $invalidType = Types::INVALID_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE, $invalidType ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType' => $invalidType
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			8  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType' => $invalidType = Types::INVALID_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE, $invalidType ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType' => $invalidType
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			9  => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType' => $invalidType = Types::INVALID_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE, $invalidType ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType' => $invalidType
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			10 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType' => $invalidType = Types::INVALID_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE, $invalidType ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType' => $invalidType
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			11 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType' => $invalidType = Types::INVALID_TYPE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE, $invalidType ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType' => $invalidType
					],
					'additional' => $throwableContext
				]
			],
			12 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType' => $invalidType = Types::INVALID_TYPE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE, $invalidType ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType' => $invalidType
					],
					'additional' => $throwableContext
				]
			],
			13 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType' => $invalidType = Types::INVALID_TYPE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE, $invalidType ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType' => $invalidType
					],
					'additional' => $throwableContext
				]
			],
			14 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType' => $invalidType = Types::INVALID_TYPE
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE, $invalidType ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType' => $invalidType
					],
					'additional' => $throwableContext
				]
			],
			15 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType' => $invalidType = Types::INVALID_TYPE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE, $invalidType ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType' => $invalidType
					],
					'additional' => $throwableContext
				]
			],
			16 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType' => $invalidType = Types::INVALID_TYPE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE, $invalidType ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType' => $invalidType
					],
					'additional' => $throwableContext
				]
			],
			17 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType' => $invalidType = Types::INVALID_TYPE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE, $invalidType ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType' => $invalidType
					],
					'additional' => $throwableContext
				]
			],
			18 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType' => $invalidType = Types::INVALID_TYPE
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE, $invalidType ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType' => $invalidType
					],
					'additional' => $throwableContext
				]
			],
			19 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType' => $invalidType = Types::INVALID_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE, $invalidType ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType' => $invalidType
					],
					'additional' => $throwableContext
				]
			],
			20 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType' => $invalidType = Types::INVALID_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE, $invalidType ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType' => $invalidType
					],
					'additional' => $throwableContext
				]
			],
			21 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType' => $invalidType = Types::INVALID_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE, $invalidType ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType' => $invalidType
					],
					'additional' => $throwableContext
				]
			],
			22 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType' => $invalidType = Types::INVALID_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE, $invalidType ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType' => $invalidType
					],
					'additional' => $throwableContext
				]
			],
			23 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType' => $invalidType = Types::INVALID_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE, $invalidType ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType' => $invalidType
					],
					'additional' => $throwableContext
				]
			],
			24 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType' => $invalidType = Types::INVALID_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE, $invalidType ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType' => $invalidType
					],
					'additional' => $throwableContext
				]
			],
			25 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType' => $invalidType = Types::INVALID_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE, $invalidType ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType' => $invalidType
					],
					'additional' => $throwableContext
				]
			],
			26 => [
				'throwableClassName'         => $throwableClassName = InvalidTypeException::class,
				'mainArguments'              => [
					'invalidType' => $invalidType = Types::INVALID_TYPE
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InvalidTypeException::EXCEPTION_MESSAGE_WITH_INVALID_TYPE, $invalidType ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'invalidType' => $invalidType
					],
					'additional' => $throwableContext
				]
			]
		];
	}
}
