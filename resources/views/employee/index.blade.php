@extends('app')

@section('content')

<table class="table table-dark table-hover">
    <tr>
        <th>    id                      </th>
        <th>    employee_first_name     </th>
        <th>    employee_last_name      </th>
        <th>    oib                     </th>
        <th>    job_name                </th>
        <th>    employee_address        </th>
        <th>    employee_email          </th>
        <th>    phone_number            </th>
        <th>    actions                  </th>
    </tr>
    @foreach($employee as $zap)
    <tr>
        <td style=" padding: 12px 15px; border:1px solid black;">{{ $zap -> id                        }}</td>
        <td style=" padding: 12px 15px; border:1px solid black;">{{ $zap -> employee_first_name       }}</td>
        <td style=" padding: 12px 15px; border:1px solid black;">{{ $zap -> employee_last_name        }}</td>
        <td style=" padding: 12px 15px; border:1px solid black;">{{ $zap -> oib                       }}</td>
        <td style=" padding: 12px 15px; border:1px solid black;">{{ $zap -> job_name                  }}</td>
        <td style=" padding: 12px 15px; border:1px solid black;">{{ $zap -> employee_address          }}</td>
        <td style=" padding: 12px 15px; border:1px solid black;">{{ $zap -> employee_email            }}</td>
        <td style=" padding: 12px 15px; border:1px solid black;">{{ $zap -> phone_number              }}</td>
        <td>
            <a class="btn btn-outline-primary" href="javascript:alert('Nije jos implementirano!')">Edit</a>
            <a class="btn btn-outline-danger" href="{{route('employee.destroy', ['employee' =>$zap->id])}}">Delele</a>
        </td>
    </tr>       
    @endforeach
</table>

@endsection

