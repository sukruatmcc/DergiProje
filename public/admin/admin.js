$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function () {
    $(".changeStatus").click(function () {
        let action = $(this).data('action');
        Swal.fire({
            title: 'Status Select',
            input: 'select',
            //html:'<label>Miktar</label><br><input type="text" id="price"><br><label>Miktar Kod</label><br><input type="text" id="priceCode">',
            inputOptions: {
                'Active': 'Active',
                'Passive': 'Passive',
            },
            inputAttributes: {
                autocapitalize: 'off',
            },
            inputPlaceholder: 'Status Select',
            showCancelButton: true,
            confirmButtonText: 'Approve',
            showLoaderOnConfirm: true,
            preConfirm: (login) => {
                let status = Swal.getPopup().querySelector('.swal2-select').value;
                //let price = Swal.getPopup().querySelector('#price').value;
                //let price_code = Swal.getPopup().querySelector('#priceCode').value;
                let dataID = $(this).data('id');
                $.ajax({
                    url: action,
                    method: 'POST',
                    data: {
                        id: dataID,
                        status: status,
                        async: false,
                        //price: price,
                        //price_code: price_code
                    },
                    async: false,
                    success: function (response) {
                        if (response.status == "Success") {
                            Swal.fire('Updated!', 'Status Changed.', 'success');
                            location.reload();
                        }
                    },

                })
            },
            allowOutsideClick: () => !Swal.isLoading()
        })

    });
});

$(document).ready(function () {
    $(".delete").click(function () {
        let id = $(this).data('id');
        let action = $(this).data('action');
        let button = $(this);
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax(
                    {
                        type: "DELETE",
                        url: action,
                        dataType: 'json',
                        data: { id: id },
                        success: function (response) {
                            //console.log(response);
                            button.parent().parent().remove();
                            if (response.status == "Success") {
                                Swal.fire('Deleted!', 'Deleted.', 'success');
                            }
                        },
                    }
                );



            }
        })

    });
});

