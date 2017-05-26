<tr>
    <td>{{ $employee->first_name }} {{ $employee->last_name }}</td>
    <td>{{ $employee->email }}</td>
    <td>{{ $employee->company->name }}</td>
    <td>{{ $employee->company->phone }}</td>
</tr>