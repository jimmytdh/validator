<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>CSMC Vaccination Registry Data Validation</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('/') }}/assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('/') }}/css/styles.css" rel="stylesheet" />
    <link href="{{ asset('/') }}/css/multi.css" rel="stylesheet" />
</head>
<body id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
    <div class="container px-5">
        <a class="navbar-brand fw-bold" href="#page-top">Data Validation</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="bi-list"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                <li class="nav-item"><a class="nav-link me-lg-3" href="#dataPrivacy" data-bs-toggle="modal">Privacy Notice</a></li>
                <li class="nav-item"><a class="nav-link me-lg-3" href="#download">Verify</a></li>
            </ul>
            <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0" data-bs-toggle="modal" data-bs-target="#feedbackModal">
                        <span class="d-flex align-items-center">
                            <i class="bi bi-file-earmark-lock2 me-2"></i>
                            <span class="small">Login</span>
                        </span>
            </button>
        </div>
    </div>
</nav>
<!-- Mashead header-->
<header class="masthead">
    <div class="container px-5" style="padding-bottom: 100px;">
        @yield('content')
    </div>
</header>

<!-- Footer-->
<footer class="bg-black text-center py-5">
    <div class="container px-5">
        <div class="text-white-50 small">
            <div class="mb-2">&copy; Your Website 2021. All Rights Reserved.</div>
            <a href="#!">Privacy</a>
            <span class="mx-1">&middot;</span>
            <a href="#!">Terms</a>
            <span class="mx-1">&middot;</span>
            <a href="#!">FAQ</a>
        </div>
    </div>
</footer>
<!-- Feedback Modal-->
<div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-gradient-primary-to-secondary p-4">
                <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Login</h5>
                <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body border-0 p-4">
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <!-- Name input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="username" type="text" placeholder="Username..." data-sb-validations="required" />
                        <label for="name">Username</label>
                        <div class="invalid-feedback" data-sb-feedback="name:required">A username is required.</div>
                    </div>

                    <div class="form-floating mb-3">
                        <input class="form-control" id="password" type="password" placeholder="Password..." data-sb-validations="required" />
                        <label for="name">Password</label>
                        <div class="invalid-feedback" data-sb-feedback="name:required">A password is required.</div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class="d-grid"><button class="btn btn-primary rounded-pill btn-lg disabled" id="submitButton" type="submit">Submit</button></div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="dataPrivacy" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-gradient-primary-to-secondary p-4">
                <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">CSMC COVID 19 VACCINATION REGISTRY DATA PRIVACY NOTICE</h5>
                <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body border-0 p-4">
                <p>Cebu South Medical Center respects personal data privacy. We are at the forefront of not only implementing but complying with the Data Privacy Act of 2012. Similarly, we would like to inform you regarding the way we would use your personal information. We recommend you to read this data privacy policy so that you will understand our approach towards the use of your personal data. Please, note at the end  of this registry form you are asked whether you were provided with an Electronic Informed Consent Form prior to the collection of your personal information.</p>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="{{ asset("/") }}/js/scripts.js"></script>
<script src="{{ asset("/") }}/js/multi.js"></script>
</body>
</html>
