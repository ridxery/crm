<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;
    protected $leadSources = [
      'referral',
      'facebook',
      'google',
      'twitter',
      'linkedin',
      'instagram',
    ];
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $source = $this->leadSources[array_rand($this->leadSources)];
        $owner = ($source === 'referral') ? $this->faker->name() : '';
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->sentence(),
            'lead_source' => $source,
            'lead_owner' => $owner,
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->numerify('####-##########'),
            'country' => $this->faker->country(),
        ];
    }
}
