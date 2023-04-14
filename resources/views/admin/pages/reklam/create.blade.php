<div class="modal" id="ModalCreateReklam">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">New Rkelam Type Add</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ route('adminreklam_type.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="reklam_type_name" class="col-form-label">Name:</label>
                                <input type="text" name="reklam_type_name" class="form-control" id="reklam_type_name"
                                    placeholder="Reklam Type Name">
                            </div>
                            @error('reklam_type_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="mb-3">
                                <label for="reklam_type_info" class="col-form-label">Info:</label>
                                <textarea type="text" name="reklam_type_info" class="form-control" id="reklam_type_info"
                                    placeholder="Reklam Type İnfo"></textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Modal body -->

        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>

    </div>
</div>
</div>
