<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250821170942 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create table test';
    }

    public function up(Schema $schema): void
    {
         $this->addSql(<<<SQL
            CREATE TABLE test
            (id INT PRIMARY KEY NOT NULL,
            name VARCHAR(100),
            email VARCHAR(255),
            birthday DATE,
            country VARCHAR(255),
            city VARCHAR(255),
            postalCode VARCHAR(5),
            money INT)
        SQL);
    }

    public function down(Schema $schema): void
    {
         $this->addSql(<<<SQL
            DROP TABLE test
        SQL);

    }
}
