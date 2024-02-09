@extends('layouts.admin')
@section('content')
<div class="col-lg-8">
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <div>
                <h4>  Add Category </h4>
            </div>
           <div>
                <a href="{{ route('category.all') }}" class="btn btn-info">All Category</a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('category.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="category_name" class="form-label"> Category</label>
                    <input type="text" name="category_name" id="" class="form-control">
                    @error('category_name')
                    <span class="text-danger"> {{ $message }}</span>

                    @enderror
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-info">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
