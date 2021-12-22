@extends('app')

@section('content')

<table  class="table table-dark table-hover"  style="border:1px solid black;
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
        <th>group_name              </th>
        <th>can_approve_request     </th>
        <th>can_enter_request       </th>
        <th>can_add_free_days       </th>
        <th>can_add_new_user        </th>
        <th>can_change_group_rights </th>
        <th>group_description       </th>
    </tr>
    @foreach($group1 as $gr)
    <tr>
        <td style=" padding: 12px 15px; border:1px solid black;">{{ $gr -> group_name                    }}</td>
        <td style=" padding: 12px 15px; border:1px solid black;">{{ $gr -> can_approve_request           }}</td>
        <td style=" padding: 12px 15px; border:1px solid black;">{{ $gr -> can_enter_request             }}</td>
        <td style=" padding: 12px 15px; border:1px solid black;">{{ $gr -> can_add_free_days             }}</td>
        <td style=" padding: 12px 15px; border:1px solid black;">{{ $gr -> can_add_new_user              }}</td>
        <td style=" padding: 12px 15px; border:1px solid black;">{{ $gr -> can_change_group_rights       }}</td>
        <td style=" padding: 12px 15px; border:1px solid black;">{{ $gr -> group_description             }}</td>
    </tr>       
    @endforeach
</table>

@endsection

