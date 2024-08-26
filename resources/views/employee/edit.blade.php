{{Form::model($employee, array('route' => array('employee.update', $employee->id), 'method' => 'PUT')) }}
<div class="modal-body">
    <div class="row">
        {{-- make for all employee field --}}
        <div class="form-group col-md-6">
            {{ Form::label('registration_id', __('Registration/ID'), array('class'=>'form-label')) }}
            {{ Form::text('registration_id', null, array('class'=>'form-control', 'placeholder'=>__('Enter Registration/ID'))) }}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('foreign_employee_name', __('Foregin Employee Name'), array('class'=>'form-label')) }}
            {{ Form::text('foreign_employee_name', null, array('class'=>'form-control', 'placeholder'=>__('Enter Foregin Employee Name'))) }}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('address', __('Address(Toll)'), array('class'=>'form-label')) }}
            {{ Form::text('address', null, array('class'=>'form-control', 'placeholder'=>__('Enter Address(Toll)'))) }}    
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('age', __('Age'), array('class'=>'form-label')) }}
            {{ Form::number('age', null, array('class'=>'form-control', 'placeholder'=>__('Enter Age'))) }}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('guardian_name', __('Guardian Name'), array('class'=>'form-label')) }}
            {{ Form::text('guardian_name', null, array('class'=>'form-control', 'placeholder'=>__('Enter Guardian Name'))) }}
        </div>  
        <div class="form-group col-md-6">
            {{ Form::label('guardian_contact', __('Guardian Contact'), array('class'=>'form-label')) }}
            {{ Form::text('guardian_contact', null, array('class'=>'form-control', 'placeholder'=>__('Enter Guardian Contact'))) }}
        </div>  
        <div class="form-group col-md-6">
            {{ Form::label('foreign_destination_country_city', __('Foregin Destination Country/City'), array('class'=>'form-label')) }}
            {{ Form::text('foreign_destination_country_city', null, array('class'=>'form-control', 'placeholder'=>__('Enter Foregin Destination Country/City'))) }}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('destination_country_contact', __('Destination Country Contact'), array('class'=>'form-label')) }}
            {{ Form::text('destination_country_contact', null, array('class'=>'form-control', 'placeholder'=>__('Enter Destination Country Contact'))) }}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('foreign_destination_job', __('Foregin Destination Job'), array('class'=>'form-label')) }}
            {{ Form::text('foreign_destination_job', null, array('class'=>'form-control', 'placeholder'=>__('Enter Foregin Destination Job'))) }}
        </div>

        <div class="form-group col-md-6">
            {{ Form::label('foreign_job_finding_agent_name', __('Foregin Job Finding Agent Name'), array('class'=>'form-label')) }}
            {{ Form::text('foreign_job_finding_agent_name', null, array('class'=>'form-control', 'placeholder'=>__('Enter Foregin Job Finding Agent Name'))) }}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('foreign_job_finding_agent_contact', __('Foregin Job Finding Agent Contact'), array('class'=>'form-label')) }}
            {{ Form::text('foreign_job_finding_agent_contact', null, array('class'=>'form-control', 'placeholder'=>__('Enter Foregin Job Finding Agent Contact'))) }}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('date_of_heading_towards_foreign', __('Date of Heading Towards Foregin'), array('class'=>'form-label')) }}
            {{ Form::date('date_of_heading_towards_foreign', null, array('class'=>'form-control')) }}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('duration_of_foreign_job', __('Duration of Foregin Job'), array('class'=>'form-label')) }}
            {{ Form::text('duration_of_foreign_job', null, array('class'=>'form-control', 'placeholder'=>__('Enter Duration of Foregin Job'))) }}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('bank_account', __('Bank Account'), array('class'=>'form-label')) }}
            {{ Form::text('bank_account', null, array('class'=>'form-control', 'placeholder'=>__('Enter Bank Account'))) }}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('skills', __('Skills'), array('class'=>'form-label')) }}
            {{ Form::text('skills', null, array('class'=>'form-control', 'placeholder'=>__('Enter Skills'))) }}
        </div>
       
        <div class="form-group col-md-6">
            {{ Form::label('return_date', __('Return Date'), array('class'=>'form-label')) }}
            {{ Form::date('return_date', null, array('class'=>'form-control')) }}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('remarks', __('Remarks'), array('class'=>'form-label')) }}
            {{ Form::textarea('remarks', null, array('class'=>'form-control', 'rows'=>3, 'placeholder'=>__('Enter Remarks'))) }}
        </div>
        
         <div class="form-group col-md-6">
            {{ Form::label('status', __('Status'), array('class'=>'form-label')) }}
            {{ Form::select('status', ['1' => 'Active', '0' => 'Inactive'], null, array('class'=>'form-control')) }}
        </div>




    </div>

</div>
<div class="modal-footer">
    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">{{__('Close')}}</button>
    {{Form::submit(__('Update'),array('class'=>'btn btn-primary btn-rounded'))}}
</div>
{{ Form::close() }}


