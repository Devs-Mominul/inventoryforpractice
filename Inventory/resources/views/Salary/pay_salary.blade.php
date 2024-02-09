@extends('layouts.admin')
@section('content')
<div class="col-lg-12" style=' overflow-x: scroll;'>
    <div class="card">
        <div class="card-header"><h4>All Employer List</h4></div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>name</th>

                    <th>photo</th>
                    <th>salary</th>
                    <th>month</th>
                    <th>advanced</th>
                    <th>action</th>
                </tr>
                @foreach ($pay_salary as $salary)
                <tr>
                    <td>{{ $salary->rel_to_emp->name }}</td>

                    <td>
                        @if($salary->rel_to_emp->photo=='')
                        <span class="text-danger">NA</span>
                        @else
                        <img style="width: 40px;height:40px; border-radius:50%;" src="{{ asset('upload/employer/') }}/{{  $salary->rel_to_emp->photo }}" alt="">


                        @endif
                </td>
                    <td>{{ $salary->rel_to_emp->salary }}</td>
                    <td>{{ $salary->month }}</td>
                    <td>{{ $salary->advanced_salary }}</td>

                    <td>
                      <div class="d-flex">
                        <a href="" class="btn btn-info">Update</a>
                        &NonBreakingSpace;
                        <a href="" class="btn btn-danger">Delete</a>
                        &NonBreakingSpace;
                        <a href="" class="btn btn-info">View</a>
                      </div>
                    </td>
                </tr>


                @endforeach
            </table>
        </div>
    </div>
</div>


@endsection
