<?php

namespace Database\Factories;

use App\Models\Dress;
use Illuminate\Database\Eloquent\Factories\Factory;

class DressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Dress::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'title'     => $this -> faker -> sentence(5),
            'price'     => $this -> faker -> postcode(),



        ];
    }
}
