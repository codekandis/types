<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\Unit\ObjectNotFoundExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\ObjectNotFoundException;
use CodeKandis\Types\Tests\Fixtures\Values;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with additional arguments, expected throwable class name, expected throwable message and expected throwable previous.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
final class ThrowableClassNamesWithNonexistentQualifiedObjectIdAdditionalArgumentsExpectedThrowableClassNameExpectedThrowableCodeAndExpectedThrowablePrevious implements DataProviderInterface
{
	/**
	 * {@inheritdoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0  => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
				'mainArguments'              => [
					'nonexistentQualifiedObjectId' => $nonexistentQualifiedObjectId = Values::QUALIFIED_OBJECT_ID
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ObjectNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_QUALIFIED_OBJECT_ID, $nonexistentQualifiedObjectId ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentQualifiedObjectId' => $nonexistentQualifiedObjectId
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1  => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
				'mainArguments'              => [
					'nonexistentQualifiedObjectId' => $nonexistentQualifiedObjectId = Values::QUALIFIED_OBJECT_ID
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ObjectNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_QUALIFIED_OBJECT_ID, $nonexistentQualifiedObjectId ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentQualifiedObjectId' => $nonexistentQualifiedObjectId
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			2  => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
				'mainArguments'              => [
					'nonexistentQualifiedObjectId' => $nonexistentQualifiedObjectId = Values::QUALIFIED_OBJECT_ID
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ObjectNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_QUALIFIED_OBJECT_ID, $nonexistentQualifiedObjectId ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentQualifiedObjectId' => $nonexistentQualifiedObjectId
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			3  => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
				'mainArguments'              => [
					'nonexistentQualifiedObjectId' => $nonexistentQualifiedObjectId = Values::QUALIFIED_OBJECT_ID
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ObjectNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_QUALIFIED_OBJECT_ID, $nonexistentQualifiedObjectId ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentQualifiedObjectId' => $nonexistentQualifiedObjectId
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			4  => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
				'mainArguments'              => [
					'nonexistentQualifiedObjectId' => $nonexistentQualifiedObjectId = Values::QUALIFIED_OBJECT_ID
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ObjectNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_QUALIFIED_OBJECT_ID, $nonexistentQualifiedObjectId ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentQualifiedObjectId' => $nonexistentQualifiedObjectId
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			5  => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
				'mainArguments'              => [
					'nonexistentQualifiedObjectId' => $nonexistentQualifiedObjectId = Values::QUALIFIED_OBJECT_ID
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ObjectNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_QUALIFIED_OBJECT_ID, $nonexistentQualifiedObjectId ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentQualifiedObjectId' => $nonexistentQualifiedObjectId
					],
					'additional' => $throwableContext
				]
			],
			6  => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
				'mainArguments'              => [
					'nonexistentQualifiedObjectId' => $nonexistentQualifiedObjectId = Values::QUALIFIED_OBJECT_ID
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ObjectNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_QUALIFIED_OBJECT_ID, $nonexistentQualifiedObjectId ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentQualifiedObjectId' => $nonexistentQualifiedObjectId
					],
					'additional' => $throwableContext
				]
			],
			7  => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
				'mainArguments'              => [
					'nonexistentQualifiedObjectId' => $nonexistentQualifiedObjectId = Values::QUALIFIED_OBJECT_ID
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ObjectNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_QUALIFIED_OBJECT_ID, $nonexistentQualifiedObjectId ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentQualifiedObjectId' => $nonexistentQualifiedObjectId
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			8  => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
				'mainArguments'              => [
					'nonexistentQualifiedObjectId' => $nonexistentQualifiedObjectId = Values::QUALIFIED_OBJECT_ID
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ObjectNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_QUALIFIED_OBJECT_ID, $nonexistentQualifiedObjectId ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentQualifiedObjectId' => $nonexistentQualifiedObjectId
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			9  => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
				'mainArguments'              => [
					'nonexistentQualifiedObjectId' => $nonexistentQualifiedObjectId = Values::QUALIFIED_OBJECT_ID
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ObjectNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_QUALIFIED_OBJECT_ID, $nonexistentQualifiedObjectId ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentQualifiedObjectId' => $nonexistentQualifiedObjectId
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			10 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
				'mainArguments'              => [
					'nonexistentQualifiedObjectId' => $nonexistentQualifiedObjectId = Values::QUALIFIED_OBJECT_ID
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ObjectNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_QUALIFIED_OBJECT_ID, $nonexistentQualifiedObjectId ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentQualifiedObjectId' => $nonexistentQualifiedObjectId
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			11 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
				'mainArguments'              => [
					'nonexistentQualifiedObjectId' => $nonexistentQualifiedObjectId = Values::QUALIFIED_OBJECT_ID
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ObjectNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_QUALIFIED_OBJECT_ID, $nonexistentQualifiedObjectId ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentQualifiedObjectId' => $nonexistentQualifiedObjectId
					],
					'additional' => $throwableContext
				]
			],
			12 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
				'mainArguments'              => [
					'nonexistentQualifiedObjectId' => $nonexistentQualifiedObjectId = Values::QUALIFIED_OBJECT_ID
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ObjectNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_QUALIFIED_OBJECT_ID, $nonexistentQualifiedObjectId ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentQualifiedObjectId' => $nonexistentQualifiedObjectId
					],
					'additional' => $throwableContext
				]
			],
			13 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
				'mainArguments'              => [
					'nonexistentQualifiedObjectId' => $nonexistentQualifiedObjectId = Values::QUALIFIED_OBJECT_ID
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ObjectNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_QUALIFIED_OBJECT_ID, $nonexistentQualifiedObjectId ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentQualifiedObjectId' => $nonexistentQualifiedObjectId
					],
					'additional' => $throwableContext
				]
			],
			14 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
				'mainArguments'              => [
					'nonexistentQualifiedObjectId' => $nonexistentQualifiedObjectId = Values::QUALIFIED_OBJECT_ID
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ObjectNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_QUALIFIED_OBJECT_ID, $nonexistentQualifiedObjectId ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentQualifiedObjectId' => $nonexistentQualifiedObjectId
					],
					'additional' => $throwableContext
				]
			],
			15 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
				'mainArguments'              => [
					'nonexistentQualifiedObjectId' => $nonexistentQualifiedObjectId = Values::QUALIFIED_OBJECT_ID
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ObjectNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_QUALIFIED_OBJECT_ID, $nonexistentQualifiedObjectId ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentQualifiedObjectId' => $nonexistentQualifiedObjectId
					],
					'additional' => $throwableContext
				]
			],
			16 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
				'mainArguments'              => [
					'nonexistentQualifiedObjectId' => $nonexistentQualifiedObjectId = Values::QUALIFIED_OBJECT_ID
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ObjectNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_QUALIFIED_OBJECT_ID, $nonexistentQualifiedObjectId ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentQualifiedObjectId' => $nonexistentQualifiedObjectId
					],
					'additional' => $throwableContext
				]
			],
			17 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
				'mainArguments'              => [
					'nonexistentQualifiedObjectId' => $nonexistentQualifiedObjectId = Values::QUALIFIED_OBJECT_ID
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ObjectNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_QUALIFIED_OBJECT_ID, $nonexistentQualifiedObjectId ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentQualifiedObjectId' => $nonexistentQualifiedObjectId
					],
					'additional' => $throwableContext
				]
			],
			18 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
				'mainArguments'              => [
					'nonexistentQualifiedObjectId' => $nonexistentQualifiedObjectId = Values::QUALIFIED_OBJECT_ID
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ObjectNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_QUALIFIED_OBJECT_ID, $nonexistentQualifiedObjectId ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentQualifiedObjectId' => $nonexistentQualifiedObjectId
					],
					'additional' => $throwableContext
				]
			],
			19 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
				'mainArguments'              => [
					'nonexistentQualifiedObjectId' => $nonexistentQualifiedObjectId = Values::QUALIFIED_OBJECT_ID
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ObjectNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_QUALIFIED_OBJECT_ID, $nonexistentQualifiedObjectId ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentQualifiedObjectId' => $nonexistentQualifiedObjectId
					],
					'additional' => $throwableContext
				]
			],
			20 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
				'mainArguments'              => [
					'nonexistentQualifiedObjectId' => $nonexistentQualifiedObjectId = Values::QUALIFIED_OBJECT_ID
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ObjectNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_QUALIFIED_OBJECT_ID, $nonexistentQualifiedObjectId ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentQualifiedObjectId' => $nonexistentQualifiedObjectId
					],
					'additional' => $throwableContext
				]
			],
			21 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
				'mainArguments'              => [
					'nonexistentQualifiedObjectId' => $nonexistentQualifiedObjectId = Values::QUALIFIED_OBJECT_ID
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ObjectNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_QUALIFIED_OBJECT_ID, $nonexistentQualifiedObjectId ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentQualifiedObjectId' => $nonexistentQualifiedObjectId
					],
					'additional' => $throwableContext
				]
			],
			22 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
				'mainArguments'              => [
					'nonexistentQualifiedObjectId' => $nonexistentQualifiedObjectId = Values::QUALIFIED_OBJECT_ID
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ObjectNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_QUALIFIED_OBJECT_ID, $nonexistentQualifiedObjectId ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentQualifiedObjectId' => $nonexistentQualifiedObjectId
					],
					'additional' => $throwableContext
				]
			],
			23 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
				'mainArguments'              => [
					'nonexistentQualifiedObjectId' => $nonexistentQualifiedObjectId = Values::QUALIFIED_OBJECT_ID
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ObjectNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_QUALIFIED_OBJECT_ID, $nonexistentQualifiedObjectId ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentQualifiedObjectId' => $nonexistentQualifiedObjectId
					],
					'additional' => $throwableContext
				]
			],
			24 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
				'mainArguments'              => [
					'nonexistentQualifiedObjectId' => $nonexistentQualifiedObjectId = Values::QUALIFIED_OBJECT_ID
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ObjectNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_QUALIFIED_OBJECT_ID, $nonexistentQualifiedObjectId ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentQualifiedObjectId' => $nonexistentQualifiedObjectId
					],
					'additional' => $throwableContext
				]
			],
			25 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
				'mainArguments'              => [
					'nonexistentQualifiedObjectId' => $nonexistentQualifiedObjectId = Values::QUALIFIED_OBJECT_ID
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ObjectNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_QUALIFIED_OBJECT_ID, $nonexistentQualifiedObjectId ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentQualifiedObjectId' => $nonexistentQualifiedObjectId
					],
					'additional' => $throwableContext
				]
			],
			26 => [
				'throwableClassName'         => $throwableClassName = ObjectNotFoundException::class,
				'mainArguments'              => [
					'nonexistentQualifiedObjectId' => $nonexistentQualifiedObjectId = Values::QUALIFIED_OBJECT_ID
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( ObjectNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_QUALIFIED_OBJECT_ID, $nonexistentQualifiedObjectId ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentQualifiedObjectId' => $nonexistentQualifiedObjectId
					],
					'additional' => $throwableContext
				]
			]
		];
	}
}
