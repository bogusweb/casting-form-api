<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180924163128 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE casting_form ADD casting_category_id INT NOT NULL');
        $this->addSql('ALTER TABLE casting_form ADD CONSTRAINT FK_CD2154AE11967C72 FOREIGN KEY (casting_category_id) REFERENCES casting_category (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_CD2154AE11967C72 ON casting_form (casting_category_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE casting_form DROP FOREIGN KEY FK_CD2154AE11967C72');
        $this->addSql('DROP INDEX UNIQ_CD2154AE11967C72 ON casting_form');
        $this->addSql('ALTER TABLE casting_form DROP casting_category_id');
    }
}
