<div class="nav__signin">
    <div class="nav__overlay">
        <div class="nav__content">
            <div class="nav__form">
                <button class="form__btn-close">
                    <img src="{{asset('assets/img/close.png')}}" alt="" class="close-img">
                </button>
                <img class="leaf__1" src="{{asset('assets/img/leaf-branch-3.png')}}" alt="">
                <div class="form__left" id="login">
                    <div>
                        <div class="left__heading">Log In</div>
                        <form action="#"  method="POST" id="login_form">
                            @csrf
                            <div class="input">
                                <input type="email" name="email" id="email" placeholder="Email" value="{{ old('email_login') }}">
                            </div>
                            <span class="email_login_error"></span>
                            <div class="input">
                                <input type="password" name="password" id="password" placeholder="Password" value="{{ old('password_login') }}">
                            </div>
                            <span class="password_login_error"></span>
                            <button class="submit" type="submit" id="login_btn">Log In</button>
                        </form>
                        <p class="forgot-pass">Forgot password</p>
                    </div>
                    <p class="create-account">
                        Don't have account?
                        <span class="btn__register">Register Here</span>
                    </p>
                </div>
                <div class="form__left" id="register">
                    <div>
                        <div class="left__heading">Register</div>
                        <div id="show_success_alert"></div>
                        <form action="{{ route('register') }}" method="POST" id="register_form">
                            @csrf
                            <div class="input">
                                <input type="text" name="name" placeholder="Full Name" id="name" value="{{ old('name') }}">
                            </div>
                            <span class="name_error"></span>
                            <div class="input">
                                <input type="email" name="email" placeholder="Email" id="email" value="{{ old('email') }}">
                            </div>
                            <span class="email_error"></span>
                            <div class="input">
                                <input type="password" name="password" placeholder="Password" id="password" value="{{ old('password') }}">
                            </div>
                            <span class="password_error"></span>
                            <div class="input">
                                <input type="password" name="cpassword" placeholder="Confirm Password" id="cpassword" value="{{ old('cpassword') }}">
                            </div>
                            <span class="cpassword_error"></span>
                            <button class="submit" type="submit" id="register_btn">Register</button>
                        </form>
                    </div>
                    <p class="have-account">
                        Already have an account?
                        <span class="btn__login">Login Here</span>
                    </p>
                </div>
                <div class="form__left" id="forgotpassword">
                    <div>
                        <div class="left__heading">Forgot Password</div>
                        <form action="#"  method="POST" id="forgot_form">
                            @csrf
                            <div class="input">
                                <input type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}">
                            </div>
                            <button class="submit" type="submit" id="forgot_btn">Reset Password</button>
                        </form>
                    </div>
                    <p class="have-account">
                        Back to
                        <span class="btn__login">Login Page</span>
                    </p>
                </div>
                <div class="form__left" id="resetpassword">
                    <div>
                        <div class="left__heading">Reset Password</div>
                        <form action="#"  method="POST" id="reset_form">
                            @csrf
                            <div class="input">
                                <input type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}">
                            </div>
                            <div class="input">
                                <input type="password" name="npass" id="npass" placeholder="New Password" value="{{ old('npass') }}">
                            </div>
                            <div class="input">
                                <input type="password" name="cnpass" id="cnpass" placeholder="Confirm New Password" value="{{ old('cnpass') }}">
                            </div>
                            <button class="submit" type="submit" id="reset_btn">Reset Password</button>
                        </form>
                    </div>
                </div>
                <div class="form__right">
                    <img src="{{asset('assets/img/a.png')}}" alt="">
                    <div class="content">
                        <h4>Shopping at Sushi</h4>
                        <span>Super deals every day</span>
                    </div>
                </div>
        </div>
    </div>
</div>

