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
                                <li><a class="dropdown-item text-danger" href="#">Log out</a></li>
                            </ul>
                        </li>
                    </ul>

                    <a class="navbar-text ms-auto" href="employer_login">
                        Are you an employer?
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container my-5">

        <p class="profile-text">Profile</p>

        <div class="profile-card card shadow-sm border-0">
            <div class="card-body">

                <div class="profile-header d-flex align-items-center flex-wrap">

                    <div class="pic-name d-flex align-items-center mb-3 mb-md-0">
                        <div class="bg-light rounded-circle p-4 me-3" style="width: 72px; height: 72px;"></div>

                        <div class="text-center">
                            <p class="highlight-name fw-medium text-white">Celeste Azher</p>
                        </div>
                    </div>

                    <div class="d-flex flex-column text-md-end text-white contact-box">
                        <span class="d-flex align-items-center justify-content-md-start mb-2">
                            <svg width="24" height="24" fill="none">
                                <path
                                    d="M4.6875 6.75L11.3596 11.5403C11.7449 11.8168 12.2551 11.8168 12.6404 11.5403L19.3125 6.75M5.25 19H18.75C19.9926 19 21 17.9553 21 16.6667V7.33333C21 6.04467 19.9926 5 18.75 5H5.25C4.00736 5 3 6.04467 3 7.33333V16.6667C3 17.9553 4.00736 19 5.25 19Z"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span class="ms-2">celesteazher@gmail.com</span>
                        </span>

                        <span class="d-flex align-items-center justify-content-md-start">
                            <svg width="24" height="24" fill="none">
                                <path
                                    d="M20.6633 18.771C20.6633 18.771 19.5047 19.909 19.2207 20.2426C18.7582 20.7362 18.2132 20.9693 17.4988 20.9693C17.4301 20.9693 17.3568 20.9693 17.2881 20.9647C15.9279 20.8779 14.6639 20.3477 13.7159 19.8953C11.1238 18.643 8.84771 16.8651 6.95629 14.6119C5.39461 12.7335 4.35044 10.9968 3.65891 9.13211C3.233 7.99409 3.07729 7.10744 3.14598 6.27107C3.19178 5.73634 3.39787 5.29302 3.77798 4.91368L5.33966 3.35519C5.56406 3.14496 5.80221 3.0307 6.03577 3.0307C6.32429 3.0307 6.55786 3.20437 6.70441 3.35062C6.70899 3.35519 6.71357 3.35977 6.71815 3.36434C6.99751 3.62485 7.26313 3.8945 7.54249 4.18243C7.68446 4.32868 7.83101 4.47493 7.97756 4.62575L9.22782 5.87345C9.71327 6.35791 9.71327 6.8058 9.22782 7.29026C9.09501 7.4228 8.96678 7.55534 8.83397 7.68331C8.44927 8.07636 8.75147 7.77477 8.35304 8.13126C8.34388 8.1404 8.33472 8.14497 8.33014 8.15411C7.93629 8.54716 8.00956 8.93107 8.092 9.19158C8.09658 9.20529 8.10116 9.219 8.10573 9.23271C8.43089 10.0188 8.88886 10.7592 9.58498 11.6413L9.58956 11.6459C10.8536 13.1998 12.1862 14.4109 13.6563 15.3387C13.8441 15.4575 14.0364 15.5535 14.2196 15.6449C14.3845 15.7272 14.5402 15.8049 14.673 15.8871C14.6913 15.8963 14.7097 15.91 14.728 15.9191C14.8837 15.9968 15.0302 16.0334 15.1814 16.0334C15.5615 16.0334 15.7996 15.7957 15.8775 15.718L16.7752 14.8222C16.9309 14.6668 17.1782 14.4794 17.4667 14.4794C17.7506 14.4794 17.9842 14.6576 18.1262 14.813L20.6587 17.3404C21.1305 17.8066 20.6633 18.771 20.6633 18.771Z"
                                    stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                            <span class="ms-2">+62 123-456-78910</span>
                        </span>
                    </div>
                </div>

                <div class="edit-button">
                    <i class="fas fa-pencil-alt"></i>
                </div>
            </div>

            <p class="fw-medium profile-section-title">Personal information</p>

            <div class="personal-information row g-4">

                <div class="col-12 col-md-4">
                    <p class="text-secondary fw-medium mb-1 small">Name</p>
                    <p class="fw-normal data-value mb-4">Celeste Azher</p>

                    <p class="text-secondary fw-medium mb-1 small">Last education</p>
                    <p class="fw-normal data-value mb-0">Bachelor of Informatics</p>
                </div>

                <div class="col-12 col-md-4">
                    <p class="text-secondary fw-medium mb-1 small">Email</p>
                    <p class="fw-normal data-value mb-4">celesteazher@gmail.com</p>

                    <p class="text-secondary fw-medium mb-1 small">Telephone</p>
                    <p class="fw-normal data-value mb-0">+62 123-456-78910</p>
                </div>

                <div class="col-12 col-md-4">
                    <p class="text-secondary fw-medium mb-1 small">Gender</p>
                    <p class="fw-normal data-value mb-4">Woman</p>

                    <div>
                        <p class="text-secondary fw-medium mb-1 small">CV</p>

                        <div class="cv-upload-card" id="cvUploadCard">

                            <input type="file" id="cvInputFile" accept="application/pdf">

                            <div id="cvDropArea">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.4058 21.6H5.6058C4.28031 21.6 3.2058 20.5254 3.20581 19.2L3.2059 4.80001C3.20591 3.47453 4.28043 2.40002 5.6059 2.40002H16.4062C17.7317 2.40002 18.8062 3.47454 18.8062 4.80002V11.4M17.3999 21.1882V17.7941M17.3999 17.7941V14.4M17.3999 17.7941L14.0058 17.7941M17.3999 17.7941L20.794 17.7941M7.40619 7.20002H14.6062M7.40619 10.8H14.6062M7.40619 14.4H11.0062"
                                        stroke="#B2B2B2" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <p class="fw-normal mb-1">Upload your PDF here -</p>
                                <p class="text-secondary fw-medium small mb-0">up to 10 MB</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/index.js') }}"></script>

</body>

</html>
