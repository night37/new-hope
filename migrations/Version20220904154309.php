<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220904154309 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE animaux ADD association_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE animaux ADD CONSTRAINT FK_9ABE194D86C0C3A FOREIGN KEY (association_id_id) REFERENCES associations (id)');
        $this->addSql('CREATE INDEX IDX_9ABE194D86C0C3A ON animaux (association_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE animaux DROP FOREIGN KEY FK_9ABE194D86C0C3A');
        $this->addSql('DROP INDEX IDX_9ABE194D86C0C3A ON animaux');
        $this->addSql('ALTER TABLE animaux DROP association_id_id');
    }
}
