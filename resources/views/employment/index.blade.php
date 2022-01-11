@extends('app')

@section('content')

<table class="table table-dark table-hover">
    <tr>
        <th>    id                          </th>
        <th>    employee_id                 </th>
        <th>    department_id               </th>
        <th>    employee_hire_date          </th>
        <th>    employee_termination_date   </th>
        <th>    actions                     </th>
    </tr>
    @foreach($employment as $employ)
    <tr>
        <td style=" padding: 12px 15px; border:1px solid black;">{{ $employ -> id                 }}</td>
        <td style=" padding: 12px 15px; border:1px solid black;">{{ $employ -> employee_id                 }}</td>
        <td style=" padding: 12px 15px; border:1px solid black;">{{ $employ -> department_id               }}</td>
        <td style=" padding: 12px 15px; border:1px solid black;">{{ $employ -> employee_hire_date          }}</td>
        <td style=" padding: 12px 15px; border:1px solid black;">{{ $employ -> employee_termination_date   }}</td>
        <td>
            <a class="btn btn-outline-primary" href="javascript:alert('Nije jos implementirano!')">Edit</a>
            <a class="btn btn-outline-danger" href="{{route('employment.destroy', ['employment' =>$employ->id])}}">Delele</a>
        </td>
    </tr>       
    @endforeach
</table>

@endsection

