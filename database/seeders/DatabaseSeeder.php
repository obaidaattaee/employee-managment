<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::insert(
            [
                [
                    "name" => "company",
                    "email" => "company@company.com",
                    "type" => "company",
                    "phone" => "123456783",
                    "address" => "wertwqyui",
                    "password" => bcrypt("1234567890"),
                    "code" => 1234,
                    "active" => 0,
                ],
                [
                    "name" => "admin",
                    "email" => "admin@admin.com",
                    "type" => "super_admin",
                    "phone" => "1234512783",
                    "address" => "wertwqyui",
                    "password" => bcrypt("1234567890"),
                    'code' => 1111 ,
                    "active" => 1,
                ],
                [
                    "name" => "employee",
                    "email" => "employee@employee.com",
                    "type" => "employee",
                    "phone" => "123456781",
                    "address" => "wertwqyui",
                    "password" => bcrypt("1234567890"),
                    "code" => 1234,
                    "active" => 1,
                ],
                [
                    "name" => "customer",
                    "email" => "customer@customer.com",
                    "type" => "customer",
                    "phone" => "123456782",
                    "address" => "wertwqyui",
                    "password" => bcrypt("1234567890"),
                    "code" => 1234,
                    "active" => 1,
                ],

            ]) ;
    }
}
