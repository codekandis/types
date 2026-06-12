<?php declare( strict_types = 1 );
namespace CodeKandis\Types\Tests\DataProviders\Architecture\InheritanceTest;

use CodeKandis\PhpUnit\DataProviderInterface;
use CodeKandis\Types\AccessErrorException;
use CodeKandis\Types\AccessErrorExceptionInterface;
use CodeKandis\Types\ArrayableInterface;
use CodeKandis\Types\BackedEnumNotFoundException;
use CodeKandis\Types\BackedEnumNotFoundExceptionInterface;
use CodeKandis\Types\BaseObject;
use CodeKandis\Types\ClassNotFoundException;
use CodeKandis\Types\ClassNotFoundExceptionInterface;
use CodeKandis\Types\ConstantNotFoundException;
use CodeKandis\Types\ConstantNotFoundExceptionInterface;
use CodeKandis\Types\DecoratedGetTypeTypes;
use CodeKandis\Types\DecoratedTypeHintTypes;
use CodeKandis\Types\DomainException;
use CodeKandis\Types\DomainExceptionInterface;
use CodeKandis\Types\DuplicateObjectException;
use CodeKandis\Types\DuplicateObjectExceptionInterface;
use CodeKandis\Types\EnumNotFoundException;
use CodeKandis\Types\EnumNotFoundExceptionInterface;
use CodeKandis\Types\ErrorException;
use CodeKandis\Types\ErrorExceptionInterface;
use CodeKandis\Types\ExceptionInterface;
use CodeKandis\Types\FatalErrorException;
use CodeKandis\Types\FatalErrorExceptionInterface;
use CodeKandis\Types\GetTypeTypes;
use CodeKandis\Types\IndexNotFoundException;
use CodeKandis\Types\IndexNotFoundExceptionInterface;
use CodeKandis\Types\IndexOutOfRangeException;
use CodeKandis\Types\IndexOutOfRangeExceptionInterface;
use CodeKandis\Types\IntegerBackedEnumNotFoundException;
use CodeKandis\Types\IntegerBackedEnumNotFoundExceptionInterface;
use CodeKandis\Types\InterfaceClassEnumOrTraitNotFoundException;
use CodeKandis\Types\InterfaceClassEnumOrTraitNotFoundExceptionInterface;
use CodeKandis\Types\InterfaceClassOrEnumNotFoundException;
use CodeKandis\Types\InterfaceClassOrEnumNotFoundExceptionInterface;
use CodeKandis\Types\InterfaceNotFoundException;
use CodeKandis\Types\InterfaceNotFoundExceptionInterface;
use CodeKandis\Types\InterfaceOrClassConstantNotFoundException;
use CodeKandis\Types\InterfaceOrClassConstantNotFoundExceptionInterface;
use CodeKandis\Types\InterfaceOrClassConstantValueNotFoundException;
use CodeKandis\Types\InterfaceOrClassConstantValueNotFoundExceptionInterface;
use CodeKandis\Types\InterfaceOrClassNotFoundException;
use CodeKandis\Types\InterfaceOrClassNotFoundExceptionInterface;
use CodeKandis\Types\InvalidIndexException;
use CodeKandis\Types\InvalidIndexExceptionInterface;
use CodeKandis\Types\InvalidOffsetException;
use CodeKandis\Types\InvalidOffsetExceptionInterface;
use CodeKandis\Types\InvalidTypeException;
use CodeKandis\Types\InvalidTypeExceptionInterface;
use CodeKandis\Types\InvalidValueException;
use CodeKandis\Types\InvalidValueExceptionInterface;
use CodeKandis\Types\LogicException;
use CodeKandis\Types\LogicExceptionInterface;
use CodeKandis\Types\MethodNotFoundException;
use CodeKandis\Types\MethodNotFoundExceptionInterface;
use CodeKandis\Types\NotImplementedOperationException;
use CodeKandis\Types\NotImplementedOperationExceptionInterface;
use CodeKandis\Types\ObjectInterface;
use CodeKandis\Types\ObjectNotFoundException;
use CodeKandis\Types\ObjectNotFoundExceptionInterface;
use CodeKandis\Types\OffsetOutOfRangeException;
use CodeKandis\Types\OffsetOutOfRangeExceptionInterface;
use CodeKandis\Types\PrivateMethodNotFoundException;
use CodeKandis\Types\PrivateMethodNotFoundExceptionInterface;
use CodeKandis\Types\PrivatePropertyNotFoundException;
use CodeKandis\Types\PrivatePropertyNotFoundExceptionInterface;
use CodeKandis\Types\PropertyNotFoundException;
use CodeKandis\Types\PropertyNotFoundExceptionInterface;
use CodeKandis\Types\ProtectedMethodNotFoundException;
use CodeKandis\Types\ProtectedMethodNotFoundExceptionInterface;
use CodeKandis\Types\ProtectedPropertyNotFoundException;
use CodeKandis\Types\ProtectedPropertyNotFoundExceptionInterface;
use CodeKandis\Types\PublicMethodNotFoundException;
use CodeKandis\Types\PublicMethodNotFoundExceptionInterface;
use CodeKandis\Types\PublicPropertyNotFoundException;
use CodeKandis\Types\PublicPropertyNotFoundExceptionInterface;
use CodeKandis\Types\RecursivelyArrayableInterface;
use CodeKandis\Types\RuntimeException;
use CodeKandis\Types\RuntimeExceptionInterface;
use CodeKandis\Types\StringBackedEnumNotFoundException;
use CodeKandis\Types\StringBackedEnumNotFoundExceptionInterface;
use CodeKandis\Types\StringifyableInterface;
use CodeKandis\Types\TraitNotFoundException;
use CodeKandis\Types\TraitNotFoundExceptionInterface;
use CodeKandis\Types\Type;
use CodeKandis\Types\TypeDetermination\TypeDeterminer;
use CodeKandis\Types\TypeDetermination\TypeDeterminerInterface;
use CodeKandis\Types\TypeHintTypes;
use CodeKandis\Types\TypeInterface;
use CodeKandis\Types\TypesInterface;
use CodeKandis\Types\UnexpectedErrorException;
use CodeKandis\Types\UnexpectedErrorExceptionInterface;
use CodeKandis\Types\UnsupportedOperationException;
use CodeKandis\Types\UnsupportedOperationExceptionInterface;
use CodeKandis\Types\ValueIsEmptyException;
use CodeKandis\Types\ValueIsEmptyExceptionInterface;
use CodeKandis\Types\ValueIsNotEmptyException;
use CodeKandis\Types\ValueIsNotEmptyExceptionInterface;
use CodeKandis\Types\ValueIsNotNullException;
use CodeKandis\Types\ValueIsNotNullExceptionInterface;
use CodeKandis\Types\ValueIsNullException;
use CodeKandis\Types\ValueIsNullExceptionInterface;
use DomainException as OriginDomainException;
use LogicException as OriginLogicException;
use Override;
use RuntimeException as OriginRuntimeException;
use Stringable;
use Throwable;

/**
 * Represents a data provider providing interface or class names with expected ancestor interface or class name.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
final class InterfaceOrClassNamesWithExpectedAncestorInterfaceOrClassNameDataProvider implements DataProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0   => [
				'interfaceOrClassName'                 => AccessErrorException::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorExceptionInterface::class
			],
			1   => [
				'interfaceOrClassName'                 => AccessErrorException::class,
				'expectedAncestorInterfaceOrClassName' => LogicException::class
			],
			2   => [
				'interfaceOrClassName'                 => AccessErrorExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => LogicExceptionInterface::class
			],
			3   => [
				'interfaceOrClassName'                 => BackedEnumNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => BackedEnumNotFoundExceptionInterface::class
			],
			4   => [
				'interfaceOrClassName'                 => BackedEnumNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => EnumNotFoundException::class
			],
			5   => [
				'interfaceOrClassName'                 => BackedEnumNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => EnumNotFoundExceptionInterface::class
			],
			6   => [
				'interfaceOrClassName'                 => BaseObject::class,
				'expectedAncestorInterfaceOrClassName' => ObjectInterface::class
			],
			7   => [
				'interfaceOrClassName'                 => ClassNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => ClassNotFoundExceptionInterface::class
			],
			8   => [
				'interfaceOrClassName'                 => ClassNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => InterfaceOrClassNotFoundException::class
			],
			9   => [
				'interfaceOrClassName'                 => ClassNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => InterfaceOrClassNotFoundExceptionInterface::class
			],
			10  => [
				'interfaceOrClassName'                 => ConstantNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorException::class
			],
			11  => [
				'interfaceOrClassName'                 => ConstantNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => ConstantNotFoundExceptionInterface::class
			],
			12  => [
				'interfaceOrClassName'                 => ConstantNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorExceptionInterface::class
			],
			13  => [
				'interfaceOrClassName'                 => DecoratedGetTypeTypes::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			14  => [
				'interfaceOrClassName'                 => DecoratedGetTypeTypes::class,
				'expectedAncestorInterfaceOrClassName' => TypesInterface::class
			],
			15  => [
				'interfaceOrClassName'                 => DecoratedTypeHintTypes::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			16  => [
				'interfaceOrClassName'                 => DecoratedTypeHintTypes::class,
				'expectedAncestorInterfaceOrClassName' => TypesInterface::class
			],
			17  => [
				'interfaceOrClassName'                 => DomainException::class,
				'expectedAncestorInterfaceOrClassName' => DomainExceptionInterface::class
			],
			18  => [
				'interfaceOrClassName'                 => DomainException::class,
				'expectedAncestorInterfaceOrClassName' => OriginDomainException::class
			],
			19  => [
				'interfaceOrClassName'                 => DomainExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => ExceptionInterface::class
			],
			20  => [
				'interfaceOrClassName'                 => DuplicateObjectException::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorException::class
			],
			21  => [
				'interfaceOrClassName'                 => DuplicateObjectException::class,
				'expectedAncestorInterfaceOrClassName' => DuplicateObjectExceptionInterface::class
			],
			22  => [
				'interfaceOrClassName'                 => DuplicateObjectExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorExceptionInterface::class
			],
			23  => [
				'interfaceOrClassName'                 => EnumNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => EnumNotFoundExceptionInterface::class
			],
			24  => [
				'interfaceOrClassName'                 => EnumNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => InterfaceClassOrEnumNotFoundException::class
			],
			25  => [
				'interfaceOrClassName'                 => EnumNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => InterfaceClassOrEnumNotFoundExceptionInterface::class
			],
			26  => [
				'interfaceOrClassName'                 => ErrorException::class,
				'expectedAncestorInterfaceOrClassName' => ErrorExceptionInterface::class
			],
			27  => [
				'interfaceOrClassName'                 => ErrorException::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeException::class
			],
			28  => [
				'interfaceOrClassName'                 => ErrorExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeExceptionInterface::class
			],
			29  => [
				'interfaceOrClassName'                 => ExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => Throwable::class
			],
			30  => [
				'interfaceOrClassName'                 => FatalErrorException::class,
				'expectedAncestorInterfaceOrClassName' => FatalErrorExceptionInterface::class
			],
			31  => [
				'interfaceOrClassName'                 => FatalErrorException::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeException::class
			],
			32  => [
				'interfaceOrClassName'                 => FatalErrorExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeExceptionInterface::class
			],
			33  => [
				'interfaceOrClassName'                 => GetTypeTypes::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			34  => [
				'interfaceOrClassName'                 => GetTypeTypes::class,
				'expectedAncestorInterfaceOrClassName' => TypesInterface::class
			],
			35  => [
				'interfaceOrClassName'                 => IndexNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => IndexNotFoundExceptionInterface::class
			],
			36  => [
				'interfaceOrClassName'                 => IndexNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeException::class
			],
			37  => [
				'interfaceOrClassName'                 => IndexNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeExceptionInterface::class
			],
			38  => [
				'interfaceOrClassName'                 => IndexOutOfRangeException::class,
				'expectedAncestorInterfaceOrClassName' => IndexOutOfRangeExceptionInterface::class
			],
			39  => [
				'interfaceOrClassName'                 => IndexOutOfRangeException::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeException::class
			],
			40  => [
				'interfaceOrClassName'                 => IndexOutOfRangeExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeExceptionInterface::class
			],
			41  => [
				'interfaceOrClassName'                 => IntegerBackedEnumNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => BackedEnumNotFoundException::class
			],
			42  => [
				'interfaceOrClassName'                 => IntegerBackedEnumNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => IntegerBackedEnumNotFoundExceptionInterface::class
			],
			43  => [
				'interfaceOrClassName'                 => IntegerBackedEnumNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => BackedEnumNotFoundExceptionInterface::class
			],
			44  => [
				'interfaceOrClassName'                 => InterfaceClassEnumOrTraitNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorException::class
			],
			45  => [
				'interfaceOrClassName'                 => InterfaceClassEnumOrTraitNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => InterfaceClassEnumOrTraitNotFoundExceptionInterface::class
			],
			46  => [
				'interfaceOrClassName'                 => InterfaceClassEnumOrTraitNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorExceptionInterface::class
			],
			47  => [
				'interfaceOrClassName'                 => InterfaceClassOrEnumNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => InterfaceClassEnumOrTraitNotFoundException::class
			],
			48  => [
				'interfaceOrClassName'                 => InterfaceClassOrEnumNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => InterfaceClassOrEnumNotFoundExceptionInterface::class
			],
			49  => [
				'interfaceOrClassName'                 => InterfaceClassOrEnumNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => InterfaceClassEnumOrTraitNotFoundExceptionInterface::class
			],
			50  => [
				'interfaceOrClassName'                 => InterfaceNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => InterfaceNotFoundExceptionInterface::class
			],
			51  => [
				'interfaceOrClassName'                 => InterfaceNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => InterfaceOrClassNotFoundException::class
			],
			52  => [
				'interfaceOrClassName'                 => InterfaceNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => InterfaceOrClassNotFoundExceptionInterface::class
			],
			53  => [
				'interfaceOrClassName'                 => InterfaceOrClassConstantNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorException::class
			],
			54  => [
				'interfaceOrClassName'                 => InterfaceOrClassConstantNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => InterfaceOrClassConstantNotFoundExceptionInterface::class
			],
			55  => [
				'interfaceOrClassName'                 => InterfaceOrClassConstantNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorExceptionInterface::class
			],
			56  => [
				'interfaceOrClassName'                 => InterfaceOrClassConstantValueNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorException::class
			],
			57  => [
				'interfaceOrClassName'                 => InterfaceOrClassConstantValueNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => InterfaceOrClassConstantValueNotFoundExceptionInterface::class
			],
			58  => [
				'interfaceOrClassName'                 => InterfaceOrClassConstantValueNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorExceptionInterface::class
			],
			59  => [
				'interfaceOrClassName'                 => InterfaceOrClassNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => InterfaceClassOrEnumNotFoundException::class
			],
			60  => [
				'interfaceOrClassName'                 => InterfaceOrClassNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => InterfaceOrClassNotFoundExceptionInterface::class
			],
			61  => [
				'interfaceOrClassName'                 => InterfaceOrClassNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => InterfaceClassOrEnumNotFoundExceptionInterface::class
			],
			62  => [
				'interfaceOrClassName'                 => InvalidIndexException::class,
				'expectedAncestorInterfaceOrClassName' => InvalidIndexExceptionInterface::class
			],
			63  => [
				'interfaceOrClassName'                 => InvalidIndexException::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeException::class
			],
			64  => [
				'interfaceOrClassName'                 => InvalidIndexExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeExceptionInterface::class
			],
			65  => [
				'interfaceOrClassName'                 => InvalidOffsetException::class,
				'expectedAncestorInterfaceOrClassName' => InvalidOffsetExceptionInterface::class
			],
			66  => [
				'interfaceOrClassName'                 => InvalidOffsetException::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeException::class
			],
			67  => [
				'interfaceOrClassName'                 => InvalidOffsetExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeExceptionInterface::class
			],
			68  => [
				'interfaceOrClassName'                 => InvalidTypeException::class,
				'expectedAncestorInterfaceOrClassName' => InvalidTypeExceptionInterface::class
			],
			69  => [
				'interfaceOrClassName'                 => InvalidTypeException::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeException::class
			],
			70  => [
				'interfaceOrClassName'                 => InvalidTypeExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeExceptionInterface::class
			],
			71  => [
				'interfaceOrClassName'                 => InvalidValueException::class,
				'expectedAncestorInterfaceOrClassName' => InvalidValueExceptionInterface::class
			],
			72  => [
				'interfaceOrClassName'                 => InvalidValueException::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeException::class
			],
			73  => [
				'interfaceOrClassName'                 => InvalidValueExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeExceptionInterface::class
			],
			74  => [
				'interfaceOrClassName'                 => LogicException::class,
				'expectedAncestorInterfaceOrClassName' => LogicExceptionInterface::class
			],
			75  => [
				'interfaceOrClassName'                 => LogicException::class,
				'expectedAncestorInterfaceOrClassName' => OriginLogicException::class
			],
			76  => [
				'interfaceOrClassName'                 => LogicExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => ExceptionInterface::class
			],
			77  => [
				'interfaceOrClassName'                 => MethodNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorException::class
			],
			78  => [
				'interfaceOrClassName'                 => MethodNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => MethodNotFoundExceptionInterface::class
			],
			79  => [
				'interfaceOrClassName'                 => MethodNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorExceptionInterface::class
			],
			80  => [
				'interfaceOrClassName'                 => NotImplementedOperationException::class,
				'expectedAncestorInterfaceOrClassName' => NotImplementedOperationExceptionInterface::class
			],
			81  => [
				'interfaceOrClassName'                 => NotImplementedOperationException::class,
				'expectedAncestorInterfaceOrClassName' => UnsupportedOperationException::class
			],
			82  => [
				'interfaceOrClassName'                 => NotImplementedOperationExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => UnsupportedOperationExceptionInterface::class
			],
			83  => [
				'interfaceOrClassName'                 => ObjectInterface::class,
				'expectedAncestorInterfaceOrClassName' => StringifyableInterface::class
			],
			84  => [
				'interfaceOrClassName'                 => ObjectNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorException::class
			],
			85  => [
				'interfaceOrClassName'                 => ObjectNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => ObjectNotFoundExceptionInterface::class
			],
			86  => [
				'interfaceOrClassName'                 => ObjectNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorExceptionInterface::class
			],
			87  => [
				'interfaceOrClassName'                 => OffsetOutOfRangeException::class,
				'expectedAncestorInterfaceOrClassName' => OffsetOutOfRangeExceptionInterface::class
			],
			88  => [
				'interfaceOrClassName'                 => OffsetOutOfRangeException::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeException::class
			],
			89  => [
				'interfaceOrClassName'                 => OffsetOutOfRangeExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeExceptionInterface::class
			],
			90  => [
				'interfaceOrClassName'                 => PrivateMethodNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => MethodNotFoundException::class
			],
			91  => [
				'interfaceOrClassName'                 => PrivateMethodNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => PrivateMethodNotFoundExceptionInterface::class
			],
			92  => [
				'interfaceOrClassName'                 => PrivateMethodNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => MethodNotFoundExceptionInterface::class
			],
			93  => [
				'interfaceOrClassName'                 => PrivatePropertyNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => PrivatePropertyNotFoundExceptionInterface::class
			],
			94  => [
				'interfaceOrClassName'                 => PrivatePropertyNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => PropertyNotFoundException::class
			],
			95  => [
				'interfaceOrClassName'                 => PrivatePropertyNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => PropertyNotFoundExceptionInterface::class
			],
			96  => [
				'interfaceOrClassName'                 => PropertyNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorException::class
			],
			97  => [
				'interfaceOrClassName'                 => PropertyNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => PropertyNotFoundExceptionInterface::class
			],
			98  => [
				'interfaceOrClassName'                 => PropertyNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorExceptionInterface::class
			],
			99  => [
				'interfaceOrClassName'                 => ProtectedMethodNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => MethodNotFoundException::class
			],
			100 => [
				'interfaceOrClassName'                 => ProtectedMethodNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => ProtectedMethodNotFoundExceptionInterface::class
			],
			101 => [
				'interfaceOrClassName'                 => ProtectedMethodNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => MethodNotFoundExceptionInterface::class
			],
			102 => [
				'interfaceOrClassName'                 => ProtectedPropertyNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => PropertyNotFoundException::class
			],
			103 => [
				'interfaceOrClassName'                 => ProtectedPropertyNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => ProtectedPropertyNotFoundExceptionInterface::class
			],
			104 => [
				'interfaceOrClassName'                 => ProtectedPropertyNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => PropertyNotFoundExceptionInterface::class
			],
			105 => [
				'interfaceOrClassName'                 => PublicMethodNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => MethodNotFoundException::class
			],
			106 => [
				'interfaceOrClassName'                 => PublicMethodNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => PublicMethodNotFoundExceptionInterface::class
			],
			107 => [
				'interfaceOrClassName'                 => PublicMethodNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => MethodNotFoundExceptionInterface::class
			],
			108 => [
				'interfaceOrClassName'                 => PublicPropertyNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => PropertyNotFoundException::class
			],
			109 => [
				'interfaceOrClassName'                 => PublicPropertyNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => PublicPropertyNotFoundExceptionInterface::class
			],
			110 => [
				'interfaceOrClassName'                 => PublicPropertyNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => PropertyNotFoundExceptionInterface::class
			],
			111 => [
				'interfaceOrClassName'                 => RecursivelyArrayableInterface::class,
				'expectedAncestorInterfaceOrClassName' => ArrayableInterface::class
			],
			112 => [
				'interfaceOrClassName'                 => RuntimeException::class,
				'expectedAncestorInterfaceOrClassName' => OriginRuntimeException::class
			],
			113 => [
				'interfaceOrClassName'                 => RuntimeException::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeExceptionInterface::class
			],
			114 => [
				'interfaceOrClassName'                 => RuntimeExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => ExceptionInterface::class
			],
			115 => [
				'interfaceOrClassName'                 => StringBackedEnumNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => BackedEnumNotFoundException::class
			],
			116 => [
				'interfaceOrClassName'                 => StringBackedEnumNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => StringBackedEnumNotFoundExceptionInterface::class
			],
			117 => [
				'interfaceOrClassName'                 => StringBackedEnumNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => BackedEnumNotFoundExceptionInterface::class
			],
			118 => [
				'interfaceOrClassName'                 => StringifyableInterface::class,
				'expectedAncestorInterfaceOrClassName' => Stringable::class
			],
			119 => [
				'interfaceOrClassName'                 => TraitNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => InterfaceClassEnumOrTraitNotFoundException::class
			],
			120 => [
				'interfaceOrClassName'                 => TraitNotFoundException::class,
				'expectedAncestorInterfaceOrClassName' => TraitNotFoundExceptionInterface::class
			],
			121 => [
				'interfaceOrClassName'                 => TraitNotFoundExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => InterfaceClassEnumOrTraitNotFoundExceptionInterface::class
			],
			122 => [
				'interfaceOrClassName'                 => Type::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			123 => [
				'interfaceOrClassName'                 => Type::class,
				'expectedAncestorInterfaceOrClassName' => TypeInterface::class
			],
			124 => [
				'interfaceOrClassName'                 => TypeDeterminer::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			125 => [
				'interfaceOrClassName'                 => TypeDeterminer::class,
				'expectedAncestorInterfaceOrClassName' => TypeDeterminerInterface::class
			],
			126 => [
				'interfaceOrClassName'                 => TypeHintTypes::class,
				'expectedAncestorInterfaceOrClassName' => BaseObject::class
			],
			127 => [
				'interfaceOrClassName'                 => TypeHintTypes::class,
				'expectedAncestorInterfaceOrClassName' => TypesInterface::class
			],
			128 => [
				'interfaceOrClassName'                 => TypeInterface::class,
				'expectedAncestorInterfaceOrClassName' => ObjectInterface::class
			],
			129 => [
				'interfaceOrClassName'                 => UnexpectedErrorException::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeException::class
			],
			130 => [
				'interfaceOrClassName'                 => UnexpectedErrorException::class,
				'expectedAncestorInterfaceOrClassName' => UnexpectedErrorExceptionInterface::class
			],
			131 => [
				'interfaceOrClassName'                 => UnexpectedErrorExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeExceptionInterface::class
			],
			132 => [
				'interfaceOrClassName'                 => UnsupportedOperationException::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorException::class
			],
			133 => [
				'interfaceOrClassName'                 => UnsupportedOperationException::class,
				'expectedAncestorInterfaceOrClassName' => UnsupportedOperationExceptionInterface::class
			],
			134 => [
				'interfaceOrClassName'                 => UnsupportedOperationExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => AccessErrorExceptionInterface::class
			],
			135 => [
				'interfaceOrClassName'                 => ValueIsEmptyException::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeException::class
			],
			136 => [
				'interfaceOrClassName'                 => ValueIsEmptyException::class,
				'expectedAncestorInterfaceOrClassName' => ValueIsEmptyExceptionInterface::class
			],
			137 => [
				'interfaceOrClassName'                 => ValueIsEmptyExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeExceptionInterface::class
			],
			138 => [
				'interfaceOrClassName'                 => ValueIsNotEmptyException::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeException::class
			],
			139 => [
				'interfaceOrClassName'                 => ValueIsNotEmptyException::class,
				'expectedAncestorInterfaceOrClassName' => ValueIsNotEmptyExceptionInterface::class
			],
			140 => [
				'interfaceOrClassName'                 => ValueIsNotEmptyExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeExceptionInterface::class
			],
			141 => [
				'interfaceOrClassName'                 => ValueIsNotNullException::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeException::class
			],
			142 => [
				'interfaceOrClassName'                 => ValueIsNotNullException::class,
				'expectedAncestorInterfaceOrClassName' => ValueIsNotNullExceptionInterface::class
			],
			143 => [
				'interfaceOrClassName'                 => ValueIsNotNullExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeExceptionInterface::class
			],
			144 => [
				'interfaceOrClassName'                 => ValueIsNullException::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeException::class
			],
			145 => [
				'interfaceOrClassName'                 => ValueIsNullException::class,
				'expectedAncestorInterfaceOrClassName' => ValueIsNullExceptionInterface::class
			],
			146 => [
				'interfaceOrClassName'                 => ValueIsNullExceptionInterface::class,
				'expectedAncestorInterfaceOrClassName' => RuntimeExceptionInterface::class
			]
		];
	}
}
