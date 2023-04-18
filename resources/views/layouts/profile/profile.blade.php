<head>
    <link rel="stylesheet" href="css/layouts/profile.css">
</head>

@extends('templates.2-row')

@section('main-section')
    <div class="header">
        <h3 class="header-font black">Account Setting</h3>
    </div>

    <div class="wrapper columns is-3 m-6">
        <div class="column is-8">
            <div class="form-wrapper">
                <form action="" method="POST" id="update_profile">
                    <h3 class="form-title black">Profile Details</h3>
                    <div class="profile-picture">
                        <img src="assets/profile/profile-pics.png" alt="">
                        <button class="button-green" id="upload-pics">Upload new picture</button>
                        <button class="button-white" id="delete-pics">Delete</button>
                    </div>

                    <div class="field">
                        <label class="label">Name</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="e.g Alex Smith">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Username</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="e.g. alexsmith">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Email</label>
                        <div class="control">
                            <input class="input" type="email" placeholder="e.g. alexsmith@gmail.com">
                        </div>
                    </div>

                    <span class="line"></span>

                    <div class="wrapper-button">
                        <button class="button-white" id="cancel-update">Cancel</button>
                        <button class="button-green" id="save-update">Save profile</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="column">
            <div class="right-form-wrapper">
                <form action="" method="POST" id="change_password">
                    <h3 class="form-title black">Change Password</h3>

                    <div class="field">
                        <label class="label">Old Password <span class="required-tag">*</span></label>
                        <div class="control">
                            <input class="input" type="password" placeholder="e.g Alex Smith" required>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">New Password <span class="required-tag">*</span></label>
                        <div class="control">
                            <input class="input" type="password" placeholder="e.g. alexsmith" required>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Confirm Password <span class="required-tag">*</span></label>
                        <div class="control">
                            <input class="input" type="password" placeholder="e.g. alexsmith@gmail.com" required>
                        </div>
                    </div>

                    <span class="line-2"></span>

                    <div class="save-button">
                        <button class="button-white" id="save-password">Save password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
