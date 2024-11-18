@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> {{__('DATA PRODUCT')}}  </div>
                <div class="card-body">
                <form action="" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">name product</label>
                        <input type="text" class="form-control" name="name_produk" value="{{ $product->nama_produk }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">descripsi</label>
                        <input type="text" class="form-control" name="deskripsi" value="{{ $product->deskripsi }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">harga</label>
                        <input type="text" class="form-control" name="harga" value="{{ $product->harga }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">id_kategori</label>
                        <input type="text" class="form-control" name="id_kategori" value="{{ $product->id_kategori }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">id_supplier</label>
                        <input type="text" class="form-control" name="id_kategori" value="{{ $product->id_supplier }}" disabled>
                    </div>
                    <a href="{{ url('product') }}" class="btn btn-success">BALIK CLEK</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

