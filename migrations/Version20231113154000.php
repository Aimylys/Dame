<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231113154000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE partie ADD joueur_a_id INT NOT NULL, ADD joueur_n_id INT NOT NULL, ADD gagnant_id INT NOT NULL');
        $this->addSql('ALTER TABLE partie ADD CONSTRAINT FK_59B1F3D834C8FF0 FOREIGN KEY (joueur_a_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE partie ADD CONSTRAINT FK_59B1F3DDB2F9FA6 FOREIGN KEY (joueur_n_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE partie ADD CONSTRAINT FK_59B1F3D2F942B8 FOREIGN KEY (gagnant_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_59B1F3D834C8FF0 ON partie (joueur_a_id)');
        $this->addSql('CREATE INDEX IDX_59B1F3DDB2F9FA6 ON partie (joueur_n_id)');
        $this->addSql('CREATE INDEX IDX_59B1F3D2F942B8 ON partie (gagnant_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE partie DROP FOREIGN KEY FK_59B1F3D834C8FF0');
        $this->addSql('ALTER TABLE partie DROP FOREIGN KEY FK_59B1F3DDB2F9FA6');
        $this->addSql('ALTER TABLE partie DROP FOREIGN KEY FK_59B1F3D2F942B8');
        $this->addSql('DROP INDEX IDX_59B1F3D834C8FF0 ON partie');
        $this->addSql('DROP INDEX IDX_59B1F3DDB2F9FA6 ON partie');
        $this->addSql('DROP INDEX IDX_59B1F3D2F942B8 ON partie');
        $this->addSql('ALTER TABLE partie DROP joueur_a_id, DROP joueur_n_id, DROP gagnant_id');
    }
}
