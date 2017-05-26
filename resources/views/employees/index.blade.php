@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <a href="{{ route('employees.create') }}">Create New Employee</a>
                <hr>
                @if(count($employees))
                    <table class="table table-condensed table-hover">
                        <thead>
                        <tr>
                            <th>first name</th>
                            <th>last name</th>
                            <th>email</th>
                            <th>department 1</th>
                            <th>department 2</th>
                            <th>department 3</th>
                            <th>group</th>
                            <th>role</th>
                            <th>company</th>
                            <th colspan="2"></th>
                        </tr>
                        </thead>
                        <tbody>
                            @each('employees.partials._index_row', $employees, 'employee')
                        </tbody>
                    </table>
                    {{ $employees->links() }}
                @else
                    @include('shared._alert', ['message' => 'Data not found', 'type' => 'warning'])
                @endif
            </div>
        </div>
    </div>
@endsection
