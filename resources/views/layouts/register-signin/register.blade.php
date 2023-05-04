@extends('templates.registsignin')

@section('registsignin')

<div class="container pt-5 pb-5 is-centered" data-aos="fade-up">
    <div class="pembungkus grid mb-2">
        <div class="kotak1 is-4">
            <form action="\register" method="post">
                @csrf
                <div class="field">
                    <h1 class="header-font">Create an account</h1>
                    <h2 class="subheader-font">Please enter your details</h2>
                </div>
                <div class="keterangan">
                    <div class="field">
                        <label for="" class="label">
                            Username
                        </label>
                        <div class="control">
                            <input type="name" name="username" id="username" class="input" @error('username')is-invalid @enderror
                            placeholder="ander_cooked" required value="{{ old('username') }}">
                        </div>
                        @error('username')
                        <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label for="" class="label">
                            Email
                        </label>
                        <div class="control">
                            <input type="email" name="email" id="email" class="input" @error('email')is-invalid @enderror
                            placeholder="ander.cooked@gmail.com" required value="{{ old('email') }}">
                        </div>
                        @error('email')
                        <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label for="" class="label">
                            Password
                        </label>
                        <div class="control">
                            <input type="password" name="password" id="password" class="input" @error('password')is-invalid @enderror
                            placeholder="**********" required>
                        </div>
                        @error('password')
                        <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label for="" class="label">
                            Confirm Password
                        </label>
                        <div class="control">
                            <input type="password" name="confirm_password" id="confirm_password" class="input" @error('confirm_password')is-invalid @enderror
                            placeholder="**********" required>
                        </div>
                        @error('confirm_password')
                        <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="terms-condition mt-3">
                    <table>
                        <tr>
                            <div style="display: flex;">
                                <input type="checkbox" name="checkbox" id="checkbox" value="1" style="margin-bottom: auto; margin-top: auto;">
                                <label for="TNC">I agree with the</label>
                                <a href="#" class="tnc">Terms and Conditions</a>
                            </div>
                            @error('checkbox')
                                <p class="help is-danger">{{ $message }}</p>
                            @enderror
                        </tr>
                    </table>
                </div>

                <div class="field mb-2 mt-5 is-centered">
                    <label for="" class=" ">
                        <div class="control">
                            <a href="">
                                <button class="regist font">Create Account</button>
                            </a>
                        </div>
                    </label>
                </div>
            </form>
        </div>
        <div class="" style="padding: 0 25px;">
            <div class="kotak2">
                <img class="" src="assets/menu-pics/90.jpg" alt="">
            </div>
        </div>
    </div>
</div>
<div class="login mt-3 fontsize">
    <h2>
        Already have an account?&nbsp;
    </h2>
    <a href="/signin" class="fontcolor"> Log in </a>
</div>

@endsection
