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
                                <li><a class="dropdown-item" href="profile_employer">Profile</a></li>
                                <li><a class="dropdown-item" href="change_password">Change password</a></li>
                                <li><a class="dropdown-item" href="change_password">Saved job</a></li>
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


        <div class="profile-card card shadow-sm border-0">
            <div class="card-body d-flex justify-content-between">
                <div class="content-info">
                    <div class="content-text-card-top mb-5">
                        <a href="job_detail" class="job-title-post">Kitchen staff</a>
                        <p class="company-name-text fw-normal" style="font-size: 22px; color:#363636">PT Nopal Ga Suka
                            Backend</p>
                    </div>

                    <div class="content-text-card-bottom">
                        <p>Part Time</p>
                        <p>Malang, Jawa Timur</p>
                        <p>Rp 1.500.000,00 - 2.500.000,00</p>
                    </div>
                </div>

                <div class="content-pic">
                    <div class="pic-wrapper position-relative">
                        <div class="dropdown">
                            <button type="button" class="save-btn d-flex align-items-center" id="saveBtn"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <svg width="7" height="22" viewBox="0 0 7 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3.4 5.8C2.07452 5.8 1 4.72548 1 3.4C1 2.07452 2.07452 1 3.4 1C4.72548 1 5.8 2.07452 5.8 3.4C5.8 4.72548 4.72548 5.8 3.4 5.8Z"
                                        stroke="white" stroke-width="2" />
                                    <path
                                        d="M3.4 13C2.07452 13 1 11.9255 1 10.6C1 9.27452 2.07452 8.2 3.4 8.2C4.72548 8.2 5.8 9.27452 5.8 10.6C5.8 11.9255 4.72548 13 3.4 13Z"
                                        stroke="white" stroke-width="2" />
                                    <path
                                        d="M3.4 20.2C2.07452 20.2 1 19.1255 1 17.8C1 16.4745 2.07452 15.4 3.4 15.4C4.72548 15.4 5.8 16.4745 5.8 17.8C5.8 19.1255 4.72548 20.2 3.4 20.2Z"
                                        stroke="white" stroke-width="2" />
                                </svg>
                            </button>

                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="saveBtn">
                                <li><a class="dropdown-item" href="#" id="actionEdit">Edit</a></li>
                                <li><a class="dropdown-item text-danger" href="#" id="actionDelete">Delete</a>
                                </li>
                            </ul>
                        </div>

                        <div class="pic-box"></div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/index.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var editBtn = document.getElementById('actionEdit');
            var deleteBtn = document.getElementById('actionDelete');

            if (editBtn) {
                editBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    // Frontend-only behavior: open edit view or show a message
                    alert('Edit clicked (frontend only)');
                });
            }

            if (deleteBtn) {
                deleteBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    if (confirm('Are you sure you want to delete this item?')) {
                        // Frontend-only: show confirmation
                        alert('Deleted (frontend only)');
                    }
                });
            }
        });
    </script>

</body>

</html>
