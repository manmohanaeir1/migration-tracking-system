<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
                 
            $table->string('registration_id');
            $table->string('foreign_employee_name');
            $table->string('address');
            $table->string('age');
            $table->string('guardian_name');
            $table->string('guardian_contact');
            $table->string('foreign_destination_country_city');
            $table->string('destination_country_contact');
            $table->string('foreign_destination_job');
            $table->string('foreign_job_finding_agent_name');
            $table->string('foreign_job_finding_agent_contact');
            $table->string('date_of_heading_towards_foreign');
            $table->string('duration_of_foreign_job');
            $table->string('bank_account');
            $table->string('skills');
            $table->string('return_date');
            $table->string('remarks');
            $table->string('status')->default(1);
             $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
