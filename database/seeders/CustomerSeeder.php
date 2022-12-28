<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $today = now();
        Customer::insert([
            [
                'firstname' => 'Dilanka',
                'lastname' => 'Somarathne',
                'email' => 'gihandilanka@gmail.com',
                'date_of_birth' => '1988-07-20',
                'experience' => '8 years',
                'country' => 'Srilanka',
                'created_at' => $today,
                'updated_at' => $today,
            ],
            [
                'firstname' => 'John',
                'lastname' => 'Andew',
                'email' => 'johnandew@gmail.com',
                'date_of_birth' => '1989-05-10',
                'experience' => '4 years',
                'country' => 'England',
                'created_at' => $today,
                'updated_at' => $today,
            ],
            [
                'firstname' => 'Madrenew',
                'lastname' => 'Arnold',
                'email' => 'madarnold@gmail.com',
                'date_of_birth' => '1999-04-19',
                'experience' => '2 years and 7 months',
                'country' => 'France',
                'created_at' => $today,
                'updated_at' => $today,
            ],
            [
                'firstname' => 'Jayson',
                'lastname' => 'Mugabe',
                'email' => 'jsonmugabe@gmail.com',
                'date_of_birth' => '1994-11-06',
                'experience' => '1 year and 7 months',
                'country' => 'Sweden',
                'created_at' => $today,
                'updated_at' => $today,
            ],
        ]);
    }
}
