@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> {{__('DATA KATEGORI')}}  </div>
                <div class="card-body">
                <form action="" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">nama_kategori</label>
                        <input type="text" class="form-control" name="name_product" value="{{ $kategori->nama_kategori }}" disabled>
                    </div>
                    <a href="{{ url('kategori') }}" class="btn btn-success">BALIK CLEK</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection