<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HobLoop</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .hero {
            background-size: cover;
            background-position: center;
            height: 580px;
            position: relative;
        }

        .search-box {
            position: absolute;
            bottom: 40px;
            left: 50%;
            transform: translateX(-50%);
            width: 80%;
            max-width: 950px;
        }
    </style>
</head>

<body>

    <div class="hero text-white">

        <nav class="d-flex justify-content-between px-5 pt-3">
            <h3 class="fw-bold">HobLoop</h3>
            <div class="d-flex align-items-center gap-4">
                <a href="#" class="text-white text-decoration-none">Job Search</a>
                <a href="#" class="text-white text-decoration-none">Profile</a>
                <a href="#" class="text-white text-decoration-none">Settings</a>
                <a href="#" class="btn btn-danger px-4">Log In</a>
            </div>
        </nav>

        <div class="search-box bg-white p-4 shadow rounded-3">
            <div class="row g-3">
                <div class="col-md-4">
                    <input type="text" class="form-control p-3" placeholder="Enter keyword">
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control p-3" placeholder="Classification">
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control p-3" placeholder="City or region">
                </div>
            </div>

            <div class="text-end mt-3">
                <button class="btn btn-primary px-4">Search</button>
            </div>
        </div>

    </div>

    <div class="container py-5">
        <h2 class="fw-bold mb-4">Introducing HobLoop</h2>

        <div class="card shadow border-0 rounded-4">
            {{-- <img src="{{ asset('img/image1.png') }}" class="card-img-top rounded-4" alt=""> --}}
        </div>

        <button class="btn btn-primary mt-4">See more</button>
    </div>

    <div class="bg-light py-5">
        <div class="container">
            <h2 class="fw-bold mb-5">Connecting opportunities for a sustainable future</h2>

            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card p-4 shadow border-0 rounded-4">
                        <h3 class="fw-bold">1k+ Jobs available</h3>
                        <p class="text-muted mt-2">Browse job opportunities</p>
                        <button class="btn btn-primary mt-3">Get started</button>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card p-4 shadow border-0 rounded-4">
                        <h3 class="fw-bold">1k+ Candidates Ready to Apply</h3>
                        <p class="text-muted mt-2">Find the right talent</p>
                        <button class="btn btn-primary mt-3">Get started</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white py-5 mt-5">
        <div class="container">

            <h3 class="fw-bold mb-3">Where opportunities begin</h3>
            <a href="#" class="btn btn-danger px-4 py-2 mb-4">Join now</a>

            <div class="row text-white small">
                <div class="col-md-3 mb-3">
                    <h6 class="fw-bold">Job seekers</h6>
                    <p class="mb-0">Find jobs</p>
                </div>
                <div class="col-md-3 mb-3">
                    <h6 class="fw-bold">Employers</h6>
                    <p class="mb-0">Post jobs</p>
                </div>
                <div class="col-md-3 mb-3">
                    <h6 class="fw-bold">About us</h6>
                    <p class="mb-0">Learn more</p>
                </div>
                <div class="col-md-3 mb-3">
                    <h6 class="fw-bold">Contact</h6>
                    <p class="mb-0">Get support</p>
                </div>
            </div>

            <hr class="border-light my-4">

            <p class="text-center mb-0 fw-bold">HobLoop</p>
            <p class="text-center small opacity-75">© 2025 HobLoop. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
