<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250827175718 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'update table test';
    }

    public function up(Schema $schema): void
    {
         $this->addSql(<<<SQL
             ALTER TABLE `test` CHANGE `id` `id` INT( 11 ) NOT NULL AUTO_INCREMENT 
        SQL);

    }

    public function down(Schema $schema): void
    {
        $this->addSql(<<<SQL
             ALTER TABLE `test` CHANGE `id` `id` INT( 11 ) NOT NULL
        SQL);
    }
}
