<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\User::class)->create(['name' => 'Nguyễn Văn A', 'email' => 'test@allaravel.com']);
    	$this->call(CategoriesTopicsSeeder::class);
    }
}
