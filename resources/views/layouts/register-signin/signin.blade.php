@extends('templates.registsignin')

@section('registsignin')

<div class="container pt-5 pb-5 is-centered" data-aos="fade-up">
    <div class="pembungkus grid">
        <div class="kotak1 is-4 mt-3">

            @if(session()->has('success'))
            <div class="notification is-success">
                <button class="delete"></button>
                {{ session('success') }}
            </div>
            @endif

            @if(session()->has('failed'))
            <div class="notification is-danger">
                <button class="delete"></button>
                {{ session('failed') }}
            </div>
            @endif


            <form action="/signin" method="post">
                @csrf
                <div class="field">
                    <h1 class="header-font">Welcome Back!</h1>
                    <h2 class="subheader-font">Please enter your details</h2>
                </div>
                <div class="keterangan">
                    <div class="field">
                        <label for="" class="label">
                            Email
                        </label>
                        <div class="control">
                            <input type="email" name="email" id="email" class="input @error('email')is-invalid @enderror"
                            placeholder="andercooked@gmail.com" required value="{{ old('email') }}">
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
                            <input type="password" name="password" id="password" class="input" placeholder="•••••••••" required>
                        </div>
                    </div>
                </div>
                <div class="field mb-2 is-centered">
                    <label for="" class=" ">
                        <div class="control">
                            <a href="">
                                <button class="regist mt-5 font">Log In</button>
                            </a>
                        </div>
                    </label>
                </div>
                <a href='/auth/google'>Login with Google</a>
            </form>
        </div>
        <div class="" style="padding: 0 25px;">
            <div class="kotak2">
                <img class="" src="{{ $picture }}" alt="">
            </div>
        </div>
    </div>
</div>
<div class="login mt-3 fontsize">
    <h2>
        Don't have an account?&nbsp;
    </h2>
    <a href="/register" class="fontcolor">Sign up</a>
</div>

@endsection
