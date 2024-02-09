@extends('layouts.admin')
@section('content')
<div class="mx-auto col-lg-8">
    <div class="card">
        <div class="card-header"><h4>Category All</h4></div>
        <div class="card-body">
            <table class="table table-hover">

                <tr>
                    <th>Sl</th>
                    <th>Category Name</th>
                    <th>Action</th>
                </tr>
                @foreach ($category_all as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->category_name }}</td>
                    <td>
                        <div class="d-flex">
                            <a href="" class="btn btn-info">Update</a>


                            <a href="" class="btn btn-danger">Delete</a>
                        </div>
                    </td>

                </tr>

                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection
