@extends('app')

@section('content')

<table class="table table-dark table-hover"  style="border:1px solid black;
        margin: 25px 0;
        font-size: 0.9em;
        font-family: sans-serif;
        min-width: 400px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);">
    <tr style="background-color: #009879;
        color: #ffffff;
        text-align: left;
        font-weight: bold;
        border:1px solid black;">
        <th>employee_id                 </th>
        <th>department_id               </th>
        <th>employee_hire_date          </th>
        <th>employee_termination_date   </th>
    </tr>
    @foreach($employment as $employ)
    <tr>
        <td style=" padding: 12px 15px; border:1px solid black;">{{ $employ -> employee_id                 }}</td>
        <td style=" padding: 12px 15px; border:1px solid black;">{{ $employ -> department_id               }}</td>
        <td style=" padding: 12px 15px; border:1px solid black;">{{ $employ -> employee_hire_date          }}</td>
        <td style=" padding: 12px 15px; border:1px solid black;">{{ $employ -> employee_termination_date   }}</td>
    </tr>       
    @endforeach
</table>

@endsection

