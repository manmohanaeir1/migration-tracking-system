@extends('layouts.app')
@section('page-title')
    {{__('Dashboard')}}
@endsection
@section('breadcrumb')
    <ul class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="{{route('dashboard')}}"> <h1>{{__('Dashboard')}}</h1></a>
        </li>

    </ul>
@endsection
 
@section('content')
    <div class="row">
        <div class="col-xxl-3 col-sm-6 cdx-xxl-50">
            <div class="card sale-revenue">
                <div class="card-header">
                    <h4>{{__('Total  ')}}</h4>
                </div>
                <div class="card-body progressCounter">
                    <i data-feather="user"></i> <!-- Man icon -->
                    <h2>{{$result['totalEmployee']}}</h2>
                </div>
            </div>
        </div>

        <div class="col-xxl-3 col-sm-6 cdx-xxl-50">
            <div class="card sale-revenue">
                <div class="card-header">
                    <h4>{{__('Active  ')}}</h4>
                </div>
                <div class="card-body progressCounter">
                    <i data-feather="user"></i> <!-- Man icon -->
                    <h2>{{$result['activeEmployee']}}</h2>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-sm-6 cdx-xxl-50">
            <div class="card sale-revenue">
                <div class="card-header">
                    <h4>{{__('Inactive  ')}}</h4>
                </div>
                <div class="card-body progressCounter">
                    <i data-feather="user"></i> <!-- Man icon -->
                    <h2>{{$result['inactiveEmployee']}}</h2>
                </div>
            </div>
        </div>
        

 
    </div>
@endsection
