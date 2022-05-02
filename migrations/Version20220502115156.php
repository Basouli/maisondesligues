<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220502115156 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE categoriechambre');
        $this->addSql('ALTER TABLE atelier_inscription ADD CONSTRAINT FK_20EC8DC882E2CF35 FOREIGN KEY (atelier_id) REFERENCES atelier (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE atelier_inscription ADD CONSTRAINT FK_20EC8DC85DAC5993 FOREIGN KEY (inscription_id) REFERENCES inscription (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE nuite ADD CONSTRAINT FK_8D4CB7155DAC5993 FOREIGN KEY (inscription_id) REFERENCES inscription (id)');
        $this->addSql('ALTER TABLE nuite ADD CONSTRAINT FK_8D4CB7153243BB18 FOREIGN KEY (hotel_id) REFERENCES hotel (id)');
        $this->addSql('ALTER TABLE nuite ADD CONSTRAINT FK_8D4CB7155DEB5F8 FOREIGN KEY (categorie_chambre_id) REFERENCES categorie_chambre (id)');
        $this->addSql('ALTER TABLE proposer ADD CONSTRAINT FK_21866C153243BB18 FOREIGN KEY (hotel_id) REFERENCES hotel (id)');
        $this->addSql('ALTER TABLE proposer ADD CONSTRAINT FK_21866C15BCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie_chambre (id)');
        $this->addSql('ALTER TABLE restauration ADD CONSTRAINT FK_898B1EF15DAC5993 FOREIGN KEY (inscription_id) REFERENCES inscription (id)');
        $this->addSql('ALTER TABLE theme_atelier ADD CONSTRAINT FK_B8D81D0059027487 FOREIGN KEY (theme_id) REFERENCES theme (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE theme_atelier ADD CONSTRAINT FK_B8D81D0082E2CF35 FOREIGN KEY (atelier_id) REFERENCES atelier (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user ADD numlicencie INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categoriechambre (id INT AUTO_INCREMENT NOT NULL, libelleCategorie VARCHAR(100) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('ALTER TABLE atelier_inscription DROP FOREIGN KEY FK_20EC8DC882E2CF35');
        $this->addSql('ALTER TABLE atelier_inscription DROP FOREIGN KEY FK_20EC8DC85DAC5993');
        $this->addSql('ALTER TABLE nuite DROP FOREIGN KEY FK_8D4CB7155DAC5993');
        $this->addSql('ALTER TABLE nuite DROP FOREIGN KEY FK_8D4CB7153243BB18');
        $this->addSql('ALTER TABLE nuite DROP FOREIGN KEY FK_8D4CB7155DEB5F8');
        $this->addSql('ALTER TABLE proposer DROP FOREIGN KEY FK_21866C153243BB18');
        $this->addSql('ALTER TABLE proposer DROP FOREIGN KEY FK_21866C15BCF5E72D');
        $this->addSql('ALTER TABLE restauration DROP FOREIGN KEY FK_898B1EF15DAC5993');
        $this->addSql('ALTER TABLE theme_atelier DROP FOREIGN KEY FK_B8D81D0059027487');
        $this->addSql('ALTER TABLE theme_atelier DROP FOREIGN KEY FK_B8D81D0082E2CF35');
        $this->addSql('ALTER TABLE user DROP numlicencie');
    }
}
