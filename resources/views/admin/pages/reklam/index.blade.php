@extends('admin.layout.tema')
@section('title')
    Admin - Reklam Types | Admin Panel
@endsection
@section('css')
@endsection
@section('content')
@section('title')
    Dergi | Admin Panel
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
                                Reklamlar
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container-xl px-4 mt-n10">
            <div class="card mb-4">
                <div class="row" style="margin-top:7px; margin-left:7px">
                    <div class="col-md-4">
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#ModalCreateReklam"><i class="fa-solid fa-circle-plus"></i>Add Reklam Type<a>
                    </div>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Info</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Info</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($data as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $row->reklam_type_name }}</td>
                                    <td>{{ $row->reklam_type_info }}</td>
                                    <td>
                                        @if ($row->status == 'Active')
                                            <button data-action="" data-id="{{ $row->id }}" href="javascript:void(0)"
                                                class="btn btn-success btn-sm  changeStatus">Active</button>
                                        @else
                                            <button data-action="" data-id="{{ $row->id }}" href="javascript:void(0)"
                                                class="btn btn-danger btn-sm changeStatus">Passive</button>
                                        @endif
                                    </td>
                                    <td>
                                        <button style="color:blue; background:none; border:none;" type="button"
                                            data-action="" data-id="{{ $row->id }}" class="delete"><i
                                                class="fa fa-trash text-danger"></i></button>
                                        <a href=""><i class="fa fa-edit"></i></a>
                                        <a href="#"><i class="fa-solid fa-eye"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </main>
    @include('admin.pages.reklam.create')
@endsection
@section('js')
    <script src="/admin/admin.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
@endsection

@endsection
@section('js')
@endsection
