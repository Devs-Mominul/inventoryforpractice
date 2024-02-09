@extends('layouts.admin')
@section('content')
<div class="mx-auto col-lg-6">
    <div class="card">
        <div class="card-header">Employe All Update</div>
        <div class="card-body">
            @if(session('employer_add'))
            <div class="alert alert-info">{{ session('employer_add') }}</div>

            @endif
            <form action="{{ route('all.employer.update.store',$all_employer->id) }}" method="POST" enctype="multipart/form-data">
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
                    <label for="current_password">Experience</label>
                    <input type="text" name="experience" id="current_password" class="form-control">
                    @error('experience')
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
                    <label for="current_password">Salary</label>
                    <input type="text" name="salary" id="current_password" class="form-control">
                    @error('salary')
                    <span class="text-danger"> {{ $message }}</span>

                    @enderror
                </div>
                <div class="mb-3">
                    <label for="current_password">Vacation</label>
                    <input type="text" name="vacation" id="current_password" class="form-control">
                    @error('vacation')
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
