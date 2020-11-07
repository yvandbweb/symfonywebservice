<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201103164655 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE graphdata (id INT AUTO_INCREMENT NOT NULL, fk_graphics_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, value INT NOT NULL, color VARCHAR(7) NOT NULL, INDEX IDX_3368344DC7D08D6C (fk_graphics_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE graphics (id INT AUTO_INCREMENT NOT NULL, size INT NOT NULL, legend_type VARCHAR(8) NOT NULL, graph_background_color VARCHAR(7) NOT NULL, graph_font_color VARCHAR(7) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lul (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE graphdata ADD CONSTRAINT FK_3368344DC7D08D6C FOREIGN KEY (fk_graphics_id) REFERENCES graphics (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE graphdata DROP FOREIGN KEY FK_3368344DC7D08D6C');
        $this->addSql('DROP TABLE graphdata');
        $this->addSql('DROP TABLE graphics');
        $this->addSql('DROP TABLE lul');
    }
}
