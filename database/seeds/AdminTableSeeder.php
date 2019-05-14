<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create ();
        for ($i = 0 ; $i < 15 ; $i++) {
            DB::table ('admin')->insert([
               'name' => $faker->domainName,
               'email' => $faker->companyEmail,
               'password' => $faker->macAddress,
               'phone' => $faker->phoneNumber,
            ]);
        }
    }
}
