<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        if (\Auth::user()->can('manage employee')) {
                $employees = Employee::all();
            return view('employee.index', compact('employees'));
        } else {
            return redirect()->back()->with('error', __('Permission denied.'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (\Auth::user()->can('create employee')) {
            return view('employee.create');
        } else {
            return redirect()->back()->with('error', __('Permission denied.'));
        }
    }   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            
            
           
        if (\Auth::user()->can('create employee')) {
            $validator = \Validator::make(
                $request->all(), [
                    'registration_id' => 'required',
                    'foreign_employee_name' => 'required',
                    'address' => 'required',
                    'age' => 'required',
                    'guardian_name' => 'required',
                    'guardian_contact' => 'required',
                    'foreign_destination_country_city' => 'required',
                    'destination_country_contact' => 'required',
                    'foreign_destination_job' => 'required',
                    'foreign_job_finding_agent_name' => 'required',
                    'foreign_job_finding_agent_contact' => 'required',
                    'date_of_heading_towards_foreign' => 'required',
                    'duration_of_foreign_job' => 'required',
                    'bank_account' => 'required',
                    'skills' => 'required',
                    'return_date' => 'required',
                    'remarks' => 'required',
                ]
            );
            if ($validator->fails()) {
                $messages = $validator->getMessageBag();
                return redirect()->back()->with('error', $messages->first());
            }

            $employee = new Employee();
            $employee->registration_id = $request->registration_id;
            $employee->foreign_employee_name = $request->foreign_employee_name;
            $employee->address = $request->address;
            $employee->age = $request->age;
            $employee->guardian_name = $request->guardian_name;
            $employee->guardian_contact = $request->guardian_contact;
            $employee->foreign_destination_country_city = $request->foreign_destination_country_city;
            $employee->destination_country_contact = $request->destination_country_contact;
            $employee->foreign_destination_job = $request->foreign_destination_job;
            $employee->foreign_job_finding_agent_name = $request->foreign_job_finding_agent_name;
            $employee->foreign_job_finding_agent_contact = $request->foreign_job_finding_agent_contact;
            $employee->date_of_heading_towards_foreign = $request->date_of_heading_towards_foreign;
            $employee->duration_of_foreign_job = $request->duration_of_foreign_job;
            $employee->bank_account = $request->bank_account;
            $employee->skills = $request->skills;
            $employee->return_date = $request->return_date;
            $employee->remarks = $request->remarks;
            $employee->status = $request->status;
            $employee->save();

            return redirect()->back()->with('success', __('Employee successfully created.'));
        } else {
            return redirect()->back()->with('error', __('Permission denied.'));
        }


    }       

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
         
        if (\Auth::user()->can('edit employee')) {
            return view('employee.edit', compact('employee'));
        } else {
            return redirect()->back()->with('error', __('Permission denied.'));
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        if (\Auth::user()->can('edit employee')) {
            $validator = \Validator::make(
                $request->all(), [
                    'registration_id' => 'required',
                    'foreign_employee_name' => 'required',
                    'address' => 'required',
                    'age' => 'required',
                    'guardian_name' => 'required',
                    'guardian_contact' => 'required',
                    'foreign_destination_country_city' => 'required',
                    'destination_country_contact' => 'required',
                    'foreign_destination_job' => 'required',
                    'foreign_job_finding_agent_name' => 'required',
                    'foreign_job_finding_agent_contact' => 'required',
                    'date_of_heading_towards_foreign' => 'required',
                    'duration_of_foreign_job' => 'required',
                    'bank_account' => 'required',
                    'skills' => 'required',
                    'return_date' => 'required',
                    'remarks' => 'required',
                ]
            );
            if ($validator->fails()) {
                $messages = $validator->getMessageBag();
                return redirect()->back()->with('error', $messages->first());
            }

            $employee->registration_id = $request->registration_id;
            $employee->foreign_employee_name = $request->foreign_employee_name;
            $employee->address = $request->address;
            $employee->age = $request->age;
            $employee->guardian_name = $request->guardian_name;
            $employee->guardian_contact = $request->guardian_contact;
            $employee->foreign_destination_country_city = $request->foreign_destination_country_city;
            $employee->destination_country_contact = $request->destination_country_contact;
            $employee->foreign_destination_job = $request->foreign_destination_job;
            $employee->foreign_job_finding_agent_name = $request->foreign_job_finding_agent_name;
            $employee->foreign_job_finding_agent_contact = $request->foreign_job_finding_agent_contact;
            $employee->date_of_heading_towards_foreign = $request->date_of_heading_towards_foreign;
            $employee->duration_of_foreign_job = $request->duration_of_foreign_job;
            $employee->bank_account = $request->bank_account;
            $employee->skills = $request->skills;
            $employee->return_date = $request->return_date;
            $employee->remarks = $request->remarks;
            $employee->status = $request->status;
            $employee->save();

            return redirect()->back()->with('success', __('Employee successfully updated.'));
        } else {
            return redirect()->back()->with('error', __('Permission denied.'));
        }
            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
