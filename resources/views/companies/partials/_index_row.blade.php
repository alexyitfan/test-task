<tr>
    <td>{{ $company->name }}</td>
    <td>{{ $company->address }}</td>
    <td>{{ $company->phone }}</td>
    <td><a href="{{ route('companies.edit', ['id' => $company->id]) }}" class="btn btn-sm btn-default">edit</a></td>
    <td>
        {{ Form::open(['route' => ['companies.destroy', $company], 'method' => 'delete']) }}
            {!! Form::submit('delete', ['class' => 'btn btn-sm btn-default']) !!}
        {{ Form::close() }}
    </td>
</tr>