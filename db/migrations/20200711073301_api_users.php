<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class ApiUsers extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $users = $this->table('api_users');
        $users->addColumn('email', 'string')
            ->addColumn('api_key', 'string')
            ->addIndex(['email','api_key'],['unique'=>true])
            ->save();
    }
    /**
     * Migrate Down.
     */
    public function down()
    {
        $this->dropTable('product_recommendation');
    }
}
