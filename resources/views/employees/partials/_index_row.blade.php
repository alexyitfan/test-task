<tr>
    <td>{{ $employee->first_name }}</td>
    <td>{{ $employee->last_name }}</td>
    <td>{{ $employee->email }}</td>
    <td>{{ $employee->department1 }}</td>
    <td>{{ $employee->department2 }}</td>
    <td>{{ $employee->department3 }}</td>
    <td>{{ $employee->group }}</td>
    <td>{{ $employee->role }}</td>
    <td>{{ $employee->company->name }}</td>
    <td><a href="{{ route('employees.edit', ['id' => $employee->id]) }}" class="btn btn-sm btn-default">edit</a></td>
    <td>
        {{ Form::open(['route' => ['employees.destroy', $employee], 'method' => 'delete']) }}
            {!! Form::submit('delete', ['class' => 'btn btn-sm btn-default']) !!}
        {{ Form::close() }}
    </td>
</tr>