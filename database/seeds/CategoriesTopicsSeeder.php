<?php

use Illuminate\Database\Seeder;
use App\Topic;
use App\Category;

class CategoriesTopicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
	{
	    Topic::truncate();
	    Category::truncate();

	    factory(Category::class, 5)->create()->each(function($c) {
	        $c->topics()->saveMany(
	            factory(Topic::class, 5)->create([
	                'category_id' => $c->id
	            ])
	        );
	    });
	}
}
