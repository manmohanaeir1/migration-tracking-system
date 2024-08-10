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
           data-title="{{__('Create Employee')}}"> <i class="ti-plus mr-5"></i>{{__('Register Employee')}}</a>
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

                            




                            <th>{{__('Foregin Destination Job  ')}}</th>
                            @if(Gate::check('edit employee') ||  Gate::check('delete employee') ||  Gate::check('show employee'))
                                <th class="text-right">{{__('Action')}}</th>
                            @endif
                        </tr>
                        </thead>
                        <tbody>
                       
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

