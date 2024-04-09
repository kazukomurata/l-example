<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Tweet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TweetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tweet::factory(10)->create()->each(
          fn($tweet) => Image::factory()->count(4)->create()->each(
            fn($image) => $tweet->images()->attach($image->id)
          )
        );
      // 最初はこれだった.
//        DB::table('tweets')->insert([
//          'content' => Str::random(100),
//          'created_at' => now(),
//          'updated_at' => now(),
//        ]);
    }
}
