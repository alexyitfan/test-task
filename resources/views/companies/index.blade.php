@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <a href="{{ route('companies.create') }}">Create New Company</a>
                <hr>
                @if(count($companies))
                    <table class="table table-condensed table-hover">
                        <thead>
                        <tr>
                            <th>company	name</th>
                            <th>address</th>
                            <th>tel</th>
                            <th colspan="2"></th>
                        </tr>
                        </thead>
                        <tbody>
                            @each('companies.partials._index_row', $companies, 'company')
                        </tbody>
                    </table>
                    {{ $companies->links() }}
                @else
                    @include('shared._alert', ['message' => 'Data not found', 'type' => 'warning'])
                @endif
            </div>
        </div>
    </div>
@endsection
