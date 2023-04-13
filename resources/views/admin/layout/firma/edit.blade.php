@extends('admin.tema')
@section('title')
    Firma - Edit | Admin Panel
@endsection
@section('css')
@endsection
@section('content')
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
                                Dergi | Edit
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container-xl px-4 mt-4">
            <div class="row">
                <div class="col-xl-4">
                    <!-- Profile picture card-->
                    <form action="{{ route('admin.firma.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card mb-4 mb-xl-0">
                            <div class="card-header">Logo</div>
                            <div class="card-body text-center">
                                <!-- Profile picture image-->

                                @if ($data->firma_logo)
                                    <div class="card mb-4 mb-xl-0">
                                        <div class="card-header">{{ $data->firma_name }} of Firma Logo</div>
                                        <div class="card-body text-center">
                                            <!-- Profile picture image-->
                                            <img class="img-account-profile rounded-circle mb-2"
                                                src="{{ asset('admin/uploads') }}/{{ $data->firma_logo }}" alt="" />
                                            <!-- Profile picture help block-->
                                        </div>
                                    </div>
                                @endif
                                <br>
                                <input value="{{ old('firma_logo') }}" type="file" class="form-control"
                                    name="firma_logo">
                            </div>
                        </div>
                </div>
                <div class="col-xl-8">
                    <!-- Account details card-->
                    <div class="card mb-4">
                        <div class="card-header">Firma Details</div>
                        <div class="card-body">
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="firma_name">Name</label>
                                    <input value="{{ $data->firma_name }}" class="form-control" id="firma_name"
                                        name="firma_name" type="text" placeholder="Firma Name" />
                                </div>
                                <!-- Form Group (last name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="firma_unvan">Unvan</label>
                                    <input value="{{ $data->firma_unvan }}" class="form-control" id="firma_unvan"
                                        type="text" name="firma_unvan" placeholder="Firma Unvan" />
                                </div>
                            </div>
                            <!-- Form Group (email address)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="firma_email">Email</label>
                                <input value="{{ $data->firma_mail }}" class="form-control" id="firma_email"
                                    name="firma_mail" type="email" placeholder="Firma Email" />
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="firma_gsm">GSM</label>
                                <input value="{{ $data->firma_gsm }}" class="form-control" id="firma_gsm" name="firma_gsm"
                                    type="text" placeholder="Firma GSM" />
                            </div>
                            <!-- Form Group (Group Selection Checkboxes)-->
                            <!-- Form Group (Roles)-->
                        </div>
                        <!-- Submit button-->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
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

@endsection
@section('js')
@endsection
