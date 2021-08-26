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
            '__id' => $this->getNanoId(),
            'category_id' => 11,
            'business_name' => "Pyramid Hotels and Resorts",
            'address' => "A1, Bishoftu, Ethiopia",
            'city' => "Bishoftu",
            'state' => "Oromia",
            'latitude' => 8.7467948,
            'longitude' => 38.9844556,
            'location' => "Bishoftu",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('businesses')->insert([
            '__id' => $this->getNanoId(),
            'category_id' => 9,
            'business_name' => "Genet Pharmacy",
            'address' => "PXXM+PVC, Bishoftu, Ethiopia",
            'city' => "Bishoftu",
            'state' => "Oromia",
            'latitude' => 8.7494952,
            'longitude' => 38.9846166,
            'location' => "Bishoftu",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('businesses')->insert([
            '__id' => $this->getNanoId(),
            'category_id' => 9,
            'business_name' => "Bishoftu Hospital",
            'address' => "QX2J+9X9, Bishoftu, Ethiopia",
            'city' => "Bishoftu",
            'state' => "Oromia",
            'latitude' => 8.7511470,
            'longitude' => 38.9824764,
            'location' => "Bishoftu",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('businesses')->insert([
            '__id' => $this->getNanoId(),
            'category_id' => 7,
            'business_name' => "Commercial bank of Ethiopia (Hora Arsede branch)",
            'address' => "Unnamed Road, Bishoftu, Ethiopia",
            'city' => "Bishoftu",
            'state' => "Oromia",
            'latitude' => 8.7509312,
            'longitude' => 38.9865809,
            'location' => "Bishoftu",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('businesses')->insert([
            '__id' => $this->getNanoId(),
            'category_id' => 20,
            'business_name' => "Debre Zeit Mekane Yesus Chruch",
            'address' => "QX3Q+43 Bishoftu, Ethiopia",
            'city' => "Bishoftu",
            'state' => "Oromia",
            'latitude' => 8.7527574,
            'longitude' => 38.9877264,
            'location' => "Bishoftu",
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
