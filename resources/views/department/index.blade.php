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
        <th>User ID</th>
        <th>Department name</th>
        <th>Description</th>
    </tr>
    @foreach($department as $dep)
    <tr>
        <td style=" padding: 12px 15px; border:1px solid black;">{{ $dep -> user_id }}</td>
        <td style=" padding: 12px 15px; border:1px solid black;">{{ $dep -> department_name }}</td>
        <td style=" padding: 12px 15px; border:1px solid black;">{{ $dep -> department_desription }}</td>
    </tr>       
    @endforeach
</table>

@endsection

