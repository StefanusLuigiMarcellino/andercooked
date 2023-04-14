<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="node_modules/bulma/css/bulma.min.css">
    <link rel="stylesheet" href="css/layouts/register-signin.css">
    {{-- <link rel="stylesheet" href="css/templates/master.css"> --}}
</head>
<body>
    <div class="bgImage is-centered pb-3">
        <img src="assets/logo/full-logo.svg" alt="">
    </div>

    <div class="container is-centered">
        {{-- <div class="image">
            <img src="assets/random/Rectangle.png" alt="">
        </div> --}}
        <div class="pembungkus grid">
            <div class="kotak1 is-4 mt-3">
                <form action="">
                    <div class="field">
                        <h1 class="label header-font pt-3">Create an account</h1>
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
                    <div class="field is-centered">
                        <label for="" class=" ">
                            <div class="control">
                                <button class="regist is-primary mb-2 font">Create Account</button>
                            </div>
                        </label>
                    </div>
                </form>
            </div>
            <div class="kotak2 is-4">
            </div>
        </div>
    </div>
</body>
</html>
