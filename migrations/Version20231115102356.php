<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231115102356 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6493CC0D837');
        $this->addSql('DROP TABLE rang');
        $this->addSql('DROP INDEX IDX_8D93D6493CC0D837 ON user');
        $this->addSql('ALTER TABLE user ADD points INT DEFAULT NULL, DROP rang_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE rang (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, points INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE user ADD rang_id INT NOT NULL, DROP points');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6493CC0D837 FOREIGN KEY (rang_id) REFERENCES rang (id)');
        $this->addSql('CREATE INDEX IDX_8D93D6493CC0D837 ON user (rang_id)');
    }
}
