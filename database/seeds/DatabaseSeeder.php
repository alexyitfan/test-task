<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (env('APP_ENV') === 'production') {
            die('Can`t seed data on production!');
        }

        Model::unguard();

        $tables = [
            'companies',
            'employees'
        ];

        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        Model::reguard();

        foreach ($tables as $table) {
            $this->call(ucfirst($table).'TableSeeder');
        }
    }
}
