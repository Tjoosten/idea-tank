<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IdeaCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $data = [
            ['name' => 'Random'],
            ['name' => 'Hacking'],
            ['name' => 'Development']
        ];
        $table =  DB::table('idea_categories');
        $table->delete();
        $table->insert($data);
    }
}
