@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>{{ __('Employee Details') }}</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>{{ __('Registration ID:') }}</th>
                        <td>{{ $employee->registration_id }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('Name:') }}</th>
                        <td>{{ $employee->foreign_employee_name }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('Address:') }}</th>
                        <td>{{ $employee->address }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('Age:') }}</th>
                        <td>{{ $employee->age }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('Guardian Name:') }}</th>
                        <td>{{ $employee->guardian_name }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('Guardian Contact:') }}</th>
                        <td>{{ $employee->guardian_contact }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('Destination Country/City:') }}</th>
                        <td>{{ $employee->foreign_destination_country_city }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('Destination Country Contact:') }}</th>
                        <td>{{ $employee->destination_country_contact }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('Destination Job:') }}</th>
                        <td>{{ $employee->foreign_destination_job }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('Job Finding Agent Name:') }}</th>
                        <td>{{ $employee->foreign_job_finding_agent_name }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('Job Finding Agent Contact:') }}</th>
                        <td>{{ $employee->foreign_job_finding_agent_contact }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('Date of Heading Towards Foreign:') }}</th>
                        <td>{{ $employee->date_of_heading_towards_foreign }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('Duration of Foreign Job:') }}</th>
                        <td>{{ $employee->duration_of_foreign_job }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('Bank Account:') }}</th>
                        <td>{{ $employee->bank_account }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('Skills:') }}</th>
                        <td>{{ $employee->skills }}</td>
                    </tr>
                    <tr>
                        <th>{{ __('Return Date:') }}</th>
                        <td>{{ $employee->return_date }}</td>
                    </tr>
                   
                        <th>{{ __('Remarks:') }}</th>
                        <td>{{ $employee->remarks }}</td>
                    </tr>
                    <tr>
                        <tr class="table-warning">
                        <th>{{ __('Status:') }}</th>
                        <td>{{ $employee->status == 1 ? 'Active' : 'Inactive' }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
  
<a href="{{ route('employee.index') }}" class="btn btn-primary">Back</a>
@endsection