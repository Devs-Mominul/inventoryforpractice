@extends('layouts.admin')
@section('content')
<div class="col-lg-12" style=' overflow-x: scroll;'>
    <div class="card">
        <div class="card-header"><h4>All Employer List</h4></div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>name</th>
                    <th>email</th>
                    <th>phone</th>
                    {{--  <th>address</th>
                    <th>experience</th>  --}}
                    <th>photo</th>
                    <th>salary</th>
                    <th>vacation</th>
                    <th>city</th>
                    <th>action</th>
                </tr>
                @foreach ($all_employer as $employer)
                <tr>
                    <td>{{ $employer->name }}</td>
                    <td>{{ $employer->email }}</td>
                    <td>{{ $employer->phone }}</td>
                    {{--  <td>{{ $employer->address }}</td>
                    <td>{{ $employer->experience }}</td>  --}}
                    <td>
                        @if($employer->photo=='')
                        <span class="text-danger">NA</span>
                        @else
                        <img style="width: 40px;height:40px; border-radius:50%;" src="{{ asset('upload/employer/') }}/{{  $employer->photo }}" alt="">


                        @endif
                </td>
                    <td>{{ $employer->salary }}</td>
                    <td>{{ $employer->vacation }}</td>
                    <td>{{ $employer->city }}</td>

                    <td>
                      <div class="d-flex">
                        <a href="{{ route('all.employer.update',$employer->id) }}" class="btn btn-info">Update</a>
                        &NonBreakingSpace;
                        <a href="{{ route('all.employer.delete',$employer->id) }}" class="btn btn-danger">Delete</a>
                        &NonBreakingSpace;
                        <a href="{{ route('all.employer.view',$employer->id) }}" class="btn btn-info">View</a>
                      </div>
                    </td>
                </tr>


                @endforeach
            </table>
        </div>
    </div>
</div>


@endsection
@push('js')
<script src="sweetalert2.all.min.js"></script>
@if(session('delete'))
<script>
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire({
            title: "Deleted!",
            text: "{{ session('delete') }}.",
            icon: "success"
          });
        }
      });

</script>


@endif


@endpush
