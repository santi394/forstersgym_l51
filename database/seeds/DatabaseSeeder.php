<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // disable foreign key check for this connection before running seeders
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // $this->call(UserTableSeeder::class);

        // call the table seeder

        $this->call(SchoolTableSeeder::class);
        $this->call(StudentTableSeeder::class);

        // supposed to only apply to a single connection and reset it
        // but i like to explicitly undo what ive done for clarity
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        Model::reguard();
    }
}
