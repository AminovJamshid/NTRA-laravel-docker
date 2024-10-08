<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Branch>
 */
class BranchFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name,
            'address'=>fake()->randomElement(["chilonzor", "Hadra","Xorazm","Samarqand","Farg'ona"]),
            'image'=>storage_path("/images/orqafon.jgp")
        ];
    }
}
