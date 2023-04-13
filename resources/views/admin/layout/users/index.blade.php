@extends('admin.tema')
@section('title')
    Users | Admin Panel
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
                                Users
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
                </div>
                <div class="card-body">
                    <table id="datatablesSimple3">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Membership Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Membership Date</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>

                                </td>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </main>
@endsection
@section('js')
    <script src="/admin/admin.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
@endsection
s
