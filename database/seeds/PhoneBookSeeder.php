<?php

use Illuminate\Database\Seeder;

class PhoneBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Contact::class, 100)->create();
    }
}
