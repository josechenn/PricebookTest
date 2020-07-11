<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateProductTable extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $users = $this->table('product');
        $users->addColumn('name', 'string')
            ->addColumn('created_at', 'datetime', ['default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('updated_at', 'datetime', ['default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('products_recommendation_id', 'integer')
            ->addForeignKey('products_recommendation_id','product_recommendation','id')
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
