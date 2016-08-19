<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        $data = [
            'name'     => 'Jhon Doe',
            'password' => bcrypt('root'),
            'email'    => 'axample.domain.be'
        ];

        User::create($data);
    }
}
