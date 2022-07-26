<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220716192711 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE portion_frite_commande (id INT AUTO_INCREMENT NOT NULL, portion_frite_id INT DEFAULT NULL, commande_id INT DEFAULT NULL, quantite INT NOT NULL, INDEX IDX_55BE86189B17FA7B (portion_frite_id), INDEX IDX_55BE861882EA2E54 (commande_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE portion_frite_commande ADD CONSTRAINT FK_55BE86189B17FA7B FOREIGN KEY (portion_frite_id) REFERENCES portion_frite (id)');
        $this->addSql('ALTER TABLE portion_frite_commande ADD CONSTRAINT FK_55BE861882EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE portion_frite_commande');
    }
}
