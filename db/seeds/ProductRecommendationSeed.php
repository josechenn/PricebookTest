<?php


use Phinx\Seed\AbstractSeed;

class ProductRecommendationSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
    public function run()
    {

        $data = array(
            array(
                'name' => 'Samsung Galaxy S8 Midnight Black',
            ),
            array(
                'name' => 'Apple iPhone 7 Plus 256GB Rose Gold',
            ),
            array(
                'name' => 'Spigen iPhone 7 Case Slim Armor Series',
            ),
            array(
                'name' => 'Samsung Starter Kit Basic for Samsung Galaxy S8',
            )

        );

        $user = $this->table('product_recommendation');
        $user->insert($data)->save();
    }
}
