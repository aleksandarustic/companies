@extends('layouts.master')

@section('breadcrumps')
     <div class="breadcrumb bg-transparent">
        <a class="breadcrumb-item" href="{{route('dashboard')}}">Dashboard</a>
        <a class="breadcrumb-item" href="{{route('company.index')}}">Companies</a>
        <span class="breadcrumb-item active">Edit {{$company->name}}</span>
    </div>
@endsection

@section('content')
        <div class="row justify-content-center mt-2">
            <div class="col-md-6 col-sm-10 col-xs-12">
                <div class="card">
                    <div class="card-header">

                        <div class="row">
                            <div class="col-md-9">
                                <h3 class="card-title">Edit Company</h3>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                {!! Form::open(['action' => ['CompanyController@update',$company->id],'method' => 'post','enctype' => 'multipart/form-data']) !!}
                                {{Form::hidden('_method','PUT')}}
                                <div class="form-group">
                                    {{Form::label('name','Name')}}
                                    {{Form::text('name',$company->name,['class'=> !$errors->first('name') ? 'form-control' : 'form-control is-invalid' ,'placeholder' => 'Company name' ,'id' => 'name'])}}
                                    @if ($errors->has('name'))
                                        <div class="error">{{ $errors->first('name') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    {{Form::label('email','Email address')}}
                                    {{Form::email('email',$company->email,['class'=> !$errors->first('email') ? 'form-control' : 'form-control is-invalid','placeholder' => 'Email'])}}
                                    @if ($errors->has('email'))
                                        <div class="error">{{ $errors->first('email') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    {{Form::label('website','Website')}}
                                    {{Form::text('website',$company->website,['class'=> !$errors->first('website') ? 'form-control' : 'form-control is-invalid','placeholder' => 'Website'])}}
                                    @if ($errors->has('website'))
                                        <div class="error">{{ $errors->first('website') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    {{Form::file('logo')}}
                                    @if ($errors->has('logo'))
                                        <div class="error">{{ $errors->first('logo') }}</div>
                                    @endif
                                </div>
                                {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
                                {!! Form::close() !!}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection
