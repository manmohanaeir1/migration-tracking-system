@extends('layouts.app')
@section('page-title')
    {{__('Jobs')}}
@endsection
@section('breadcrumb')
    <ul class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="{{route('dashboard')}}"><h1>{{__('Dashboard')}}</h1></a>
        </li>
        <li class="breadcrumb-item active">
            <a href="#">{{__('Jobs')}}</a>
        </li>
    </ul>
@endsection
@section('card-action-btn')
    @if(Gate::check('manage job') || \Auth::user()->type=='super admin')
        <a class="btn btn-primary btn-sm ml-20 customModal" href="#" data-size="md"
           data-url="{{ route('job.create') }}"
           data-title="{{__('Create Job')}}"> <i class="ti-plus mr-5"></i>{{__('Create Job')}}</a>
    @endif
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-items-center mb-0">
                            <thead>
                            <tr>
                                <th>{{__('Job Title')}}</th>
                                <th>{{__('Job Description')}}</th>
                                <th>{{__('Image')}}</th>
                                <th>{{__('Job Location')}}</th>
                                <th>{{__('Action')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($jobs as $job)
                                <tr>
                                    <td>{{ $job->job_title }}</td>
                                    <td>{{ $job->job_description }}</td>
                                    <td><img src="{{asset(Storage::url('uploads/job/'.$job->image))}}" class="img-fluid img-sm"></td>
                                    <td>{{ $job->job_location }}</td>
                                    <td>
                                        @if(Gate::check('edit job') || \Auth::user()->type=='super admin')
                                            <a href="#" class="edit-icon customModal" data-url="{{ route('job.edit',$job->id) }}" data-size="md" data-title="{{__('Edit Job')}}" title="{{__('Edit Job')}}"><i class="fas fa-pencil-alt"></i></a>
                                        @endif
                                        @if(Gate::check('delete job') || \Auth::user()->type=='super admin')
                                            <a href="#" class="delete-icon" data-url="{{ route('job.destroy',$job->id) }}" data-title="{{__('Delete Job')}}" data-toggle="tooltip" data-original-title="{{__('Delete')}}"><i class="fas fa-trash"></i></a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </div>
@endsection

