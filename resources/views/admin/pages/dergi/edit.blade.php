@extends('admin.layout.tema')
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
                                Dergi | Edit
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
                                <form method="POST" action="{{ route('admin.dergi.update', $data->id) }}">
                                    @csrf
                                    <div class="mb-3"><label for="dergi_name">Dergi Name</label>
                                        <input class="form-control" id="dergi_name" name="dergi_name"
                                            value="{{ $data->dergi_name }}" type="text">
                                    </div>
                                    <div class="mb-3"><label for="dergi_number">Dergi Number</label>
                                        <input class="form-control" id="dergi_number" value="{{ $data->dergi_number }}"
                                            name="dergi_number" type="number">
                                    </div>
                                    <div class="mb-0"><label for="dergi_info">Dergi Info</label>
                                        <textarea class="form-control" name="dergi_info" id="dergi_info" rows="3">{{ $data->dergi_info }}</textarea>
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
