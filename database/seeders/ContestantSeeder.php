<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ContestantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 5; $i++) {
            $int= rand(1262055681,1262055681);
            $date = date("Y-m-d H:i:s",$int);

            DB::table('contestants')->insert([
                'name' => Str::random(10),
                'ktm_image_path' => 'ktm/0rWaHlBkBhgboRgAcdH0u33LWaGgmSAMXYBjvVfZ.jpg',
                'campus_name' => Str::random(10),
                'campus_province' => Str::random(10),
                'campus_city' => Str::random(10),
                'id_card_address' => Str::random(25),
                'residence_address' => Str::random(25),
                'phone' => Str::random(12),
                'birth_date' => $date,
                'instagram_video_url' => Str::random(50),
                'tiktok_url' => Str::random(10),
                'description' => Str::random(15),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
        
    }
}
