<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    protected $model = \App\Models\Employee::class;

    public function definition()
    {
      return [
         
        'registration_id' => $this->faker->unique()->numerify('REG###'),
        'foreign_employee_name' => $this->faker->name,
        'address' => $this->faker->address,
        'age' => $this->faker->numberBetween(18, 60),
        'guardian_name' => $this->faker->name,
        'guardian_contact' => $this->faker->phoneNumber,
        'foreign_destination_country_city' => $this->faker->city . ', ' . $this->faker->country,
        'destination_country_contact' => $this->faker->phoneNumber,
        'foreign_destination_job' => $this->faker->jobTitle,
        'foreign_job_finding_agent_name' => $this->faker->company,
        'foreign_job_finding_agent_contact' => $this->faker->phoneNumber,
        'date_of_heading_towards_foreign' => $this->faker->date,
        'duration_of_foreign_job' => $this->faker->numberBetween(1, 10), // duration in years
        'bank_account' => $this->faker->bankAccountNumber,
        'skills' => implode(', ', $this->faker->words(3)), // e.g., "Carpentry, Plumbing, Welding"
        'return_date' => $this->faker->date(), // Generate a valid date
        'remarks' => $this->faker->sentence(), // Ensure this is never null
        'status' => $this->faker->randomElement(['1', '0']),


        ];  
    }
}
