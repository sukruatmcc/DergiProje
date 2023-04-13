<div class="modal fade" id="ModalCreateDergi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Dergi Add</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('AdminDergi.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="dergi_name" class="col-form-label">Name:</label>
                        <input type="text" name="dergi_name" class="form-control" id="dergi_name"
                            placeholder="Dergi Name">
                    </div>
                    @error('dergi_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <label for="dergi_info" class="col-form-label">Info:</label>
                        <textarea type="text" name="dergi_info" class="form-control" id="dergi_info" placeholder="Dergi İnfo"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="dergi_number" class="col-form-label">Number:</label>
                        <input class="form-control" placeholder="Dergi Number" name="dergi_number" type="number"
                            id="dergi_number">
                    </div>
                    @error('dergi_number')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
