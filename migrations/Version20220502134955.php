<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220502134955 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        //$this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649B56DCD74 FOREIGN KEY (licencie_id) REFERENCES licencie (id)');
        //$this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649B56DCD74 ON user (licencie_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649B56DCD74');
        $this->addSql('DROP INDEX UNIQ_8D93D649B56DCD74 ON user');
    }
}
