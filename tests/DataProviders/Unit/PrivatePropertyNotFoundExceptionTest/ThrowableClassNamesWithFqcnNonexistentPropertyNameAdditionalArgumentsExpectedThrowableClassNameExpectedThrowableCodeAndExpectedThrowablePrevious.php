<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\Unit\PrivatePropertyNotFoundExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\PrivatePropertyNotFoundException;
use CodeKandis\Types\Tests\Fixtures\Values;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with additional arguments, expected throwable class name, expected throwable message and expected throwable previous.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
final class ThrowableClassNamesWithFqcnNonexistentPropertyNameAdditionalArgumentsExpectedThrowableClassNameExpectedThrowableCodeAndExpectedThrowablePrevious implements DataProviderInterface
{
	/**
	 * {@inheritdoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0   => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::CLASS_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			1   => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::CLASS_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			2   => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::CLASS_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			3   => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::CLASS_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			4   => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::CLASS_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			5   => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::CLASS_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			6   => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::CLASS_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			7   => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::CLASS_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			8   => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::CLASS_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			9   => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::CLASS_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			10  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::CLASS_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			11  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::CLASS_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			12  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::CLASS_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			13  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::CLASS_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			14  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::CLASS_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			15  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::CLASS_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			16  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::CLASS_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			17  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::CLASS_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			18  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::CLASS_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			19  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::CLASS_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			20  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::CLASS_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			21  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::CLASS_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			22  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::CLASS_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			23  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::CLASS_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			24  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::CLASS_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			25  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::CLASS_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			26  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::CLASS_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			27  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			28  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			29  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			30  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			31  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			32  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			33  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			34  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			35  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			36  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			37  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			38  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			39  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			40  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			41  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			42  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			43  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			44  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			45  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			46  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			47  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			48  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			49  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			50  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			51  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			52  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			53  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			54  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			55  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			56  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			57  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			58  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			59  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			60  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			61  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			62  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			63  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			64  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			65  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			66  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			67  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			68  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			69  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			70  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			71  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			72  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			73  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			74  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			75  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			76  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			77  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			78  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			79  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			80  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			81  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			82  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			83  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			84  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			85  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			86  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			87  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			88  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			89  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			90  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			91  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			92  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			93  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			94  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			95  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			96  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			97  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			98  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			99  => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			100 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			101 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			102 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			103 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			104 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			105 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			106 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			107 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::INTEGER_BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			108 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			109 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			110 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code' => $throwableCode = Values::THROWABLE_CODE
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			111 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			112 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			113 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			114 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			115 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			116 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			117 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			118 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable()
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => Values::THROWABLE_CONTEXT_DEFAULT
				]
			],
			119 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			120 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			121 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			122 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'    => $throwableCode = Values::THROWABLE_CODE,
					'context' => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => Values::THROWABLE_PREVIOUS_DEFAULT,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			123 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			124 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			125 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			126 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			127 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			128 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			129 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			130 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE_DEFAULT,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			131 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			132 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::THROWABLE_PREVIOUS_DEFAULT,
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			133 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT_DEFAULT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			],
			134 => [
				'throwableClassName'         => $throwableClassName = PrivatePropertyNotFoundException::class,
				'mainArguments'              => [
					'fqcn'                    => $fqcn = Values::STRING_BACKED_ENUM_NAME,
					'nonexistentPropertyName' => $nonexistentPropertyName = Values::PROPERTY_NAME
				],
				'additionalArguments'        => [
					'code'     => $throwableCode = Values::THROWABLE_CODE,
					'previous' => $throwablePrevious = Values::createThrowable(),
					'context'  => $throwableContext = Values::THROWABLE_CONTEXT
				],
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( PrivatePropertyNotFoundException::EXCEPTION_MESSAGE_WITH_FQCN_AND_NONEXISTENT_PROPERTY_NAME, $fqcn, $nonexistentPropertyName ),
				'expectedThrowableCode'      => $throwableCode,
				'expectedThrowablePrevious'  => $throwablePrevious,
				'expectedThrowableContext'   => [
					'exception'  => [
						'fqcn'                    => $fqcn,
						'nonexistentPropertyName' => $nonexistentPropertyName
					],
					'additional' => $throwableContext
				]
			]
		];
	}
}
