@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> {{__('DATA SUPPLIER')}}  </div>
                <div class="card-body">
                <form action="" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">nama supplier</label>
                        <input type="text" class="form-control" name="nama_supplier" value="{{ $supplier->nama_supplier }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">alamat</label>
                        <input type="text" class="form-control" name="alamat" value="{{ $supplier->alamat }}" disabled>
                    </div>
                    <a href="{{ url('supplier') }}" class="btn btn-success">GASKEUN</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
