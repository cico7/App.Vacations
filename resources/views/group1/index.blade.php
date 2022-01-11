@extends('app')

@section('content')

<table  class="table table-dark table-hover">
    <tr>
        <th>    id                      </th>
        <th>    group_name              </th>
        <th>    can_approve_request     </th>
        <th>    can_enter_request       </th>
        <th>    can_add_free_days       </th>
        <th>    can_add_new_user        </th>
        <th>    can_change_group_rights </th>
        <th>    group_description       </th>
        <th>    Actions                 </th>

    </tr>
    @foreach($group1 as $gr)
    <tr>
        <td style=" padding: 12px 15px; border:1px solid black;">{{ $gr -> id                            }}</td>
        <td style=" padding: 12px 15px; border:1px solid black;">{{ $gr -> group_name                    }}</td>
        <td style=" padding: 12px 15px; border:1px solid black;">{{ $gr -> can_approve_request           }}</td>
        <td style=" padding: 12px 15px; border:1px solid black;">{{ $gr -> can_enter_request             }}</td>
        <td style=" padding: 12px 15px; border:1px solid black;">{{ $gr -> can_add_free_days             }}</td>
        <td style=" padding: 12px 15px; border:1px solid black;">{{ $gr -> can_add_new_user              }}</td>
        <td style=" padding: 12px 15px; border:1px solid black;">{{ $gr -> can_change_group_rights       }}</td>
        <td style=" padding: 12px 15px; border:1px solid black;">{{ $gr -> group_description             }}</td>
        <td>
            <a class="btn btn-outline-primary" href="javascript:alert('Nije jos implementirano!')">Edit</a>
            <a class="btn btn-outline-danger" href="{{route('group1.destroy', ['group1' =>$gr->id])}}">Delele</a>
        </td>
    </tr>       
    @endforeach
</table>

@endsection

