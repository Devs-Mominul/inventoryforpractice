@extends('layouts.admin')
@section('content')
<div class="col-lg-8">
    <div class="card">
        <div class="card-header"><h3>Add Salary</h3></div>
        <div class="card-body">
            <form action="{{ route('advance.salary.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="current_password">Employe</label>
                    <select name="emp_id" class="form-control">
                      @foreach ($all_employer as $employer)
                      <option value="{{ $employer->id }}">{{ $employer->name }}</option>
                      @endforeach
                    </select>
                    @error('emp_id')
                    <span class="text-danger"> {{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="current_password">Month</label>
                    <select name="month" class="form-control">

                        <option value="01">January</option>
                        <option value="02">February</option>
                        <option value="03">March</option>
                        <option value="04">April</option>
                        <option value="05">May</option>
                        <option value="06">June</option>
                        <option value="07">July</option>
                        <option value="08">August</option>
                        <option value="09">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>

                    </select>
                    @error('month')
                    <span class="text-danger"> {{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="current_password">Advanced Salary</label>
                    <input type="text" name="advance_salary" id="current_password" class="form-control">
                    @error('advance_salary')
                    <span class="text-danger"> {{ $message }}</span>

                    @enderror
                </div>
                <div class="mb-3">
                    <label for="current_password">Year</label>
                    <input type="text" name="year" id="current_password" class="form-control">
                    @error('year')
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
