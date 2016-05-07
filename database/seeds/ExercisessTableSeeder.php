<?php

use Illuminate\Database\Seeder;

class ExercisessTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//       DB::table('exercises')->insert([
//            'name' => str_random(10),
//            'description' => str_random(10),
//            'image_id' => 1,
//        ]);
		
		factory(App\Post::class, 10)->create();
    }
    }

