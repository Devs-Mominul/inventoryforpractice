@extends('layouts.admin')
@section('content')
<div class="col-lg-10">
    <div class="card">
        <div class="card-header"><h4>Attendance</h4></div>
        <div class="card-body">
            <form action="{{ route('attendance.store') }}" method="post">
                @csrf
            <table class="table table-bordered">

                    <tr>
                        <th>Name</th>
                        <th>Photo</th>
                        <th>Attendance</th>
                    </tr>




                    @foreach ($employees as $emp)
                    <tr>
                        <td>{{ $emp->name }}</td>
                        <td>
                            <img src="{{ asset('upload/employer/') }}/{{ $emp->photo }}" width="60px" alt="">
                        </td>
                        <input type="hidden" name="user_id[]" value="{{ $emp->id }}">
                        <input type="hidden" name="att_date" value="{{ date("d/m/y") }}">
                        <input type="hidden" name="att_year" value="{{ date("Y") }}">
                        <td>
                            <input type="radio"  name="attendance[{{ $emp->id }}]" id="" value="Present">present

                            <input type="radio" name="attendance[{{ $emp->id }}]" id="" value="Absent">Absent
                        </td>
                    </tr>


                    @endforeach






            </table>
            <div class="mb-3">
                <button type="submit" class="btn btn-info">Submit</button>
            </div>
        </form>
        </div>
    </div>
</div>

@endsection

