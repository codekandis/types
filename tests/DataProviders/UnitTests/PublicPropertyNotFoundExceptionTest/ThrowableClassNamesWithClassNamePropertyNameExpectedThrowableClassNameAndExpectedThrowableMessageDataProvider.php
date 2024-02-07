<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\UnitTests\PublicPropertyNotFoundExceptionTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\PublicPropertyNotFoundException;
use CodeKandis\Types\Tests\Fixtures\Values;
use Override;
use function sprintf;

/**
 * Represents a data provider providing throwable class names with class name, property name, expected throwable class name and expected throwable message.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithClassNamePropertyNameExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'throwableClassName'         => $throwableClassName = PublicPropertyNotFoundException::class,
				'className'                  => $className = Values::CLASS_NAME,
				'propertyName'               => $propertyName = Values::PROPERTY_NAME,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => sprintf( $throwableClassName::EXCEPTION_MESSAGE_PROPERTY_NOT_FOUND, $className, $propertyName )
			]
		];
	}
}
