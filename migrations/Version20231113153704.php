<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231113153704 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE mouvement ADD joueur_id INT NOT NULL');
        $this->addSql('ALTER TABLE mouvement ADD CONSTRAINT FK_5B51FC3EA9E2D76C FOREIGN KEY (joueur_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_5B51FC3EA9E2D76C ON mouvement (joueur_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE mouvement DROP FOREIGN KEY FK_5B51FC3EA9E2D76C');
        $this->addSql('DROP INDEX IDX_5B51FC3EA9E2D76C ON mouvement');
        $this->addSql('ALTER TABLE mouvement DROP joueur_id');
    }
}
