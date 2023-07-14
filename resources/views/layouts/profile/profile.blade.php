<head>
    <link rel="stylesheet" href="/css/layouts/profile.css">
</head>

@extends('templates.2-row')

@section('main-section')
    <section>
        <div class="wrapper columns is-3 m-6" data-aos="zoom-in">
            <div class="column is-8">
                <div class="form-wrapper">
                    <div class="up-wrapper">

                        <form action="/profile/update" method="POST" id="update_profile" enctype="multipart/form-data">
                            @csrf
                            <h3 class="form-title black">Profile Details</h3>
                            <div class="profile-picture">
                                <img id="imagePreview" src="{{ $user->profile_picture }}" alt="">
                                <input id="profile_pics" class="file-input" style="display: none" accept="image/png, image/jpg, image/jpeg" type="file" name="profile_pics"  onchange="showPreview(this)">
                                <input type="hidden" name="oldimage" id="oldimage" value="{{ $user->profile_picture }}">
                                <label for="profile_pics" class="button-semi-green pointer">
                                  Upload new picture
                                </label>
                              </div>

                            <div class="field">
                                <label class="label">Name</label>
                                <div class="control">
                                    <input class="input" type="text" name="name" value="{{ $user->name }}" class="input @error('name') is-invalid @enderror">
                                </div>
                                @error('name')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="field">
                                <label class="label">Username</label>
                                <div class="control">
                                    <input class="input" type="text" value="{{ $user->username }}" disabled>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Email</label>
                                <div class="control">
                                    <input class="input" type="email" value="{{ $user->email }}" disabled>
                                </div>
                            </div>
                    </div>

                        <span class="line"></span>

                        <div class="wrapper-button">
                            <button class="button-white del pointer" id="cancel-update" type="submit" name="action" value="cancel">Cancel</button>
                            <button class="button-green pointer" id="save-update" type="submit" name="action" value="save">Save profile</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="column">
                <div class="right-form-wrapper">
                    <div class="up-wrapper">
                        <form action="/profile/change" method="POST" id="change_password">
                            @csrf
                            <h3 class="form-title black">Change Password</h3>
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
                            <div class="field">
                                <label class="label">Current Password <span class="required-tag"></span></label>
                                <div class="control">
                                    <input class="input" type="password" name="current_password" placeholder="•••••••••" required
                                    class="input @error('current_password') is-invalid @enderror">
                                </div>
                                @error('current_password')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="field">
                                <label class="label">New Password <span class="required-tag"></span></label>
                                <div class="control">
                                    <input class="input" type="password" name="new_password" placeholder="•••••••••" required
                                    class="input @error('new_password') is-invalid @enderror">
                                </div>
                                @error('new_password')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="field">
                                <label class="label">Confirm New Password <span class="required-tag"></span></label>
                                <div class="control">
                                    <input class="input" type="password" name="confirm_password" placeholder="•••••••••" required
                                    class="input @error('confirm_password') is-invalid @enderror">
                                </div>
                                @error('confirm_password')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                    </div>

                        <span class="line-2"></span>

                        <div class="save-button">
                            <button class="button-white save" id="save-password">Save password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script src="/javascript/notification.js"></script>
    <script>
        function showPreview(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                // Update the imagePreview src with the new image
                var imagePreview = document.getElementById('imagePreview');
                imagePreview.src = e.target.result;
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
