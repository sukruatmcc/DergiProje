@extends('admin.tema')
@section('title')
    Dergi-Edit | Admin Panel
@endsection
@section('css')
    {{-- <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" /> --}}
@endsection
@section('content')
    <main>
        <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
            <div class="container-xl px-4">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="filter"></i></div>
                                Firma | Edit
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container-xl px-4 mt-n10">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-body">
                                <form method="POST" action="{{ route('admin.categories.update', $data->id) }}">
                                    @csrf
                                    <div class="mb-3"><label for="dergi_name">Name:</label>
                                        <input class="form-control" id="dergi_name" name="categeri_name"
                                            value="{{ $data->categeri_name }}" type="text">
                                    </div>
                                    <div class="mb-3"><label for="dergi_number">Color:</label>
                                        <input class="form-control" id="dergi_number" value="{{ $data->categeri_color }}"
                                            name="categeri_color" type="text">
                                    </div>
                                    <button type="submit" style="margin-top:7px" class="btn btn-primary me-2"
                                        id="createButton">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
@endsection
