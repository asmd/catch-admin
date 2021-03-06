<?php

use think\migration\Seeder;

class UsersSeed extends Seeder
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        return \catchAdmin\user\model\Users::create([
            'username' => 'admin',
            'password' => 'admin',
            'email'    => 'admin@gmail.com',
            'creator_id' => 1,
        ]);
    }
}
