@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @if(count($employees))
                    <table class="table table-condensed table-hover">
                        <thead>
                        <tr>
                            <th>user name</th>
                            <th>user email</th>
                            <th>company name</th>
                            <th>company tel</th>
                        </tr>
                        </thead>
                        <tbody>
                            @each('original-list.partials._index_row', $employees, 'employee')
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
