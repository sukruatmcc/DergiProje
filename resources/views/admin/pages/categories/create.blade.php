<div class="modal fade" id="ModalCreateCategories" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Category Add</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admincategories.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="categeri_name" class="col-form-label">Name:</label>
                        <input type="text" name="categeri_name" class="form-control" id="categeri_name"
                            placeholder="Category Name">
                    </div>
                    @error('categeri_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <label for="categeri_color" class="col-form-label">Color:</label>
                        <input type="text" name="categeri_color" class="form-control" id="categeri_color"
                            placeholder="Category Color">
                    </div>
                    @error('categeri_color')
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
