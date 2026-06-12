<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\Unit\InterfaceClassEnumOrTraitNotFoundExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\InterfaceClassEnumOrTraitNotFoundException;
use CodeKandis\Types\Tests\Fixtures\Values;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with additional arguments, expected throwable class name, expected throwable message and expected throwable previous.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
final class ThrowableClassNamesWithNonexistentFqcnAdditionalArgumentsExpectedThrowableClassNameExpectedThrowableCodeAndExpectedThrowablePrevious implements DataProviderInterface
{
	/**
	 * {@inheritdoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0   => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_NAME
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1   => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			2   => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			3   => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			4   => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			5   => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			6   => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			7   => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			8   => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			9   => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			10  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			11  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			12  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			13  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			14  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			15  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			16  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			17  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			18  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			19  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			20  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			21  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			22  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			23  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			24  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			25  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			26  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			27  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			28  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			29  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			30  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			31  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			32  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			33  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			34  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			35  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			36  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			37  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			38  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			39  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			40  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			41  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			42  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			43  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			44  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			45  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			46  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			47  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			48  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			49  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			50  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			51  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			52  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			53  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::CLASS_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			54  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_OR_CLASS_NAME
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			55  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_OR_CLASS_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			56  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_OR_CLASS_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			57  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_OR_CLASS_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			58  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_OR_CLASS_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			59  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_OR_CLASS_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			60  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_OR_CLASS_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			61  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_OR_CLASS_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			62  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_OR_CLASS_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			63  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_OR_CLASS_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			64  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_OR_CLASS_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			65  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_OR_CLASS_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			66  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_OR_CLASS_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			67  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_OR_CLASS_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			68  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_OR_CLASS_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			69  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_OR_CLASS_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			70  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_OR_CLASS_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			71  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_OR_CLASS_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			72  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_OR_CLASS_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			73  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_OR_CLASS_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			74  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_OR_CLASS_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			75  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_OR_CLASS_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			76  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_OR_CLASS_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			77  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_OR_CLASS_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			78  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_OR_CLASS_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			79  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_OR_CLASS_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			80  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTERFACE_OR_CLASS_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			81  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			82  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			83  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			84  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			85  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			86  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			87  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			88  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			89  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			90  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			91  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			92  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			93  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			94  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			95  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			96  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			97  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			98  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			99  => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			100 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			101 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			102 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			103 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			104 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			105 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			106 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			107 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			108 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::BACKED_ENUM_NAME
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			109 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			110 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			111 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			112 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			113 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			114 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			115 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			116 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			117 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			118 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			119 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			120 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			121 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			122 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			123 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			124 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			125 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			126 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			127 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			128 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			129 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			130 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			131 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			132 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			133 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			134 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			135 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTEGER_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			136 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTEGER_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			137 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTEGER_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			138 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTEGER_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			139 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTEGER_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			140 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTEGER_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			141 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTEGER_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			142 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTEGER_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			143 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTEGER_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			144 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTEGER_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			145 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTEGER_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			146 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTEGER_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			147 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTEGER_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			148 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTEGER_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			149 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTEGER_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			150 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTEGER_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			151 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTEGER_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			152 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTEGER_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			153 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTEGER_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			154 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTEGER_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			155 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTEGER_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			156 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTEGER_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			157 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTEGER_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			158 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTEGER_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			159 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTEGER_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			160 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTEGER_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			161 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::INTEGER_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			162 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::STRING_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			163 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::STRING_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			164 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::STRING_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			165 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::STRING_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			166 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::STRING_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			167 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::STRING_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			168 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::STRING_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			169 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::STRING_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			170 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::STRING_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			171 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::STRING_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			172 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::STRING_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			173 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::STRING_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			174 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::STRING_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			175 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::STRING_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			176 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::STRING_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			177 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::STRING_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			178 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::STRING_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			179 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::STRING_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			180 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::STRING_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			181 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::STRING_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			182 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::STRING_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			183 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::STRING_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			184 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::STRING_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			185 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::STRING_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			186 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::STRING_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			187 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::STRING_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			188 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::STRING_BACKED_ENUM_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			189 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::TRAIT_NAME
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			190 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::TRAIT_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			191 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::TRAIT_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			192 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::TRAIT_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			193 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::TRAIT_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			194 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::TRAIT_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			195 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::TRAIT_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			196 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::TRAIT_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			197 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::TRAIT_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			198 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::TRAIT_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			199 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::TRAIT_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			200 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::TRAIT_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			201 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::TRAIT_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			202 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::TRAIT_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			203 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::TRAIT_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			204 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::TRAIT_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			205 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::TRAIT_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			206 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::TRAIT_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			207 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::TRAIT_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			208 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::TRAIT_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			209 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::TRAIT_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			210 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::TRAIT_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			211 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::TRAIT_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			212 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::TRAIT_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			213 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::TRAIT_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			214 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::TRAIT_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			],
			215 => [
				'throwableClassName'         => $throwableClassName = InterfaceClassEnumOrTraitNotFoundException::class,
				'mainArguments'              => [
					'nonexistentFqcn' => $nonexistentFqcn = Values::TRAIT_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( InterfaceClassEnumOrTraitNotFoundException::EXCEPTION_MESSAGE_WITH_NONEXISTENT_FQCN, $nonexistentFqcn ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'nonexistentFqcn' => $nonexistentFqcn
					],
					'additional' => $throwableContext
				]
			]
		];
	}
}
