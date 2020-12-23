<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => "company",
            "email" => "company@company.com",
            "type" => "company",
            "phone" => "12345678",
            "address" => "wertwqyui",
            "password" => "1234567890",
            "password_confirmation" => "1234567890",
            "code" => 2658,
        ];
    }
}
