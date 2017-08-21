<?php
declare(strict_types=1);

namespace Book\Infrastructure\Domain\Doctrine;


use Book\Domain\Id;
use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\ConversionException;
use Doctrine\DBAL\Types\Type;
use Ramsey\Uuid\Uuid;
use SharedKernel\Application\Exception\InvalidUUIDFormatException;

class IdType extends Type
{
    const NAME = 'book_id';

    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        return $platform->getGuidTypeDeclarationSQL($fieldDeclaration);
    }

    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        if (empty($value)) {
            return null;
        }

        if ($value instanceof Id) {
            return $value;
        }

        try {
            $uuid = new Id($value);
        } catch (InvalidUUIDFormatException $e) {
            throw ConversionException::conversionFailed($value, static::NAME);
        }

        return $uuid;
    }

    /**
     * {@inheritdoc}
     *
     * @param Uuid|null $value
     * @param \Doctrine\DBAL\Platforms\AbstractPlatform $platform
     */
    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {
        if (empty($value)) {
            return null;
        }

        if ($value instanceof Id || Uuid::isValid($value)) {
            return (string)$value;
        }

        throw ConversionException::conversionFailed($value, static::NAME);
    }

    /**
     * {@inheritdoc}
     *
     * @return string
     */
    public function getName()
    {
        return static::NAME;
    }

    /**
     * {@inheritdoc}
     *
     * @param \Doctrine\DBAL\Platforms\AbstractPlatform $platform
     * @return boolean
     */
    public function requiresSQLCommentHint(AbstractPlatform $platform)
    {
        return true;
    }
}