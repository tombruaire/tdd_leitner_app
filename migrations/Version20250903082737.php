<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250903082737 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE box (id SERIAL NOT NULL, PRIMARY KEY(id))');
        $this->addSql('ALTER TABLE flashcard ADD box_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE flashcard ADD CONSTRAINT FK_70511A09D8177B3F FOREIGN KEY (box_id) REFERENCES box (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_70511A09D8177B3F ON flashcard (box_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE flashcard DROP CONSTRAINT FK_70511A09D8177B3F');
        $this->addSql('DROP TABLE box');
        $this->addSql('DROP INDEX IDX_70511A09D8177B3F');
        $this->addSql('ALTER TABLE flashcard DROP box_id');
    }
}
