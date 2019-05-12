<?php
//plugins/Library/config/Seeds/AuthorsSeed.php
use Migrations\AbstractSeed;

/**
 * Authors seed.
 */
class AuthorsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create();
        $data = [];
        for ($i = 0; $i < 100; $i++) {
            $data[] = [
                'name'          => $faker->name,
                'description'   => $faker->text,
                'modified_at'       => date('Y-m-d H:i:s'),
                'created_at'       => date('Y-m-d H:i:s'),
            ];
        }
        $this->insert('authors', $data);
    }
}
