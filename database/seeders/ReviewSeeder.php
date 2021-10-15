<?php

namespace Database\Seeders;

use Hidehalo\Nanoid\Client;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Hidehalo\Nanoid\GeneratorInterface;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            '__id' => $this->getNanoId(),
            'business_id' => 1,
            'user_id' => 4,
            'rating' => 3,
            'review' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('reviews')->insert([
            '__id' => $this->getNanoId(),
            'business_id' => 1,
            'user_id' => 2,
            'rating' => 5,
            'review' => "Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('reviews')->insert([
            '__id' => $this->getNanoId(),
            'business_id' => 1,
            'user_id' => 3,
            'rating' => 4,
            'review' => "It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('reviews')->insert([
            '__id' => $this->getNanoId(),
            'business_id' => 2,
            'user_id' => 4,
            'rating' => 3,
            'review' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('reviews')->insert([
            '__id' => $this->getNanoId(),
            'business_id' => 2,
            'user_id' => 3,
            'rating' => 4,
            'review' => "It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('reviews')->insert([
            '__id' => $this->getNanoId(),
            'business_id' => 3,
            'user_id' => 2,
            'rating' => 2,
            'review' => "Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('reviews')->insert([
            '__id' => $this->getNanoId(),
            'business_id' => 3,
            'user_id' => 3,
            'rating' => 3,
            'review' => "It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('reviews')->insert([
            '__id' => $this->getNanoId(),
            'business_id' => 4,
            'user_id' => 3,
            'rating' => 1,
            'review' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('reviews')->insert([
            '__id' => $this->getNanoId(),
            'business_id' => 4,
            'user_id' => 4,
            'rating' => 2,
            'review' => "Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('reviews')->insert([
            '__id' => $this->getNanoId(),
            'business_id' => 4,
            'user_id' => 2,
            'rating' => 4,
            'review' => "It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('reviews')->insert([
            '__id' => $this->getNanoId(),
            'business_id' => 5,
            'user_id' => 2,
            'rating' => 3,
            'review' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('reviews')->insert([
            '__id' => $this->getNanoId(),
            'business_id' => 5,
            'user_id' => 4,
            'rating' => 5,
            'review' => "Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }

    protected function getNanoId()
    {
        $client = new Client();
        $nanoid = $client->generateId($size = 21, $mode = Client::MODE_DYNAMIC);
        
        return $nanoid;
    }
}
