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
        text-align: center;
        font-weight: bold;
        border:1px solid black;">
        <th>user_log_in</th>
        <th>user_name</th>
    </tr>
    @foreach($user as $usr)
    <tr>
        <td style=" padding: 12px 15px; border:1px solid black;">{{ $usr -> user_log_in }}</td>
        <td style=" padding: 12px 15px; border:1px solid black;">{{ $usr -> user_name }}</td>
    </tr>       
    @endforeach
</table>

@endsection

