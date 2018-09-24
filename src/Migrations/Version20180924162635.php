<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180924162635 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE casting_form (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, surname VARCHAR(255) NOT NULL, sex VARCHAR(255) NOT NULL, phone VARCHAR(16) NOT NULL, email VARCHAR(128) NOT NULL, birth_date DATE NOT NULL, place_of_residence VARCHAR(255) NOT NULL, nationality VARCHAR(255) NOT NULL, portfolio_link VARCHAR(255) DEFAULT NULL, dimensions LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', body LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', face LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', hair LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', skills LONGTEXT DEFAULT NULL, short_description LONGTEXT DEFAULT NULL, additional_information LONGTEXT DEFAULT NULL, approval_clause TINYINT(1) NOT NULL, approval_processing TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE casting_form');
    }
}
