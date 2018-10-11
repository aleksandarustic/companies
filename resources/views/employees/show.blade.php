@extends('layouts.master')


@section('breadcrumps')
     <div class="breadcrumb bg-transparent">
        <a class="breadcrumb-item" href="{{route('dashboard')}}">Dashboard</a>
        <a class="breadcrumb-item" href="{{route('employee.index')}}">Employees</a>
        <span class="breadcrumb-item active">{{$employee->firstname}} {{$employee->lastname}}</span>
    </div>
@endsection


@section('content')


<div class="row justify-content-center">
    <div class="col-md-6 col-sm-12 col-xs-12">

        <div class="card">
            <h5 class="card-header">{{$employee->firstname}} {{$employee->lastname}}</h5>
        
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Id: </strong>{{$employee->id}}</li>
                <li class="list-group-item"><strong>Email: </strong>{{$employee->email}}</li>
                <li class="list-group-item"><strong>Phone: </strong>{{$employee->phone}}</li>
                <li class="list-group-item"><strong>Company: </strong>{{$employee->employee_company->name}}</li>
                <li class="list-group-item"><strong>Created At: </strong>{{$employee->created_at}}</li>
            </ul>
            <div class="card-body">
                <div class="row text-center">
                    <div class="col-md-4">
                        <a href="{{route('employee.edit',$employee->id)}}" role="button" class="btn btn-primary">Edit</a>
                    </div>
                    <div class="col-md-4 offset-md-4">
                        {!! Form::open(['action' => ['EmployeeController@destroy',$employee->id] ,'method' => 'POST' ])
                        !!}
                        {!! Form::hidden('_method','DELETE') !!}
                        {!! Form::submit('Delete',['class' => 'btn-danger btn']) !!}
                        {!! Form::close() !!} </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection