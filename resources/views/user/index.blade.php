@extends('app')

@section('content')

<table class="table table-dark table-hover">
    <tr>
        <th>    id          </th>
        <th>    user_log_in </th>
        <th>    user_name   </th>
        <th>    actions   </th>
    </tr>
    @foreach($user as $usr)
    <tr>
        <td style=" padding: 12px 15px; border:1px solid black;">{{ $usr -> id }}</td>
        <td style=" padding: 12px 15px; border:1px solid black;">{{ $usr -> user_log_in }}</td>
        <td style=" padding: 12px 15px; border:1px solid black;">{{ $usr -> user_name }}</td>
        <td>
            <a class="btn btn-outline-primary" href="javascript:alert('Nije jos implementirano!')">Edit</a>
            <a class="btn btn-outline-danger" href="{{route('user.destroy', ['user' =>$usr->id])}}">Delele</a>
        </td>
    </tr>       
    @endforeach
</table>

@endsection

