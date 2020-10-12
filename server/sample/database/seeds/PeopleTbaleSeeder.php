<?php

use Illuminate\Database\Seeder;

class PeopleTbaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param  = [
            'name' => 'Taro',
            'mail' => 'Taro@yamada.jp',
            'age' => '12',
        ];
        DB::table('people')->insert($param);

        $param  = [
            'name' => 'Ziro',
            'mail' => 'Ziro@yamada.jp',
            'age' => '34',
        ];
        DB::table('people')->insert($param);

        $param  = [
            'name' => 'Hanako',
            'mail' => 'Hanako@yamada.jp',
            'age' => '56',
        ];
        DB::table('people')->insert($param);
    }
}
