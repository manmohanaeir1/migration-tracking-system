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
            <canvas id="employeeChart" width="400" height="400"></canvas>
            </div>
        </div>
    </div>
</div>
@endsection

 <script>
    document.addEventListener('DOMContentLoaded', function () {
        var ctx = document.getElementById('employeeChart').getContext('2d');
        var employeeChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Active Employees', 'Inactive Employees'],
                datasets: [{
                    label: 'Employees',
                    data: [{{ $totalActiveEmployees }}, {{ $totalInactiveEmployees }}],
                    backgroundColor: ['#36a2eb', '#ff6384'],
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        // boldtitle 
                        display: true,
                        text: 'Employee Status',
                        font: {
                            size: 20
                        }
                                                  

                         
                    }
                }
            }
        });
    });
</script>
 
 