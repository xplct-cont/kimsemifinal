<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BikeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
            return [
                'model_name' => $this->faker->unique()->randomElement(["Honda CB1000R","BMW G 310R", "BMW R nineT Scambler", "BMW F800 R", "BMW R nine T", "BMW R 1200 GS"]),
                'rpm' => $this->faker->unique()->randomElement(["9500rpm","750rpm","8000rpm","7000rpm", "7500rpm", "9000rpm"]),
                'price' => $this->faker->unique()->randomELement(["Php785,000,00", "Php800,000,00", "Php755,000,00", "Php400,000,00", "Php700,000,00", "Php950,000,00"]),
                'color' => $this->faker->randomElement(["Green", "Black/Red", "Blue/White", "Red", "Black", "Pink"]),
               
    
        
        ];
    }
}
