@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> {{__(' edit DATA PRODUCT')}}  </div>
                <div class="card-body">
                <form action="{{route('product.update', $product->id)}}" method="POST" rolr="form" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">nama produk</label>
                        <input type="text" class="form-control" name="nama_produk" value="{{ $product->nama_produk }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">descripsi</label>
                        <input type="text" class="form-control" name="deskripsi" value="{{ $product->deskripsi }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">harga</label>
                        <input type="text" class="form-control" name="harga" value="{{ $product->harga }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">id_kategori</label>
                        <select class="form-control" name="id_kategori">
                         @foreach ($kategori as $data)
                            <option value="{{$data->id}} ">{{$data->nama_kategori }}</option>  
                        @endforeach
                        </select>    
                    </div>
                    <div class="mb-3">
                        <label class="form-label">id_supplier</label>
                        <select class="form-control" name="id_supplier">
                         @foreach ($supplier as $data)
                            <option value="{{$data->id}} ">{{$data->nama_supplier }}</option>  
                        @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                    <img src=" {{ asset('/images/product/' . $product->cover)}}" width="100">
                        <label class="form-label">cover</label>
                        <input type="file" class="form-control" name="cover">
                    </div>
                    <button type="submit" class="btn btn-success">EDIT CLEK</button>
                    </form>
                </div> 
            </div>
        </div>
    </div>
</div>
@endsection
