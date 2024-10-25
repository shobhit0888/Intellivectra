
//Employee state
$('#state_id').on('change', function () {
    let state_id = this.value;
    $.ajax({
        url: "/city/"+state_id,
        type: "get",

        success: function (res) {
            console.log(res);
            let html = "";
            html += '<select id="city_id" type="text" name="city_id" search class="form-control">';
            html += "<option value=''>Select</option>";
            res.data.forEach((val, key) => {
                html += "<option value=" + val.id + ">" + val.name + "</option>";
            });
            html += '</select>';
            $("#city_id").html("");
            $("#city_id").html(html);
        },
    });
});







//////////////////////////////////////////////
////////////  Employee  /////////////////////////
//////////////////////////////////////////

$(function () {
    // $.validator.setDefaults({
    //   submitHandler: function () {
    //     // action="{{ route('save-user')}}" method="post"
    //     alert( "Form successful submitted!" );
    //   }
    // });
    $('#add-employee-form').validate({
      rules: {
        name: {
            required: true,
            name: true,
        },
        mobile: {
            required: true,
            mobile: true,
          },
        email: {
          required: true,
          email: true,
        },
        password: {
          required: true,
          minlength: 5
        },
      },
      messages: {
        name: {
            required: "Please enter a name ",
            name: "Please enter a valid name"
        },
        mobile: {
            required: "Please enter a mobile ",
            mobile: "Please enter a valid mobile "
            },
        email: {
          required: "Please enter a email address",
          email: "Please enter a valid email address"
        },
        password: {
          required: "Please provide a password",
          minlength: "Your password must be at least 5 characters long"
        }
      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
    });
  });


  $(function () {

    var table = $('#user-table').DataTable({
        processing: true,
        serverSide: false,
        paging: true,
        ajax: "employee/",
        columns: [
          {
              data: "DT_RowIndex",
              name: "SL No",
              className: "text-center",
              orderable: false,
              searchable: false,
          },
            {data: 'Full Name', name: 'Full Name'},
            {data: 'Email', name: 'Email'},
            {data: 'Mobile', name: 'Mobile'},
            {data: 'Gender', name: 'Gender'},
            {data: 'User Type', name: 'User Type'},
            {data: 'Address', name: 'Address'},
            {data: 'City', name: 'City'},
            {data: 'State', name: 'State'},
            {data: 'Pincode', name: 'Pincode'},
            {data: 'Created Date', name: 'Created Date'},
            {data: 'Status', name: 'Status'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });

  });


//////////////////////////////////////////////
////////////  Roles  /////////////////////////
//////////////////////////////////////////




  //////////////////////////////////////////////
////////////  Units  /////////////////////////
//////////////////////////////////////////



/////////////////////////////////////////////
////////////  Product Category  /////////////////////////
//////////////////////////////////////////

$(function () {
    $('#add-category-form').validate({
      rules: {
        name: {
            required: true,
            name: true,
        },
        small_desc: {
            required: true,
            name: true,
        },
      },
      messages: {
        name: {
            required: "Please enter a name ",
            name: "Please enter a valid name"
        },
        small_desc: {
            required: "Please enter a small_desc ",
            name: "Please enter a valid small desc"
        },
      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
    });
  });

  $(function () {
    $('#category-table').DataTable({
        processing: true,
        serverSide: false,
        paging: true,
        ajax: "category",

    columns: [
        {
            data: "DT_RowIndex",
            name: "SL No",
            className: "text-center",
            orderable: false,
            searchable: false,
        },
        {data: 'name', name: 'name'},
        // {data: 'parent_id', name: 'parent_id'},
        {data: 'small_desc', name: 'small_desc'},
        {data: 'is_active', name: 'is_active'},
        {data: 'action', name: 'action', orderable: false, searchable: false},
    ],

    });
  });



  //Blogs settings


  $(function () {
    $('#blog-table').DataTable({
        processing: true,
        serverSide: false,
        paging: true,
        ajax: "blogs",

    columns: [
        {
            data: "DT_RowIndex",
            name: "SL No",
            className: "text-center",
            orderable: false,
            searchable: false,
        },
        {data: 'title', name: 'title'},
        {data: 'category_id', name: 'category_id'},
        {data: 'sub_category_id', name: 'sub_category_id'},
        {data: 'small_desc', name: 'small_desc'},
        {data: 'meta_title', name: 'meta_title'},
        {data: 'is_active', name: 'is_active'},
        {data: 'action', name: 'action', orderable: false, searchable: false},
    ],

    });
  });


//sweet alert
function deleteConfirmation(id,model){
        console.log(model);

        if(model == 'category'){
            var url = "/admin/category/"+id;
        }else if(model == 'purchase'){
            var url = "purchases/delete/"+id;
        }

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            customClass: {
            confirmButton: 'btn btn-primary',
            cancelButton: 'btn btn-outline-danger ms-1'
            },
            buttonsStyling: false
        }).then(function (result) {
            if (result.value) {
                $.ajax({
                    url:url,
                    type: "DELETE",
                    // data: {
                    //     id: id
                    // },
                    dataType: "html",
                    success: function (data) {

                        Swal.fire({
                            icon: 'success',
                            title: 'Deleted!',
                            text: 'Your file has been deleted.',
                            customClass: {
                            confirmButton: 'btn btn-success'
                            }
                        }).then(function(success){
                            location.reload();
                        });
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        var err = JSON.parse(xhr.responseText);
                        Swal.fire({
                            title: 'Cancelled',
                            text: err.message,
                            icon: 'error',
                            customClass: {
                            confirmButton: 'btn btn-success'
                            }
                        });

                    },

                });
            } else if (result.dismiss === Swal.DismissReason.cancel) {
            Swal.fire({
                title: 'Cancelled',
                text: 'Your imaginary file is safe :)',
                icon: 'error',
                customClass: {
                confirmButton: 'btn btn-success'
                }
            });
            }
        });
}


