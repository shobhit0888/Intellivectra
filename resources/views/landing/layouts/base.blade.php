<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>IntelliVectra - Home</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Consulting Website Template Free Download" name="keywords">
    <meta content="Consulting Website Template Free Download" name="description">
    <meta name="token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link href="{{ asset('assets/img/fevicon-IVT.png') }}" rel="icon">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

    <link href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">


    <link href="{{ asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.css') }}" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link
        href="https://cdn.jsdelivr.net/gh/fontenele/bootstrap-navbar-dropdowns@5.0.2/dist/css/bootstrap-navbar-dropdowns.min.css"
        rel="stylesheet">
    {{-- <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script> --}}

    <!-- Customized Bootstrap Stylesheet -->
    {{-- <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet"> --}}

    <link href="{{ asset('assets/plugins/plugins.css') }}" rel="stylesheet">

</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->
    <!-- Topbar Start -->

    <!-- Topbar End -->
    @include('landing.components.header')

    @yield('contents')

    @include('landing.components.footer')

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><svg
            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up"
            viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5" />
        </svg></a>




    <div class="modal fade" id="gettouchmodal" tabindex="-1" role="dialog" data-bs-backdrop="true"
        aria-labelledby="gettouchmodalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    {{-- <h5 class="modal-title" id="exampleModalLongTitle"> </h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button> --}}
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <h4 class="fw-bold text-success">Message Sent Successfully</h4>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                </div>
            </div>
        </div>
    </div>




    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script> --}}
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>


    <script
        src="https://cdn.jsdelivr.net/gh/fontenele/bootstrap-navbar-dropdowns@5.0.2/dist/js/bootstrap-navbar-dropdowns.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.js')}}"></script> --}}
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/counterup/counterup.min.js') }}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset('assets/mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ asset('assets/mail/contact.js') }}"></script>


    <script src="{{ asset('assets/js/main.js') }}"></script>


    <!-- contact animation Javascript -->
    <script src="{{ asset('assets/plugins/plugins.js') }}"></script>

    <script>
        $('.navbar').navbarDropdown({
            trigger: 'mouseover'
        });

        // $(function () {

        $('#gettouch').on('submit', function(e) {
            // alert("hello");
            e.preventDefault();
            // $('#spinner-border').text('Please Wait......');
            $('.spinner-border').css('display', 'block');
            $('.btn-submit').css('display', 'none');
            // btn-submit
            $.ajax({
                type: 'post',
                url: $(this).attr('action'),
                data: $('#gettouch').serialize(),
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="token"]').attr('content')
                },
                success: function() {
                    $('.spinner-border').css('display', 'none');
                    $('.btn-submit').css('display', 'block');
                    $('#gettouchmodal').modal('toggle');
                    $('#gettouch').trigger("reset");
                    $('.btn-refresh').trigger("click");
                    // window.location.reload();

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    $('.btn-refresh').trigger("click");
                    $.each(jqXHR.responseJSON.errors, function(index, value) {
                        $('.spinner-border').css('display', 'none');
                        $('.btn-submit').css('display', 'block');

                        console.log(index);
                        $('#' + index + '_error').empty();
                        $('#' + index + '_error').append(value);
                    });
                }
            });

        });


        $(".btn-refresh").click(function(){
            $.ajax({
                type:'GET',
                url:"{{ url('/refresh_captcha')}}",
                success:function(data){
                    $(".captcha span").html(data.captcha);
                }
            });
        });
        // });
    </script>

</body>

</html>
