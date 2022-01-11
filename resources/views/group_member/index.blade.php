@extends('app')

@section('content')

<table class="table table-dark table-hover">
    <tr>
        <th>    id          </th>
        <th>    user_id     </th>
        <th>    group_id    </th>
        <th>    user_id     </th>
    </tr>
    @foreach($group_member as $grm)
    <tr>
        <td style=" padding: 12px 15px; border:1px solid black;">{{ $grm -> id       }}</td>
        <td style=" padding: 12px 15px; border:1px solid black;">{{ $grm -> user_id  }}</td>
        <td style=" padding: 12px 15px; border:1px solid black;">{{ $grm -> group_id }}</td>
        <td>
            <a class="btn btn-outline-primary" href="javascript:alert('Nije jos implementirano!')">Edit</a>
            <a class="btn btn-outline-danger" href="{{route('group_member.destroy', ['group_member' =>$grm->id])}}">Delele</a>
        </td>
    </tr>       
    @endforeach
</table>

@endsection

