<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HobLoop - Form View Posting</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-transparent shadow-0 border-0 p-0">
        <div class="container-fluid p-4">
            <a class="logo-header navbar-brand fw-bold me-5" href="landing_page">HobLoop</a>
            <span class="navbar-text ms-2 d-none d-lg-inline" style="font-size: 1.1rem; color: #0A090B;">
                Form View Posting
            </span>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <div class="nav-links-box d-flex w-100 justify-content-end">
                    <ul class="navbar-nav nav-gap me-5">
                        <li class="nav-item">
                            <a class="nav-link" href="landing_page">Job search</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="seeker_posting">Posting</a>
                        </li>
                        <li class="nav-item dropdown">
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

                    <a class="navbar-text ms-auto d-none d-lg-block" href="employer_login">
                        Are you an employer?
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container my-5">
        <div class="profile-card card shadow-sm border-0 position-relative">
            <div class="card-body">

                <div class="dropdown action-dropdown-custom">
                    <button type="button" class="save-btn d-flex align-items-center" id="saveBtn">
                        <svg width="24" height="24" viewBox="0 0 24 24">
                            <path
                                d="M8.7899 6.48395H14.2066M11.5 15.1936L17.1669 20.2558C17.4891 20.5436 18 20.3149 18 19.8829V5C18 3.89543 17.1046 3 16 3H7C5.89543 3 5 3.89543 5 5V19.8829C5 20.3149 5.51092 20.5436 5.8331 20.2558L11.5 15.1936Z"
                                stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>

                <div class="row align-items-start">
                    <div class="col-md-7">
                        <div class="red-placeholder"></div>
                        <a href="job_detail" class="job-title-post">Kitchen Staff</a>
                        <p class="company-name-text fw-normal">PT Nopal Ga Suka Backend</p>

                        <ul class="job-info-list">
                            <li>
                                <!-- ICON PART TIME -->
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
                                    <path
                                        d="M19.7143 16.1672V21.7145M15.6071 3.28571H23.8214M33.6786 22.0612C33.6786 29.8383 27.4265 36.1428 19.7143 36.1428C12.002 36.1428 5.75 29.8383 5.75 22.0612C5.75 14.2841 12.002 7.97958 19.7143 7.97958C27.4265 7.97958 33.6786 14.2841 33.6786 22.0612Z"
                                        stroke="#363636" stroke-width="3.28571" stroke-linecap="round" />
                                </svg>
                                Part Time
                            </li>

                            <li>
                                <!-- ICON LOKASI -->
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
                                    <path
                                        d="M23.6577 15.7717C23.6577 17.9493 21.8924 19.7145 19.7148 19.7145C17.5372 19.7145 15.772 17.9493 15.772 15.7717C15.772 13.5941 17.5372 11.8288 19.7148 11.8288C21.8924 11.8288 23.6577 13.5941 23.6577 15.7717Z"
                                        stroke="#363636" stroke-width="3.28571" />
                                    <path
                                        d="M19.7143 35.4857C19.7143 35.4857 32.0572 24.5143 32.0572 16.2857C32.0572 9.46896 26.5311 3.94287 19.7143 3.94287C12.8975 3.94287 7.37146 9.46896 7.37146 16.2857C7.37146 24.5143 19.7143 35.4857 19.7143 35.4857Z"
                                        stroke="#363636" stroke-width="3.28571" />
                                </svg>
                                Malang, Jawa Timur
                            </li>

                            <li>
                                <!-- ICON GAJI -->
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3.94287 12.8143C3.94287 11.1811 5.26683 9.85712 6.90001 9.85712H32.5286C34.1618 9.85712 35.4857 11.1811 35.4857 12.8143V26.6143C35.4857 28.2474 34.1618 29.5714 32.5286 29.5714H6.90001C5.26683 29.5714 3.94287 28.2474 3.94287 26.6143V12.8143Z"
                                        stroke="#363636" stroke-width="3.28571" />
                                    <path
                                        d="M23.6572 19.7143C23.6572 21.8918 21.8919 23.6571 19.7143 23.6571C17.5367 23.6571 15.7714 21.8918 15.7714 19.7143C15.7714 17.5367 17.5367 15.7714 19.7143 15.7714C21.8919 15.7714 23.6572 17.5367 23.6572 19.7143Z"
                                        stroke="#363636" stroke-width="3.28571" />
                                </svg>
                                000,00 – 2.500.000,00
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-5">
                        <h5 class="fw-bold mb-3 mt-5">Persyaratan untuk pekerjaan ini:</h5>

                        <ul class="job-info-list">
                            <li>
                                <!-- ICON EDUCATION -->
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19.7142 19.7143V18.0714C18.8069 18.0714 18.0713 18.8069 18.0713 19.7143H19.7142ZM19.8451 19.7143H21.488C21.488 18.8069 20.7524 18.0714 19.8451 18.0714V19.7143ZM19.8451 19.8327V21.4755C20.7524 21.4755 21.488 20.74 21.488 19.8327H19.8451ZM19.7142 19.8327H18.0713C18.0713 20.74 18.8069 21.4755 19.7142 21.4755V19.8327ZM34.4999 19.7143H32.857C32.857 26.9729 26.9728 32.8571 19.7142 32.8571V34.5V36.1428C28.7874 36.1428 36.1428 28.7875 36.1428 19.7143H34.4999ZM19.7142 34.5V32.8571C12.4556 32.8571 6.57132 26.9729 6.57132 19.7143H4.92847H3.28561C3.28561 28.7875 10.6409 36.1428 19.7142 36.1428V34.5ZM4.92847 19.7143H6.57132C6.57132 12.4557 12.4556 6.57142 19.7142 6.57142V4.92856V3.2857C10.6409 3.2857 3.28561 10.641 3.28561 19.7143H4.92847ZM19.7142 4.92856V6.57142C26.9728 6.57142 32.857 12.4557 32.857 19.7143H34.4999H36.1428C36.1428 10.641 28.7874 3.2857 19.7142 3.2857V4.92856ZM27.107 19.7143H25.4642C25.4642 22.8899 22.8898 25.4643 19.7142 25.4643V27.1071V28.75C24.7045 28.75 28.7499 24.7046 28.7499 19.7143H27.107ZM19.7142 27.1071V25.4643C16.5385 25.4643 13.9642 22.8899 13.9642 19.7143H12.3213H10.6785C10.6785 24.7046 14.7239 28.75 19.7142 28.75V27.1071ZM12.3213 19.7143H13.9642C13.9642 16.5386 16.5385 13.9643 19.7142 13.9643V12.3214V10.6786C14.7239 10.6786 10.6785 14.724 10.6785 19.7143H12.3213ZM19.7142 12.3214V13.9643C22.8898 13.9643 25.4642 16.5386 25.4642 19.7143H27.107H28.7499C28.7499 14.724 24.7045 10.6786 19.7142 10.6786V12.3214ZM19.7142 19.7143V21.3571H19.8451V19.7143V18.0714H19.7142V19.7143ZM19.8451 19.7143H18.2023V19.8327H19.8451H21.488V19.7143H19.8451ZM19.8451 19.8327V18.1898H19.7142V19.8327V21.4755H19.8451V19.8327ZM19.7142 19.8327H21.357V19.7143H19.7142H18.0713V19.8327H19.7142Z"
                                        fill="#363636" />
                                </svg>

                                SMA/SMK Sederajat
                            </li>

                            <li>
                                <!-- ICON EXPERIENCE -->
                                <svg width="35" height="40" viewBox="0 0 35 40" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.6039 35H25.1251C25.9477 35 26.6145 34.2325 26.6145 33.2857V28.7062C26.6145 28.3403 26.5128 27.9839 26.3242 27.6893L22.0292 20.9801C21.6534 20.3932 21.6413 19.5969 21.999 18.9952L25.982 12.2948C26.1515 12.0097 26.2422 11.6723 26.2422 11.3268V6.71429C26.2422 5.76751 25.5754 5 24.7528 5H10.6039C9.78131 5 9.1145 5.76751 9.1145 6.71429V11.2938C9.1145 11.6597 9.21624 12.0161 9.40484 12.3107L13.6763 18.9831C14.0634 19.5878 14.0634 20.4122 13.6763 21.0169L9.40484 27.6893C9.21624 27.9839 9.1145 28.3403 9.1145 28.7062V33.2857C9.1145 34.2325 9.78131 35 10.6039 35Z"
                                        stroke="#363636" stroke-width="3.28571" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>

                                Minimum 6 months experience
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="mt-4">
                    <h5 class="fw-bold mb-3">Deskripsi pekerjaan</h5>
                    <p class="text-secondary" style="line-height: 1.6;">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a molestie justo, non
                        blandit turpis. Sed congue nulla ac purus eleifend vulputate non at dolor.
                    </p>
                </div>

                <div class="d-flex gap-3 mt-5">
                    <button class="button-apply">
                        Apply
                    </button>
                    <a href="view_posting" class="button-back-view">
                        Back
                    </a>
                </div>

            </div>
        </div>
    </div>


    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/index.js') }}"></script>

</body>

</html>
