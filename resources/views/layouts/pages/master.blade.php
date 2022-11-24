<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="_token" content="{{csrf_token()}}" />

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">

        <!--=============== REMIXICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/styles.css">
        

        <title>Sushi</title>
    </head>
    <body>

        <div id="main">
            <!--==================== HEADER ====================-->
            @include('layouts.pages.header')
    
            <!--==================== MAIN ====================-->
            @include('layouts.pages.main')
    
            <!--==================== FOOTER ====================-->
            @include('layouts.pages.footer')
        </div>

        <!--=============== SIGNIN/REGISTER ===============-->
        @include('layouts.pages.login')

        <!--=============== SCROLLREVEAL ===============-->
        <script src="{{asset('assets/js/scrollreveal.min.js')}}"></script>

        <!--=============== MAIN JS ===============-->
        <script src="{{asset('assets/js/main.js')}}"></script>
        <script src="{{asset('assets/js/showerror.js')}}"></script>

        <!--=============== JQUERY ===============-->
        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

        <!--=============== SWAL ===============-->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


        <script>
    
            $(document).ready(function(){

                // Show/hide login register
                $("#register").hide();
                $('#forgotpassword').hide();
                $('#resetpassword').hide();

                $(".btn__register").click( ()=>{
                    $("#login").hide();
                    $("#register").show();
                    $('#forgotpassword').hide();
                    $('#resetpassword').hide();
                })

                $(".btn__login").click( ()=>{
                    $("#register").hide();
                    $("#login").show();
                    $('#forgotpassword').hide();
                    $('#resetpassword').hide();
                })

                $('.forgot-pass').click( ()=>{
                    $('#forgotpassword').show();
                    $("#register").hide();
                    $("#login").hide();
                    $('#resetpassword').hide();
                })
                
                $('.btn__resset').click( ()=>{
                    $('#forgotpassword').hide();
                    $("#register").hide();
                    $("#login").hide();
                    $('#resetpassword').show();
                })

                $("#register_form").submit(function(e){
                    e.preventDefault();
                    
                    $.ajax({
                        url: '{{ route('register') }}',
                        method: 'post',
                        data: $(this).serialize(),
                        dataType: 'json',
                        success: function(res){
                            if(res.status == 400){
                                showError('name', res.messages.name);
                                showError('email', res.messages.email);
                                showError('password', res.messages.password);
                                showError('cpassword', res.messages.cpassword);
                            }else if(res.status == 200){
                                $('#register_form')[0].reset();
                                swal({
                                    title: 'Successfully!',
                                    text: res.messages,
                                    icon: 'success',
                                })
                            }
                        }
                    })
                })
                
                $("#login_form").submit(function(e){
                    e.preventDefault();

                    $.ajax({
                        url: '{{ route('login') }}',
                        method: 'post',
                        data: $(this).serialize(),
                        dataType: 'json',
                        success: function(res){
                            if(res.status == 400){
                                showError('email_login', res.messages.email);
                                showError('password_login', res.messages.password);
                            }else if(res.status == 401){
                                swal({
                                    title: 'Error!',
                                    text: res.messages,
                                    icon: 'error',
                                })
                            }else{
                                if(res.status == 200){
                                    setTimeout(() => {
                                        window.location = '{{ route('home') }}';
                                    }, 2000);
                                    swal({
                                        title: 'Successfully!',
                                        text: res.messages,
                                        icon: 'success',
                                    })
                                    
                                }
                            }
                        }
                    });
                })
            })
        </script>
    </body>
</html>