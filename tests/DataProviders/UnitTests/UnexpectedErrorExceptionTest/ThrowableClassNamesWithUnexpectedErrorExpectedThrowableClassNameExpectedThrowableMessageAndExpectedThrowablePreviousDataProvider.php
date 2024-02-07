<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\UnexpectedErrorExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\Tests\Fixtures\Values;
use CodeKandis\Types\UnexpectedErrorException;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with previous throwable, expected throwable class name, expected throwable message and expected throwable previous.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithUnexpectedErrorExpectedThrowableClassNameExpectedThrowableMessageAndExpectedThrowablePreviousDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'throwableClassName'         => $throwableClassName = UnexpectedErrorException::class,
				'previousThrowable'          => $previousThrowable = Values::createThrowablePrevious(),
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_PREVIOUS_THROWABLE, $previousThrowable::class ),
				'expectedThrowablePrevious'  => $previousThrowable
			]
		];
	}
}
