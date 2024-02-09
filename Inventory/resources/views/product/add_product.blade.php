@extends('layouts.admin')
@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header"><h3>Add Product</h3></div>
        <div class="card-body">
            <form action="{{ route('store.product') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="product_name"> Product Name</label>
                            <input type="text" name="product_name" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="garage">Product Code</label>
                            <input type="text" name="product_code" class="form-control" id="">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="category_id"> Category Id</label>
                            <select name="category_id" id="" class="form-control">
                                @foreach (App\Models\Category::all() as $category)
                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>

                                @endforeach

                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="Supplier"> Supplier Id</label>
                            <select name="supplier_id" id="" class="form-control">
                                @foreach (App\Models\Supplyer::all() as $supplyer)
                                <option value="{{ $supplyer->id }}">{{ $supplyer->name }}</option>

                                @endforeach

                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-4">
                            <div class="mb-3">
                                <label for="garage">Goudayun</label>
                                <input type="text" name="product_garage" class="form-control" id="">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="garage">Product Route</label>
                            <input type="text" name="product_route" class="form-control" id="">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="garage">Buying Date</label>
                            <input type="date" name="buying_date" class="form-control" id="">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="expire">Expire Date</label>
                            <input type="date" name="expire_date" class="form-control" id="">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="bui">Buying Price</label>
                            <input type="text" name="buying_price" class="form-control" id="">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="selling">selling Price</label>
                            <input type="text" name="selling_price" class="form-control" id="">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="bui">Photo</label>
                            <input type="file" name="photo" class="form-control" id="">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <button class="btn btn-info">submit</button>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection
