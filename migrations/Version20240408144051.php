<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240408144051 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE forum (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, message VARCHAR(255) NOT NULL, INDEX IDX_852BBECDA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE qcm (id INT AUTO_INCREMENT NOT NULL, nom_qcm VARCHAR(255) NOT NULL, score INT DEFAULT NULL, question_1 VARCHAR(255) NOT NULL, question_2 VARCHAR(255) NOT NULL, question_3 VARCHAR(255) NOT NULL, question_4 VARCHAR(255) NOT NULL, question_5 VARCHAR(255) NOT NULL, reponse_1_1 VARCHAR(255) NOT NULL, reponse_1_2 VARCHAR(255) NOT NULL, reponse_1_3 VARCHAR(255) NOT NULL, reponse_1_4 VARCHAR(255) NOT NULL, reponse_2_1 VARCHAR(255) NOT NULL, reponse_2_2 VARCHAR(255) NOT NULL, reponse_2_3 VARCHAR(255) NOT NULL, reponse_2_4 VARCHAR(255) NOT NULL, reponse_3_1 VARCHAR(255) NOT NULL, reponse_3_2 VARCHAR(255) NOT NULL, reponse_3_3 VARCHAR(255) NOT NULL, reponse_3_4 VARCHAR(255) NOT NULL, reponse_4_1 VARCHAR(255) NOT NULL, reponse_4_2 VARCHAR(255) NOT NULL, reponse_4_3 VARCHAR(255) NOT NULL, reponse_4_4 VARCHAR(255) NOT NULL, reponse_5_1 VARCHAR(255) NOT NULL, reponse_5_2 VARCHAR(255) NOT NULL, reponse_5_3 VARCHAR(255) NOT NULL, reponse_5_4 VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE forum ADD CONSTRAINT FK_852BBECDA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE forum DROP FOREIGN KEY FK_852BBECDA76ED395');
        $this->addSql('DROP TABLE forum');
        $this->addSql('DROP TABLE qcm');
    }
}
