<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable=[
        
 
        'registration_id',
        'foreign_employee_name',
        'address',
        'age',
        'guardian_name',
        'guardian_contact',
        'foreign_destination_country_city',
        'destination_country_contact',
        'foreign_destination_job',
        'foreign_job_finding_agent_name',
        'foreign_job_finding_agent_contact',
        'date_of_heading_towards_foreign',
        'duration_of_foreign_job',
        'bank_account', 
        'skills',
        'return_date',
        'remarks',
        'status',

    ];
}
