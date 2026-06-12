<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\Unit\MethodNotFoundExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\MethodNotFoundException;
use CodeKandis\Types\Tests\Fixtures\Values;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with additional arguments, expected throwable class name, expected throwable message and expected throwable previous.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
final class ThrowableClassNamesWithFqcnNonexistentMethodNameAdditionalArgumentsExpectedThrowableClassNameExpectedThrowableCodeAndExpectedThrowablePrevious implements DataProviderInterface
{
	/**
	 * {@inheritdoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0   => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTERFACE_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1   => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTERFACE_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			2   => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTERFACE_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			3   => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTERFACE_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			4   => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTERFACE_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			5   => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTERFACE_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			6   => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTERFACE_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			7   => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTERFACE_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			8   => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTERFACE_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			9   => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTERFACE_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			10  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTERFACE_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			11  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTERFACE_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			12  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTERFACE_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			13  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTERFACE_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			14  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTERFACE_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			15  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTERFACE_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			16  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTERFACE_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			17  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTERFACE_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			18  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTERFACE_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			19  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTERFACE_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			20  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTERFACE_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			21  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTERFACE_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			22  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTERFACE_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			23  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTERFACE_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			24  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTERFACE_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			25  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTERFACE_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			26  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTERFACE_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			27  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			28  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			29  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			30  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			31  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			32  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			33  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			34  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			35  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			36  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			37  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			38  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			39  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			40  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			41  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			42  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			43  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			44  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			45  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			46  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			47  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			48  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			49  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			50  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			51  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			52  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			53  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			54  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			55  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			56  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			57  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			58  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			59  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			60  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			61  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			62  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			63  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			64  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			65  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			66  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			67  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			68  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			69  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			70  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			71  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			72  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			73  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			74  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			75  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			76  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			77  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			78  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			79  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			80  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTERFACE_OR_CLASS_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			81  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			82  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			83  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			84  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			85  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			86  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			87  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			88  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			89  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			90  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			91  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			92  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			93  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			94  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			95  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			96  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			97  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			98  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			99  => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			100 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			101 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			102 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			103 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			104 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			105 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			106 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			107 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			108 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			109 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			110 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			111 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			112 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			113 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			114 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			115 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			116 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			117 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			118 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			119 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			120 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			121 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			122 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			123 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			124 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			125 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			126 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			127 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			128 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			129 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			130 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			131 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			132 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			133 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			134 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			135 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			136 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			137 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			138 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			139 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			140 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			141 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			142 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			143 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			144 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			145 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			146 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			147 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			148 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			149 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			150 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			151 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			152 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			153 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			154 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			155 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			156 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			157 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			158 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			159 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			160 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			161 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			162 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			163 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			164 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			165 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			166 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			167 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			168 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			169 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			170 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			171 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			172 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			173 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			174 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			175 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			176 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			177 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			178 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			179 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			180 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			181 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			182 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			183 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			184 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			185 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			186 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			187 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			],
			188 => [
				'throwableClassName'         => $throwableClassName = MethodNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                  => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentMethodName' => $nonexistentMethodName = Values::METHOD_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( MethodNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_METHOD_NAME, $fqcn, $nonexistentMethodName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                  => $fqcn,
						'nonexistentMethodName' => $nonexistentMethodName
					],
					'additional' => $throwableContext
				]
			]
		];
	}
}
