@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center mt-5">
        <div class="col-md-10 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-header">

                    <div class="row">
                        <div class="col-md-9">
                            <h3 class="card-title">Companies Table</h3>
                        </div>
                        <div class="col-md-3 text-right">
                            <a href="{{route('company.create')}}" role="button" class="btn btn-success pull-right" > Add New <i class="fas fa-building"></i></a>
                        </div>
                    </div>

                </div>
                <div class="card-body">
                    <div class="table-responsive-lg">

                            <table class="table">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Website</th>
                                    <th scope="col">Logo</th>
                                    <th scope="col">Modify</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($companies as $company)
                                    <tr>
                                        <td>{{$company->id}}</td>
                                        <td>{{$company->name}}</td>
                                        <td>{{$company->email}}</td>
                                        <td>{{$company->website}}</td>
                                        <td>
                                            <div class="">
                                                <img src="{{asset('storage/'.$company->logo)}}" class="img-fluid img-thumbnail table-images" alt="Company logo">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <a href="{{route('company.edit',$company->id)}}" role="button"  class="btn-outline-primary btn mr-1"> <i class="fas fa-edit "></i></a>

                                                {!! Form::open(['action' => ['CompanyController@destroy',$company->id] ,'method' => 'POST' ])  !!}
                                                {!! Form::hidden('_method','DELETE') !!}
                                                {!! Form::submit('Delete',['class' => 'btn-outline-danger btn']) !!}
                                                {!! Form::close() !!}
                                            </div>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            {{$companies->links()}}




            </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
