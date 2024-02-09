@extends('layouts.admin')
@section('content')
@push('css')
<style>
    p{
        line-height: 0;

        padding: 5px 0px;
    }
    .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
        margin:  0;
        font-family: Roboto,sans-serif;
        color: #ebeff3;
      }
</style>

@endpush
<br><br><br>
<div class="mt-5 col-lg-12">
    <div class="row">
        <div class="col-12">
            <div class="portfolioFilter">
              @foreach ($categories as $category)
              <a href="#" data-filter="*" class="current waves-effect waves-light">{{ $category->category_name }}</a>

              @endforeach

            </div>
        </div>

    </div>
</div>
<div class="col-lg-5">


    <div class="panel">
        <h4 class="text-info">Customer    &NonBreakingSpace;&NonBreakingSpace;   &NonBreakingSpace;&NonBreakingSpace;  &NonBreakingSpace;&NonBreakingSpace;  &NonBreakingSpace;&NonBreakingSpace;   &NonBreakingSpace;&NonBreakingSpace;  &NonBreakingSpace;&NonBreakingSpace;  &NonBreakingSpace;&NonBreakingSpace; &NonBreakingSpace;   <a href=""  class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal"">Add New</a></h4>
        <select name="" id="" class="form-control">
            <option value="" disabled >Select option</option>
            @foreach ($customers as $customer)
            <option value="{{ $customer->id }}">{{ $customer->name }}</option>

            @endforeach

        </select>
    </div>
    <br>
    <div class="text-center card">
        <div class="p-4 pricing-header bg-primary rounded-top">
            <h1 class="text-white font-44 font-weight-normal">$19</h1>
            <h5 class="mt-4 text-white font-17">Starter Pack</h5>
        </div>
        <div class="p-4">
            <ul class="mb-0 list-unstyled price-features">
               <table class="table">
                <thead>
                    <tr>
                    <th>Name</th>
                    <th>Qty</th>
                    <th>STotal</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <td>Asha</td>
                    <td>3</td>
                    <td>
                        <input type='number' style='width:40px;' vlaue='1' >
                    </td>
                    <td>8900</td>
                    <td>
                        <a class='btn btn-danger'>delete</a>
                    </td>

                </tbody>

               </table>

            </ul>
            <div class="py-4 m-4 text-white pricing-footer bg-primary">
                <p style='font-size:19px;' classs='text-light'>Quantity:0.00</p>
                <p style='font-size:19px;' classs='text-light'>Product:0.00</p>
                <p style='font-size:19px;' classs='text-light'>Vat:0.00</p>
                <hr class='text-white'>
                <p  classs='text-light'><h3>Total:</h3><h4>0.00</h4></p>




            </div>

            <div class="pt-3 mt-4">
                <a class="text-white btn btn-success width-md waves-effect waves-light">Create Invoice</a>
            </div>

        </div>
    </div>
</div>
<div class="col-lg-7">
    <div class="card">
        <div class="card-header">Point of Sale</div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Product Code</th>
                    <th>Action</th>
                </tr>
                @foreach ($products as $product)
                <tr>
                    <td><img width="40px" src="{{ asset('upload/product/') }}/{{ $product->product_image }}" alt=""></td>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->category_name }}</td>
                    <td>{{ $product->product_code }}</td>
                </tr>

                @endforeach
            </table>
        </div>
    </div>
</div>



<form action="{{ route('customer.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title">Add New Customer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection
