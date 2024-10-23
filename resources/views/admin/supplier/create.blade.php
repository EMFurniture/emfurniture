@extends('layouts.admin')
@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-between ">
            <h2>Create supplier</h2>
            <a title="create supplier" href="{{ route('suppliers.create') }}" class="btn  btn-sm btn-info py-2 mb-2"><i class="fas fa-plus"></i></a>
        </div>
       <hr>
        <div class="row mt-4">
           <div class="card">
            <div class="card-body">
               <form action="{{ route("suppliers.store") }}" method="POST">
                @csrf

               <div class="row">
                <div class="col-md-6">
                     <!-- Supplier Name -->
                <div class="form-group">
                    <label for="supplier_name">Supplier name</label>
                    <input type="text" class="form-control @error('supplier_name') is-invalid @enderror" id="supplier_name" value="{{ old('supplier_name') }}" name="supplier_name" placeholder="Enter supplier name">
                    @error('supplier_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>
                <div class="col-md-6">
                    <!-- Contact Person -->
                  <div class="form-group">
                    <label for="contact_person">Contact Person</label>
                    <input type="text" class="form-control @error('contact_person') is-invalid @enderror" id="contact_person" value="{{ old('contact_person') }}" name="contact_person" placeholder="Enter contact person">
                    @error('contact_person')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                </div>
               </div>

               <div class="row">
                <div class="col-md-6">
                       <!-- Phone -->
                  <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" id="phone" name="phone" placeholder="Enter phone">
                    @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                </div>
                <div class="col-md-6">
                      <!-- Email -->
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" name="email" placeholder="Enter email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                </div>
               </div>

                 <!-- Address -->
                 <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control @error('address') is-invalid @enderror" value="{{ old('address') }}" id="address" name="address" placeholder="Enter address">
                    @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                 <a href="{{ route('suppliers.index') }}" class="btn btn-secondary ml-2">Cancel</a>
               </form>
            </div>
           </div>
        </div>

    </div>
@endsection




