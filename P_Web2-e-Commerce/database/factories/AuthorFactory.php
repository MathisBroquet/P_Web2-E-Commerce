<?php

namespace Database\Factories;

use App\Models\t_author;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\t_author>
 */
class AuthorFactory extends Factory
{
    protected $model = t_author::class;
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'autCompanyName'=> $this->faker->name(),
            'autMail'=> $this->faker->email(),
            'autCountry'=> $this->faker->country()
        ];
    }
}
