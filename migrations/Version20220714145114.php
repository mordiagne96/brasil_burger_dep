<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220714145114 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE menu_commande_taille_boisson DROP FOREIGN KEY FK_B88397A58421F13F');
        $this->addSql('DROP INDEX IDX_B88397A58421F13F ON menu_commande_taille_boisson');
        $this->addSql('ALTER TABLE menu_commande_taille_boisson ADD commande_id INT DEFAULT NULL, CHANGE taille_boisson_id menu_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE menu_commande_taille_boisson ADD CONSTRAINT FK_B88397A5CCD7E912 FOREIGN KEY (menu_id) REFERENCES menu (id)');
        $this->addSql('ALTER TABLE menu_commande_taille_boisson ADD CONSTRAINT FK_B88397A582EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id)');
        $this->addSql('CREATE INDEX IDX_B88397A5CCD7E912 ON menu_commande_taille_boisson (menu_id)');
        $this->addSql('CREATE INDEX IDX_B88397A582EA2E54 ON menu_commande_taille_boisson (commande_id)');
        $this->addSql('ALTER TABLE taille_boisson ADD menu_commande_taille_boisson_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE taille_boisson ADD CONSTRAINT FK_59FAC268F3439444 FOREIGN KEY (menu_commande_taille_boisson_id) REFERENCES menu_commande_taille_boisson (id)');
        $this->addSql('CREATE INDEX IDX_59FAC268F3439444 ON taille_boisson (menu_commande_taille_boisson_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE menu_commande_taille_boisson DROP FOREIGN KEY FK_B88397A5CCD7E912');
        $this->addSql('ALTER TABLE menu_commande_taille_boisson DROP FOREIGN KEY FK_B88397A582EA2E54');
        $this->addSql('DROP INDEX IDX_B88397A5CCD7E912 ON menu_commande_taille_boisson');
        $this->addSql('DROP INDEX IDX_B88397A582EA2E54 ON menu_commande_taille_boisson');
        $this->addSql('ALTER TABLE menu_commande_taille_boisson ADD taille_boisson_id INT DEFAULT NULL, DROP menu_id, DROP commande_id');
        $this->addSql('ALTER TABLE menu_commande_taille_boisson ADD CONSTRAINT FK_B88397A58421F13F FOREIGN KEY (taille_boisson_id) REFERENCES taille_boisson (id)');
        $this->addSql('CREATE INDEX IDX_B88397A58421F13F ON menu_commande_taille_boisson (taille_boisson_id)');
        $this->addSql('ALTER TABLE taille_boisson DROP FOREIGN KEY FK_59FAC268F3439444');
        $this->addSql('DROP INDEX IDX_59FAC268F3439444 ON taille_boisson');
        $this->addSql('ALTER TABLE taille_boisson DROP menu_commande_taille_boisson_id');
    }
}
