@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> {{__('DATA SUPPLIER')}}  </div>
                <div class="card-body">
                <form action="{{ route('supplier.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">nama_supplier</label>
                        <input type="text" class="form-control" name="nama_supplier" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">alamat</label>
                        <input type="text" class="form-control" name="alamat">
                    </div>
                        <button type="submit" class="btn btn-primary">GASKEUN CLEK</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
