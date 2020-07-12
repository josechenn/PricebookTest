<?php


use Phinx\Seed\AbstractSeed;

class ApiKeySeed extends AbstractSeed
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
                'email' => 'test@pricebook.com',
                'api_key' => 'pricebook_apikey'
            ),
        );

        $user = $this->table('api_users');
        $user->insert($data)->save();

    }
}
