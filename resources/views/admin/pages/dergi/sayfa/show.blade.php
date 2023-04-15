@extends('admin.layout.master')
@section('title')
    Dergi - Sayfa | Admin Panel
@endsection
@section('css')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('admin') }}/admin.css">
@endsection
@section('content')
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="filter"></i></div>
                            Sayfalar
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl px-4 mt-n10">
        <div class="pricing-columns">
            <div class="row justify-content-center">
                <!-- Pricing column 1-->
                @foreach ($data as $row)
                    <div class="col-xl-4 col-lg-6 mb-4 mb-xl-0">
                        <div class="card h-100">
                            <div class="card-header bg-transparent">
                                @foreach ($data_category as $data)
                                    <span
                                        class="badge bg-primary-soft text-primary rounded-pill py-2 px-3 mb-2">{{ $data->categeri_name }}</span>
                                @endforeach
                                <div class="pricing-columns-price">
                                    {{ $row->sayfa_name }}
                                    <button class="btn btn-success" type="button" data-bs-toggle="modal"
                                        data-bs-target="#ModalSayfaIcerik">İçerik</button>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <i class="text-primary me-2" data-feather="check-circle"></i>
                                        1 user account
                                    </li>
                                    <li class="list-group-item">
                                        <i class="text-primary me-2" data-feather="check-circle"></i>
                                        Remove ads
                                    </li>
                                    <li class="list-group-item">
                                        <i class="text-primary me-2" data-feather="check-circle"></i>
                                        Premium assets
                                    </li>
                                    <li class="list-group-item">
                                        <i class="text-primary me-2" data-feather="check-circle"></i>
                                        Saved projects
                                    </li>
                                </ul>
                            </div>
                            <a class="card-footer d-flex align-items-center justify-content-between" href="#!">
                                Get started!
                                <i data-feather="arrow-right"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @include('admin.pages.dergi.sayfa.icerik')
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
@endsection
