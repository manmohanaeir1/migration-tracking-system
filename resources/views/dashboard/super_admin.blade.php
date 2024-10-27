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
                    <h4>{{__('Total Foreign Employees')}}</h4>
                </div>
                <div class="card-body progressCounter">
                    <h2>{{$result['totalEmployee']}}</h2>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-sm-6 cdx-xxl-50">
            <div class="card sale-revenue">
                <div class="card-header">
                    <h4>..</h4>
                </div>
                <div class="card-body progressCounter">
                    <h2>..</h2>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-sm-6 cdx-xxl-50">
            <div class="card sale-revenue">
                <div class="card-header">
                    <h4>..</h4>
                </div>
                <div class="card-body progressCounter">
                    <h2>..</h2>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-sm-6 cdx-xxl-50">
            <div class="card sale-revenue">
                <div class="card-header">
                    <h4>..</h4>
                </div>
                <div class="card-body progressCounter">
                    <h2>{{subscriptionPaymentSettings()['CURRENCY_SYMBOL'].$result['totalActiveEmployee']}}</h2>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-sm-6 cdx-xxl-50">
            <div class="card sale-revenue">
                <div class="card-header">
                    <h4>..</h4>
                </div>
                <div class="card-body progressCounter">
                    <h2>..</h2>
                </div>
            </div>
        </div>

        <div class="col-xxl-3 col-sm-6 cdx-xxl-50">
            <div class="card sale-revenue">
                <div class="card-header">
                    <h4>..</h4>
                </div>
                <div class="card-body progressCounter">
                    <h2>..</h2>
                </div>
            </div>
        </div>



        {{-- <div class="col-xxl-12 cdx-xxl-50">
            <div class="card overall-revenuetbl">
                <div class="card-header">
                    <h4>{{__('Users By Month')}}</h4>
                </div>
                <div class="card-body">
                    <div id="organization_by_month"></div>
                </div>
            </div>
        </div>
        <div class="col-xxl-12 cdx-xxl-50">
            <div class="card overall-revenuetbl">
                <div class="card-header">
                    <h4>{{__('Payments By Month')}}</h4>
                </div>
                <div class="card-body">
                    <div id="payments_by_month"></div>
                </div>
            </div>
        </div> --}}
    </div>
@endsection
