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
                            <th>{{__('ID')}}</th>
                            <th>{{__('Zone')}}</th>
                            <th>{{__('Type')}}</th>
                            <th>{{__('Slot')}}</th>
                            <th>{{__('Vehicle No')}}</th>
                            <th>{{__('Entry')}}</th>
                            <th>{{__('Exit')}}</th>
                            <th>{{__('Payment Status')}}</th>
                            <th>{{__('Status')}}</th>
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

