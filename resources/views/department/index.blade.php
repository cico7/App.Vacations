@extends('app')

@section('content')

<table class="table table-dark table-hover">
    <tr>
        <th>id</th>
        <th>manager_id</th>
        <th>department_name</th>
        <th>description</th>
        <th>actions</th>
    </tr>
    @foreach($department as $dep)
    <tr>
        <td style=" padding: 12px 15px; border:1px solid black;">{{ $dep -> id }}</td>
        <td style=" padding: 12px 15px; border:1px solid black;">{{ $dep -> manager_id }}</td>
        <td style=" padding: 12px 15px; border:1px solid black;">{{ $dep -> department_name }}</td>
        <td style=" padding: 12px 15px; border:1px solid black;">{{ $dep -> department_desription }}</td>
        <td>
            <a class="btn btn-outline-primary" href="javascript:alert('Nije jos implementirano!')">Edit</a>
            <a class="btn btn-outline-danger" href="{{route('department.destroy', ['department' =>$dep->id])}}">Delete</a>
        </td>
    </tr>       
    @endforeach
</table>

@endsection

