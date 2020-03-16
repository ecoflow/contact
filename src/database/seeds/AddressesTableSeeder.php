<?php

namespace Ecoflow\Contact\Database\seeds;

use Faker\Generator;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Ecoflow\Access\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AddressesTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('Ecoflow\Contact\Models\Address');

        for ($i = 0; $i < 22; $i++) {
            $user = User::inRandomOrder()->limit(1)->first();
            DB::table('addresses')->insert([
                'addr1' => $faker->streetAddress,
                'addr2' => $faker->secondaryAddress,
                'country' => $faker->country,
                'city' => $faker->city,
                'zipcode' => $faker->postcode,
                'addressable_id' => $user->id,
                'addressable_type' => 'Ecoflow\\Access\\Models\\User'
            ]);
        }
    }
}
