<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220502070918 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE congres DROP FOREIGN KEY FK_D89031458E2AD382');
        $this->addSql('DROP INDEX IDX_D89031458E2AD382 ON congres');
        $this->addSql('ALTER TABLE congres DROP inscriptions_id, CHANGE tarifs_inscription tarif INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE congres ADD inscriptions_id INT DEFAULT NULL, CHANGE tarif tarifs_inscription INT NOT NULL');
        $this->addSql('ALTER TABLE congres ADD CONSTRAINT FK_D89031458E2AD382 FOREIGN KEY (inscriptions_id) REFERENCES inscription (id)');
        $this->addSql('CREATE INDEX IDX_D89031458E2AD382 ON congres (inscriptions_id)');
    }
}
