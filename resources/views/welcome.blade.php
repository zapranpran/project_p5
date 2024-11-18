
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Katalog Produk</title>
</head>

<body>
    {{-- Awal navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('kategori.index') }}">ACRSZ2</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                </ul>
            </div>
        </div>
    </nav>
    {{-- Akhir navbar --}}

    {{-- Awal content --}}


    {{-- Akhir content --}}

        <div class="container-fluid">
            <div class="container">
                <div class="text-center pb-2">
                    <h1 class="mb-4">PRODUCT</h1>
                </div>
                <div class="row">
                    @foreach ($produk as $data)
                        <div class="col-md-4 mb-5">
                            <div class="bg-secondary">
                                <div class="text-center p-4">
                                    <img src="{{ asset('/images/product/' . $data->cover) }}" width="100">
                                </div>
                                <div class="bg-primary text-center p-4">
                                    <h3 class="m-0">{{$data->nama_produk}}</h3>
                                </div>
                                <div class="d-flex flex-column align-items-center py-4">
                                    <p>{{$data->deskripsi}}</p>
                                    <p>{{$data->harga}}</p>
                                    <p>{{$data->supplier->nama_supplier}}</p>
                                    <p>{{$data->kategori->nama_kategori}}</p>
                                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#detailModal{{$data->id}}">Show Detail</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>



    @foreach ($produk as $data)
                <div class="modal fade" id="detailModal{{ $data->id }}" tabindex="-1"
                    aria-labelledby="detailModalLabel{{ $data->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="detailModalLabel{{ $data->id }}">
                                    {{ $data->nama_produk }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="{{ asset('/images/product/' . $data->cover) }}" class="img-fluid mb-3"
                                            alt="{{ $data->nama_produk }}">
                                    </div>
                                    <div class="col-md-8">
                                        <p><strong>Deskripsi : </strong> {{ $data->deskripsi }}</p>
                                        <p><strong>Kategori : </strong> {{ $data->kategori->nama_kategori }}</p>
                                        <p><strong>Brand : </strong> {{ $data->supplier->nama_supplier }}</p>
                                        <p><strong>Harga : </strong> Rp.{{ $data->harga }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
