@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> {{__(' EDIT DATA SUPPLIER')}}  </div>
                <div class="card-body">
                <form action="{{route('supplier.update', $supplier->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">nama_supplier</label>
                        <input type="text" class="form-control" name="nama_supplier" value="{{ $supplier->nama_supplier }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">alamat</label>
                        <input type="text" class="form-control" name="alamat" value="{{ $supplier->alamat }}">
                    </div>
                    <button type="submit" class="btn btn-success">EDIT CLEK</button>
                    <a href="{{ url('supplier') }}" class="btn btn-success">BALIK CLEK</a>
                    </form>
                </div> 
            </div>
        </div>
    </div>
</div>
@endsection
