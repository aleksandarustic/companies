@extends('layouts.master')


@section('breadcrumps')
     <div class="breadcrumb bg-transparent">
        <a class="breadcrumb-item" href="{{route('dashboard')}}">Dashboard</a>
        <a class="breadcrumb-item" href="{{route('company.index')}}">Companies</a>
        <span class="breadcrumb-item active">{{$company->name}}</span>
    </div>
@endsection


@section('content')


<div class="row justify-content-center mt-3">
    <div class="col-md-6 col-sm-12 col-xs-12">

        <div class="card">
            <h5 class="card-header">{{$company->name}}</h5>
            <img class="mx-auto d-block img-fluid rounded img-rounded p-4" style="max-height: 15rem" src="{{asset('storage/'.$company->logo)}}"
                alt="Card image cap">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Id: </strong>{{$company->id}}</li>
                <li class="list-group-item"><strong>Email: </strong>{{$company->email}}</li>
                <li class="list-group-item"><strong>Website: </strong>{{$company->website}}</li>
            </ul>
            <div class="card-body">
                <div class="row text-center">
                    <div class="col-md-4">
                        <a href="{{route('company.edit',$company->id)}}" role="button" class="btn btn-primary">Edit</a>
                    </div>
                    <div class="col-md-4 offset-md-4">
                        {!! Form::open(['action' => ['CompanyController@destroy',$company->id] ,'method' => 'POST' ])
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