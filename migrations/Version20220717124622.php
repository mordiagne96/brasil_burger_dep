<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220717124622 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE livreur CHANGE etat etat INT NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_EB7A4E6DA6A25A62 ON livreur (matricule_moto)');
        $this->addSql('ALTER TABLE user CHANGE nom nom VARCHAR(30) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_EB7A4E6DA6A25A62 ON livreur');
        $this->addSql('ALTER TABLE livreur CHANGE etat etat INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE nom nom VARCHAR(30) DEFAULT NULL');
    }
}
