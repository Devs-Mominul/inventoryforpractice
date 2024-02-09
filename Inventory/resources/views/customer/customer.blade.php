@extends('layouts.admin')
@section('content')
<div class="mx-auto col-lg-6">
    <div class="card">
        <div class="card-header">Customer Add</div>
        <div class="card-body">
            @if(session('employer_add'))
            <div class="alert alert-info">{{ session('employer_add') }}</div>

            @endif
            <form action="{{ route('customer.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="current_password">Name</label>
                    <input type="text" name="name" id="current_password" class="form-control">
                    @error('name')
                    <span class="text-danger"> {{ $message }}</span>

                    @enderror
                </div>

                <div class="mb-3">
                    <label for="current_password">Email</label>
                    <input type="email" name="email" id="current_password" class="form-control">
                    @error('email')
                    <span class="text-danger"> {{ $message }}</span>

                    @enderror
                </div>
                <div class="mb-3">
                    <label for="current_password">Phone</label>
                    <input type="text" name="phone" id="current_password" class="form-control">
                    @error('phone')
                    <span class="text-danger"> {{ $message }}</span>

                    @enderror
                </div>
                <div class="mb-3">
                    <label for="current_password">Address</label>
                    <input type="text" name="address" id="current_password" class="form-control">
                    @error('address')
                    <span class="text-danger"> {{ $message }}</span>

                    @enderror
                </div>
                <div class="mb-3">
                    <label for="current_password">Shop Name</label>
                    <input type="text" name="shop_name" id="current_password" class="form-control">
                    @error('shop_name')
                    <span class="text-danger"> {{ $message }}</span>

                    @enderror
                </div>
                <div class="mb-3">
                    <label for="current_password">Photo</label>
                    <input type="file" name="photo" id="current_password" class="form-control">
                    @error('photo')
                    <span class="text-danger"> {{ $message }}</span>

                    @enderror
                </div>
                <div class="mb-3">
                    <label for="current_password">Account Holder</label>
                    <input type="text" name="account_holder" id="current_password" class="form-control">
                    @error('account_holder')
                    <span class="text-danger"> {{ $message }}</span>

                    @enderror
                </div>
                <div class="mb-3">
                    <label for="current_password">Account number</label>
                    <input type="text" name="account_number" id="current_password" class="form-control">
                    @error('account_number')
                    <span class="text-danger"> {{ $message }}</span>

                    @enderror
                </div>
                <div class="mb-3">
                    <label for="current_password">Bank Name</label>
                    <input type="text" name="bank_name" id="current_password" class="form-control">
                    @error('bank_name')
                    <span class="text-danger"> {{ $message }}</span>

                    @enderror
                </div>
                <div class="mb-3">
                    <label for="current_password">Bank Branch</label>
                    <input type="text" name="bank_branch" id="current_password" class="form-control">
                    @error('bank_branch')
                    <span class="text-danger"> {{ $message }}</span>

                    @enderror
                </div>

                <div class="mb-3">
                    <label for="current_password">City</label>
                    <input type="text" name="city" id="current_password" class="form-control">
                    @error('city')
                    <span class="text-danger"> {{ $message }}</span>

                    @enderror
                </div>
                <div class="mb-3">

                    <button type="submit" class="btn btn-outline-info" >Submit</button>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection
@push('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if(session('success'))
<script>
    Swal.fire({
        title: "{{ session('success') }}",
        showClass: {
          popup: `
            animate__animated
            animate__fadeInUp
            animate__faster
          `
        },
        hideClass: {
          popup: `
            animate__animated
            animate__fadeOutDown
            animate__faster
          `
        }
      });
</script>

@endif

@endpush

