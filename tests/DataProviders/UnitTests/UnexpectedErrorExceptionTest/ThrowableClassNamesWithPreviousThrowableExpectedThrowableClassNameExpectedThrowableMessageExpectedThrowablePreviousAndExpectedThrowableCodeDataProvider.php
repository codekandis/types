<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\UnexpectedErrorExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\Tests\Fixtures\Values;
use CodeKandis\Types\UnexpectedErrorException;
use Override;
use function sprintf;

/*
 * Represents a data provider providing throwable class names with previous throwable, expected throwable class name, expected throwable message, expected throwable previous and expected throwable code.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */

class ThrowableClassNamesWithPreviousThrowableExpectedThrowableClassNameExpectedThrowableMessageExpectedThrowablePreviousAndExpectedThrowableCodeDataProvider implements DataProviderInterface
{
	/**
	 * @inheritdoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
				'previousThrowable'          => $previousThrowable = Values::createThrowable(),
				'code'                       => $code = Values::THROWABLE_CODE_DEFAULT,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_PREVIOUSLY_CATCHED_THROWABLE, $previousThrowable::class ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previousThrowable
			],
			1 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
				'previousThrowable'          => $previousThrowable = Values::createThrowable(),
				'code'                       => $code = Values::THROWABLE_CODE,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_WITH_PREVIOUSLY_CATCHED_THROWABLE, $previousThrowable::class ),
				'expectedThrowableCode'      => $code,
				'expectedThrowablePrevious'  => $previousThrowable
			],
		];
	}
}
