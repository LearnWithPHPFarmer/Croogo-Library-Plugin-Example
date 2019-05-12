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
        $data = [];

        $table = $this->table('books');
        $table->insert($data)->save();
    }
}
