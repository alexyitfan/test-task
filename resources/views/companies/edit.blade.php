@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @include('companies.partials._form')
            </div>
        </div>
    </div>
@endsection
