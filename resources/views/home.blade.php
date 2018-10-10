@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <a href="{{ route('company.index') }}" role="button" class="btn btn-primary">
                                Companies
                            </a>
                        </div>
                        <div class="col-md-6 text-center">
                            <a href="{{ route('empoloyee.index') }}" role="button" class="btn btn-primary">
                                Empleyees
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
