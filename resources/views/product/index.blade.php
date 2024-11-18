@extends('layouts.app')

@section('content')
<!-- @include('layouts.navbar') -->
<!-- @include('layouts.sidebar') -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header"> {{__('DATA RPODUCT')}}  </div>

                <div class="card-body">
                    <a href="{{ route('product.create') }}" class="btn btn-primary">add data</a>
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success')}}
                    </div>
                    @endif
                <table class="table">
            <thead>
                <tr>
                <th scope="col">NO</th>
                <th scope="col">NAMA PRODUCT</th>
                 <th scope="col">DESCRIPSI</th>
                 <th scope="col">HARGA</th>
                <th scope="col">ID KATEGORI</th>
                <th scope="col">ID SUPPLIER</th>
                <th scope="col">GAMBAR</th>
                <th scope="col">AKSI</th>
                 </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach ($product as $data)
              <tr>
               <th scope="row">{{ $no++ }}</th>
               <td>{{ $data->nama_produk}}</td>
               <td>{{ $data->deskripsi}}</td>
               <td>{{ $data->harga}}</td>
               <td>{{ $data->kategori->nama_kategori}}</td>
               <td>{{ $data->supplier->nama_supplier}}</td>
               <td>
                <img src=" {{ asset('/images/product/' . $data->cover)}}" width="100">
               </td>
               <form action="{{route('product.destroy', $data->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
               <td>
                <a href="{{ route('product.edit', $data->id) }}" class="btn btn-success">edit</a>
                <a href="{{ route('product.show', $data->id) }}" class="btn btn-warning">show</a>
                <button type="submit" class="btn btn-danger" onclick="return confrim('apakah anda yakin ingin menghapus data ini?')">Delete</button>
               </td>
               </form>
             </tr>
             @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
