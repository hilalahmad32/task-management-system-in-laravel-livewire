<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'c_name' => 'Task Managment System',
            'fullname' => 'Hilal ahmad',
            'phone' => '309439793749',
            'email' => 'ahilal123@gmail.com',
            'address' => 'pakistan swat',
            'username' => 'hilal123',
            'password' => Hash::make('hilal123')
        ];
    }
}
