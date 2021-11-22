<?php

namespace Database\Seeders;

use Hidehalo\Nanoid\Client;
use Hidehalo\Nanoid\GeneratorInterface;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusinessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('businesses')->insert([
            'id' => 1,
            '__id' => $this->getNanoId(),
            'user_id' => 4,
            'business_category_id' => 11,
            'business_name' => "Pyramid Hotels and Resorts",
            'address' => "A1, Bishoftu, Ethiopia",
            'city' => "Bishoftu",
            'state' => "Oromia",
            'header_image' => "http://localhost:8000/storage/header/vuSKPj2ZSTEVMa4SMA6x0.jpg",
            'latitude' => 8.7467948,
            'longitude' => 38.9844556,
            'location' => "Bishoftu",
            'claimed' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('businesses')->insert([
            'id' => 2,
            '__id' => $this->getNanoId(),
            'user_id' => 4,
            'business_category_id' => 9,
            'business_name' => "Genet Pharmacy",
            'address' => "PXXM+PVC, Bishoftu, Ethiopia",
            'city' => "Bishoftu",
            'state' => "Oromia",
            'header_image' => "http://localhost:8000/storage/header/pharmacy-history.jpg",
            'latitude' => 8.7494952,
            'longitude' => 38.9846166,
            'location' => "Bishoftu",
            'claimed' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('businesses')->insert([
            'id' => 3,
            '__id' => $this->getNanoId(),
            'user_id' => 2,
            'business_category_id' => 21,
            'business_name' => "Bishoftu Hospital",
            'address' => "QX2J+9X9, Bishoftu, Ethiopia",
            'city' => "Bishoftu",
            'state' => "Oromia",
            'header_image' => "http://localhost:8000/storage/header/default.png",
            'latitude' => 8.7511470,
            'longitude' => 38.9824764,
            'location' => "Bishoftu",
            'claimed' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('businesses')->insert([
            'id' => 4,
            '__id' => $this->getNanoId(),
            'user_id' => 2,
            'business_category_id' => 7,
            'business_name' => "Commercial bank of Ethiopia (Hora Arsede branch)",
            'address' => "Unnamed Road, Bishoftu, Ethiopia",
            'city' => "Bishoftu",
            'state' => "Oromia",
            'header_image' => "http://localhost:8000/storage/header/7ePhGn1-ixLIOdoet2NLp.jpg",
            'latitude' => 8.7509312,
            'longitude' => 38.9865809,
            'location' => "Bishoftu",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('businesses')->insert([
            'id' => 5,
            '__id' => $this->getNanoId(),
            'user_id' => 3,
            'business_category_id' => 21,
            'business_name' => "Zetseat Cafe",
            'address' => "QX2Q+X84 Bishoftu, Ethiopia",
            'city' => "Bishoftu",
            'state' => "Oromia",
            'header_image' => "http://localhost:8000/storage/header/photo-1501339847302-ac426a4a7cbb.jpg",
            'latitude' => 8.7525916,
            'longitude' => 38.9882859,
            'location' => "Bishoftu",
            'claimed' => 1,
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
