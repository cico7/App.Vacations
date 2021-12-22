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
        <th>employee_first_name     </th>
        <th>employee_last_name      </th>
        <th>oib                     </th>
        <th>job_name                </th>
        <th>employee_address        </th>
        <th>employee_email          </th>
        <th>phone_number            </th>
    </tr>
    @foreach($employee as $zap)
    <tr>
        <td style=" padding: 12px 15px; border:1px solid black;">{{ $zap -> employee_first_name       }}</td>
        <td style=" padding: 12px 15px; border:1px solid black;">{{ $zap -> employee_last_name        }}</td>
        <td style=" padding: 12px 15px; border:1px solid black;">{{ $zap -> oib                       }}</td>
        <td style=" padding: 12px 15px; border:1px solid black;">{{ $zap -> job_name                  }}</td>
        <td style=" padding: 12px 15px; border:1px solid black;">{{ $zap -> employee_address          }}</td>
        <td style=" padding: 12px 15px; border:1px solid black;">{{ $zap -> employee_email            }}</td>
        <td style=" padding: 12px 15px; border:1px solid black;">{{ $zap -> phone_number              }}</td>
    </tr>       
    @endforeach
</table>

@endsection

