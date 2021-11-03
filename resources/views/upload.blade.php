
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ url('/') }}/images/favicon.png" sizes="16x16" type="image/png">
    <meta name="description" content="Vaccine Information Management System"/>

    <meta property="og:title" content="Vaccine Information Management System">
    <meta property="og:description" content="The VIMS-IR is the solution being used to collect the master list of eligble vaccinee. It is use to estimate how many vaccines should be allotted per facility, LGU, and Region">
    <meta property="og:image" content="{{ url('/images/banner.jpg') }}">
    <meta property="og:url" content="{{ url('/') }}">

    <meta property="twitter:title" content="Vaccine Information Management System">
    <meta property="twitter:description" content="The VIMS-IR is the solution being used to collect the master list of eligble vaccinee. It is use to estimate how many vaccines should be allotted per facility, LGU, and Region">
    <meta property="twitter:image" content="{{ url('/images/banner.jpg') }}">
    <link href="{{ url('/css/font-awesome.css') }}" rel="stylesheet">
    <title>Upload Vaccine Card</title>


    <!-- Bootstrap core CSS -->
    <link href="{{ url('/') }}/css/bootstrap.css" rel="stylesheet">
    <link href="{{ url('/') }}/css/register.css" rel="stylesheet">
    <style>
        .alert-circle {
            /*border-radius: 30px;*/
        }
        input {
            height: 45px !important;
            padding: 10px 20px !important;
        }
    </style>
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-lg-10 col-xl-9 mx-auto">
            <div class="card card-signin flex-row my-5">
                <div class="card-img-left d-none d-md-flex">
                    <!-- Background image for card set in CSS! -->
                </div>
                <div class="card-body">

                    <div class="text-center mb-1">
                        <img src="{{ url('/') }}/images/logo.png" alt="" width="80">
                    </div>

                    <h5 class="card-title text-center">
                        <span class="font-weight-bold">
                            @if($status == 'complete')
                                Upload Complete
                                <h4 class="text-success mt-3">Please check after 24 - 36 hours for your data to be updated.</h4>
                                <hr>
                                <small><a href="{{ url("/verify") }}"><i class="fa fa-arrow-left"></i> Back to verification page</a></small>

                            @else
                                Complete Your Data
                                <h5 class="text-success">Your vaccination card will help us validate your data.</h5>
                            @endif

                        </span>

                    </h5>
                    @if(session('invalid'))
                    <div class="alert alert-danger">
                        File type is <strong>INVALID.</strong> Please upload PDF or JPG or PNG file only.
                    </div>
                    @endif

                    @if($status != 'complete')
                    <form method="post" action="{{ request()->url() }}" class="text-center" enctype="multipart/form-data">
                        <p class="text-left font-weight-bold">In order to complete your data, please make sure:</p>
                        <ol class="text-left">
                            <li>You have been vaccinated by our Facility (Cebu South Medical Center).</li>
                            <li>Take photo of your vaccination card in a well-lit flat surface. Text must be clearly visible.</li>
                            <li>File type must be: <strong>PDF, JPG or PNG</strong></li>
                        </ol>
                        <p class="text-danger font-weight-bold">Here's an example of vaccination card:</p>
                        <div class="row">
                            <div class="col-sm-12">
                                <img id="img_content" src="{{ url('/images/vaccine_card.jpg') }}" alt="your image" class="img-thumbnail" width="100%" />
                            </div>
                        </div>
                        <div class="custom-file mt-3">
                            <input type="file" class="custom-file-input" id="imgInp" name="file" accept="image/jpeg, image/jpg, image/png, application/pdf" required>
                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                        </div>
                        <hr>
                        <p>By clicking <strong>Agree & Continue</strong>, you have read and agree to our <a class="font-weight-bold text-danger" href="#privacy">Data Privacy Policy</a>.</p>
                        {{ csrf_field() }}
                        <button class="btn btn-primary btn-block btn-lg mt-2" type="submit">
                            Agree & Continue
                        </button>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    imgInp.onchange = evt => {
        const [file] = imgInp.files
        if (file) {
            img_content.src = URL.createObjectURL(file)
        }
    }
</script>
</body>
</html>
