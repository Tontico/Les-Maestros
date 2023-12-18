<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231218134203 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE admin CHANGE role role JSON NOT NULL');
        $this->addSql('ALTER TABLE photos ADD url_photo VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE users CHANGE role role JSON NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE admin CHANGE role role VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE photos DROP url_photo');
        $this->addSql('ALTER TABLE users CHANGE role role VARCHAR(255) NOT NULL');
    }
}