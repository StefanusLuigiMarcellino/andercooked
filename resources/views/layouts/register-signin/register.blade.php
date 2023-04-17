@extends('templates.registsignin')

@section('registsignin')

<div class="container pb-3 pt-3 is-centered">
    <div class="pembungkus grid">
        <div class="kotak1 is-4 mt-3">
            <form action="">
                <div class="field">
                    <h1 class="header-font pt-3">Create an account</h1>
                    <h2>Please Enter Your Details</h2>
                </div>
                <div class="keterangan">
                    <div class="field">
                        <label for="" class="label">
                            Username
                        </label>
                        <div class="control">
                            <input type="name" name="" id="" class="input" placeholder="ander_cooked" required>
                        </div>
                    </div>
                    <div class="field">
                        <label for="" class="label">
                            Email
                        </label>
                        <div class="control">
                            <input type="email" name="" id="" class="input" placeholder="ander.cooked@gmail.com" required>
                        </div>
                    </div>
                    <div class="field">
                        <label for="" class="label">
                            Password
                        </label>
                        <div class="control">
                            <input type="password" name="" id="" class="input" placeholder="**********" required>
                        </div>
                    </div>
                    <div class="field">
                        <label for="" class="label">
                            Confirm Password
                        </label>
                        <div class="control">
                            <input type="password" name="" id="" class="input" placeholder="**********" required>
                        </div>
                    </div>
                </div>
                <div class="field">
                    <label for="" class="SK pt-3">
                        <tr>
                            <th>
                                <input type="checkbox" name="" id="" class="">
                            </th>
                            <th>
                                I agree to the Term and Conditions
                            </th>
                            </tr>
                    </label>
                </div>
                <div class="field mb-2 is-centered">
                    <label for="" class=" ">
                        <div class="control">
                            <a href="">
                                <button class="regist mb-2 font">Create Account</button>
                            </a>
                        </div>
                    </label>
                </div>
            </form>
        </div>
        <div class="kotak2 is-4">
            <img src="assets/food-pics/foodexample.png" alt="">
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
