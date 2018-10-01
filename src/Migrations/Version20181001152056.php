<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181001152056 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE casting_form ADD dimensions JSON DEFAULT NULL COMMENT \'(DC2Type:json_array)\', ADD body JSON DEFAULT NULL COMMENT \'(DC2Type:json_array)\', ADD face JSON DEFAULT NULL COMMENT \'(DC2Type:json_array)\', ADD hair JSON DEFAULT NULL COMMENT \'(DC2Type:json_array)\', ADD skills JSON DEFAULT NULL COMMENT \'(DC2Type:json_array)\', ADD additional_information LONGTEXT DEFAULT NULL, DROP approval_processing');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE casting_form ADD approval_processing TINYINT(1) NOT NULL, DROP dimensions, DROP body, DROP face, DROP hair, DROP skills, DROP additional_information');
    }
}
