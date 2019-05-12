<?php
//plugins/Library/config/Seeds/BooksSeed.php
use Migrations\AbstractSeed;

/**
 * Books seed.
 */
class BooksSeed extends AbstractSeed
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
        for ($i = 0; $i < 1000; $i++) {
            $data[] = [
                'author_id'          => $faker->randomNumber(2),
                'title'          => substr($faker->paragraph, 0, 180),
                'description'   => $faker->text,
                'isbn'   => $faker->isbn13,
                'price'   => $faker->randomFloat(3),
                'modified_at'       => date('Y-m-d H:i:s'),
                'created_at'       => date('Y-m-d H:i:s'),
            ];
        }
        $this->insert('books', $data);
    }
}
