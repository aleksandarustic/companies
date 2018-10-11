@extends('layouts.master')

@section('breadcrumps')
     <div class="breadcrumb bg-transparent">
        <a class="breadcrumb-item" href="{{route('dashboard')}}">Dashboard</a>
        <span class="breadcrumb-item active">Employees</span>
    </div>
@endsection


@section('content')
    <div class="row justify-content-center">  

        <div class="col-md-10 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-header">

                    <div class="row">
                        <div class="col-md-9">
                            <h3 class="card-title">Employess Table</h3>
                        </div>
                        <div class="col-md-3 text-right">
                            <a href="{{route('employee.create')}}" role="button" class="btn btn-success pull-right" > Add New <i class="fas fa-user-plus"></i></a>
                        </div>
                    </div>

                </div>
                <div class="card-body">

                    @include('include.messages')

                    <div class="table-responsive-lg">

                            <table class="table">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Company</th>
                                    <th scope="col">Modify</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($employees as $employee)
                                    <tr>
                                        <td>{{$employee->id}}</td>
                                        <td>{{$employee->firstname}}</td>
                                        <td>{{$employee->lastname}}</td>
                                        <td>{{$employee->email}}</td>
                                        <td>{{$employee->phone}}</td>
                                        <td>{{$employee->employee_company->name}}</td>
                                        <td>
                                            <div class="row">
                                                <a href="{{route('employee.edit',$employee->id)}}" role="button"  class="btn-outline-primary btn mr-1"> <i class="fas fa-edit "></i></a>
                                                <a href="{{route('employee.show',$employee->id)}}" role="button"  class="btn-outline-primary btn mr-1"> <i class="fas fa-eye"></i></a>

                                                {!! Form::open(['action' => ['EmployeeController@destroy',$employee->id] ,'method' => 'POST' ])  !!}
                                                {!! Form::hidden('_method','DELETE') !!}
                                                {!! Form::submit('Delete',['class' => 'btn-outline-danger btn']) !!}
                                                {!! Form::close() !!}
                                            </div>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            {{$employees->links()}}




            </div>
            </div>
            </div>
        </div>
    </div>
@endsection
