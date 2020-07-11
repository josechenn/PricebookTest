<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateProductRecomendationTable extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $users = $this->table('product_recommendation');
        $users->addColumn('name', 'string')
            ->addColumn('created_at', 'datetime', ['default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('updated_at', 'datetime', ['default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('deleted_at', 'datetime', ['null' => true])
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
