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
                    <th>address</th>
                    <th>Shop_name</th>
                    <th>photo</th>
                    <th>account holder</th>
                    <th>account number</th>
                    <th>bank name</th>
                    <th>bank branch</th>
                    <th>city</th>
                    <th>action</th>
                </tr>
                @foreach ($all_customer as $customer)
                <tr>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->phone }}</td>
                    <td>{{ $customer->address }}</td>
                    <td>{{ $customer->shop_name }}</td>
                    <td>
                        @if($customer->photo=='')
                        <span class="text-danger">NA</span>
                        @else
                        <img style="width: 40px;height:40px; border-radius:50%;" src="{{ asset('upload/customer/') }}/{{  $customer->photo }}" alt="">


                        @endif
                </td>
                    <td>{{ $customer->account_holder }}</td>
                    <td>{{ $customer->account_number }}</td>
                    <td>{{ $customer->bank_name }}</td>
                    <td>{{ $customer->bank_branch }}</td>
                    <td>{{ $customer->city }}</td>

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
