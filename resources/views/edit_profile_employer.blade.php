<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HobLoop - Profile</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-transparent shadow-0 border-0 p-0">
        <div class="container-fluid p-4">
            <a class="logo-header navbar-brand fw-bold me-5" href="landing_page">HobLoop</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <div class="nav-links-box d-flex w-100">
                    <ul class="navbar-nav nav-gap">
                        <li class="nav-item">
                            <a class="nav-link" href="landing_page">Job search</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="seeker_posting">Posting</a>
                        </li>
                        <li class="nav-item dropdown nav-link-item-custom">
                            <a class="nav-link dropdown-toggle d-flex align-items-center gap-1" href="#"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Profile
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                                    <path d="M7 10L12.0008 14.58L17 10" stroke="#0A090B" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="profile_seeker">Profile</a></li>
                                <li><a class="dropdown-item" href="change_password">Change password</a></li>
                                <li><a class="dropdown-item" href="saved_jobs">Saved job</a></li>
                                <li><a class="dropdown-item text-danger" href="#">Log out</a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </nav>

    <div class="container my-5">

        <p class="profile-text">Edit Profile</p>

        <div class="profile-card card shadow-sm border-0">

            <p class="fw-medium profile-section-title">About</p>
            <div class="about-section">
                <textarea class="form-control company-about-text" name="about" rows="6"
                    placeholder="Write something about your company..."></textarea>
            </div>


            <p class="fw-medium profile-section-title mt-3">Company information</p>

            <form action="#" method="POST" class="personal-information row g-4">
                @csrf

                <div class="col-12 col-md-4">
                    <label class="text-secondary fw-medium mb-1 small">Name</label>
                    <input type="text" class="form-control py-2" name="name" placeholder="Enter your name">
                </div>

                <div class="col-12 col-md-4">
                    <label class="text-secondary fw-medium mb-1 small">Email</label>
                    <input type="email" class="form-control py-2" name="email" placeholder="Your email">
                </div>

                <div class="col-12 col-md-4">
                    <label class="text-secondary fw-medium mb-1 small">Country</label>
                    <input type="text" class="form-control py-2" name="country" placeholder="Your country">
                </div>

                <div class="col-12 col-md-4">
                    <label class="text-secondary fw-medium mb-1 small">Address</label>
                    <input type="text" class="form-control py-2" name="address" placeholder="Your address">
                </div>

                <div class="col-12 col-md-4">
                    <label class="text-secondary fw-medium mb-1 small">Phone</label>
                    <input type="text" class="form-control py-2" name="phone" placeholder="+62 xxx">
                </div>

                <div class="col-12 mt-3 d-flex justify-content-end">
                    <button type="submit"
                        class="btn-save d-flex align-items-center justify-content-center shadow text-white gap-2 px-4 py-2"
                        style="border-radius: 12px; background-color:#003366;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6.9375 19.875V14.8125C6.9375 14.1912 7.44118 13.6875 8.0625 13.6875H15.9375C16.5588 13.6875 17.0625 14.1912 17.0625 14.8125V20.4375M17.0625 4.125V6.375C17.0625 6.99632 16.5588 7.5 15.9375 7.5L8.0625 7.5C7.44118 7.5 6.9375 6.99632 6.9375 6.375L6.9375 3M20.4351 6.93513L17.0649 3.56487C16.7032 3.20319 16.2127 3 15.7012 3H4.92857C3.86344 3 3 3.86344 3 4.92857V19.0714C3 20.1366 3.86344 21 4.92857 21H19.0714C20.1366 21 21 20.1366 21 19.0714V8.29883C21 7.78734 20.7968 7.2968 20.4351 6.93513Z"
                                stroke="white" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        Save
                    </button>
                </div>

            </form>

        </div>
    </div>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/index.js') }}"></script>

</body>

</html>
