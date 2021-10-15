<?php

namespace Database\Seeders;

use Hidehalo\Nanoid\Client;
use Hidehalo\Nanoid\GeneratorInterface;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusinessCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('business_categories')->insert([
            '__id' => $this->getNanoId(),
            'parent_id' => null,
            'category' => "Active Life",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('business_categories')->insert([
            '__id' => $this->getNanoId(),
            'parent_id' => null,
            'category' => "Arts & Entertainment",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('business_categories')->insert([
            '__id' => $this->getNanoId(),
            'parent_id' => null,
            'category' => "Automotive",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('business_categories')->insert([
            '__id' => $this->getNanoId(),
            'parent_id' => null,
            'category' => "Beauty & Spas",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('business_categories')->insert([
            '__id' => $this->getNanoId(),
            'parent_id' => null,
            'category' => "Education",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('business_categories')->insert([
            '__id' => $this->getNanoId(),
            'parent_id' => null,
            'category' => "Event Planning & Services",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('business_categories')->insert([
            '__id' => $this->getNanoId(),
            'parent_id' => null,
            'category' => "Financial Services",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('business_categories')->insert([
            '__id' => $this->getNanoId(),
            'parent_id' => null,
            'category' => "Food",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('business_categories')->insert([
            '__id' => $this->getNanoId(),
            'parent_id' => null,
            'category' => "Health & Medical",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('business_categories')->insert([
            '__id' => $this->getNanoId(),
            'parent_id' => null,
            'category' => "Home Services",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('business_categories')->insert([
            '__id' => $this->getNanoId(),
            'parent_id' => null,
            'category' => "Hotels & Travel",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('business_categories')->insert([
            '__id' => $this->getNanoId(),
            'parent_id' => null,
            'category' => "Local Flavor",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('business_categories')->insert([
            '__id' => $this->getNanoId(),
            'parent_id' => null,
            'category' => "Local Services",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('business_categories')->insert([
            '__id' => $this->getNanoId(),
            'parent_id' => null,
            'category' => "Mass Media",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('business_categories')->insert([
            '__id' => $this->getNanoId(),
            'parent_id' => null,
            'category' => "Nightlife",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('business_categories')->insert([
            '__id' => $this->getNanoId(),
            'parent_id' => null,
            'category' => "Pets",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('business_categories')->insert([
            '__id' => $this->getNanoId(),
            'parent_id' => null,
            'category' => "Professional Services",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('business_categories')->insert([
            '__id' => $this->getNanoId(),
            'parent_id' => null,
            'category' => "Public Services & Government",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('business_categories')->insert([
            '__id' => $this->getNanoId(),
            'parent_id' => null,
            'category' => "Real Estate",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('business_categories')->insert([
            '__id' => $this->getNanoId(),
            'parent_id' => null,
            'category' => "Religious Organizations",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('business_categories')->insert([
            '__id' => $this->getNanoId(),
            'parent_id' => null,
            'category' => "Restaurants",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('business_categories')->insert([
            '__id' => $this->getNanoId(),
            'parent_id' => null,
            'category' => "Shopping",
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
