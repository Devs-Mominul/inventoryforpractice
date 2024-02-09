@extends('layouts.admin')
@section('content')
<div class="col-lg-4">
    <div class="card">
        <div class="card-header">
            <h6>Profile Information</h6>
        </div>
        <div class="card-body">
            @if(session('status'))
            <div class="alert alert-info">
                {{ session('status') }}
            </div>

            @endif
            <form action="" method="post">
                @method('patch')
                @csrf
                <div class="mb-3">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="name">Email</label>
                    <input type="email" name="email" id="name" class="form-control">
                </div>
                <div class="mb-3">

                    <button type="submit" class="btn btn-outline-info" >Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="col-lg-4">
    <div class="card">
        <div class="card-header">
            <h4>Password Update</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('password.update') }}" method="post">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="current_password">Current Password</label>
                    <input type="password" name="current_password" id="current_password" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="current_password"> Password</label>
                    <input type="password" name="password" id="current_password" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="current_password">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="current_password" class="form-control">
                </div>
                <div class="mb-3">

                    <button type="submit" class="btn btn-outline-info" >Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
