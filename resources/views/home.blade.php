@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                         <div class="card-body">      
                            <h2><p class="card-text">SELAMAT DATANG DI HALAMAN ADMIN .</p></h2>
                         <a href="{{ route('kategori.index') }}" class="btn btn-primary">GASKEUN</a>
                    </div>  
                 </div>
            </div>
         </div>
    </div>
@endsection
