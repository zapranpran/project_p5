@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> {{__('DATA PRODUCT')}}  </div>
                <div class="card-body">
                <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">nama_product</label>
                        <input type="text" class="form-control" name="nama_produk" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">deskripsi</label>
                        <input type="text" class="form-control" name="deskripsi">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">harga</label>
                        <input type="text" class="form-control" name="harga">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">id_kategori</label>
                        <select class="form-control" name="id_kategori">
                        @foreach ($kategori as $data)
                        <option value="{{ $data->id }}">{{$data->nama_kategori}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">id_supplier</label>
                        <select class="form-control" name="id_supplier">
                        @foreach($supplier as $data)
                        <option value="{{ $data->id }}">{{$data->nama_supplier}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">gambar</label>
                        <input type="file" class="form-control" name="cover">
                    </div>

                        <button type="submit" class="btn btn-primary">GASKEUN CLEK</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
