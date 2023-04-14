<div class="modal" id="ModalCreateFirma">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">New Firma Add</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="container-xl px-4 mt-4">
                    <div class="row">
                        <div class="col-xl-4">
                            <!-- Profile picture card-->
                            <form action="{{ route('adminfirma.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card mb-4 mb-xl-0">
                                    <div class="card-header">Firma Logo</div>
                                    <div class="card-body text-center">
                                        <!-- Profile picture image-->
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
                                            <input value="{{ old('firma_name') }}" class="form-control" id="firma_name"
                                                name="firma_name" type="text" placeholder="Firma Name" />
                                        </div>
                                        @error('firma_name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <!-- Form Group (last name)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="firma_unvan">Unvan</label>
                                            <input value="{{ old('firma_unvan') }}" class="form-control"
                                                id="firma_unvan" type="text" name="firma_unvan"
                                                placeholder="Firma Unvan" />
                                        </div>
                                    </div>
                                    @error('firma_unvan')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <!-- Form Group (email address)-->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="firma_email">Email</label>
                                        <input value="{{ old('firma_email') }}" class="form-control" id="firma_email"
                                            name="firma_mail" type="email" placeholder="Firma Email" />
                                    </div>
                                    @error('firma_mail')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="mb-3">
                                        <label class="small mb-1" for="firma_gsm">GSM</label>
                                        <input value="{{ old('firma_gsm') }}" class="form-control" id="firma_gsm"
                                            name="firma_gsm" type="text" placeholder="Firma GSM" />
                                    </div>
                                    @error('firma_gsm')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <!-- Form Group (Group Selection Checkboxes)-->
                                    <!-- Form Group (Roles)-->
                                </div>
                                <!-- Submit button-->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>

    </div>
</div>
</div>
