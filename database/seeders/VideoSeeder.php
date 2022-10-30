<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Video;
use Illuminate\Support\Facades\DB;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->insert(
        [
            "name" => "SadGirl - Vol. One - Lie Awake",
            "link" => "https://youtu.be/MJctW2sCA4A",
            "description" => "My Fav Music",
            "upload-date" => '07-22-2016',
        ]
    );
    }
}
