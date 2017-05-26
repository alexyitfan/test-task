@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <ul>
                            <li><a href="{{ route('employees.index') }}">Employees List Page</a></li>
                            <li><a href="{{ route('companies.index') }}">Companies List Page</a></li>
                            <li><a href="{{ route('original-list.index') }}">Make Original List</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
