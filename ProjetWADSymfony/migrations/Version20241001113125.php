<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241001113125 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE commentaire (id INT AUTO_INCREMENT NOT NULL, utilisateur_id INT DEFAULT NULL, recette_id INT DEFAULT NULL, contenu LONGTEXT NOT NULL, date_commentaire DATE DEFAULT NULL, INDEX IDX_67F068BCFB88E14F (utilisateur_id), INDEX IDX_67F068BC89312FE9 (recette_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE courses_list (id INT AUTO_INCREMENT NOT NULL, utilisateur_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, INDEX IDX_80284AA6FB88E14F (utilisateur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE detail_courses (id INT AUTO_INCREMENT NOT NULL, courses_list_id INT DEFAULT NULL, ingredient_id INT DEFAULT NULL, quantite INT DEFAULT NULL, INDEX IDX_CE6ADA998497EB17 (courses_list_id), INDEX IDX_CE6ADA99933FE08C (ingredient_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE detail_recette (id INT AUTO_INCREMENT NOT NULL, recette_id INT NOT NULL, ingredient_id INT NOT NULL, quantite INT NOT NULL, unite_mesure VARCHAR(100) NOT NULL, INDEX IDX_2E74E34589312FE9 (recette_id), INDEX IDX_2E74E345933FE08C (ingredient_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ingredient (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE note (id INT AUTO_INCREMENT NOT NULL, utilisateur_id INT DEFAULT NULL, recette_id INT DEFAULT NULL, valeur INT DEFAULT NULL, INDEX IDX_CFBDFA14FB88E14F (utilisateur_id), INDEX IDX_CFBDFA1489312FE9 (recette_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE origine (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE origine_recette (origine_id INT NOT NULL, recette_id INT NOT NULL, INDEX IDX_B55AA25187998E (origine_id), INDEX IDX_B55AA25189312FE9 (recette_id), PRIMARY KEY(origine_id, recette_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE recette (id INT AUTO_INCREMENT NOT NULL, utilisateur_id INT DEFAULT NULL, titre VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, date_publication DATE DEFAULT NULL, temps_de_preparation TIME DEFAULT NULL, temps_de_cuison TIME DEFAULT NULL, difficulte INT DEFAULT NULL, image VARCHAR(255) DEFAULT NULL, saison VARCHAR(255) NOT NULL, nombre_portions INT DEFAULT NULL, type_de_plat VARCHAR(255) DEFAULT NULL, INDEX IDX_49BB6390FB88E14F (utilisateur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE recette_utilisateur (recette_id INT NOT NULL, utilisateur_id INT NOT NULL, INDEX IDX_E26F66FA89312FE9 (recette_id), INDEX IDX_E26F66FAFB88E14F (utilisateur_id), PRIMARY KEY(recette_id, utilisateur_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, nom VARCHAR(255) DEFAULT NULL, prenom VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_IDENTIFIER_EMAIL (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCFB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC89312FE9 FOREIGN KEY (recette_id) REFERENCES recette (id)');
        $this->addSql('ALTER TABLE courses_list ADD CONSTRAINT FK_80284AA6FB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE detail_courses ADD CONSTRAINT FK_CE6ADA998497EB17 FOREIGN KEY (courses_list_id) REFERENCES courses_list (id)');
        $this->addSql('ALTER TABLE detail_courses ADD CONSTRAINT FK_CE6ADA99933FE08C FOREIGN KEY (ingredient_id) REFERENCES ingredient (id)');
        $this->addSql('ALTER TABLE detail_recette ADD CONSTRAINT FK_2E74E34589312FE9 FOREIGN KEY (recette_id) REFERENCES recette (id)');
        $this->addSql('ALTER TABLE detail_recette ADD CONSTRAINT FK_2E74E345933FE08C FOREIGN KEY (ingredient_id) REFERENCES ingredient (id)');
        $this->addSql('ALTER TABLE note ADD CONSTRAINT FK_CFBDFA14FB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE note ADD CONSTRAINT FK_CFBDFA1489312FE9 FOREIGN KEY (recette_id) REFERENCES recette (id)');
        $this->addSql('ALTER TABLE origine_recette ADD CONSTRAINT FK_B55AA25187998E FOREIGN KEY (origine_id) REFERENCES origine (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE origine_recette ADD CONSTRAINT FK_B55AA25189312FE9 FOREIGN KEY (recette_id) REFERENCES recette (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE recette ADD CONSTRAINT FK_49BB6390FB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE recette_utilisateur ADD CONSTRAINT FK_E26F66FA89312FE9 FOREIGN KEY (recette_id) REFERENCES recette (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE recette_utilisateur ADD CONSTRAINT FK_E26F66FAFB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BCFB88E14F');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC89312FE9');
        $this->addSql('ALTER TABLE courses_list DROP FOREIGN KEY FK_80284AA6FB88E14F');
        $this->addSql('ALTER TABLE detail_courses DROP FOREIGN KEY FK_CE6ADA998497EB17');
        $this->addSql('ALTER TABLE detail_courses DROP FOREIGN KEY FK_CE6ADA99933FE08C');
        $this->addSql('ALTER TABLE detail_recette DROP FOREIGN KEY FK_2E74E34589312FE9');
        $this->addSql('ALTER TABLE detail_recette DROP FOREIGN KEY FK_2E74E345933FE08C');
        $this->addSql('ALTER TABLE note DROP FOREIGN KEY FK_CFBDFA14FB88E14F');
        $this->addSql('ALTER TABLE note DROP FOREIGN KEY FK_CFBDFA1489312FE9');
        $this->addSql('ALTER TABLE origine_recette DROP FOREIGN KEY FK_B55AA25187998E');
        $this->addSql('ALTER TABLE origine_recette DROP FOREIGN KEY FK_B55AA25189312FE9');
        $this->addSql('ALTER TABLE recette DROP FOREIGN KEY FK_49BB6390FB88E14F');
        $this->addSql('ALTER TABLE recette_utilisateur DROP FOREIGN KEY FK_E26F66FA89312FE9');
        $this->addSql('ALTER TABLE recette_utilisateur DROP FOREIGN KEY FK_E26F66FAFB88E14F');
        $this->addSql('DROP TABLE commentaire');
        $this->addSql('DROP TABLE courses_list');
        $this->addSql('DROP TABLE detail_courses');
        $this->addSql('DROP TABLE detail_recette');
        $this->addSql('DROP TABLE ingredient');
        $this->addSql('DROP TABLE note');
        $this->addSql('DROP TABLE origine');
        $this->addSql('DROP TABLE origine_recette');
        $this->addSql('DROP TABLE recette');
        $this->addSql('DROP TABLE recette_utilisateur');
        $this->addSql('DROP TABLE utilisateur');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
