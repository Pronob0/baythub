<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    {{-- meta title  --}}
    <meta name="title" content="{{ $seo->title }}">
    <meta name="description" content="{{ $seo->meta_description }}">
    <meta name="keywords" content="{{ $seo->meta_tag }}">
    <meta property="og:image" content="{{ getPhoto($seo->meta_image) }}">
    <meta property="og:title" content="{{ $seo->title }}">
    <meta property="og:description" content="{{ $seo->meta_description }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="{{ $gs->website_title }}">
    <meta name="twitter:image" content="{{ getPhoto($seo->meta_image) }}">
    <meta name="twitter:title" content="{{ $seo->title }}">
    <meta name="twitter:description" content="{{ $seo->meta_description }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="{{ $gs->website_title }}">
    <meta name="twitter:creator" content="{{ $gs->website_title }}">
    <meta name="twitter:image:src" content="{{ getPhoto($seo->meta_image) }}">
    <meta name="twitter:domain" content="{{ url()->current() }}">
    <meta name="author" content="{{ $gs->website_title }}">


    <title>Document</title>

    <!-- Favicon -->
    <link href="{{ getPhoto($gs->favicon) }}" rel="icon">

    <!-- Custom CSS -->
    <link href="{{ asset('assets/front/css/styles.css') }}" rel="stylesheet">
		
    <!-- Custom Color Option -->
    <link href="{{ asset('assets/front/css/colors.css') }}" rel="stylesheet">

    {{-- select2 css  --}}
    <link href="{{ asset('assets/front/css/select2.min.css') }}" rel="stylesheet">
    
        {{-- toastr css  --}}   
    <link href="{{ asset('assets/front/css/toastr.min.css') }}" rel="stylesheet">

    {{-- fontawesome css  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @stack('css')


</head>
<body>

   

    <div id="main-wrapper">

        @include('partials.nav')

        @yield('content')

        @include('partials.footer')

        @include('partials.modal')

        <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>

       




    </div>

  <!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
		<script src="{{ asset('assets/front/js/jquery.min.js') }}"></script>
		<script src="{{ asset('assets/front/js/popper.min.js') }}"></script>
		<script src="{{ asset('assets/front/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('assets/front/js/rangeslider.js') }}"></script>
		<script src="{{ asset('assets/front/js/select2.min.js') }}" defer></script>
		<script src="{{ asset('assets/front/js/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('assets/front/js/slick.js') }}"></script>
		<script src="{{ asset('assets/front/js/slider-bg.js') }}"></script>
		<script src="{{ asset('assets/front/js/lightbox.js') }}"></script> 
		<script src="{{ asset('assets/front/js/imagesloaded.js') }}"></script>
		 
		<script src="{{ asset('assets/front/js/custom.js') }}"></script>
		<script src="{{ asset('assets/front/js/cl-switch.js') }}"></script>
        <script src="{{ asset('assets/front/js/main.js') }}"></script>
        {{-- toastr --}}
        <script src="{{ asset('assets/front/js/toastr.min.js') }}"></script>
        {!! Toastr::message() !!}

      
            <script>
    
            @if(Session::has('message'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
            toastr.success("{{ session('message') }}");
            @endif
    
            @if(Session::has('error'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
                toastr.error("{{ session('error') }}");
            @endif
    
            @if(Session::has('info'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
                toastr.info("{{ session('info') }}");
            @endif
    
            @if(Session::has('warning'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
                toastr.warning("{{ session('warning') }}");
            @endif
       
</script>

        <script>

            $('#signupmodal').click(function(){
                $('#login').modal('hide');
            });


            $('#loginform').submit(function(e){

                e.preventDefault();
            $("#loginform button.submit-btn").prop("disabled", true);
			$(".formSpin").css('display', 'inline-block');
			$("#loginform .alert-info").show();
			$("#loginform .alert-info p").html($("#authdata").val());
                var data = $(this).serialize();
                var url = $(this).attr('action');
                var method = $(this).attr('method');
                $.ajax({
                    data: data,
                    url: url,
                    type: method,
                    dataType: 'json',
                    success: function(data){
                       
                        if(data.errors){
                            $(".formSpin").css('display', 'none');
						$("#loginform .alert-success").hide();
						$("#loginform .alert-info").hide();
						$("#loginform .alert-danger").show();
						$("#loginform .alert-danger ul").html("");
						for (var error in data.errors) {
							$("#loginform .alert-danger p").html(data.errors[error]);
						}
                        }else {
                        $(".formSpin").css('display', 'none');
						$("#loginform .alert-info").hide();
						$("#loginform .alert-danger").hide();
						$("#loginform .alert-success").show();
						$("#loginform .alert-success p").html("Success !");
                            window.location.href = data;
                        }
                    }
                });
            });


        $('#registerform').submit(function(e){

        e.preventDefault();
        $("#registerform button.submit-btn").prop("disabled", true);
        $(".formSpin").css('display', 'inline-block');
        $("#registerform .alert-info").show();
        $("#registerform .alert-info p").html($("#processdata").val());
        var data = $(this).serialize();
        var url = $(this).attr('action');
        var method = $(this).attr('method');
        $.ajax({
            data: data,
            url: url,
            type: method,
            dataType: 'json',
            success: function(data){
       
        if(data.errors){
        $(".formSpin").css('display', 'none');
        $("#registerform .alert-success").hide();
        $("#registerform .alert-info").hide();
        $("#registerform .alert-danger").show();
        $("#registerform .alert-danger ul").html("");
        for (var error in data.errors) {
            $("#registerform .alert-danger p").html(data.errors[error]);
        }
        }else {
        $(".formSpin").css('display', 'none');
        $("#registerform .alert-info").hide();
        $("#registerform .alert-danger").hide();
        $("#registerform .alert-success").show();
        $("#registerform .alert-success p").html("Success !");
            window.location.href = data;
        }
    }
});
});


$('.upload__img-close').click(function(){ 
    var slug = $(this).data('img');

    // get method delete url 
    $.get("{{ url('user/portfolio/delete') }}/"+slug, function(data){

    if(data.status == 'success'){
        toastr.success(data.message);
        $(this).parent().remove();

    }else{
        toastr.error(data.message);
    }

    });
    
});

$(document).ready(function() {
    $('.js-example-basic-single').select2();
});

$(document).ready(function() {
            $('#towns').select2({
                ajax: {
                    url: '{{ route('towns.index') }}',
                    dataType: 'json',
                    delay: 250,
                    data: function (params) {
                        return {
                            q: params.term // Search term
                        };
                    },
                    processResults: function (data) {
                        return {
                            results: data.map(function(town) {
                                return { id: town.id, text: town.town };
                            })
                        };
                    },
                    cache: true
                },
                minimumInputLength: 2,
                placeholder: 'Select a town',
            });
        });



            
        </script>

        @stack('js')  
    
</body>
</html>