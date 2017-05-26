@php
    $config = [
        'route' => ['companies.update', $company->id],
        'method' => 'post',
        'files' => 'true'
    ];

    if ($company->id) {
        $config['method'] = 'put';
    }
@endphp

{!! Form::model($company, $config) !!}
<div class="form-group">
    {!! Form::label('name') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
</div>
<div class="form-group">
    {!! Form::label('address') !!}
    {!! Form::text('address', null, ['class' => 'form-control', 'required']) !!}
</div>
<div class="form-group">
    {!! Form::label('phone') !!}
    {!! Form::text('phone', null, ['class' => 'form-control', 'required']) !!}
</div>
@include('shared._errors')
<hr>
{!! Form::submit(($company->id ? 'update' : 'create'), ['class' => 'btn btn-sm btn-default']) !!}
{!! Form::close() !!}