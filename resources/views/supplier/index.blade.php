@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> {{__('DATA SUPPLIER')}}  </div>

                <div class="card-body">
                    <a href="{{ route('supplier.create') }}" class="btn btn-primary">add data</a>
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success')}}
                    </div>
                    @endif
                <table class="table">
            <thead>
                <tr>
                <th scope="col">NO</th>
                <th scope="col">NAMA SUPPLIER</th>
                 <th scope="col">ALAMAT</th>
                 </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach ($supplier as $data)
              <tr>
               <th scope="row">{{ $no++ }}</th>
               <td>{{ $data->nama_supplier }}</td>
               <td>{{ $data->alamat}}</td>
               <td>
                <!-- <img src=" {{ asset('/images/product/' . $data->cover)}}" width="100"> -->
               </td>
               <form action="{{route('supplier.destroy', $data->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
               <td>
                <a href="{{ route('supplier.edit', $data->id) }}" class="btn btn-success">edit</a>
                <a href="{{ route('supplier.show', $data->id) }}" class="btn btn-warning">show</a>
                <button type="submit" class="btn btn-danger">Delete</button>
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
