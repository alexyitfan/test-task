@php
    $config = [
        'route' => ['employees.update', $employee->id],
        'method' => 'post',
        'files' => 'true'
    ];

    if ($employee->id) {
        $config['method'] = 'put';
    }
@endphp

{!! Form::model($employee, $config) !!}
<div class="form-group">
    {!! Form::label('first_name') !!}
    {!! Form::text('first_name', null, ['class' => 'form-control', 'required']) !!}
</div>
<div class="form-group">
    {!! Form::label('last_name') !!}
    {!! Form::text('last_name', null, ['class' => 'form-control', 'required']) !!}
</div>
<div class="form-group">
    {!! Form::label('email') !!}
    {!! Form::text('email', null, ['class' => 'form-control', 'required']) !!}
</div>
<div class="form-group">
    {!! Form::label('department1') !!}
    {!! Form::text('department1', null, ['class' => 'form-control', 'required']) !!}
</div>
<div class="form-group">
    {!! Form::label('department2') !!}
    {!! Form::text('department2', null, ['class' => 'form-control', 'required']) !!}
</div>
<div class="form-group">
    {!! Form::label('department3') !!}
    {!! Form::text('department3', null, ['class' => 'form-control', 'required']) !!}
</div>
<div class="form-group">
    {!! Form::label('group') !!}
    {!! Form::text('group', null, ['class' => 'form-control', 'required']) !!}
</div>
<div class="form-group">
    {!! Form::label('role') !!}
    {!! Form::text('role', null, ['class' => 'form-control', 'required']) !!}
</div>
<div class="form-group">
    {!! Form::label('company_id') !!}
    {!! Form::select('company_id', $companies, null, ['class' => 'form-control', 'required']) !!}
</div>
@include('shared._errors')
<hr>
{!! Form::submit(($employee->id ? 'update' : 'create'), ['class' => 'btn btn-sm btn-default']) !!}
{!! Form::close() !!}
