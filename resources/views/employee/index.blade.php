@extends('layouts.app')
@section('page-title')
    {{__('Employee')}}
@endsection
@section('breadcrumb')
    <ul class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="{{route('dashboard')}}"><h1>{{__('Dashboard')}}</h1></a>
        </li>
        <li class="breadcrumb-item active">
            <a href="#">{{__('Employee')}}</a>
        </li>
    </ul>
@endsection
@section('card-action-btn')
    @if(Gate::check('create employee'))
        <a class="btn btn-primary btn-sm ml-20 customModal" href="#" data-size="xl"
           data-url="{{ route('employee.create') }}"
           data-title="{{__('create employee')}}">
            <i class="ti-plus mr-5"></i>{{__('create employee')}}</a>
    @endif
@endsection
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="display dataTable cell-border datatbl-advance">
                        <thead>
                        <tr>
                            <th>{{__('Registration/ID')}}</th>
                            <th>{{__('Foregin Employee Name')}}</th>
                            <th>{{__('Address(Toll))')}}</th>
                            <th>{{__('Age')}}</th>
                            <th>{{__('Guardian Name')}}</th>
                            <th>{{__('Guardian Contact')}}</th>
                            <th>{{__('Foregin Destination Country/City')}}</th>
                            <th>{{__('Destination Country Contact')}}</th>
                            <th>{{__('Foregin Destination Job')}}</th>
                            <th>{{__('Foregin Job Finding Agent Name')}}</th>
                            <th>{{__('Foregin Job Finding Agent Contact')}}</th>
                            <th>{{__('Date of Heading Towards Foregin')}}</th>
                            <th>{{__('Duration of Foregin Job')}}</th>
                            <th>{{__('Bank Account')}}</th>
                            <th>{{__('Skills')}}</th>
                            <th>{{__('Return Date')}}</th>
                            <th>{{__('Remarks')}}</th>
                            <th>{{__('Status')}}</th>


                            
                            @if(Gate::check('edit employee') ||  Gate::check('delete employee') ||  Gate::check('show employee'))
                                <th class="text-right">{{__('Action')}}</th>
                            @endif
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($employees as $employee)
                            <tr>
                                <td>{{$employee->registration_id}}</td>
                                <td>{{$employee->foreign_employee_name}}</td>
                                <td>{{$employee->address}}</td>
                                <td>{{$employee->age}}</td>
                                <td>{{$employee->guardian_name}}</td>
                                <td>{{$employee->guardian_contact}}</td>
                                <td>{{$employee->foreign_destination_country_city}}</td>
                                <td>{{$employee->destination_country_contact}}</td>
                                <td>{{$employee->foreign_destination_job}}</td>
                                <td>{{$employee->foreign_job_finding_agent_name}}</td>
                                <td>{{$employee->foreign_job_finding_agent_contact}}</td>
                                <td>{{$employee->date_of_heading_towards_foreign}}</td>
                                <td>{{$employee->duration_of_foreign_job}}</td>
                                <td>{{$employee->bank_account}}</td>
                                <td>{{$employee->skills}}</td>
                                <td>{{$employee->return_date}}</td>
                                <td>{{$employee->remarks}}</td>
                                <td>

                                    
                                    @if($employee->status == 1)
                                        <span class="badge badge-success">{{__('Active')}}</span>
                                    @else
                                        <span class="badge badge-danger">{{__('Inactive')}}</span>  
                                    @endif
                                </td>

 

                                @if(Gate::check('edit employee') ||  Gate::check('delete employee') ||  Gate::check('show employee'))
                                        <td>
                                            <div class="cart-action">
                                                {!! Form::open(['method' => 'DELETE', 'route' => ['employee.destroy', $employee->id]]) !!}
                                                @if(Gate::check('show employee'))
                                                    <a href="{{ route('employee.show',$employee->id) }}" class="action-item"
                                                       data-toggle="tooltip" data-original-title="{{__('Show')}}">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                @endif

                   
                                                @if(Gate::check('edit employee') || \Auth::user()->type=='super admin')
                                                <a class="text-success customModal" data-bs-toggle="tooltip"
                                                   data-bs-original-title="{{__('Edit')}}" href="#"
                                                   data-url="{{ route('employee.edit',$employee->id) }}"
                                                   data-title="{{__('Edit Employee')}}"> <i data-feather="edit"></i></a>
                                            @endcan
                                            

                                            @if(Gate::check('delete employee') || \Auth::user()->type=='super admin')
                                                <a class=" text-danger confirm_dialog" data-bs-toggle="tooltip"
                                                   data-bs-original-title="{{__('Detete')}}" href="#"> <i
                                                        data-feather="trash-2"></i></a>
                                            @endcan
                                                {!! Form::close() !!}
                                            </div>
                                        </td>
                                     
                                @endif
                            </tr>
                        @endforeach
                        
                       
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

