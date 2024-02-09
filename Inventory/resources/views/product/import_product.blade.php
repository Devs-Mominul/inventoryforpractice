@extends('layouts.admin')
@section('content')
<div class="col-lg-8">
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <div>
                <h4>  Import Product </h4>
            </div>
           <div>
                <a href="{{ route('export') }}" class="btn btn-info">Download</a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('import') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="category_name" class="form-label"> Category</label>
                    <input type="file" name="import_file" id="" class="form-control">
                    @error('import_file')
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
