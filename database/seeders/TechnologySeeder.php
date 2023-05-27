<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for($i=0; $i < 50; $i++){
            $technology = new Technology();
            $technology->name= fake()->name();
            $technology->slug= Str::slug($technology->name);
            $technology->save();
        }
        
    }
}
